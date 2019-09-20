<?php

namespace App\Http\Controllers;

use App\Btraining;
use App\Training;
use App\Employee as Employee;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BtrainingsController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Btraining  $btraining
     * @return \Illuminate\Http\Response
     */
    public function show(Btraining $btraining,$id=null)
    {
       $user = auth()->user();
       $segment = request()->segment(2);

       if(is_null($id)){

         $segmentID = null;
         $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
         $secVII = Training::where('user_id',$user->id)->orderBy('id','ASC')->get();

       }else{

         $segmentID = request()->segment(3);
         $user->id = $id;
         $empID = Employee::select('employee_no')->where('user_id',$id)->get();
         $secVII = Training::where('user_id',$id)->orderBy('id','ASC')->get();

       }

        return view('PDS3-extend',compact('user','secVII','segment','empID','segmentID'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Btraining  $btraining
     * @return \Illuminate\Http\Response
     */
    public function edit(Btraining $btraining)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Btraining  $btraining
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Btraining $btraining)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Btraining  $btraining
     * @return \Illuminate\Http\Response
     */
    public function destroy(Btraining $btraining)
    {
        //
    }
}
