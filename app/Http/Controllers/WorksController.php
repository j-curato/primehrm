<?php

namespace App\Http\Controllers;

use App\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorksController extends Controller
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

        for( $i=0; $i < count($request['pds2']); $i+=8 ){

            $secV = new Work();
                      
            //$secV->user_id            = $user->id;
            $secV->user_id            = $request['user_id'];
            $secV->employee_id        = $request['employee_id'];
            $secV->work_from          = $request['pds2'][$i];
            $secV->work_to            = $request['pds2'][$i+1];
            $secV->work_position      = $request['pds2'][$i+2];
            $secV->work_company       = $request['pds2'][$i+3];
            $secV->work_salary        = $request['pds2'][$i+4];
            $secV->work_salary_grade  = $request['pds2'][$i+5];
            $secV->work_status        = $request['pds2'][$i+6];
            $secV->work_gov_service   = $request['pds2'][$i+7];
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
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function edit(Work $work)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Work $work)
    {
        $user = auth()->user();
        $secV = Work::where('user_id',$request['user_id'])->orderBy('id','ASC')->get();
       
        for( $i=0, $j=0; $i < count($request['pds2']); $i+=8, $j++ ){
                
            $secV[$j]->employee_id        = $request['employee_id'];
            $secV[$j]->work_from          = $request['pds2'][$i];
            $secV[$j]->work_to            = $request['pds2'][$i+1];
            $secV[$j]->work_position      = $request['pds2'][$i+2];
            $secV[$j]->work_company       = $request['pds2'][$i+3];
            $secV[$j]->work_salary        = $request['pds2'][$i+4];
            $secV[$j]->work_salary_grade  = $request['pds2'][$i+5];
            $secV[$j]->work_status        = $request['pds2'][$i+6];
            $secV[$j]->work_gov_service   = $request['pds2'][$i+7];

            $secV[$j]->save();

            if($i+7 == 223){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Work  $work
     * @return \Illuminate\Http\Response
     */
    public function destroy(Work $work)
    {
        //
    }
}
