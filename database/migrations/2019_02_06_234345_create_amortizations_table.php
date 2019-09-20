<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmortizationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amortizations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('loan_id');
            $table->integer('member_id');
            $table->double('loan_amortization');
            $table->double('total_interest_amount');
            $table->double('loan_amount');
            $table->double('principal_amount');
            $table->double('interest_amount');
            $table->string('schedule');
            $table->double('running_balance');
            $table->double('running_balance_counter')->nullable();
            $table->boolean('bill_status')->default(0);
            $table->boolean('payment_status')->default(0);
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
        Schema::dropIfExists('amortizations');
    }
}
