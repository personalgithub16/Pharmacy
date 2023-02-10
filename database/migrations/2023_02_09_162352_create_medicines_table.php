<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('bar_code');
            $table->string('medicine_name');
            $table->string('generic_name');
            $table->float('vat',12,2);
            $table->dateTime('expire_date_of_the_medicine');
            $table->string('medicine_details');
            $table->double('medicine_selling_price',8,2);
            $table->double('medicine_manufacturer_price',8,2);
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('medicine_type_id');
            $table->unsignedBigInteger('manufacturer_id');
            $table->unsignedBigInteger('leaftype_id');
            $table->unsignedBigInteger('unit_id');

            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('medicine_type_id')->references('id')->on('medicine_types');
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreign('leaftype_id')->references('id')->on('leaf_types');
            $table->foreign('unit_id')->references('id')->on('medicine_units');
            $table->string('status')->default('inactive');
            $table->softDeletes();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
