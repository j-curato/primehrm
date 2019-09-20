<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('employee_no')->nullable();
            $table->string('emp_fname')->nullable();
            $table->string('emp_mname')->nullable();
            $table->string('emp_lname')->nullable();
            $table->string('emp_extension')->nullable();
            $table->date('emp_date_of_birth')->nullable();
            $table->string('emp_birthplace')->nullable(); 
            $table->string('emp_marital_status')->nullable();
            $table->boolean('citizenship')->nullable();
            $table->boolean('citizenship_type')->nullable();
            $table->string('emp_country')->nullable();
            $table->string('emp_height')->nullable();
            $table->string('emp_weight')->nullable();
            $table->boolean('emp_sex')->nullable();
            $table->string('emp_blood_type')->nullable();
            $table->string('emp_gsis_number')->nullable();
            $table->string('emp_philhealth_number')->nullable();
            $table->string('emp_pagibig_number')->nullable();
            $table->string('emp_sss_number')->nullable();
            $table->string('emp_tin_number')->nullable();
            $table->string('res_houseblocklot')->nullable();
            $table->string('res_street')->nullable();
            $table->string('res_subvillage')->nullable();
            $table->string('res_barangay')->nullable();
            $table->string('res_citymun')->nullable();
            $table->string('res_province')->nullable();
            $table->string('res_zipcode')->nullable();
            $table->string('perm_houseblocklot')->nullable();
            $table->string('perm_street')->nullable();
            $table->string('perm_subvillage')->nullable();
            $table->string('perm_barangay')->nullable();
            $table->string('perm_citymun')->nullable();
            $table->string('perm_province')->nullable();
            $table->string('perm_zipcode')->nullable();
            $table->string('emp_tel_number')->nullable();
            $table->string('emp_mobile_number')->nullable();
            $table->string('emp_email_address')->nullable();
            $table->string('emp_spouse_fname')->nullable();
            $table->string('emp_spouse_lname')->nullable();
            $table->string('emp_spouse_mname')->nullable();
            $table->string('emp_spouse_xname')->nullable();
            $table->string('emp_spouse_occupation')->nullable();
            $table->string('emp_spouse_bn')->nullable();
            $table->string('emp_spouse_bn_address')->nullable();
            $table->string('emp_spouse_tel_no')->nullable();
            $table->string('emp_child1')->nullable();
            $table->string('emp_child2')->nullable();
            $table->string('emp_child3')->nullable();
            $table->string('emp_child4')->nullable();
            $table->string('emp_child5')->nullable();
            $table->string('emp_child6')->nullable();
            $table->string('emp_child7')->nullable();
            $table->string('emp_child8')->nullable();
            $table->string('emp_child9')->nullable();
            $table->string('emp_child10')->nullable();
            $table->string('emp_child11')->nullable();
            $table->string('emp_child12')->nullable();
            $table->date('emp_child1_bdate')->nullable();
            $table->date('emp_child2_bdate')->nullable();
            $table->date('emp_child3_bdate')->nullable();
            $table->date('emp_child4_bdate')->nullable();
            $table->date('emp_child5_bdate')->nullable();
            $table->date('emp_child6_bdate')->nullable();
            $table->date('emp_child7_bdate')->nullable();
            $table->date('emp_child8_bdate')->nullable();
            $table->date('emp_child9_bdate')->nullable();
            $table->date('emp_child10_bdate')->nullable();
            $table->date('emp_child11_bdate')->nullable();
            $table->date('emp_child12_bdate')->nullable();
            $table->string('emp_father_fname')->nullable();
            $table->string('emp_father_lname')->nullable();
            $table->string('emp_father_mname')->nullable();
            $table->string('emp_father_xname')->nullable();
            $table->string('emp_mother_mfname')->nullable();
            $table->string('emp_mother_mlname')->nullable();
            $table->string('emp_mother_mmname')->nullable();
            $table->string('emp_elem_school')->nullable();
            $table->string('emp_elem_degree')->nullable();
            $table->string('emp_elem_from')->nullable();
            $table->string('emp_elem_to')->nullable();
            $table->string('emp_elem_units')->nullable();
            $table->string('emp_elem_yeargrad')->nullable();
            $table->string('emp_elem_acadhonors')->nullable();
            $table->string('emp_second_school')->nullable();
            $table->string('emp_second_degree')->nullable();
            $table->string('emp_second_from')->nullable();
            $table->string('emp_second_to')->nullable();
            $table->string('emp_second_units')->nullable();
            $table->string('emp_second_yeargrad')->nullable();
            $table->string('emp_second_acadhonors')->nullable();
            $table->string('emp_voc_school')->nullable();
            $table->string('emp_voc_degree')->nullable();
            $table->string('emp_voc_from')->nullable();
            $table->string('emp_voc_to')->nullable();
            $table->string('emp_voc_units')->nullable();
            $table->string('emp_voc_yeargrad')->nullable();
            $table->string('emp_voc_acadhonors')->nullable();
            $table->string('emp_college_school')->nullable();
            $table->string('emp_college_degree')->nullable();
            $table->string('emp_college_from')->nullable();
            $table->string('emp_college_to')->nullable();
            $table->string('emp_college_units')->nullable();
            $table->string('emp_college_yeargrad')->nullable();
            $table->string('emp_college_acadhonors')->nullable();
            $table->string('emp_gradstud_school')->nullable();
            $table->string('emp_gradstud_degree')->nullable();
            $table->string('emp_gradstud_from')->nullable();
            $table->string('emp_gradstud_to')->nullable();
            $table->string('emp_gradstud_units')->nullable();
            $table->string('emp_gradstud_yeargrad')->nullable();
            $table->string('emp_gradstud_acadhonors')->nullable();
            $table->date('emp_current_date')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
