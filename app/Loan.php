<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    //
    protected $fillable = [
                           'loan_id','member_id','member_status','member_type','loan_application','loan_type','mode_payment','date_filed'
                           ,'amount_requested','terms','amount_granted','interest','service_fee','clpp_insurance','filling_fee'
                           ,'notarial_fee','life_insurance','cbu','savings','loan_balance','other',
                           'total_deduction','net_proceed','amortization','starting_on','unit','computed_by',
                           'certified_correct','co_maker_member_id','approval_status'
                          ];


    public function member()
    {

      return $this->belongsTo(Member::class);

    }   

    public function amortizations(){
      return $this->hasMany(Amortization::class);
    }       

    public function setMonthToInteger($month){
      return (integer) $month;
    }
                

}



