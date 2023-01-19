<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotion;
use Redirect;
use Session;

class PromotionController extends Controller
{
    function addNewPromotionDetail(Request $promotion_details) {
        $promo_table = new Promotion();

        if ($promotion_details->promoCode != null && $promotion_details->promoValue != null && $promotion_details->description != null) {
            $promo_table->promotion_code = $promotion_details->promoCode;
            $promo_table->percentage = $promotion_details->promoValue;
            $promo_table->description = $promotion_details->description;

            $promo_table->save();
            
            Session()->flash('promoAddStatus', 'Operation Complete Successfully.');
            return Redirect::back();
        } else {
            Session()->flash('promoAddStatus', 'Please Fill All Feilds');
            return Redirect::back();
        }
    }

    function getPromoPercentageValueByPromoCode(Request $promo_code) {
        $promo_value = Promotion::where(['promotion_code'=>$promo_code->query('promoCode')])->first();
        return response()->json(['success'=>$promo_value->percentage]);
    }

    function updatePromoById() {

    }

    function deletePromoById() {

    }
}
