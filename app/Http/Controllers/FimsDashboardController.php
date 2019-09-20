<?php

namespace App\Http\Controllers;

use App\Bill as Bill;
use App\Loan as Loan;
use App\Payment as Payment;
use App\Amortization as Amortization;
use App\Basemodel as Basemodel;

use Illuminate\Http\Request;

class FimsDashboardController extends Controller
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
         $total_amount_granted = Loan::sum('amount_granted');
         $total_amortizations = Amortization::sum('loan_amortization');
         $bills = Bill::orderBy('id','DESC')->get();
         $total_bills = Bill::sum('loan_amortization');
         $payments = Payment::orderBy('id','DESC')->get();
         $total_payments = Payment::sum('payment_amount');
         
        return view('src/index', compact('bills','payments','total_amount_granted','total_amortizations','total_bills','total_payments'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
