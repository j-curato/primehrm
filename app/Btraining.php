<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Btraining extends Model
{
    protected $fillable = ['user_id','employee_id','training_title','training_from','training_to','training_hours','training_type','training_sponsor'];
}
