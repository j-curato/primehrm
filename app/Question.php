<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    						'user_id',
    						'employee_id',
    						'checkbox34a',
    						'checkbox34b',
    						'text34',
    						'checkbox35a',
    						'checkbox35b',
    						'text35a',
							'text35b_date',
							'text35b_status',
							'checkbox36',
							'text36',
							'checkbox37',
							'text37',
							'checkbox38a',
							'checkbox38b',
							'text38a',
							'text38b',
							'checkbox39',
							'text39',
							'checkbox40a',
							'checkbox40b',
							'checkbox40c',
							'text40a',
							'text40b',
							'text40c',
							'ref1_name',
							'ref1_address',
							'ref1_tel',
							'ref2_name',
							'ref2_address',
							'ref2_tel',
							'ref3_name',
							'ref3_address',
							'ref3_tel',
							'government_id',
							'license_passort_id',
							'dateplace',
							'date_accomplished'
    					  ];
}
