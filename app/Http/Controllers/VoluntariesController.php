<?php

namespace App\Http\Controllers;

use App\Employee as Employee;
use App\Voluntary;
use App\Training as Training;
use App\Other as Other;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VoluntariesController extends Controller
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

        for( $i=0; $i < count($request['pds3']); $i+=5 ){

            $secVI = new Voluntary();
                      
            //$secVI->user_id            = $user->id;
            $secVI->user_id            = $request['user_id'];
            $secVI->employee_id        = $request['employee_id'];
            $secVI->vol_org_name       = $request['pds3'][$i];
            $secVI->vol_from           = $request['pds3'][$i+1];
            $secVI->vol_to             = $request['pds3'][$i+2];
            $secVI->vol_hours          = $request['pds3'][$i+3];
            $secVI->vol_position       = $request['pds3'][$i+4];
            $secVI->save();

            if($i+4 == 34){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function show(Voluntary $voluntary, $id=null)
    {

       $user = auth()->user();
       $segment = request()->segment(2);

       if(is_null($id)){

        $secVI = Voluntary::where('user_id',$user->id)->orderBy('id','ASC')->get();
        $secVII = Training::where('user_id',$user->id)->orderBy('id','ASC')->get();
        $secVIII = Other::where('user_id',$user->id)->orderBy('id','ASC')->get();

       }else{

        $secVI = Voluntary::where('user_id',$id)->orderBy('id','ASC')->get();
        $secVII = Training::where('user_id',$id)->orderBy('id','ASC')->get();
        $secVIII = Other::where('user_id',$id)->orderBy('id','ASC')->get();

       }
       

       return view('PDS-3-view',compact('user','secVI','secVII','secVIII','segment'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function edit(Voluntary $voluntary, $id=null)
    {
       
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
       

       return view('PDS-3',compact('user','secVI','secVII','secVIII','segment','empID','segmentID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Voluntary $voluntary)
    {
        $user = auth()->user();
        $secVI = Voluntary::where('user_id',$request['user_id'])->orderBy('id','ASC')->get();

        for( $i=0, $j=0; $i < count($request['pds3']); $i+=5, $j++ ){
                      
            $secVI[$j]->employee_id        = $request['employee_id'];
            $secVI[$j]->vol_org_name       = $request['pds3'][$i];
            $secVI[$j]->vol_from           = $request['pds3'][$i+1];
            $secVI[$j]->vol_to             = $request['pds3'][$i+2];
            $secVI[$j]->vol_hours          = $request['pds3'][$i+3];
            $secVI[$j]->vol_position       = $request['pds3'][$i+4];
            $secVI[$j]->save();

            if($i+4 == 34){
                $notification = "Success";
            }

        }

        return json_encode(array('notify'=>$notification));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Voluntary  $voluntary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Voluntary $voluntary)
    {
        //
    }
}
