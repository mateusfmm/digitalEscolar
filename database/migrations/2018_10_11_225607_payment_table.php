<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->double('value')->nullable();
            $table->dateTime('payment_date')->nullable();
            $table->dateTime('expiration_date')->nullable();
            $table->unsignedInteger('payer_id');
            $table->unsignedInteger('driver_id');
            $table->tinyInteger('flg_late')->default(0);
            $table->foreign('payer_id')->references('id')->on('users');
            $table->foreign('driver_id')->references('id')->on('users');
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
        //
    }
}
