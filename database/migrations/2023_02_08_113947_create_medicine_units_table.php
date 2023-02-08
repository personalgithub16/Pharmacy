<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineUnitsTable extends Migration
{
    public function up()
    {
        Schema::create('medicine_units', function (Blueprint $table) {
            $table->id();
            $table->string('unit_name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('medicine_units');
    }
}
