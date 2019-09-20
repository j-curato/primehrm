<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJournalvouchersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalvouchers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('journal_number');
            $table->string('payee_name');
            $table->string('address')->nullable();
            $table->date('transaction_date');
            $table->string('product_service');
            $table->string('particular');
            $table->double('debit')->nullable();
            $table->double('credit')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('journalvouchers');
    }
}
