<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetails;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;

class OrderRequestController extends Controller
{
    function getAllOrderRequests() {
        $order_details = DB::table('order_details')->select('order_details.id as order_id','order_details.from','order_details.to','order_details.total_price','clients.first_name', 'clients.last_name', 'clients.email', 'clients.mobile_number')
                            ->join('clients', 'order_details.customer_id', '=', 'clients.id')
                            ->where('order_status', 'pending')
                            ->where('payment_status', 'paid')
                            ->get();
        return view('order_requests')->with(['order_details'=>($order_details->toArray())]);
    }

    function getOrderDetailsByOrderId($order_id) {
        $order_details = DB::table('order_details')->select('order_details.id as order_id','order_details.from','order_details.to','order_details.total_price','order_details.date_and_time', 'order_details.passengers', 'order_details.luggage', 'order_details.meet', 'order_details.baby_seats', 'order_details.trip_type', 'order_details.flight_number', 'order_details.booster_seats','clients.first_name', 'clients.last_name', 'clients.email', 'clients.mobile_number', 'vehicles.brand', 'vehicles.image', 'vehicles.model')
                            ->join('vehicles', 'vehicles.id', '=', 'order_details.vehicle_id')
                            ->join('clients', 'clients.id', '=', 'order_details.customer_id')
                            ->where('order_details.id', $order_id)
                            ->get();
        // dd($order_details);
        if (Session()->has('member')) {
            return view('view_order')->with(['order_details'=>($order_details->toArray())]);
        } else {
            return redirect('signin');
        }
    }

    function completeOrderByOrderId(Request $order_details) {
        $order_details_table = OrderDetails::where('id', $order_details->order_id)->first();

        if ($order_details->order_status != 0) {
            $order_details_table->order_status = 'Complete';
            $order_details_table->save();

            Session()->flash('status', 'Operation Complete');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete');
            return Redirect::back();
        }
    }

    function getAllCompletedOrders() {
        $order_details = DB::table('order_details')->select('order_details.id as order_id','order_details.from','order_details.to','order_details.total_price','clients.first_name', 'clients.last_name', 'clients.email', 'clients.mobile_number')
                            ->join('clients', 'order_details.customer_id', '=', 'clients.id')
                            ->where('order_status', 'Complete')
                            ->where('payment_status', 'paid')
                            ->get();
        
        if (Session()->has('member')) {
            return view('view_completed_orders')->with(['order_details'=>($order_details->toArray())]);
        } else {
            return redirect('signin');
        }
    }

    function deleteOrderRequestById($order_id) {
        if (Session()->has('member')) {
            OrderDetails::where('id', $order_id)->delete();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }
}
