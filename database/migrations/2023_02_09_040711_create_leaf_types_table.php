<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeafTypesTable extends Migration
{
    
    public function up()
    {
        Schema::create('leaf_types', function (Blueprint $table) {
            $table->id();
            $table->string('leaf_type');
            $table->string('total_number_per_box');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('leaf_types');
    }
}
