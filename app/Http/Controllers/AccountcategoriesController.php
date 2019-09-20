<?php

namespace App\Http\Controllers;
use App\Accountcategory as Accountcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountcategoriesController extends Controller
{
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$accountcategories = Accountcategory::all();
    	return view('src/modules-crud',compact('accountcategories'));
    }

 	public function store(Request $request)
    {
        //
        $accountcategories = Accountcategory::create($request->all());
 
           if($accountcategories){
             $notification = "Success";
           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 
    }

   
    public function update(Request $request)
    {
        //
        $updateAccountcategory = Accountcategory::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
   
           if( $updateAccountcategory ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }
}
