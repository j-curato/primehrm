<?php

namespace App\Http\Controllers;
use App\Employee as Employee;
use App\Eligibility as Eligibility;
use App\Work as Work;
use App\Voluntary as Voluntary;
use App\Training as Training;
use App\Other as Other;
use App\Question as Question;

use App\Division as Division;
use App\Position as Position;
use App\Particular as Particular;

use Illuminate\Http\Request;
//use Request;

class EmployeesController extends Controller
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
        //$administrator = Employee::select('user_id')->where('employee_no','XIII-122')->get();
        //$administrator[0]->user_id
        $user = auth()->user();
        
        if($user->username == 'admin'){
            $employees = Employee::orderBy('id','DESC')->get();
        }else{
            $employees = Employee::where('user_id',$user->id)->orderBy('id','DESC')->get();
        }

        $divisions = Division::all();
        $positions = Position::all();
        $particulars = Particular::all();
        
        return view('src/modules-crud',compact('employees','positions','divisions','particulars','administrator','user'));
    }

    public function pds($param=null,$id=null){

        $user = auth()->user();
        $segment = request()->segment(2);
        $url="view";
    
        $empID = Employee::select('employee_no')->where('user_id',$user->id)->get();
        
        if($param == 'sheet2'){

         $secIV = Eligibility::where('user_id', $user->id)->orderBy('id','ASC')->get();
         $secV = Work::where('user_id',$user->id)->orderBy('id','ASC')->get();   

         return view('PDS-2', compact('secIV','secV','user','segment','empID'));

        }elseif($param == 'sheet3'){


           $secVI = Voluntary::where('user_id',$user->id)->orderBy('id','ASC')->get();
           $secVII = Training::where('user_id',$user->id)->orderBy('id','ASC')->get();
           $secVIII = Other::where('user_id',$user->id)->orderBy('id','ASC')->get();

           return view('PDS-3',compact('secVI','secVII','secVIII','user','segment','empID'));

        }elseif ($param=='sheet4') {

            $sheet4 = Question::where('user_id',$user->id)->orderBy('id','ASC')->get();
            return view('PDS-4',compact('sheet4','user','segment','empID'));

        }else{

            
            $employees = Employee::where('user_id',$user->id)->get();

            if(count($employees) > 0){

                return redirect('edit/sheet1/');

            }else{

                 return view('Book1', compact('user','url','segment','employees'));

            }


        }

      

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
         $employees = Employee::create($request->all());
         $lastID = Employee::select('id')->where('user_id',$request['user_id'])->get();
 
        if($employees){

             $notification = "Success";

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification,'emp_id'=>$lastID)); 
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
        
        if(is_null($id)){

            $employees = Employee::where('user_id',$user->id)->orderBy('id','DESC')->get();

        }else{

            $employees = Employee::where('user_id',$id)->orderBy('id','DESC')->get();

        }
        
        return view('sheet1', compact('employees','user'));
    }

    public function compareID( Request $request )
    {
        
        if ( Employee::where('employee_id', $request['employeeID'])->exists() ) {
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
    public function edit($id=null)
    {
        $user = auth()->user();
        $segment = request()->segment(2);
        $url = "edit";

        if(is_null($id)){

            $segmentID = null;
            $employees = Employee::where('user_id',$user->id)->orderBy('id','DESC')->get();

        }else{

            $segmentID = request()->segment(3);
            $user->id = $id;
            $employees = Employee::where('user_id',$id)->orderBy('id','DESC')->get();

        }
        

        return view('Book1', compact('employees','user','url','segment','segmentID'));
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
        $updateEmployee = Employee::where( 'user_id', $request['user_id'] )
                              ->update($request->except('_token'));
        //$empID = Employee::select('user_id')->where('user_id',$request['user_id'])->get();                    
                            
           if( $updateEmployee ){

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
