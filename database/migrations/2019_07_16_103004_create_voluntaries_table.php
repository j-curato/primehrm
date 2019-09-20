<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVoluntariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('voluntaries', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_id');
            $table->string('vol_org_name')->nullable();
            $table->date('vol_from')->nullable();
            $table->date('vol_to')->nullable();
            $table->string('vol_hours')->nullable();
            $table->string('vol_position')->nullable();
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
        Schema::dropIfExists('voluntaries');
    }
}
