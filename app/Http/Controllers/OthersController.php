<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OthersController extends Controller
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

        for( $i=0; $i < count($request['pds3']); $i+=3 ){

            $sec8 = new Other();
                      
            //$sec8->user_id           = $user->id;
            $sec8->user_id           = $request['user_id'];
            $sec8->employee_id       = $request['employee_id'];
            $sec8->other_skill       = $request['pds3'][$i];
            $sec8->other_recognition = $request['pds3'][$i+1];
            $sec8->other_membership  = $request['pds3'][$i+2];
            $sec8->save();

            if($i+2 == 20){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function show(Other $other)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function edit(Other $other)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Other $other)
    {
        $user = auth()->user();
        $sec8 = Other::where('user_id',$request['user_id'])->orderBy('id','ASC')->get();

        for( $i=0, $j=0; $i < count($request['pds3']); $i+=3, $j++ ){
           
            $sec8[$j]->employee_id       = $request['employee_id'];
            $sec8[$j]->other_skill       = $request['pds3'][$i];
            $sec8[$j]->other_recognition = $request['pds3'][$i+1];
            $sec8[$j]->other_membership  = $request['pds3'][$i+2];
            $sec8[$j]->save();

            if($i+2 == 20){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Other  $other
     * @return \Illuminate\Http\Response
     */
    public function destroy(Other $other)
    {
        //
    }
}
