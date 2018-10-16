<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotificationTablee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('notification_content');
            $table->unsignedInteger('mailer_user_id');
            $table->unsignedInteger('receiver_user_id');
            $table->tinyInteger('flg_read');
            $table->foreign('mailer_user_id')->references('id')->on('users');
            $table->foreign('receiver_user_id')->references('id')->on('users');
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
