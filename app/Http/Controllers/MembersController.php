<?php

namespace App\Http\Controllers;
use App\Member as Member;
use App\Loan as Loan;
use App\Amortization as Amortization;
use App\Division as Division;
use App\Particular as Particular;

use Illuminate\Http\Request;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $members   = Member::orderBy('id','DESC')->get();
        $divisions = Division::all();
        $particulars = Particular::all();

        return view('src/modules-crud',compact('members','divisions','particulars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $members = Member::create($request->all());
 
           if($members){

             $notification = "Success";

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification)); 

         /* if($request->ajax()){
            return json_encode(array('notify'=> $request->all())); 
          }*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
      $memberDetails = Member::find($request['memberID']);
      $loanApproval  = Member::find($request['memberID'])->loans;
      
      return json_encode(array( 'memberDetails' => $memberDetails, 'loanApproval' => $loanApproval ));
      
    }

    public function compareID( Request $request )
    {
        
        if ( Member::where('member_code', $request['memberID'])->exists() ) {
            $notification = "Success";
        }else{
            $notification = "Failed";
        }

        return json_encode(array( 'notify' => $notification ));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $updateMember = Member::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
                             
           if( $updateMember ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
