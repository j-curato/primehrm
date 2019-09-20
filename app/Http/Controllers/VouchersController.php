<?php

namespace App\Http\Controllers;
use App\Voucher as Voucher;
use App\Productservice as Productservice;
use App\Payee as Payee;
use App\Accountname as Accountname;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VouchersController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
    	$vouchers = Voucher::all();
    	$productservices = Productservice::all();
    	$payees = Payee::all();
    	$accountnames = Accountname::all();

    	return view('src/modules-crud',compact('vouchers','productservices','payees','accountnames'));
    }

     public function store(Request $request)
    {
        
            $cnt =0;
            $i = 0;
            $data_array = array();
               
            foreach($request['item'] as $row){
                   $cnt++;
     
                   if($cnt % 4 != 0){
                      //convert form data to double dimensional array
                      $data_array[$i][$cnt] = $row;
                      $data_array[$i][$cnt] = $row;
                      $data_array[$i][$cnt] = $row;
                      $data_array[$i][$cnt] = $row;
                         
                   }else{
                      
                      $data_array[$i][$cnt] = $row;
                      //after 69 counts variable $cnt return to 0
                      $cnt=0;
                      $i++;
                   }
            }

            foreach($data_array as $row){   
                      
                      $voucher = new Voucher();
                      
                      $voucher->voucher_number    = $request['voucher_number'];
                      $voucher->voucher_type      = $request['voucher_type'];
                      $voucher->check_number      = $request['check_number'];
                      $voucher->payee_name        = $request['payee_name'];
                      $voucher->address           = $request['address'];
                      $voucher->transaction_date  = $request['transaction_date'];
                      $voucher->product_service   = $row[1];
                      $voucher->particular        = $row[2];
                      $voucher->debit             = $row[3];
                      $voucher->credit            = $row[4];
                      $voucher->remarks           = $request['remarks'];
                      $voucher->save();
            
            }
 
           if($data_array){

             $notification = "Success" ;

           } else{
             $notification = "Failed";
           }

           return json_encode(array('notify'=>$notification));

    }

    public function update(Request $request)
    {
        //
        $updatevoucher = Voucher::where( 'id', $request['id'] )
                              ->update($request->except('_token'));
   
           if( $updatevoucher ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

     public function updatestatus(Request $request)
    {
        //
        $updatevoucher = Voucher::where( 'voucher_number', $request['voucher_number'] )
                              ->update(['status'=>false,'remarks'=>$request['remarks']]);
   
           if( $updatevoucher ){

             $notification = "Success";

           } else{

             $notification = "Failed";

           }

         return json_encode( array( 'notify'=>$notification ) );
    }

    public function show($period)
    {
        // 

       $period_str = explode("-",$period);


       if($period_str[2] == "Income Statement"){

         $summaryDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Sales')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $laborDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Direct Labor')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $truckingDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','EFB/FFB')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $interestincomeDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Interest Income')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $sfeeDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','SFEE')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $miscDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','MISC')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $commissionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Commission Inc.')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $purchasesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Purchases')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $dieselDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Diesel')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $ticketDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Ticket')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $lightwaterDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Light and Water Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $officesuppliesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Office Supplies')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $repairmaintenanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                   ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Repair and Maintenance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $gasolineallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Gasoline Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $rentExpenseDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Rent Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $salarieswagesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Salaries and Wages')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $mealallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Meal Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $travelallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Travel Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $postagecommunicationDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Postage Communication')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $representationallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Representation Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $officerhonorariumDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Officer Honorarium')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $meetingexpenseDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Meeting Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $janitorialservicesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Janitorial Services')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $securityservicesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Security Services')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $mcdcmonthlyduesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','MCDC Monthly Dues')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $donationssolicitationsDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Donations and Solicitations')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $ssscontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','SSS Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $hdmfcontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','HDMF Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $philhealthcontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','PhilHealth Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $benefits1Details = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Employee Benefit 1')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $benefits2Details = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Employee Benefit 2')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

        $permitlicencesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Permit and Licences')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();


         return view('partials/accounting_modules/view-summary-income',compact('summaryDetails',
                                                                                'laborDetails',
                                                                                'truckingDetails',
                                                                                'sfeeDetails',
                                                                                'interestincomeDetails',
                                                                                'miscDetails',
                                                                                'commissionDetails',
                                                                                'purchasesDetails',
                                                                                'dieselDetails',
                                                                                'ticketDetails',
                                                                                'lightwaterDetails',
                                                                                'officesuppliesDetails',
                                                                                'repairmaintenanceDetails',
                                                                                'gasolineallowanceDetails',
                                                                                'rentExpenseDetails',
                                                                                'salarieswagesDetails',
                                                                                'mealallowanceDetails',
                                                                                'travelallowanceDetails',
                                                                                'postagecommunicationDetails',
                                                                                'representationallowanceDetails',
                                                                                'officerhonorariumDetails',
                                                                                'meetingexpenseDetails',
                                                                                'janitorialservicesDetails',
                                                                                'securityservicesDetails',
                                                                                'mcdcmonthlyduesDetails',
                                                                                'donationssolicitationsDetails',
                                                                                'ssscontributionDetails',
                                                                                'hdmfcontributionDetails',
                                                                                'philhealthcontributionDetails',
                                                                                'benefits1Details',
                                                                                'benefits2Details',
                                                                                'permitlicencesDetails',
                                                                                'period_str'
                                                                                ));
      }else if($period_str[2] == "Journal"){

         $journalDetails = Voucher::selectRaw('payee_name,transaction_date,voucher_number,particular,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('voucher_type','=','Journal Voucher')
                                    ->groupBy('voucher_number')
                                    ->groupBy('particular')
                                    ->groupBy('transaction_date')
                                    ->groupBy('payee_name')
                                    ->orderBy('voucher_number','ASC')
                                    ->get();
        return view('partials/accounting_modules/view-summary-journal',compact('journalDetails','period_str'));

      }else if($period_str[2] == "Trial Balance"){

         $summaryDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Sales')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $laborDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Direct Labor')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $truckingDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','EFB/FFB')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $interestincomeDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Interest Income')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $sfeeDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','SFEE')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $miscDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','MISC')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $commissionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Commission Inc.')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $purchasesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Purchases')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $dieselDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Diesel')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $ticketDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Ticket')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $lightwaterDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Light and Water Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $officesuppliesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Office Supplies')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $repairmaintenanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                   ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Repair and Maintenance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $gasolineallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Gasoline Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $rentExpenseDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Rent Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $salarieswagesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Salaries and Wages')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $mealallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Meal Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $travelallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Travel Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $postagecommunicationDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Postage Communication')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $representationallowanceDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Representation Allowance')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $officerhonorariumDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Officer Honorarium')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $meetingexpenseDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Meeting Expense')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $janitorialservicesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Janitorial Services')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $securityservicesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Security Services')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $mcdcmonthlyduesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','MCDC Monthly Dues')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $donationssolicitationsDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Donations and Solicitations')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $ssscontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','SSS Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

          $hdmfcontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','HDMF Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $philhealthcontributionDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','PhilHealth Contribution')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $benefits1Details = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Employee Benefit 1')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

         $benefits2Details = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Employee Benefit 2')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

        $permitlicencesDetails = Voucher::selectRaw('product_service,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('particular','=','Permit and Licences')
                                    ->groupBy('product_service')
                                    ->orderBy('product_service','ASC')
                                    ->get();

        return view('partials/accounting_modules/view-summary-trial-balance',compact('summaryDetails',
                                                                                'laborDetails',
                                                                                'truckingDetails',
                                                                                'sfeeDetails',
                                                                                'interestincomeDetails',
                                                                                'miscDetails',
                                                                                'commissionDetails',
                                                                                'purchasesDetails',
                                                                                'dieselDetails',
                                                                                'ticketDetails',
                                                                                'lightwaterDetails',
                                                                                'officesuppliesDetails',
                                                                                'repairmaintenanceDetails',
                                                                                'gasolineallowanceDetails',
                                                                                'rentExpenseDetails',
                                                                                'salarieswagesDetails',
                                                                                'mealallowanceDetails',
                                                                                'travelallowanceDetails',
                                                                                'postagecommunicationDetails',
                                                                                'representationallowanceDetails',
                                                                                'officerhonorariumDetails',
                                                                                'meetingexpenseDetails',
                                                                                'janitorialservicesDetails',
                                                                                'securityservicesDetails',
                                                                                'mcdcmonthlyduesDetails',
                                                                                'donationssolicitationsDetails',
                                                                                'ssscontributionDetails',
                                                                                'hdmfcontributionDetails',
                                                                                'philhealthcontributionDetails',
                                                                                'benefits1Details',
                                                                                'benefits2Details',
                                                                                'permitlicencesDetails',
                                                                                'period_str'
                                                                                ));

      }else if($period_str[2] == "CRB"){

           $sql = "SELECT * FROM crosstab('SELECT voucher_number, particular, sum(debit) FROM vouchers GROUP BY voucher_number,particular order by 1,2')";
           $sql .='AS final_result("voucher_number" integer,
                                   "cash_on_hand" float,
                                   "cash_in_bank" float, 
                                   "lr" float,
                                   "interest" float, 
                                   "cash_advance" float,
                                   "cbu" float,
                                   "due_labor" float,
                                   "lr_sss" float,
                                   "due_ffpi" float,
                                   "ffb_rfb" float,
                                   "htools" float,
                                   "hdmf_lr" float,
                                   "sss_lr" float,
                                   "ap_elect" float,
                                   "phic_ap" float,
                                   "hdmf_ap" float,
                                   "sss_ap" float)';

                                                                     
           $crbDetails = DB::select(DB::raw($sql));

           return view('partials/accounting_modules/view-summary-crb',compact('crbDetails','period_str'));
      }else if($period_str[2] == "CDB"){
           $cdbDetails = Voucher::selectRaw('payee_name,transaction_date,voucher_number,particular,sum(debit) as tot_debit,sum(credit) as tot_credit')
                                    ->whereMonth('transaction_date','=',$period_str[0])
                                    ->whereYear('transaction_date','=',$period_str[1])
                                    ->where('voucher_type','=','Check Voucher')
                                    ->groupBy('voucher_number')
                                    ->groupBy('particular')
                                    ->groupBy('transaction_date')
                                    ->groupBy('payee_name')
                                    ->orderBy('voucher_number','ASC')
                                    ->get();
           return view('partials/accounting_modules/view-summary-cdb',compact('cdbDetails','period_str'));
      }else{
        echo "nothing";
      }
    }

}
