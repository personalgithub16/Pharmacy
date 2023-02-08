<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewColumnsToCustomerTable extends Migration
{

    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->string('debit_balance');
            $table->string('total_debit');
        });
    }

    public function down()
    {
        Schema::table('customers', function (Blueprint $table) {
            //
            $table->dropColumn('debit_balance');
            $table->dropColumn('total_debit');
        });
    }
}
