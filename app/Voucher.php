<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    //
     protected $fillable = [ 'voucher_type','voucher_number','check_number','payee_name','transaction_date','particular','product_service','remarks','address','credit','debit'];
}
