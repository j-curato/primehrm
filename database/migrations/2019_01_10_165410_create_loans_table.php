<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('member_id');
            $table->boolean('member_status');
            $table->boolean('amortization_status')->default(0);
            $table->string('member_type');
            $table->string('loan_application');
            $table->string('loan_type');
            $table->string('mode_payment');
            $table->date('date_filed');
            $table->double('amount_requested');
            $table->string('terms');
            $table->double('amount_granted')->nullable();
            $table->double('interest')->nullable();
            $table->double('service_fee')->nullable();
            $table->double('clpp_insurance')->nullable();
            $table->double('filling_fee')->nullable();
            $table->double('notarial_fee')->nullable();
            $table->double('life_insurance')->nullable();
            $table->double('cbu')->nullable();
            $table->double('savings')->nullable();
            $table->double('loan_balance')->nullable();
            $table->boolean('loan_status')->default(0);
            $table->boolean('approval_status')->default(0);
            $table->double('other')->nullable();
            $table->double('total_deduction')->nullable();
            $table->double('net_proceed')->nullable();
            $table->double('amortization')->nullable();
            $table->date('starting_on')->nullable();
            $table->date('date_paid')->nullable();
            $table->string('unit')->nullable();
            $table->string('computed_by')->nullable();
            $table->string('certified_correct')->nullable();
            $table->unsignedInteger('co_maker_member_id');
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
        Schema::dropIfExists('loans');
    }
}
