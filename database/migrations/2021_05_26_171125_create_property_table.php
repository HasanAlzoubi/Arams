<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyTable extends Migration
{

    public function up()
    {
        Schema::create('property', function (Blueprint $table) {
            $table->id();

            $table->string('address');
            $table->string('contract_type');
            $table->string('country');
            $table->string('city_id');
            $table->string('area_id');

            $table->string('image');

            $table->float('space');
            $table->string('currency');
            $table->float('price');
            $table->string('property_type');
            $table->string('bedrooms');
            $table->string('bathrooms');
            $table->string('Parking');
            $table->string('year_of_construction')->nullable();
            $table->string('description');


        });
    }


    public function down()
    {
        Schema::dropIfExists('property');
    }
}
