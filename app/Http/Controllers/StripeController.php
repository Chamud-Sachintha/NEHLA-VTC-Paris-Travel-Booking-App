<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use App\Models\Client;
use App\Mail\PlaceOrderMailNotify;
use Mail;
use \Datetime;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class StripeController extends Controller
{

    public function checkout(Request $payment_details) {

        // if cash payment
        if ($payment_details->payType == "2") {
            if ($this->paymentByCash($payment_details)) {

                $emailAddress = null;
                $totalAmount = null;
                
                if ($payment_details->emailAddress == null) {
                    $emailAddress = $payment_details->checkMail;
                } else {
                    $emailAddress = $payment_details->emailAddress;
                }

                $totalAmount = $payment_details->placeAmount;

                $url = URL::route('cashCheckout.success', ['email' => $emailAddress, 'totalAmount' => $totalAmount]);
                return redirect()->to($url);
            } else {

            }
        } else {
            \Stripe\Stripe::setApiKey(config('stripe.sk'));

            $session = \Stripe\Checkout\Session::create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'eur',
                            'product_data' => [
                                'name' => 'Journey From ' . $payment_details->from . ' To ' . $payment_details->to,
                            ],
                            'unit_amount' => $payment_details->placeAmount * 100,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('checkout.success', [], true)."?session_id={CHECKOUT_SESSION_ID}",
                'cancel_url' => route('cancel')
            ]);
            
            $client_details = null;

            if ($payment_details->checkMail != null) {
                $client_details = Client::where('email', $payment_details->checkMail)->first();
            } else {
                $client_details = Client::where('email', $payment_details->emailAddress)->first();
            }

            $order_table = new OrderDetails();
            $order_table->session_id = $session->id;
            $order_table->customer_id = $client_details->id;
            $order_table->vehicle_id = $payment_details->vehicleId;
            $order_table->from = $payment_details->from;
            $order_table->to = $payment_details->to;
            $order_table->trip_type = $payment_details->tripType;
            $order_table->passengers = $payment_details->passengers;
            $order_table->luggage = $payment_details->luggage == null ? 0 : $payment_details->luggage;
            $order_table->date_and_time = $payment_details->date . ":" . $payment_details->hour . ":" . $payment_details->min;
            $order_table->return_date_and_time = $payment_details->returnDate . ":" . $payment_details->returnHour . ":" . $payment_details->returnMin;
            $order_table->flight_number = $payment_details->flightNumber == null ? "N/A" : $payment_details->flightNumber;
            $order_table->return_from = $payment_details->returnFrom == null ? "N/A" : $payment_details->returnFrom;
            $order_table->return_to = $payment_details->returnTo == null ? "N/A" : $payment_details->returnTo;
            $order_table->meet = $payment_details->meet == null ? "N/A" : $payment_details->meet;
            $order_table->baby_seats = $payment_details->babySeats == null ? "N/A" : $payment_details->babySeats;
            $order_table->booster_seats = $payment_details->boosterSeats == null ? "N/A" : $payment_details->boosterSeats;
            $order_table->wheel_chairs = $payment_details->wheelchairs == null ? "N/A" : $payment_details->wheelchairs;
            $order_table->total_price = $payment_details->placeAmount;
            $order_table->pay_type = "1";
            $order_table->payment_status = 'unpaid';
            $order_table->order_status = 'pending';

            $order_table->save();

            return redirect($session->url);
        }
    }

    private function paymentByCash(Request $payment_details) {
        $client_details = null;

        if ($payment_details->checkMail != null) {
            $client_details = Client::where('email', $payment_details->checkMail)->first();
        } else {
            $client_details = Client::where('email', $payment_details->emailAddress)->first();
        }

        $order_table = new OrderDetails();
        $order_table->session_id = uniqid();
        $order_table->customer_id = $client_details->id;
        $order_table->vehicle_id = $payment_details->vehicleId;
        $order_table->from = $payment_details->from;
        $order_table->to = $payment_details->to;
        $order_table->trip_type = $payment_details->tripType;
        $order_table->passengers = $payment_details->passengers;
        $order_table->luggage = $payment_details->luggage == null ? 0 : $payment_details->luggage;
        $order_table->date_and_time = $payment_details->date . ":" . $payment_details->hour . ":" . $payment_details->min;
        $order_table->return_date_and_time = $payment_details->returnDate . ":" . $payment_details->returnHour . ":" . $payment_details->returnMin;
        $order_table->flight_number = $payment_details->flightNumber == null ? "N/A" : $payment_details->flightNumber;
        $order_table->return_from = $payment_details->returnFrom == null ? "N/A" : $payment_details->returnFrom;
        $order_table->return_to = $payment_details->returnTo == null ? "N/A" : $payment_details->returnTo;
        $order_table->meet = $payment_details->meet == null ? "N/A" : $payment_details->meet;
        $order_table->baby_seats = $payment_details->babySeats == null ? "N/A" : $payment_details->babySeats;
        $order_table->booster_seats = $payment_details->boosterSeats == null ? "N/A" : $payment_details->boosterSeats;
        $order_table->wheel_chairs = $payment_details->wheelchairs == null ? "N/A" : $payment_details->wheelchairs;
        $order_table->total_price = $payment_details->placeAmount;
        $order_table->pay_type = "2";
        $order_table->payment_status = 'unpaid';
        $order_table->order_status = 'pending';

        $res = $order_table->save();

        if ($res) {
            return true;
        } else {
            return false;
        }
    }

    public function cashSuccess(Request $request) {
        $email = $request->get('email');
        $totalAmount = $request->get('totalAmount');

        return view('cash_payment_success')->with(['email' => $email, 'totalAmount' => $totalAmount]);
    }

    public function success(Request $session_details) {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $session_id = $session_details->get('session_id');

        $session = \Stripe\Checkout\Session::retrieve($session_details->get('session_id'));

        if (!$session) {
            throw new NotFoundHttpException();
        }

        $order = OrderDetails::where('session_id', $session->id)->where('payment_status', 'unpaid')->first();
        $order->payment_status = 'paid';
        $order->save();

        $data = [
            'subject'=>'Place Order',
            'from'=>$order->from,
            'to'=>$order->to,
            'amount'=>$order->total_price
        ];

        Mail::to($session->customer_details->email)->send(new PlaceOrderMailNotify($data));
        OrderDetails::where('payment_status', 'unpaid')->delete();

        return view('payment_success')->with(['session'=>$session]);
    }

    public function removeUnpaidTransactionsFromTable() {
        if (Session()->has('member')) {
            OrderDetails::where('payment_status', 'unpaid')->delete();

            return redirect('/');
        } else {
            Session()->flash('status', 'Operation Complete.');
            return redirect('/signin');
        }
    }
}
