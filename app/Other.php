<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $fillable = ['user_id','employee_id','other_skill','other_recognition','other_membership'];
}
