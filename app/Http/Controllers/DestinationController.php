<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use Sesison;
use Redirect;

class DestinationController extends Controller
{
    function showAdddestinationPage() {
        $all_places = Destination::all();

        if (Session()->has('member')) {
            return view('manage_destination')->with(['all_places'=>$all_places]);
        } else {
            return redirect('signin');
        }
    }

    function createNewPlaceDetails(Request $place_details) {
        $place_table = new Destination();

        if ($place_details->place != null && $place_details->description != null) {
            // $file = $place_details->image;
            // $get_thumbnail_file_name = date('YmdHi').$file->getClientOriginalName();
            // $file-> move(public_path('/places'), $get_thumbnail_file_name);

            $place_table->place_name = $place_details->place;
            $place_table->description = $place_details->description;
            // $place_table->image=  $get_thumbnail_file_name;
            // $place_table->price = $place_details->price;
            $place_table->price1 = $place_details->price1;
            $place_table->price2 = $place_details->price2;
            $place_table->price3 = $place_details->price3;

            $place_table->save();

            Session()->flash('status', 'Operation Complete Successfully.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Please Fill All feilds');
            return Redirect::back();
        }
    }

    function getpriceByPlaceName(Request $placeDetails) {
        $place_price = Destination::where(['place_name'=>$placeDetails->query('placeName')])->first();

        if ($placeDetails->query('range') == '1 à 3') {
            return response()->json(['success'=>$place_price->price1]);
        } else if ($placeDetails->query('range') == '4 à 5') {
            return response()->json(['success'=>$place_price->price2]);
        } else {
            return response()->json(['success'=>$place_price->price3]);
        }
    }

    function updateSelectedPlaceById(Request $destination_details) {
        $destination = Destination::where('id', $destination_details->destinationId)->first();

        if ($destination_details->destinationName != null && $destination_details->description != null) {
            $destination->place_name = $destination_details->destinationName;
            $destination->description = $destination_details->description;
            // $destination->price = $destination_details->price;
            $destination->price1 = ($destination_details->price1 == null ? 0 : $destination_details->price1);
            $destination->price2 = ($destination_details->price2 == null ? 0 : $destination_details->price2);
            $destination->price3 = ($destination_details->price3 == null ? 0 : $destination_details->price3);

            $destination->save();
            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }

    function deleteSelectedPlaceById($id) {
        if (Session()->has('member')) {
            Destination::where('id', $id)->delete();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }
}
