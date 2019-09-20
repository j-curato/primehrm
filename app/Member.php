<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $fillable = ['member_code','fname','division','particular_name','mname','lname','extension','date_of_birth','marital_status','sex','age',
    					   'home_address','email_address','contact_number','photo_url','member_type','member_status'];


    public function loans()
    {

    	return $this->hasMany(Loan::class);

    }

    public function amortizations()
    {

        return $this->hasMany(Amortization::class);

    }

    public function payments()
    {

        return $this->hasMany(Payment::class);

    }


    public function getFullNameAttribute()
    {

    	return $this->lname.', '.$this->fname;

    }

}
