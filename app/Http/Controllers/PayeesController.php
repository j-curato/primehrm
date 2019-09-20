<?php

namespace App\Http\Controllers;
use App\Payee as Payee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PayeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$payees = Payee::all();
    	return view('src/modules-crud',compact('payees'));
    }

    public function store(Request $request)
    {
        //
        $payees = Payee::create($request->all());
 
           if($payees){

             $notification = "Success";

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 

         /* if($request->ajax()){
            return json_encode(array('notify'=> $request->all())); 
          }*/
    }

     public function getpayee( Request $request )
    {
        $payee = Payee::where('payee_name', $request['payee_name'])->get();
        return json_encode(array( 'address' => $payee[0]->address ));
    }

    public function update(Request $request)
    {
        //
        $updatePayee = Payee::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
                              /*->update([

                                'member_id'=>$request['member_id'],
                                'fname'=>$request['fname'],
                                'mname'=>$request['mname'],
                                'lname'=>$request['lname'],
                                'extension'=>$request['extension'],
                                'date_of_birth'=>$request['date_of_birth'],
                                'marital_status'=>$request['marital_status'],
                                'sex'=>$request['sex'],
                                'home_address'=>$request['home_address'],
                                'email_address'=>$request['email_address'],
                                'contact_number'=>$request['contact_number'],
                                'photo_url'=>$request['photo_url'],
                                'member_type'=>$request['member_type'],
                                'member_status'=>$request['member_status']

                                ]);*/
   
           if( $updatePayee ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }
}
