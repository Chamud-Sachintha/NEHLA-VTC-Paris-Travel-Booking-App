<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Vehicle;
use App\Models\Destination;
use App\Models\Admin;
use App\Models\Promotion;
use Session;
use Auth;

class AdminController extends Controller
{
    function showLoginPage() {
        if (Session()->has('member')) {
            return redirect('/en/app');
            // return \Redirect::route('en/app');
        } else {
            return view('login');
        }
    }

    function authenticateUser(Request $loginDetails) {
        $user = Admin::where(['username'=> $loginDetails->username])->first();

        if ($user && Hash::check($loginDetails->password, $user->password)) {
            Session()->put('member', $user->username);
            return redirect('en/app');
        } else {
            Session()->flash('status', 'Invalid Username or Password');
            return redirect('en/signin');
        }
    }

    function addNewAdminUser(Request $adminDetails) {
        $admin_table = new Admin();

        if ($adminDetails->username != null && $adminDetails->password != null) {
            if ($adminDetails->password == $adminDetails->confPassword) {
                $admin_table->username = $adminDetails->username;
                $admin_table->password = Hash::make($adminDetails->password);

                $admin_table->save();

                Session()->flash("status", "User Added Successfully.");
                return redirect('/app/users');
            } else {
                Session()->flash("status", "Password Doesn't Match");
                return redirect('app/users');
            }
        } else {
            Session()->flash("status", "Please Fill All Feilds");
            return redirect('app/users');
        }
    }

    function showDashboardOfAdminPanel() {
        if (Session()->has('member')) {
            return view('dashboard');
        } else {
            return redirect('en/signin');
        }
    }

    function showIndexPage() {
        $all_places = Destination::all();
        $all_vehicles = Vehicle::all();

        return view('index')->with(['all_vehicles'=>($all_vehicles->toArray()), 'all_places'=>$all_places]);
    }

    function showAddUsersPage() {
        $admin_users = Admin::all();
        $promotions = Promotion::all();

        if (Session()->has('member')) {
            return view('add_users')->with(['admin_users'=>$admin_users, 'promos'=>$promotions]);
        } else {
            return redirect('signin');
        }
    }

    function logOutUser() {
        Auth::logout();
        Session::forget('member');
        
        return redirect('/');
    }

    function getCompletedOrders() {
        
    }

}
