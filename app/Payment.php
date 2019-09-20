<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [ 'bill_id','loan_id','member_id','payment_amount','payment_date','or_number'];


    public function member()
    {
    	return $this->belongsTo(Member::class);
    }

    public function bill()
    {
    	return $this->belongsTo(Bill::class);
    }
}
