<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
	
	table.table-borderless td,table.table-borderless th{
     border: none !important;
    }

</style>

<?php 

$tempArray = [];
$i = 1;

 ?>

   

	<a href="{{ url('/exportLoanDetails').'/'.$amortizationDetails[0]->loan_id }}" target="__blank" style="float:right;" class="btn btn-square btn-primary hidden-print"><i class="nav-icon icon-eye"></i> Export to excel</a>


<table class="table table-borderless">
  
        <thead>

            <tr style="text-align:justify;">
                <th>FPPI ARB MPC</th>
            </tr>

            <tr style="text-align:justify;">
                <th>P-6 BAYUGAN 2 SFADS</th>
                <th></th>
                <th>LOAN AMOUNT</th>
                <th>{{ number_format($amortizationDetails[0]->loan_amount,2)  }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>NAME OF BORROWER: </th>
                <th>{{ $amortizationDetails[0]->loan->member->fname.' '.$amortizationDetails[0]->loan->member->lname }}</th>
                <th>SERVICE FEE</th>
                <th>{{ number_format($amortizationDetails[0]->loan->service_fee,2) }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>ADDRESS </th>
                <th>{{ $amortizationDetails[0]->loan->member->home_address }}</th>
                <th>Interest</th>
                <th>{{ number_format($amortizationDetails[0]->loan->interest,2) }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>LOAN AMOUNT </th>
                <th></th>
                <th>Insurance</th>
                <th></th>
            </tr>

             <tr style="text-align:justify;">
                <th>TERMS</th>
                <th>{{ $amortizationDetails[0]->loan->terms }}</th>
                <th>LIFE INSURANCE</th>
                <th>{{ number_format($amortizationDetails[0]->loan->life_insurance,2) }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th>DATE RELEASE</th>
                <th></th>
                <th>CBU</th>
                <th>{{ number_format($amortizationDetails[0]->loan->cbu,2) }}</th>
            </tr>

            <tr style="text-align:justify;">
                <th></th>
                <th></th>
                <th>NET PROCEEDS</th>
                <th>{{ number_format($amortizationDetails[0]->loan->net_proceed,2) }}</th>
            </tr>
        </thead>
        

</table>


<table class="table table-bordered">

	<thead>
		<tr style="text-align:justify;">
	      <th>#</th>
	      <th>Payment</th>
	      <th>Amortization</th>
	      <th>Balance</th>
	      <th>Interest</th>
	      <th>Loan Amort.</th>
	      <th>Balance</th>
	    </tr>
	</thead>

	<tbody>
	         <tr>
	       		<td></td>
	       		<td></td>
	       		<td></td>
	       		<td>{{ number_format($amortizationDetails[0]->loan->amount_granted,2) }}</td>
	       		<td>{{ number_format($amortizationDetails[0]->loan->interest,2) }}</td>
	       		<td></td>
	       		<td>{{ number_format($amortizationDetails[0]->loan->amount_granted+$amortizationDetails[0]->loan->interest,2) }}</td>
	       		
	       	 </tr>

	        @foreach ($amortizationDetails as $amortization)
           
	       	 <tr>
	       		<td>{{$i}}</td>
	       		<td></td>
	       		<td></td>

	       		<td></td>
	       		<td></td>
	       		<td>{{ number_format($amortization->loan_amortization,2)  }}</td>
	       		<td>{{ number_format($amortization->running_balance,2)  }}</td>
	       		<?php $i++;?>
	       	 </tr>
	       	@endforeach
	 </tbody>

 </table>


 <table class="table table-borderless">

	<thead>
		<tr style="text-align:justify;">
	      <th>Prepared by:</th>     
	      <th>Checked by:</th>     
	      <th>Noted by:</th>
	    </tr>
	</thead>

	 <tbody>
	    <tr>
	     <td></td>
	     <td></td>
	     <td></td>
	    </tr>

	    <tr>
	     <td></td>
	     <td></td>
	     <td></td>
	    </tr>

	    <tr>
	     <td>JEACYLL B. KISTADIO</td>
	     <td>MARGIE L.SEPRADO</td>
	     <td>JOSEPHINE B. PALEN</td>
	    </tr>

	    <tr>
	     <td>LOAN CLERK</td>
	     <td>BOOKKEEPER</td>
	     <td>MANAGER</td>
	    </tr>
	 </tbody>

 </table>
    


