<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationTable extends Migration
{

    public function up()
    {
        Schema::create('notification', function (Blueprint $table) {
            $table->id();
            $table->integer('message_id');
            $table->integer('transaction_id');
            $table->integer('request_id');


            $table->string('name');
        });
    }


    public function down()
    {
        Schema::dropIfExists('notification');
    }
}
