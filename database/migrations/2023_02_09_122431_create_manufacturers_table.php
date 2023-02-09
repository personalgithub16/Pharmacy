<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManufacturersTable extends Migration
{
    public function up()
    {
        Schema::create('manufacturers', function (Blueprint $table) {
            $table->id();
            $table->string('manufacturer_name');
            $table->string('agent_national_id_card');
            $table->string('agent_mobile_number');
            $table->float('debit_balance', 12, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('manufacturers');
    }
}
