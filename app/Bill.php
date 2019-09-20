<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    //
    protected $fillable = ['amortization_id','member_id','loan_id'];

    public function amortizations()
    {
      return $this->hasMany(Amortization::class);
    } 

    public function member()
    {
      return $this->belongsTo(Member::class); 
    }  

    public function payment()
    {
    	return $this->hasOne(Payment::class);
    }

}
