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
$totalPrincipal = 0;
$totalInterest  = 0;
$totalBilling   = 0;
$OveralltotalPrincipal = 0;
$OveralltotalInterest  = 0;
$OveralltotalBilling   = 0;

 ?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>P-6 BAYUGAN II SFADS</p></th>
        </tr>
        <tr style="text-align:justify;">
            <th colspan="5" style="text-align:center">BILLING STATEMENT FOR THE MONTH OF {{ $period_final }}</th>
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
	      <th style="text-align:center">TOTAL BILLING</th>
	    </tr>
	</thead>
	<tbody>
	        @foreach ($billDetails as $details)
	        	<tr>
	        		<th colspan="2">{{strtoupper($details[0]->member->particular_name)}}</th>
	        	</tr>
	        	@foreach($details as $bill)          
		       	 <tr>
		       		<td>{{$i}}</td>
		       		<td>{{$bill->member->lname}}</td>
		       		<td>{{$bill->member->fname}}</td>
		       		<td style="text-align:right">{{number_format($bill->principal_amount,2)}}</td>
		       		<td style="text-align:right">{{number_format($bill->interest_amount,2)}}</td>
		       		<td style="text-align:right">{{number_format($bill->principal_amount+$bill->interest_amount,2)}}</td>
		       		<?php 
		       			//calculations part
		       			$i++;
		       			$totalPrincipal += $bill->principal_amount;
		       			$totalInterest  += $bill->interest_amount;
		       			$totalBilling   += $bill->principal_amount + $bill->interest_amount;
		       			$OveralltotalPrincipal += $bill->principal_amount;
		       			$OveralltotalInterest  += $bill->interest_amount;
		       			$OveralltotalBilling   += $bill->principal_amount + $bill->interest_amount;
		       		?>
		       	 </tr>
		       	@endforeach
		       	 <tr>
		       		<td></td>
	        		<td colspan="2" style="font-weight:bold;text-align:center">TOTAL</td>
	        		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalPrincipal,2);?></td>
	        		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalInterest,2);?></td>
	        		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalBilling,2);?></td>

	        	 </tr>
	        	 <?php 
	        	 	$cnt++;
	        	 	$i = 1;
	        	 	$totalPrincipal = 0;
	       			$totalInterest  = 0;
	       			$totalBilling   = 0;
	        	 ?>  	
	       	@endforeach
	       	<tr>
	       		<td colspan="6"></td>
	       	</tr>
	       	<tr>
	       		<td></td>
	    		<td colspan="2" style="font-weight:bold;text-align:center">OVERALL TOTAL</td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($OveralltotalPrincipal,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($OveralltotalInterest,2);?></td>
	    		<td style="font-weight:bold;text-align:right"><?php echo number_format($OveralltotalBilling,2);?></td>
	    	</tr>
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
    


