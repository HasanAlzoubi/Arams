<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_features', function (Blueprint $table) {

            $table->id();
            $table->integer('country_id');
            $table->string('swimming')->nullable();
            $table->string('basement')->nullable();
            $table->string('duplex')->nullable();
            $table->string('condition')->nullable();
            $table->string('appendix')->nullable();
            $table->string('car_entrance')->nullable();
            $table->string('children_play_area')->nullable();
            $table->string('elevator')->nullable();
            $table->string('club')->nullable();
            $table->string('cinema')->nullable();
            $table->string('sauna')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('property_features');
    }
}
