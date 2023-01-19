<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Session;
use Redirect;

class VehicleController extends Controller
{
    function showManageVehiclePage() {
        $vehicle_details = Vehicle::all();

        return view('add_vehicle')->with(['all_vehicles'=>($vehicle_details)->toArray()]);
    }

    function addNewVehicleDetails(Request $vehicle_details) {
        $vehcle_table = new Vehicle();

        $brand_name = $vehicle_details->brand_name;
        $model_name = $vehicle_details->model_name;
        $seat_count = $vehicle_details->seat_count;
        $description = $vehicle_details->description;
        $file = $vehicle_details->image;

        if ($description != null && $file != null && $brand_name != null && $model_name != null && $seat_count != null) {
            $get_thumbnail_file_name = date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/featuredImage'), $get_thumbnail_file_name);

            $vehicle_detail = Vehicle::create([
                'brand' => $brand_name,
                'model'=> $model_name,
                'seats'=>$seat_count,
                'image'=>$get_thumbnail_file_name,
                'description' => $description,
            ]);

            // $vehicle_table->brand = $brand_name;
            // $vehicle_table->model = $model_name;
            // $vehicle_table->seats = $seat_count;
            // $vehicle_table->image = $get_thumbnail_file_name;
            // $vehicle_table->description = $description;

            // $vehicle_table->save();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete');
            return Redirect::back();
        }
    }

    function updateVehicleDetailsById(Request $vehicle_details) {
        // dd($vehicle_details->description);
        $current_vehicle = Vehicle::where('id', $vehicle_details->vehicleId)->first();
        
        if ($vehicle_details->brandName != null && $vehicle_details->modelName != null && $vehicle_details->seats != null && $vehicle_details->description != null) {
            Vehicle::where('id',$vehicle_details->vehicleId)
                        ->update([
                        'brand'=>$vehicle_details->brandName,
                        'model'=>$vehicle_details->modelName,
                        'seats'=>$vehicle_details->seats,
                        'image'=>($vehicle_details->hasFile("vehicleImage") != null ? $vehicle_details->vehicleImage : $current_vehicle->image),
                        'description'=>$vehicle_details->description
                    ]);
            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }

    function deleteVehicleById($id) {
        if (Session()->has('member')) {
            Vehicle::where('id', $id)->delete();

            Session()->flash('status', 'Operation Complete.');
            return Redirect::back();
        } else {
            Session()->flash('status', 'Operation Not Complete.');
            return Redirect::back();
        }
    }
}
