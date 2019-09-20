<?php

namespace App\Http\Controllers;
use App\Accountname as Accountname;
use App\Accountcategory as Accountcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountnamesController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$accountnames = Accountname::all();
    	$accountcategories = Accountcategory::all();
    	return view('src/modules-crud',compact('accountnames','accountcategories'));
    }

     public function store(Request $request)
    {
        //
        $accountnames = Accountname::create($request->all());
 
           if($accountnames){
             $notification = "Success";
           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 
    }

    public function update(Request $request)
    {
        //
        $updateAccountname = Accountname::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
   
           if( $updateAccountname ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

}
