<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_code');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('extension');
            $table->date('date_of_birth');
            $table->string('marital_status');
            $table->string('sex');
            $table->string('age');
            $table->string('home_address');
            $table->string('email_address');  
            $table->string('contact_number'); 
            $table->string('photo_url');
            $table->string('division')->nullable();
            $table->string('member_type');
            $table->string('member_status');
            $table->timestamps();
            $table->string('particular_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
