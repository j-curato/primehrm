<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voluntary extends Model
{
    protected $fillable = ['user_id','employee_id','vol_org_name','vol_from','vol_to','vol_hours','vol_position'];
}
