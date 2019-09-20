<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amortization extends Model
{
    //
    protected $fillable = ['loan_id','loan_amortization','schedule','running_balance_counter','total_interest_amount'];

    public function loan()
    {
    	return $this->belongsTo(Loan::class);
    }

    public function bill()
    {
    	return $this->belongsTo(Bill::class);
    }

     public function member()
    {
    	return $this->belongsTo(Member::class);
    }

     public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
}
