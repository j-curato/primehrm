<?php

namespace App\Http\Controllers;

use App\Training;
use App\Employee as Employee;
use App\Voluntary;
use App\Other as Other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrainingsController extends Controller
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

        $user = auth()->user();

        for( $i=0; $i < count($request['pds3']); $i+=6 ){

            $secVII = new Training();
                      
            //$secVII->user_id            = $user->id;
            $secVII->user_id            = $request['user_id'];
            $secVII->employee_id        = $request['employee_id'];
            $secVII->training_title     = $request['pds3'][$i];
            $secVII->training_from      = $request['pds3'][$i+1];
            $secVII->training_to        = $request['pds3'][$i+2];
            $secVII->training_hours     = $request['pds3'][$i+3];
            $secVII->training_type      = $request['pds3'][$i+4];
            $secVII->training_sponsor   = $request['pds3'][$i+5];
            $secVII->save();

            if($i+5 == 119){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function show(Training $training)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function edit(Training $training)
    {
        //
    }

    public function trainingextend($id=null){

       $user = auth()->user();
       $segment = request()->segment(2);

       if(is_null($id)){

         $segmentID = null;
         $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
         $secVI = Voluntary::where('user_id',$user->id)->orderBy('id','ASC')->get();
         $secVII = Training::where('user_id',$user->id)->orderBy('id','ASC')->get();
         $secVIII = Other::where('user_id',$user->id)->orderBy('id','ASC')->get();

       }else{

         $segmentID = request()->segment(3);
         $user->id = $id;
         $empID = Employee::select('employee_no')->where('user_id',$id)->get();
         $secVI = Voluntary::where('user_id',$id)->orderBy('id','ASC')->get();
         $secVII = Training::where('user_id',$id)->orderBy('id','ASC')->get();
         $secVIII = Other::where('user_id',$id)->orderBy('id','ASC')->get();

       }

        return view('PDS3-extend',compact('user','secVI','secVII','secVIII','segment','empID','segmentID'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Training $training)
    {
        $user = auth()->user();

        $secVII = Training::where('user_id',$request['user_id'])->orderBy('id','ASC')->get();

        for( $i=0, $j=0; $i < count($request['pds3']); $i+=6, $j++ ){
            
            $secVII[$j]->employee_id        = $request['employee_id'];
            $secVII[$j]->training_title     = $request['pds3'][$i];
            $secVII[$j]->training_from      = $request['pds3'][$i+1];
            $secVII[$j]->training_to        = $request['pds3'][$i+2];
            $secVII[$j]->training_hours     = $request['pds3'][$i+3];
            $secVII[$j]->training_type      = $request['pds3'][$i+4];
            $secVII[$j]->training_sponsor   = $request['pds3'][$i+5];
            $secVII[$j]->save();

            if($i+5 == 119){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Training  $training
     * @return \Illuminate\Http\Response
     */
    public function destroy(Training $training)
    {
        //
    }
}
