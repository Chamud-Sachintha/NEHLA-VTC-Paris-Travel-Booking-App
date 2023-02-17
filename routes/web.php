<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VehicleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\OrderRequestController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\TourPlanController;
use App\Http\Controllers\ContactMessageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '{locale}'], function () {
    Route::get('/', [AdminController::class, 'showIndexPage'])->middleware('setLocale');

    Route::get('/about-us', function() {
        return view('about');
    })->name('about-us')->middleware('setLocale');

    Route::get('/contact-us', function() {
        return view('contact');
    })->name('contact-us')->middleware('setLocale');

    Route::get('/tour-plans/{tour_id}', [TourPlanController::class, 'showTourPlanPageWithData'])->middleware('setLocale');

    Route::get('/privacy-policy', function() {
        return view('privacy_policy');
    })->name('privacy-policy')->middleware('setLocale');
});

Route::get('/', function(){
    return Redirect::to(Config::get('app.locale'));  
});

Route::get('/en/getpriceByPlaceName', [DestinationController::class , 'getpriceByPlaceName'])->name('getpriceByPlaceName');

Route::get('/en/ajaxRequest', [ClientController::class, 'validateClientByEmail'])->name('clientEmailCheck');

Route::post('ajaxRequest', [ClientController::class, 'addNewClientDetails'])->name('ajaxRequest.post');

Route::get('/en/success', [StripeController::class, 'success'])->name('checkout.success');

Route::get('/en/cancel', [StripeController::class, 'removeUnpaidTransactionsFromTable'])->name('cancel');

Route::get('/en/signin', [AdminController::class, 'showLoginPage']);

Route::post('/auth', [AdminController::class, 'authenticateUser']);

Route::post('/en/checkout', [StripeController::class, 'checkout'])->name('checkout');

Route::get('/en/app', [AdminController::class, 'showDashboardOfAdminPanel']);

Route::get('/app/vehicles', [VehicleController::class, 'showManageVehiclePage']);

Route::post('/addVehicle', [VehicleController::class, 'addNewVehicleDetails']);

Route::get('/app/users', [AdminController::class, 'showAddUsersPage']);

Route::get('/app/clients', [ClientController::class, 'showClientManagePage']);

Route::post('/addUser', [AdminController::class, 'addNewAdminUser']);

Route::get('/app/destinations', [DestinationController::class, 'showAdddestinationPage']);

Route::post('/addNewPlace', [DestinationController::class, 'createNewPlaceDetails']);

Route::get('/app/orders', [OrderRequestController::class, 'getAllOrderRequests']);

Route::get('/app/orders/{order_id}', [OrderRequestController::class, 'getOrderDetailsByOrderId']);

Route::post('/addNewPromo', [PromotionController::class, 'addNewPromotionDetail']);

Route::get('/en/getPromoValueByCode', [PromotionController::class, 'getPromoPercentageValueByPromoCode'])->name('getPromoValueByCode');

Route::post('/updateOrder', [OrderRequestController::class , 'completeOrderByOrderId']);

Route::get('/en/client', [ClientController::class , 'showClientAdminPanelByCustomerId']);

Route::get('client/login', [ClientController::class, 'showClientLoginForm']);

Route::post('authenticateClient', [ClientController::class, 'authenticateClientCredentials']);

Route::get('/app/tour-plan-requests', [TourPlanController::class, 'showAllRequestedTourPlans']);

Route::post('/applyTour', [TourPlanController::class, 'addNewTourForCustomerByTourId']);

Route::get('/app/tour-plan/{id}', [TourPlanController::class, 'viewSelectedTourPlanById']);

Route::get('/app/delete-tour-plan/{id}', [TourPlanController::class, 'deleteTourRequestById']);

Route::post('/saveContactMessage', [ContactMessageController::class, 'addNewContactMessageFromClient']);

Route::get('/deleteOrderRequest/{order_id}', [OrderRequestController::class, 'deleteOrderRequestById']);

Route::get('/app/complete-orders', [OrderRequestController::class, 'getAllCompletedOrders']);

Route::get('/deleteVehicleById/{id}', [VehicleController::class, 'deleteVehicleById']);

Route::post('/updateVehicleDetailsById', [VehicleController::class, 'updateVehicleDetailsById']);

Route::get('/deleteDestinationById/{id}', [DestinationController::class, 'deleteSelectedPlaceById']);

Route::post('/updateDestinationById', [DestinationController::class , 'updateSelectedPlaceById']);

Route::get('/app/contact-messages', [ContactMessageController::class, 'showContactMessagePage']);

Route::get('/deleteContactMessage/{id}', [ContactMessageController::class, 'deleteContactMessageById']);

Route::get('/app/signout', [AdminController::class, 'logOutUser']);