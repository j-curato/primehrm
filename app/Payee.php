<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payee extends Model
{
    //

    protected $fillable = ['payee_name','description','address'];
}
