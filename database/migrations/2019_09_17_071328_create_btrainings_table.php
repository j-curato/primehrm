<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBtrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('btrainings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_id');
            $table->string('training_title')->nullable();
            $table->date('training_from')->nullable();
            $table->date('training_to')->nullable();
            $table->string('training_hours')->nullable();
            $table->string('training_type')->nullable();
            $table->string('training_sponsor')->nullable();
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
        Schema::dropIfExists('btrainings');
    }
}
