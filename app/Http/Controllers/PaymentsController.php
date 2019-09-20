<?php

namespace App\Http\Controllers;

use App\Payment as Payment;
use App\Loan as Loan;
use App\Bill as Bill;
use App\Member as Member;
use App\Amortization as Amortization;
use App\Basemodel as Basemodel;

use App\Exports\LoansExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Http\Request;

class PaymentsController extends Controller 
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
        $loans = loan::orderBy('id','DESC')->get();
        $total_loan_granted = Loan::sum('amount_granted');
        $basemodels = Basemodel::Modepayment();
        $total_payments = Payment::sum('payment_amount');
        return view('src/modules-crud',compact('loans','members','basemodels'));
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

    public function showpaymentreceived($period)
    {
        // 

        $date  = explode('-',$period);
        $year  = $date[2];
        $month = $date[0];
        $day   = $date[1];

        $paymentDetails = Payment::whereYear('payment_date', $year)
                                 ->whereMonth('payment_date', $month)
                                 ->get();   
        return view('partials/view-paymentreceived-details',compact('paymentDetails'));
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
        $payments = Payment::create($request->all());
 
        if($payments){

         $loan = loan::where('id', $request['loan_id'])->get();
         $loan[0]->loan_balance = $loan[0]->loan_balance - $request['payment_amount'];
         $loan[0]->save();

        if($request['payment_amount'] < $request['payment_amortization']){

            $amortization = Amortization::where('loan_id', $request['loan_id'])
                                        ->where('schedule',$request['schedule_payment'])
                                        ->get();

            $min_bal = Amortization::where('loan_id', $request['loan_id'])->min('running_balance_counter');
            $balance_checker = $min_bal - $request['payment_amount'];

            if( $balance_checker == 0 ){

                $loan_status = Loan::where( 'id', $request['loan_id'] )->update( ['loan_status' => 1] );

                $insertZeros = Amortization::where('loan_id', $request['loan_id'])
                                           ->where('payment_status', 0)
                                           ->update(['running_balance_counter' => 0, 'payment_status' => 1]);

            }

            if( is_null( $min_bal ) ){

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $amortization[0]->running_balance + ( $amortization[0]->loan_amortization - $request['payment_amount'] );

                $amortization[0]->save();

            }else{

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $min_bal - $request['payment_amount'];

                $amortization[0]->save();

            }
            
            $amortization[0]->save();
            $amortization_next = Amortization::where('id','>',$amortization[0]->id)->orderBy('id')->first();
            $amortization_next->loan_amortization = $amortization_next->loan_amortization + ($request['payment_amortization'] - $request['payment_amount']);
            $amortization_next->running_balance = $amortization_next->running_balance + ($request['payment_amortization'] - $request['payment_amount']);
            $amortization_next->save();

            $a = Bill::where('amortization_id', $amortization_next->id)->exists();

            if($a){
                
                Bill::where('amortization_id', $amortization_next->id)->update(['loan_amortization' => $amortization_next->loan_amortization]);
            }
            
        }else if( $request['payment_amount'] > $request['payment_amortization'] ){

            $amortization = Amortization::where('loan_id', $request['loan_id'])
                                        ->where('schedule',$request['schedule_payment'])
                                        ->get();

            $min_bal = Amortization::where('loan_id', $request['loan_id'])->min('running_balance_counter');
            $balance_checker = $min_bal - $request['payment_amount'];

            if( $balance_checker == 0 ){

                $loan_status = Loan::where( 'id', $request['loan_id'] )->update( ['loan_status' => 1] );

                $insertZeros = Amortization::where('loan_id', $request['loan_id'])
                                           ->where('payment_status', 0)
                                           ->update(['running_balance_counter' => 0, 'payment_status' => 1]);

            }


            if( is_null( $min_bal ) ){

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $amortization[0]->running_balance - ( $request['payment_amount'] - $amortization[0]->loan_amortization );

                $amortization[0]->save();

            }else{

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $min_bal - $request['payment_amount'];

                $amortization[0]->save();

            }
    
        }else{

           $amortization = Amortization::where('loan_id', $request['loan_id'])
                                        ->where('schedule',$request['schedule_payment'])
                                        ->get();

           $min_bal = Amortization::where('loan_id', $request['loan_id'])->min('running_balance_counter');
           $balance_checker = $min_bal - $request['payment_amount'];

            if( $balance_checker == 0 ){

                $loan_status = Loan::where( 'id', $request['loan_id'] )->update( ['loan_status' => 1] );

                $insertZeros = Amortization::where('loan_id', $request['loan_id'])
                                           ->where('payment_status', 0)
                                           ->update(['running_balance_counter' => 0, 'payment_status' => 1]);

            }

            if( is_null( $min_bal ) ){

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $amortization[0]->running_balance;

                $amortization[0]->save();

            }else{

                $amortization[0]->payment_status = 1;
                $amortization[0]->running_balance_counter = $min_bal - $request['payment_amount'];

                $amortization[0]->save();

            }
            
        }

          $notification = "Success";

        } else{

          $notification = "Failed";

        }

          return json_encode(array('notify'=>$notification));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentDetails = Payment::with('member')->where('loan_id', $id)->get();
        return view('partials/view-payment-details',compact('paymentDetails'));
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
