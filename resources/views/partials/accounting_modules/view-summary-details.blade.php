<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
	
	table.table-borderless td,table.table-borderless th{
     border: none !important;
     margin:2px;
    }

</style>

<?php 

$income_lending 		= 0;
$income_labor 		= 0;
$income_trucking 		= 0;
$income_micro_finance 	= 0;
$income_oil 		= 0;

$expense_lending 		= 0;
$expense_labor 		= 0;
$expense_trucking 	= 0;
$expense_micro_finance 	= 0;
$expense_oil 		= 0;

$net_lending 		= 0;
$net_labor 			= 0;
$net_trucking 		= 0;
$net_micro_finance 	= 0;
$net_oil 			= 0;

$lending_sales = 0;
$lending_dl    = 0;
$lending_efb   = 0;
$lending_ii    = 0;
$lending_sfee  = 0;
$lending_misc  = 0;
$lending_ci    = 0;

$labor_sales = 0;
$labor_dl    = 0;
$labor_efb   = 0;
$labor_ii    = 0;
$labor_sfee  = 0;
$labor_misc  = 0;
$labor_ci    = 0;

$micro_finance_sales = 0;
$micro_finance_dl    = 0;
$micro_finance_efb   = 0;
$micro_finance_ii    = 0;
$micro_finance_sfee  = 0;
$micro_finance_misc  = 0;
$micro_finance_ci    = 0;

$oil_sales = 0;
$oil_dl    = 0;
$oil_efb   = 0;
$oil_ii    = 0;
$oil_sfee  = 0;
$oil_misc  = 0;
$oil_ci    = 0;

$trucking_sales = 0;
$trucking_dl    = 0;
$trucking_efb   = 0;
$trucking_ii    = 0;
$trucking_sfee  = 0;
$trucking_misc  = 0;
$trucking_ci    = 0;


$lending_pur    = 0; 
$lending_diesel = 0; 
$lending_ticket = 0; 
$lending_lw     = 0; 
$lending_os     = 0;  
$lending_rm     = 0;  
$lending_ga     = 0; 
$lending_re     = 0; 
$lending_sw     = 0; 
$lending_ma     = 0; 
$lending_ta     = 0; 
$lending_pc     = 0; 
$lending_repa   = 0; 
$lending_oh     = 0; 
$lending_me     = 0; 
$lending_js     = 0; 
$lending_ss     = 0; 
$lending_mcdc   = 0; 
$lending_ds     = 0; 
$lending_sss    = 0; 
$lending_hdmf   = 0; 
$lending_phil   = 0; 
$lending_empb1  = 0; 
$lending_empb2  = 0; 
$lending_pl     = 0;

$labor_pur    = 0; 
$labor_diesel = 0; 
$labor_ticket = 0; 
$labor_lw     = 0; 
$labor_os     = 0;  
$labor_rm     = 0;  
$labor_ga     = 0; 
$labor_re     = 0; 
$labor_sw     = 0; 
$labor_ma     = 0; 
$labor_ta     = 0; 
$labor_pc     = 0; 
$labor_repa   = 0; 
$labor_oh     = 0; 
$labor_me     = 0; 
$labor_js     = 0; 
$labor_ss     = 0; 
$labor_mcdc   = 0; 
$labor_ds     = 0; 
$labor_sss    = 0; 
$labor_hdmf   = 0; 
$labor_phil   = 0; 
$labor_empb1  = 0; 
$labor_empb2  = 0; 
$labor_pl     = 0; 

$micro_finance_pur    = 0; 
$micro_finance_diesel = 0; 
$micro_finance_ticket = 0; 
$micro_finance_lw     = 0; 
$micro_finance_os     = 0;  
$micro_finance_rm     = 0;  
$micro_finance_ga     = 0; 
$micro_finance_re     = 0; 
$micro_finance_sw     = 0; 
$micro_finance_ma     = 0; 
$micro_finance_ta     = 0; 
$micro_finance_pc     = 0; 
$micro_finance_repa   = 0; 
$micro_finance_oh     = 0; 
$micro_finance_me     = 0; 
$micro_finance_js     = 0; 
$micro_finance_ss     = 0; 
$micro_finance_mcdc   = 0; 
$micro_finance_ds     = 0; 
$micro_finance_sss    = 0; 
$micro_finance_hdmf   = 0; 
$micro_finance_phil   = 0; 
$micro_finance_empb1  = 0; 
$micro_finance_empb2  = 0; 
$micro_finance_pl     = 0; 

$oil_pur    = 0; 
$oil_diesel = 0; 
$oil_ticket = 0; 
$oil_lw     = 0; 
$oil_os     = 0;  
$oil_rm     = 0;  
$oil_ga     = 0; 
$oil_re     = 0; 
$oil_sw     = 0; 
$oil_ma     = 0; 
$oil_ta     = 0; 
$oil_pc     = 0; 
$oil_repa   = 0; 
$oil_oh     = 0; 
$oil_me     = 0; 
$oil_js     = 0; 
$oil_ss     = 0; 
$oil_mcdc   = 0; 
$oil_ds     = 0; 
$oil_sss    = 0; 
$oil_hdmf   = 0; 
$oil_phil   = 0; 
$oil_empb1  = 0; 
$oil_empb2  = 0; 
$oil_pl     = 0;

$trucking_pur    = 0; 
$trucking_diesel = 0; 
$trucking_ticket = 0; 
$trucking_lw     = 0; 
$trucking_os     = 0;  
$trucking_rm     = 0;  
$trucking_ga     = 0; 
$trucking_re     = 0; 
$trucking_sw     = 0; 
$trucking_ma     = 0; 
$trucking_ta     = 0; 
$trucking_pc     = 0; 
$trucking_repa   = 0; 
$trucking_oh     = 0; 
$trucking_me     = 0; 
$trucking_js     = 0; 
$trucking_ss     = 0; 
$trucking_mcdc   = 0; 
$trucking_ds     = 0; 
$trucking_sss    = 0; 
$trucking_hdmf   = 0; 
$trucking_phil   = 0; 
$trucking_empb1  = 0; 
$trucking_empb2  = 0; 
$trucking_pl     = 0; 


?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>INCOME STATEMENT</p><p>CONSOLIDATED INCOME</p><p>FOR THE MONTH OF {{ strtoupper(date("F", mktime(0, 0, 0, $period_str[0], 10))).' '.$period_str[1] }}</p></th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
	<thead>
		<tr style="text-align:center;">
	      <th></th>
	      <th style="text-align:center">LENDING</th>
	      <th style="text-align:center">LABOR SERVICES</th>
	      <th style="text-align:center">MICRO FINANCE</th>
	      <th style="text-align:center">C-OIL</th>
	      <th style="text-align:center">TRUCKING</th>
	    </tr>
	</thead>
	<tbody>   	 
       	<tr>
       		<td>SALES</td>
       		<?php foreach($summaryDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_sales        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_sales          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_sales  = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_sales            = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_sales       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>DIRECT LABOR</td>
       		<?php foreach($laborDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_dl         = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_dl           = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_dl   = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_dl             = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_dl        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>EFB/FFB</td>
       		<?php foreach($truckingDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_efb        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_efb          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_efb  = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_sales          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_efb       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>INTEREST INCOME</td>
       		<?php foreach($interestincomeDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ii        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ii          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_ii  = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ii            = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ii       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>SFEE</td>
       		<?php foreach($sfeeDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_sfee       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_sfee         = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_sfee = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_sfee           = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_sfee      = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>MISC</td>
       		<?php foreach($miscDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_misc        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_misc          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_misc  = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_misc            = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_misc       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>COMMISSION INC.</td>
       		<?php foreach($commissionDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ci        = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ci          = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_finance_ci  = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ci            = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ci       = $details->tot_debit - $details->tot_credit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td style="font-weight:bold;color:green">GROSS INCOME</td>
       		<td style="text-align:right">{{ $income_lending       = $lending_sales + $lending_dl + $lending_efb + $lending_ii + $lending_sfee + $lending_misc + $lending_ci}}</td>
       		<td style="text-align:right">{{ $income_labor         = $labor_sales + $labor_dl + $labor_efb + $labor_ii + $labor_sfee + $labor_misc + $labor_ci }}</td>
       		<td style="text-align:right">{{ $income_micro_finance = $micro_finance_sales + $micro_finance_dl + $micro_finance_efb + $micro_finance_ii + $micro_finance_sfee + $micro_finance_misc + $micro_finance_ci }}</td>
       		<td style="text-align:right">{{ $income_oil           = $oil_sales + $oil_dl + $oil_efb + $oil_ii + $oil_sfee + $oil_misc + $oil_ci  }}</td>
       		<td style="text-align:right">{{ $income_trucking      = $trucking_sales + $trucking_dl + $trucking_efb + $trucking_ii + $trucking_sfee + $trucking_misc + $trucking_ci  }}</td>
       	 </tr> 
       	 <tr>
       		<td style="font-weight:bold;">LESS: EXPENSES</td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       	 </tr>
       	 <tr>
       		<td>PURCHASES</td>
       		<?php foreach($purchasesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_pur        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_pur          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_pur          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_pur            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_pur       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>DIESEL</td>
       		<?php foreach($dieselDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_diesel        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_diesel          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_diesel          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_diesel            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_diesel       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>TICKET</td>
       		<?php foreach($ticketDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ticket        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ticket          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ticket          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ticket            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ticket       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       
       	 </tr>
       	 <tr>
       		<td>LIGHT & WATER EXPENSE</td>
       		<?php foreach($lightwaterDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_lw         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_lw           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_lw           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_lw             = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_lw        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>OFFICE SUPPLIES</td>
       		<?php foreach($officesuppliesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_os        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_os          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_os          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_os            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_os       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>REPAIR & MAINTENANCE</td>
       		<?php foreach($repairmaintenanceDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_rm     = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_rm       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_rm       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_rm         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_rm    = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>GASOLINE ALLOWANCE</td>
       		<?php foreach($gasolineallowanceDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ga      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ga        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ga        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ga          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ga     = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>RENT EXPENSE</td>
       		<?php foreach($rentExpenseDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_re       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_re         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_re         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_re           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_re      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>SALARIES & WAGES</td>
       		<?php foreach($salarieswagesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_sw       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_sw         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_sw         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_sw           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_sw      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>MEAL ALLOWANCE</td>
       		<?php foreach($mealallowanceDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ma       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ma         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ma         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ma           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ma      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>TRAVEL ALLOWANCE</td>
       		<?php foreach($travelallowanceDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ta        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ta          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ta          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ta            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ta       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>POSTAGE COMMUNICATION</td>
       		<?php foreach($postagecommunicationDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_pc        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_pc          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_pc          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_pc            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_pc       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>REPRESENTATION ALLOWANCE</td>
       		<?php foreach($representationallowanceDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_repa        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_repa          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_repa          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_repa            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_repa       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>OFFICE HONORARIUM</td>
       		<?php foreach($officerhonorariumDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_oh        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_oh          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_oh          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_oh            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_oh       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>MEETING EXPENSES</td>
       		<?php foreach($meetingexpenseDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_me        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_me          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_me          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_me            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_me       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>JANITORIAL SERVICES</td>
       		<?php foreach($janitorialservicesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_js        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_js          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_js          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_js            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_js       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>SECURITY SERVICES</td>
       		<?php foreach($securityservicesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ss        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ss          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ss          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ss            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ss       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>MCDC MONTHLY DUES</td>
       		<?php foreach($mcdcmonthlyduesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_mcdc        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_mcdc          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_mcdc          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_mcdc            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_mcdc       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>DONATIONS & SOLICITATIONS</td>
       		<?php foreach($donationssolicitationsDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_ds        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_ds          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_ds          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_ds            = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_ds       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>SSS CONTRIBUTION</td>
       		<?php foreach($ssscontributionDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_sss       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_sss         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_sss         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_sss           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_sss      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>HDMF CONTRIBUTION</td>
       		<?php foreach($hdmfcontributionDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_hdmf       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_hdmf         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_hdmf         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_hdmf           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_hdmf      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>PHILHEALTH CONTRIBUTION</td>
       		<?php foreach($philhealthcontributionDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_phil       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_phil         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_phil         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_phil           = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_phil      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	 <tr>
       		<td>EMPLOYEES BENEFITS(SL/VL/13TH)</td>
       		<?php foreach($benefits1Details as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_empb1      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_empb1        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_empb1        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_empb1          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_empb1     = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	  <tr>
       		<td>EMPLOYEES BENEFITS PPE</td>
       		<?php foreach($benefits2Details as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_empb2      = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_empb2        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_empb2        = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_empb2          = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_empb2     = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	  <tr>
       		<td>PERMIT & LICENCES</td>
       		<?php foreach($permitlicencesDetails as $details){?>
       		<td style="text-align:right">{{ $details->product_service == 'Lending'?        $lending_pl     = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Labor Services'? $labor_pl       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Micro Finance'?  $micro_pl       = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Oil'?            $oil_pl         = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<td style="text-align:right">{{ $details->product_service == 'Trucking'?       $trucking_pl    = $details->tot_credit - $details->tot_debit:0 }}</td>
       		<?php }?>
       	 </tr>
       	  <tr>
       		<td style="font-weight:bold;color:red">TOTAL EXPENSES</td>
       		<td style="text-align:right">
       		{{  
       		    $expense_lending =
       			$lending_pur + 
			    $lending_diesel + 
				$lending_ticket + 
				$lending_lw + 
				$lending_os + 
				$lending_rm + 
				$lending_ga +
				$lending_re +
				$lending_sw +
				$lending_ma +
				$lending_ta +
				$lending_pc +
				$lending_repa +
				$lending_oh +
				$lending_me +
				$lending_js +
				$lending_ss +
				$lending_mcdc +
				$lending_ds +
				$lending_sss +
				$lending_hdmf +
				$lending_phil +
				$lending_empb1 +
				$lending_empb2 +
				$lending_pl
			 }}
       		</td>
       		<td style="text-align:right">
       		{{  
       			$expense_labor =
       			$labor_pur + 
			    $labor_diesel + 
				$labor_ticket + 
				$labor_lw + 
				$labor_os + 
				$labor_rm + 
				$labor_ga +
				$labor_re +
				$labor_sw +
				$labor_ma +
				$labor_ta +
				$labor_pc +
				$labor_repa +
				$labor_oh +
				$labor_me +
				$labor_js +
				$labor_ss +
				$labor_mcdc +
				$labor_ds +
				$labor_sss +
				$labor_hdmf +
				$labor_phil +
				$labor_empb1 +
				$labor_empb2 +
				$labor_pl
			 }}
       		</td>
       		<td style="text-align:right">
       		{{  
       			$expense_micro_finance =
       			$micro_finance_pur + 
			    $micro_finance_diesel + 
				$micro_finance_ticket + 
				$micro_finance_lw + 
				$micro_finance_os + 
				$micro_finance_rm + 
				$micro_finance_ga +
				$micro_finance_re +
				$micro_finance_sw +
				$micro_finance_ma +
				$micro_finance_ta +
				$micro_finance_pc +
				$micro_finance_repa +
				$micro_finance_oh +
				$micro_finance_me +
				$micro_finance_js +
				$micro_finance_ss +
				$micro_finance_mcdc +
				$micro_finance_ds +
				$micro_finance_sss +
				$micro_finance_hdmf +
				$micro_finance_phil +
				$micro_finance_empb1 +
				$micro_finance_empb2 +
				$micro_finance_pl
			 }}
       		</td>
       		<td style="text-align:right">
       		{{  
       			$expense_oil =
       			$oil_pur + 
			    $oil_diesel + 
				$oil_ticket + 
				$oil_lw + 
				$oil_os + 
				$oil_rm + 
				$oil_ga +
				$oil_re +
				$oil_sw +
				$oil_ma +
				$oil_ta +
				$oil_pc +
				$oil_repa +
				$oil_oh +
				$oil_me +
				$oil_js +
				$oil_ss +
				$oil_mcdc +
				$oil_ds +
				$oil_sss +
				$oil_hdmf +
				$oil_phil +
				$oil_empb1 +
				$oil_empb2 +
				$oil_pl
			 }}
       		</td>
       		<td style="text-align:right">
       		{{  
       			$expense_trucking =
       			$trucking_pur + 
			    $trucking_diesel + 
				$trucking_ticket + 
				$trucking_lw + 
				$trucking_os + 
				$trucking_rm + 
				$trucking_ga +
				$trucking_re +
				$trucking_sw +
				$trucking_ma +
				$trucking_ta +
				$trucking_pc +
				$trucking_repa +
				$trucking_oh +
				$trucking_me +
				$trucking_js +
				$trucking_ss +
				$trucking_mcdc +
				$trucking_ds +
				$trucking_sss +
				$trucking_hdmf +
				$trucking_phil +
				$trucking_empb1 +
				$trucking_empb2 +
				$trucking_pl
			 }}
       		</td>
       	 </tr>
       	  <tr>
       		<td style="font-weight:bold;color:green">NET SURPLUS(LOSS)</td>
       		<td style="text-align:right">{{ $net_lending  = $income_lending  - $expense_lending}}</td>
       		<td style="text-align:right">{{ $net_labor    = $income_labor    - $expense_labor}}</td>
       		<td style="text-align:right">{{ $net_micro_finance = $income_micro_finance - $expense_micro_finance}}</td>
       		<td style="text-align:right">{{ $net_oil      = $income_oil      - $expense_oil}}</td>
       		<td style="text-align:right">{{ $net_trucking = $income_trucking - $expense_trucking}}</td>
       	 </tr>
       	  <tr>
       		<td style="font-weight:bold;color:green">TOTAL NET SURPLUS</td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right"></td>
       		<td style="text-align:right">{{ $net_lending + $net_labor + $net_micro_finance + $net_oil + $net_trucking}}</td>
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
	     <td>MARGIE L.SEPRADO</td>
	     <td>JOSEPHINE B. PALEN</td>
	    </tr>
	    <tr>
	     <td>BOOKKEEPER</td>
	     <td>MANAGER</td>
	    </tr>
	 </tbody>
 </table>
    


