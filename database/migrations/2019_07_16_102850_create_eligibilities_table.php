<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEligibilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eligibilities', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_id');
            $table->string('emp_eligibility')->nullable();
            $table->string('emp_rating')->nullable();
            $table->date('emp_date_exam')->nullable();
            $table->string('emp_place_exam')->nullable();
            $table->string('emp_license_number')->nullable();
            $table->date('emp_date_validity')->nullable();
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
        Schema::dropIfExists('eligibilities');
    }
}
