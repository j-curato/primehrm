<?php

namespace App\Http\Controllers;

use App\Employee as Employee;
use App\Eligibility as Eligibility;
use App\Work as Work;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EligibilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Save Section IV contents
        $user = auth()->user();

        for( $i=0; $i < count($request['pds2']); $i+=6 ){

            $secIV = new Eligibility();
                      
            //$secIV->user_id            = $user->id;
            $secIV->user_id            = $request['user_id'];
            $secIV->employee_id        = $request['employee_id'];
            $secIV->emp_eligibility    = $request['pds2'][$i];
            $secIV->emp_rating         = $request['pds2'][$i+1];
            $secIV->emp_date_exam      = $request['pds2'][$i+2];
            $secIV->emp_place_exam     = $request['pds2'][$i+3];
            $secIV->emp_license_number = $request['pds2'][$i+4];
            $secIV->emp_date_validity  = $request['pds2'][$i+5];
            
            $secIV->save();

            if($i+5 == 41){
                $notification = "Success";
            }
        }


        return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {
        $user = auth()->user();
        $segment = request()->segment(2);

        if(is_null($id)){

          $secIV = Eligibility::where('user_id',$user->id)->orderBy('id','ASC')->get();
          $secV = Work::where('user_id',$user->id)->orderBy('id','ASC')->get();

        }else{

          $secIV = Eligibility::where('user_id',$id)->orderBy('id','ASC')->get();
          $secV = Work::where('user_id',$id)->orderBy('id','ASC')->get();

        }
       

        return view('PDS-2-view', compact('secIV','secV','user','segment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {

        $user = auth()->user();
        $segment = request()->segment(2);

        if(is_null($id)){

            $segmentID = null;
            $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
            $secIV = Eligibility::where('user_id', $user->id)->orderBy('id','ASC')->get();
            $secV = Work::where('user_id',$user->id)->orderBy('id','ASC')->get();

        }else{

            $segmentID = request()->segment(3);
            $user->id = $id;
            $empID = Employee::select('employee_no')->where('user_id',$id)->get();
            $secIV = Eligibility::where('user_id', $id)->orderBy('id','ASC')->get();
            $secV = Work::where('user_id',$id)->orderBy('id','ASC')->get();

        }
        
        
        //return view('PDS-2-view', compact('secIV'));
        return view('PDS-2', compact('secIV','secV','user','segment','empID','segmentID'));
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

        //$user = auth()->user();
        $secIV = Eligibility::where('user_id',$request['user_id'])->orderBy('id','ASC')->get();
       
        for( $i=0, $j=0; $i < count($request['pds2']); $i+=6, $j++){

            $secIV[$j]->employee_id        = $request['employee_id'];
            $secIV[$j]->emp_eligibility    = $request['pds2'][$i];
            $secIV[$j]->emp_rating         = $request['pds2'][$i+1];
            $secIV[$j]->emp_date_exam      = $request['pds2'][$i+2];
            $secIV[$j]->emp_place_exam     = $request['pds2'][$i+3];
            $secIV[$j]->emp_license_number = $request['pds2'][$i+4];
            $secIV[$j]->emp_date_validity  = $request['pds2'][$i+5];
            
            $secIV[$j]->save();

            if($i+5 == 41){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));

    }

    public function sheet2Edit(){

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
