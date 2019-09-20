<?php

namespace App\Http\Controllers;
use App\Loan as Loan;
use App\Member as Member;
use App\Amortization as Amortization;
use App\Bill as Bill;
use App\Basemodel as Basemodel;
use DB;

use App\Exports\LoansExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class LoansController extends Controller
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
        $members = Member::get()->pluck('full_name','id')->toArray();
        $loans = Loan::orderBy('id','DESC')->get();
        $basemodels = Basemodel::Modepayment();
        return view('src/modules-crud',compact('loans','members','basemodels'));
    }

    public function exportLoanDetails() 
    {
        return Excel::download(new LoansExport, 'loans.xlsx');
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
        $loans = Loan::create( $request->all() );

        if( $loans ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

        return json_encode( array( 'notify' => $notification ) );

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
        $amortizationDetails = Amortization::where('loan_id', $id)->orderBy('id')->get();
        return view('partials/view-loan-details',compact('amortizationDetails') );
    }

    public function showloandetails(Request $request)
    {
      //
      $memberDetails = Member::find($request['memberID']);
      $loanDetails = Loan::find($request['loanID']);
      //$amortization  = Amortization::where('loan_id',$request['loanID'])->where('payment_status',false)->orderBy('id')->get();
      $amortization  = Amortization::where('loan_id',$request['loanID'])->orderBy('id')->get();
      return json_encode(array( 'memberDetails' => $memberDetails, 'loanDetails' => $loanDetails, 'amortizations'=> $amortization ));
    }

    public function showloanledger(Request $request)
    {
        
        $basemodels = Basemodel::Modepayment();
        $result = DB::table('loans')->leftJoin('members', 'members.id', '=', 'loans.member_id');
        

       if (!empty($request['lname'])) {
            $result = $result->where('lname', 'like', '%'.$request['lname'].'%');
        }

        if (!empty($request['fname'])) {
            $result = $result->where('fname', 'like', '%'.$request['fname'].'%');
        }

        if (!empty($request['mname'])) {
            $result = $result->where('mname', 'like', '%'.$request['mname'].'%');
        }

        if (!empty($request['year'])) {
            $result = $result->whereYear('starting_on', $request['year']);
        }

        if (!empty($request['month'])) {
            $result = $result->whereMonth('starting_on', $request['month']);
        }

       /* if (!empty($request['period'])) {
            $result = $result->where('city', $request['period']);
        }*/



        $loans = $result->get();

        return  view('partials/loans-ledger',compact('loans','basemodels'));
    }

     public function getamortizationamount(Request $request)
    {
      //
      $amortization  = Amortization::where('loan_id',$request['loan_id'])->where('schedule',$request['schedule'])->orderBy('id','desc')->get();

      $bill  = Bill::where('loan_id',$request['loan_id'])->where('schedule',$request['schedule'])->orderBy('id','desc')->get();

      return json_encode(array('amortizations'=> $amortization, 'bill' => $bill ));
      
    }

    public function getRBCamount(Request $request){

      $rbcAmount  = Amortization::select('running_balance_counter')
                                ->where('loan_id', $request['loanID'])
                                ->min('running_balance_counter');

      $rbMax = Amortization::select('running_balance')
                           ->where('loan_id', $request['loanID'])   
                           ->max('running_balance');                       

      return json_encode(array('rbcAmount'=> $rbcAmount, 'rbMax' => $rbMax ));

    }

    public function getstartsched(Request $request){

        $amortIDSequence = Amortization::where('loan_id', $request['loan_id'])->where('payment_status', 0)->min('id');
        $boolPayment = Amortization::select('payment_status')->where('id', $request['amort_id'])->get();
        $currentschedule = Amortization::select('schedule')
                                        ->where('loan_id', $request['loan_id'])
                                        ->where('id', $amortIDSequence)
                                        ->get();

        return json_encode( array( 'id_sequence' => $amortIDSequence, 'schedule' => $currentschedule, 'payment_status' => $boolPayment ) );

    }

    public function showloanreleases($period)
    {
        // 
        $date  = explode('-',$period);
        $year  = $date[2];
        $month = $date[0];
        $day   = $date[1];
        $month_final = Basemodel::Monthvaluestring()[$date[0]];

        if($date[0] == 1) {
             $period_final = Basemodel::Monthvaluestring()[$date[0]].' '.'1-15 '.$date[2];
          }
          else
          {
            
            $last = date('Y-m-t', mktime(0, 0, 0, $date[0], 1, $date[2]));
            $last = explode("-",$last);

            $period_final = Basemodel::Monthvaluestring()[$date[0]].' '.'16-'.$last[2].', '.$date[2];
        }

        $loanDetails = loan::whereYear('starting_on', $year)
                             ->whereMonth('starting_on', $month)
                             ->get();   

        return view('partials/view-loanreleases-details',compact('loanDetails','month_final','date'));
    }

    public function addschedule(Request $request)
    {
        // 
        $loanDetails = Loan::where('id', $request['loanId'])->get();
       
         foreach($loanDetails as $loan){ 
          
             $count = 0;
             $year = 0;

             $running_balance = $loan->amount_granted + $loan->interest;
             $day   = date('d',strtotime($loan->starting_on)) + 5;
             $month = date('m',strtotime($loan->starting_on));
             $year  = date('Y',strtotime($loan->starting_on));
             
             $period = $day > 15 ? $month."-"."2" : $month."-"."1";
             $count  = Basemodel::Monthvalue()[$period];

             for($i = 1; $i <= ($loan->terms*2); $i++){
                 
                 $count >= 25 ? $year++: $year;
                 $count >= 25 ? $count=1: $count;
                 
                 $running_balance = $running_balance - round($loan->amortization);
                 
                 $schedule = new Amortization;
                 $schedule->loan_id                 = $loan->id;
                 $schedule->member_id               = $loan->member_id;
                 $schedule->total_interest_amount   = $loan->interest;
                 $schedule->loan_amount             = $loan->amount_granted + $loan->interest;
                 $schedule->interest_amount         = round($loan->interest / ($loan->terms*2));
                 $schedule->schedule                = Basemodel::Periodcovered()[$count]."-".$year;
                 if($i == $loan->terms*2){
                    $schedule->loan_amortization    = round($loan->amortization) + $running_balance;
                    $schedule->principal_amount     = (round($loan->amortization) + $running_balance) - round($loan->interest / ($loan->terms*2));
                    $schedule->running_balance      = 0;
                 }else{
                    $schedule->running_balance      = $running_balance;
                    $schedule->loan_amortization    = round($loan->amortization);
                    $schedule->principal_amount     = round($loan->amount_granted / ($loan->terms*2));
                 }
                 
                 $schedule->save();
                 $count++;
             }
         }
        
        if($loanDetails){

             $loanDetails = Loan::find($request['loanId']);
             $loanDetails->amortization_status = true;
             $loanDetails->save();

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

        return json_encode( array( 'notify' => $notification ) );
    }

    public function addschedBloan(Request $request){

        $loanDetails = Loan::where('id', $request['loanId'])->get();
       
         foreach($loanDetails as $loan){ 

             $running_balance = $loan->amount_granted + $loan->interest;
             $day   = date('d',strtotime($loan->starting_on));
             $month = date('m',strtotime($loan->starting_on));
             $year  = date('Y',strtotime($loan->starting_on));

             for($i = 1; $i <= $loan->terms; $i++){
                 
                 $month > 12 ? $year++: $year;
                 $month > 12 ? $month=1: $month;
                 
                 $running_balance = $running_balance - round($loan->amortization);
                 
                 $schedule = new Amortization;
                 $schedule->loan_id                 = $loan->id;
                 $schedule->member_id               = $loan->member_id;
                 $schedule->total_interest_amount   = $loan->interest;
                 $schedule->loan_amount             = $loan->amount_granted + $loan->interest;
                 $schedule->interest_amount         = round($loan->interest / $loan->terms);
                 $schedule->schedule                = Basemodel::Monthlyvalue()[(int) $month]."-".$day."-".$year;

                 if($i == $loan->terms){
                    $schedule->loan_amortization    = round($loan->amortization) + $running_balance;
                    $schedule->principal_amount     = (round($loan->amortization) + $running_balance) - round($loan->interest/$loan->terms);
                    $schedule->running_balance      = 0;
                 }else{
                    $schedule->running_balance      = $running_balance;
                    $schedule->loan_amortization    = round($loan->amortization);
                    $schedule->principal_amount     = round($loan->amount_granted/$loan->terms);
                 }
                 
                 $schedule->save();
                 $month++;
             }
         }
        
        if($loanDetails){

             $loanDetails = Loan::find($request['loanId']);
             $loanDetails->amortization_status = true;
             $loanDetails->save();

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

        return json_encode( array( 'notify' => $notification ) );
    
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


    public function exportLoan( $id ){

        ob_end_clean();
        ob_start();

          Excel::create('Loan Amortization', function($excel){

            $excel->sheet('amortization_sheet', function($sheet){

                $amortization = Loan::where('id', $id)
                                ->orderBy('id', 'desc')
                                ->get();
              $sheet->loadView('partials/view_amortization_excel', [ 'amortization' => $amortization ]);

            });

          })->download('xls');

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
         $updateLoanDetails = Loan::where( 'id', $request['id'] )
                                  ->update($request->except('_token'));
                             
           if( $updateLoanDetails ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }


    public function updateApprovalStatus( Request $request ){

        $updateApprovalStatus = Loan::where( 'id', $request['id'] )
                                    ->update( [ 'approval_status' => $request['approval_status'] ] );

          if( $updateApprovalStatus ){

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
