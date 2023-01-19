<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;
use App\Models\OrderDetails;
use App\Mail\RegisterUserNotify;
use Redirect;
use Session;
use Mail;

class ClientController extends Controller
{
    function showClientManagePage() {
        $client_details = Client::all();
        return view('client_management')->with(['clients'=>$client_details]);
    }

    function addNewClientDetails(Request $client_details) {
        // have to write post
        $clientTable = new Client();
        $res = Client::where(['email'=>$client_details->email])->first();

        if($res){
            // if duplicate client
            return response()->json(['status'=>'2']);
        } else if ($client_details->email != null && $client_details->password != null) {
            $clientTable->first_name = $client_details->fname;
            $clientTable->last_name = $client_details->lname;
            $clientTable->mobile_number = $client_details->mobile;
            $clientTable->email = $client_details->email;
            $clientTable->password = Hash::make($client_details->password);

            $clientTable->save();


            $data = [
                'subject'=>'Register With NEHLA VTC Luxary Transport.',
                'body'=>'We are Greatefull for interisting us.You are successfully register and created your account.',
                'footer'=>'Enjoy Journey Thank you.'
            ];

            Mail::to($client_details->email)->send(new RegisterUserNotify($data));

            return response()->json(['status'=>'1']);
        } else {
            return response()->json(['status'=>'0']);
        }
    }

    function validateClientByEmail(Request $email) {
        $client_details = Client::where(['email'=>$email->query('email')])->first();

        if ($client_details) {
            return response()->json(['status'=>'1','result'=>json_decode(json_encode($client_details, true))]);
        } else {
            return response()->json(['status'=>'0']);
        }
    }

    function showClientLoginForm() {
        if (Session()->has('client')) {
            return redirect('/en/client');
        } else {
            return view('client_login');
        }
    }

    function showClientAdminPanelByCustomerId() {
        if (Session()->has('client')) {
            $orders = OrderDetails::where(['customer_id'=>Session()->get('client')["id"], 'order_status'=>'Complete'])->get();

            return view('client_admin')->with(['orders'=>$orders->toArray()]);
        } else {
            return redirect('/client/login');
        }
    }

    function authenticateClientCredentials(Request $client_credentials) {
        if ($client_credentials->username != null && $client_credentials->password != null) {
            $client_details = Client::where(['email'=>$client_credentials->username])->first();

            if ($client_details && Hash::check($client_credentials->password, $client_details->password)) {
                Session()->put('client', $client_details);
                return redirect('/en/client');
            } else {
                Session()->flash('status', 'Username or Password Incorrect.');
                return Redirect::back();
            }
        } else {
            Session()->flash('status', 'Please Enter Username and Password');
            return Redirect::back();
        }
    }

    function updateClientByClientId($update_client) {

    }

    function deleteClientByClientId($client_id) {
        if (Session()->has('member')) {
            Client::where('id', $id)->delete();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }
}
