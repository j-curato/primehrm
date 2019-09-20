<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('voucher_number');
            $table->string('voucher_type');
            $table->string('check_number')->nullable();
            $table->string('payee_name');
            $table->string('address')->nullable();
            $table->date('transaction_date');
            $table->string('product_service');
            $table->string('particular');
            $table->double('debit')->nullable();
            $table->double('credit')->nullable();
            $table->boolean('status')->default(1);
            $table->string('remarks');
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
        Schema::dropIfExists('vouchers');
    }
}
