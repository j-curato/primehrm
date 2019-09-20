<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->double('loan_amortization');
            $table->double('total_interest_amount');
            $table->string('schedule');
            $table->double('principal_amount');
            $table->double('interest_amount');
            $table->double('running_balance');
            $table->integer('member_id');
            $table->integer('loan_id');
            $table->integer('amortization_id');
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
        Schema::dropIfExists('bills');
    }
}
