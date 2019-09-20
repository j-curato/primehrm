<?php

namespace App\Http\Controllers;
use App\Bill as Bill;
use App\Loan as Loan;
use App\Payment as Payment;
use App\Amortization as Amortization;
use App\Basemodel as Basemodel;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillsController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        
         $bills = Bill::orderBy('amortization_id','DESC')->get();
         $getAmortIDs = Bill::select('amortization_id')->orderBy('amortization_id','DESC')->get();
         //print_r($getAmortIDs);
         $amortizations = Amortization::select('id','loan_id','running_balance_counter')
                                       //->whereNotNull('running_balance_counter')
                                       ->whereIn('id', $getAmortIDs)
                                       ->orderBy('id','DESC')
                                       ->get();
         $total_bills = Bill::sum('loan_amortization');
         $total_amortizations = Loan::sum('amount_granted')+Loan::sum('interest');
         //commented on 06-05-2019 $payments = Payment::orderBy('id','DESC')->get();
         $total_payments = Payment::sum('payment_amount');
         return view('src/modules-crud',compact('bills','amortizations','payments','total_amortizations','total_bills','total_payments'));
    }

    public function inactivebills(){

 
         $inactive = Amortization::where('bill_status', 0)->orderBy('id','DESC')->get();

         return view('src/modules-crud',compact('inactive'));

    }


    public function exportBillDetails() {
        
        return Excel::download(new BillExport, 'bills.xlsx');
    }

    public function exportBill( $id ){

        ob_end_clean();
        ob_start();

          Excel::create('Billing', function($excel){

            $excel->sheet('billing_sheet', function($sheet){

                $bill = Bill::where('id', $id)
                                ->orderBy('id', 'desc')
                                ->get();
              $sheet->loadView('partials/view_bill_excel', [ 'bill' => $bill ]);

            });

          })->download('xls');

    }


    public function show($period)
    {
        // 
        $billDetails = Bill::with('member')->where('schedule', $period)->get()->groupBy('member.particular_name') ;
        $period_str = explode("-",$period);

        if($period_str[1] == 1) {
             $period_final = Basemodel::Monthvaluestring()[$period_str[0]].' '.'1-15 '.$period_str[2];
          }
          else
          {
            
            $last = date('Y-m-t', mktime(0, 0, 0, $period_str[0], 1, $period_str[2]));
            $last = explode("-",$last);

            $period_final = Basemodel::Monthvaluestring()[$period_str[0]].' '.'16-'.$last[2].', '.$period_str[2];
        }
        
        return view('partials/view-bill-details',compact('billDetails','period_final') );
    }

     public function store(Request $request){ 
        //
            $amortizations = Amortization::where('schedule',$request['bill_date'])->where('bill_status',0)->get();
   
            foreach($amortizations as $amortization){

             $day   = date('d',strtotime($amortization->schedule));
             $month = date('m',strtotime($amortization->schedule)); 
             $year  = date('Y',strtotime($amortization->schedule));

                $amortization->bill_status   = 1;
                $amortization->save(); 
                
                $bill = new Bill;
                $bill->amortization_id       = $amortization->id;
                $bill->member_id             = $amortization->member_id;
                $bill->loan_id               = $amortization->loan_id;
                $bill->loan_amortization     = $amortization->loan_amortization;
                $bill->total_interest_amount = $amortization->total_interest_amount;
                $bill->principal_amount      = $amortization->principal_amount;
                $bill->interest_amount       = $amortization->interest_amount;
                $bill->schedule              = $amortization->schedule;
                $bill->running_balance       = $amortization->running_balance;
                $bill->save();
            }

          if($amortizations){
             $notification = "Success";
           } else{
             $notification = "Failed";
           }
           
           return json_encode(array('notify'=>$notification));
 
           
    }
}
