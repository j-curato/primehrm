<?php

namespace App\Http\Controllers;

use App\Bwork;
use App\Employee as Employee;
use App\Eligibility as Eligibility;
use App\Voluntary as Voluntary;
use App\Training as Training;
use App\Other as Other;
use App\Question as Question;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BworkController extends Controller
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

        for( $i=0; $i < count($request['pds2x']); $i+=8 ){

            $secV = new Bwork();
                      
            //$secV->user_id            = $user->id;
            $secV->user_id            = $request['user_id'];
            $secV->employee_id        = $request['employee_id'];
            $secV->work_from          = $request['pds2x'][$i];
            $secV->work_to            = $request['pds2x'][$i+1];
            $secV->work_position      = $request['pds2x'][$i+2];
            $secV->work_company       = $request['pds2x'][$i+3];
            $secV->work_salary        = $request['pds2x'][$i+4];
            $secV->work_salary_grade  = $request['pds2x'][$i+5];
            $secV->work_status        = $request['pds2x'][$i+6];
            $secV->work_gov_service   = $request['pds2x'][$i+7];
            $secV->save();

            if($i+7 == 223){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bwork  $bwork
     * @return \Illuminate\Http\Response
     */
    public function show(Bwork $bwork)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bwork  $bwork
     * @return \Illuminate\Http\Response
     */
    public function edit(Bwork $bwork, $id=null)
    {

        $user = auth()->user();

       if(is_null($id)){

         $segmentID = null;
         $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
         $secV = Bwork::where('user_id',$user->id)->orderBy('id','ASC')->get();

       }else{

         $segment = request()->segment(2);
         $user->id = $id;
         $empID = Employee::select('employee_no')->where('user_id',$id)->get();
         $secV = Bwork::where('user_id',$user->id)->orderBy('id','ASC')->get(); 

       }

       return view('PDS-2-extend', compact('secV','user','segment','empID'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bwork  $bwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bwork $bwork)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bwork  $bwork
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bwork $bwork)
    {
        //
    }
}
