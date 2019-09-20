<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
	
	table.table-borderless td,table.table-borderless th{
     border: none !important;
     margin:2px;
    }

</style>

<?php 

$tempArray = [];
$i = 1;
$cnt = 0;
$totalPrincipal    = 0;
$totalInterest     = 0;
$totalServiceFee   = 0;
$totalMiscIncome   = 0;
$totalCBU  		   = 0;
$totalCLPP   	   = 0;
$totalAKSI         = 0;
$totalbalance      = 0;
$totalCashBank     = 0;

 ?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>P-6 BAYUGAN II SFADS</p></th>
        </tr>
        <tr style="text-align:justify;">
            <th colspan="5" style="text-align:center">LOAN RELEASES FOR THE MONTH OF {{ $month_final.' '.$date[2] }} </th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
	<thead>
		<tr style="text-align:center;">
	      <th>NO</th>
	      <th colspan="2" style="text-align:center">NAME OF BORROWER</th>
	      <th style="text-align:center">PRINCIPAL</th>
	      <th style="text-align:center">INTEREST</th>
	      <th style="text-align:center">SERVICE FEE</th>
	      <th style="text-align:center">MISC. INCOME</th>
	      <th style="text-align:center">CBU 2%</th>
	      <th style="text-align:center">CLPP</th>
	      <th style="text-align:center">AKSI</th>
	      <th style="text-align:center">L/R BALANCE</th>
	      <th style="text-align:center">CASH IN BANK</th>
	    </tr>
	</thead>
	<tbody>
	        @foreach ($loanDetails as $loan)
	        	
	        	<?php $totalCashBank =    $loan->amount_granted - ($loan->interest + $loan->service_fee + $loan->cbu + $loan->clpp_insurance + $loan->life_insurance); ?>
		       	<tr>
		       		<td>{{$i}}</td>
		       		<td>{{$loan->member->lname}}</td>
		       		<td>{{$loan->member->fname}}</td>
		       		<td style="text-align:right">{{number_format($loan->amount_granted,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->interest,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->service_fee,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->others,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->cbu,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->clpp_insurance,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->life_insurance,2)}}</td>
		       		<td style="text-align:right">{{number_format($loan->loan_balance,2)}}</td>
		       		<td style="text-align:right">{{number_format($totalCashBank,2)}}</td>
		       		
		       	</tr>
		       <?php
		       		$totalPrincipal	 += $loan->amount_granted;
		       		$totalInterest	 += $loan->interest;
		       		$totalServiceFee += $loan->service_fee;
		       		$totalMiscIncome += $loan->others;
		       		$totalCBU		 += $loan->cbu;
		       		$totalCLPP	     += $loan->clpp_insurance;
		       		$totalAKSI	     += $loan->life_insurance;
		       		$totalbalance	 += $loan->loan_balance;
		       		$totalCashBank	 += $loan->totalCashBank;
		       		$i++;

		       ?>
		   
	       	@endforeach
	       	<tr>
	       		<td colspan="6"></td>
	       	</tr>
	       	<tr>
	       		<td></td>
	    		<td colspan="2" style="font-weight:bold;text-align:center">OVERALL TOTAL</td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalPrincipal,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalInterest,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalServiceFee,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalMiscIncome,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalCBU,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalCLPP,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalAKSI,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalbalance,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalCashBank,2);?></td>
	    	</tr>
	 </tbody>
 </table>
 <table class="table table-borderless">
	<thead>
		<tr style="text-align:justify;">
	      <th>Prepared by:</th>          
	      <th>Noted by:</th>
	    </tr>
	</thead>
	 <tbody>
	    <tr>
	     <td></td>
	     <td></td>
	    </tr>
	    <tr>
	     <td></td>
	     <td></td>
	    </tr>
	    <tr>
	     <td>JEACYLL B. KISTADIO</td>
	     <td>JOSEPHINE B. PALEN</td>
	    </tr>
	    <tr>
	     <td>LOAN CLERK</td>
	     <td>MANAGER</td>
	    </tr>
	 </tbody>
 </table>
    


