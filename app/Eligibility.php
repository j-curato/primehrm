<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eligibility extends Model
{
    //
    protected $fillable = ['user_id','employee_id','emp_eligibility','emp_rating','emp_date_exam','emp_place_exam','emp_license_number','emp_date_validity'];
}
