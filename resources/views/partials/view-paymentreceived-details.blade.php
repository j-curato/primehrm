<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
	
	table.table-borderless td,table.table-borderless th{
     border: none !important;
     margin:2px;
    }

</style>

<?php 
	$i = 1;
	$cnt = 0;
	$totalPayment = 0;
 ?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>P-6 BAYUGAN II SFADS</p></th>
        </tr>
        <tr style="text-align:justify;">
            <th colspan="5" style="text-align:center">LOAN PAYMENT HISTORY </th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
	<thead>
		<tr style="text-align:center;">
	      <th>NO</th>
	      <th colspan="3" style="text-align:center">NAME OF BORROWER</th>
	      <th style="text-align:center">AMOUNT PAID</th>
	      <th style="text-align:center">OR NUMBER</th>
	      <th style="text-align:center">PAYMENT DATE</th>
	    </tr>
	</thead>
	<tbody>
        @foreach ($paymentDetails as $details)
	       	 <tr>
	       		<td>{{$i}}</td>
	       		<td>{{$details->member->lname}}</td>
	       		<td>{{$details->member->fname}}</td>
	       		<td>{{$details->member->mname}}</td>
	       		<td style="font-weight:bold;text-align:right">{{ number_format($details->payment_amount,2) }}</td>
	       		<td style="font-weight:bold;text-align:center">{{$details->or_number}}</td>
	       		<td style="font-weight:bold;text-align:center">{{$details->payment_date}}</td>

	       		<?php $i++; $totalPayment += $details->payment_amount; ?>
	       	 </tr> 
       	@endforeach
   		 <tr>
       		<td></td>
    		<td colspan="3" style="font-weight:bold;text-align:center">TOTAL</td>
    		<td style="font-weight:bold;text-align:right"><?php echo number_format($totalPayment,2);?></td>
    		<td colspan="2" style="font-weight:bold;text-align:center"></td>
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
    


