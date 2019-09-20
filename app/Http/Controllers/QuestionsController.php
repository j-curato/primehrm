<?php

namespace App\Http\Controllers;

use App\Employee as Employee;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionsController extends Controller
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
        $sheet4 = Question::create($request->all());
 
        if($sheet4){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

           return json_encode(array('notify'=>$notification));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, $id=null)
    {
        $user = auth()->user();
        $segment = request()->segment(2);

        if(is_null($id)){

         $sheet4 = Question::where('user_id',$user->id)->orderBy('id','ASC')->get();

        }else{

         $sheet4 = Question::where('user_id',$id)->orderBy('id','ASC')->get();

        }

        return view('PDS-4-view',compact('user','sheet4','segment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question, $id=null)
    {
        $user = auth()->user();
        $segment = request()->segment(2);

        if(is_null($id)){
            
         $segmentID = null;
         $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
         $sheet4 = Question::where('user_id',$user->id)->orderBy('id','ASC')->get();

        }else{

         $segmentID = request()->segment(3);   
         $user->id = $id;
         $empID = Employee::select('employee_no')->where('user_id',$id)->get();
         $sheet4 = Question::where('user_id',$id)->orderBy('id','ASC')->get();

        }
        

        return view('PDS-4',compact('user','sheet4','segment','empID','segmentID'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
         
         $updateSheet4 = Question::where( 'user_id', $request['user_id'] )
                              ->update($request->except('_token'));
                            
           if( $updateSheet4 ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }
}
