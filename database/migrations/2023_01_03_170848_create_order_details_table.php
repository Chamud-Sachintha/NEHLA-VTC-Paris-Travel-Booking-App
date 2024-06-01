<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->string('customer_id');
            $table->string('vehicle_id');
            $table->string('from');
            $table->string('to');
            $table->string('trip_type');
            $table->string('passengers');
            $table->string('luggage');
            $table->string('date_and_time');
            $table->string('return_date_and_time');
            $table->string('flight_number');
            $table->string('return_from');
            $table->string('return_to');
            $table->string('meet');
            $table->string('baby_seats');
            $table->string('booster_seats');
            $table->string('wheel_chairs');
            $table->string('total_price');
            $table->string('pay_type');          // 1 - online 2 - cash
            $table->string('payment_status');
            $table->string('order_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
