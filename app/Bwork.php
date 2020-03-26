<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bwork extends Model
{
     protected $fillable = ['user_id','employee_id','work_from','work_to','work_position','work_company','work_salary','work_salary_grade','work_status','work_gov_service'];
}
