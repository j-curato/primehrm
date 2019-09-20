<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_id');
            $table->boolean('checkbox34a')->nullable();
            $table->boolean('checkbox34b')->nullable();
            $table->string('text34')->nullable();
            $table->boolean('checkbox35a')->nullable();
            $table->boolean('checkbox35b')->nullable();
            $table->string('text35a')->nullable();
            $table->date('text35b_date')->nullable();
            $table->string('text35b_status')->nullable();
            $table->boolean('checkbox36')->nullable();
            $table->string('text36')->nullable();
            $table->boolean('checkbox37')->nullable();
            $table->string('text37')->nullable();
            $table->boolean('checkbox38a')->nullable();
            $table->boolean('checkbox38b')->nullable();
            $table->string('text38a')->nullable();
            $table->string('text38b')->nullable();
            $table->boolean('checkbox39')->nullable();
            $table->string('text39')->nullable();
            $table->boolean('checkbox40a')->nullable();
            $table->boolean('checkbox40b')->nullable();
            $table->boolean('checkbox40c')->nullable();
            $table->string('text40a')->nullable();
            $table->string('text40b')->nullable();
            $table->string('text40c')->nullable();
            $table->string('ref1_name')->nullable();
            $table->string('ref1_address')->nullable();
            $table->string('ref1_tel')->nullable();
            $table->string('ref2_name')->nullable();
            $table->string('ref2_address')->nullable();
            $table->string('ref2_tel')->nullable();
            $table->string('ref3_name')->nullable();
            $table->string('ref3_address')->nullable();
            $table->string('ref3_tel')->nullable();
            $table->string('government_id')->nullable();
            $table->string('license_passort_id')->nullable();
            $table->string('dateplace')->nullable();
            $table->string('date_accomplished')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
