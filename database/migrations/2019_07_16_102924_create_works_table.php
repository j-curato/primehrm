<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('works', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_id');
            $table->date('work_from')->nullable();
            $table->date('work_to')->nullable();
            $table->string('work_position')->nullable();
            $table->string('work_company')->nullable();
            $table->string('work_salary')->nullable();
            $table->string('work_salary_grade')->nullable();
            $table->string('work_status')->nullable();
            $table->string('work_gov_service')->nullable();
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
        Schema::dropIfExists('works');
    }
}
