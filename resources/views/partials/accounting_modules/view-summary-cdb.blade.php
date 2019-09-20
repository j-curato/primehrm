<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
  
  table.table-borderless td,table.table-borderless th{
     border: none !important;
     margin:2px;
    }

</style>
<?php

$cash_hand      = 0;
$cash_bank      = 0;
$lr             = 0;
$interest       = 0;
$cash_advance   = 0;
$cbu            = 0;
$due_labor      = 0;
$lr_sss         = 0;
$due_fppi       = 0;
$ffb_rfb        = 0;
$h_tools        = 0;
$hdmf_lr        = 0;
$sss_lr         = 0;
$ap_elect       = 0;
$phic_ap        = 0;
$hdmf_ap        = 0;
$sss_ap         = 0;

?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>CDB</p><p>FOR THE MONTH OF {{ strtoupper(date("F", mktime(0, 0, 0, $period_str[0], 10))).' '.$period_str[1] }}</p></th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
  <thead>
    <tr style="text-align:center;">
        <th style="text-align:center">DATE</th>
        <th style="text-align:center">PARTICULARS</th>
        <th style="text-align:center">CV #</th>
        <th style="text-align:center">CASH IN BANK</th>
        <th colspan = "2" style="text-align:center">SALARY LOAN</th>
        <th colspan = "2" style="text-align:center">EL/ EDUC LOAN</th>
        <th colspan = "2" style="text-align:center">CASH ADVANCE</th>
        <th style="text-align:center">INTEREST INCOME</th>
        <th style="text-align:center">SFEE</th>
        <th style="text-align:center">MISC</th>
        <th style="text-align:center">CBU</th>
        <th colspan = "2" style="text-align:center">LOAN INSURANCE</th>
        <th colspan = "2" style="text-align:center">LIFE INSURANCE</th>
        <th colspan = "2" style="text-align:center">DIRECT LABOR</th>
        <th colspan = "2" style="text-align:center">SSS PAYABLE</th>
        <th colspan = "2" style="text-align:center">PHIC PAYABLE</th>
        <th colspan = "2" style="text-align:center">HDMF PAYABLE</th>
        <th colspan = "2" style="text-align:center">SSS LOAN PAYABLE</th>
        <th colspan = "2" style="text-align:center">CALAMITY LOAN PAYABLE</th>
        <th colspan = "2" style="text-align:center">A/P OMCW</th>
        <th colspan = "2" style="text-align:center">A/P ELECT</th>
        <th colspan = "2" style="text-align:center">A/P OIL</th>
        <th colspan = "2" style="text-align:center">H TOOLS</th>
        <th style="text-align:center">L/R SSS</th>
        <th style="text-align:center">DUE TO FPPI</th>
        <th style="text-align:center">FFB/RFB</th>
        <th style="text-align:center">H TOOLS</th>
        <th style="text-align:center">HDMF L/R</th>
        <th style="text-align:center">SSS L/R</th>
        <th style="text-align:center">A/P ELECT </th>
        <th style="text-align:center">PHIC A/P</th>
        <th style="text-align:center">HDMF A/P</th>
        <th style="text-align:center">SSS A/P</th>
      </tr>
  </thead>
  <tbody>      
        <?php foreach($crbDetails as $details){?>
        <tr> 
          <?php $details->particular == 'Cash On Hand' ? $cash_hand += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Cash In Bank' ? $cash_bank += $details->tot_debit - $details->tot_credit:0 ?> 
          <?php $details->particular == 'L/R' ? $lr += $details->tot_debit - $details->tot_credit:0 ?>  
          <?php $details->particular == 'Interest' ? $interest += $details->tot_debit - $details->tot_credit:0 ?>     
          <?php $details->particular == 'Cash Advance' ? $cash_advance += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'CBU' ? $cbu += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Due to Labor' ? $due_labor += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'L/R SSS' ? $lr_sss += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Due to FPPI' ?  $due_fppi     += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'FFB/RFB' ? $ffb_rfb += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'H Tools' ? $h_tools += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'HDMF L/R' ? $hdmf_lr += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'SSS L/R' ? $sss_lr += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'A/P Elect' ? $ap_elect += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'PHIC A/P' ? $phic_ap += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'HDMF A/P' ? $hdmf_ap += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'SSS A/P' ? $sss_ap += $details->tot_debit - $details->tot_credit:0 ?>
          
          <td>{{ $details->transaction_date }}</td>
          <td>{{ $details->payee_name }}</td>
          <td>{{ $details->voucher_number }}</td>
          <td>{{ $details->particular == 'Cash On Hand' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Cash On Hand' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Cash In Bank' ?  number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'L/R' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Interest' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Cash Advance' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'CBU' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Due to Labor' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'L/R SSS' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Due to FPPI' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'FFB/RFB' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'H Tools' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'HDMF L/R' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'SSS L/R' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'A/P Elect' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'PHIC A/P' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'HDMF A/P' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'SSS A/P' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
        </tr>
        <?php }?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>{{ number_format($cash_hand,2) }}</td>
          <td>{{ number_format($cash_hand,2) }}</td>
          <td>{{ number_format($cash_bank,2) }}</td>
          <td>{{ number_format($lr,2) }}</td>
          <td>{{ number_format($interest,2) }}</td>
          <td>{{ number_format($cash_advance,2) }}</td>
          <td>{{ number_format($cbu,2) }}</td>
          <td>{{ number_format($due_labor,2) }}</td>
          <td>{{ number_format($lr_sss,2) }}</td>
          <td>{{ number_format($due_fppi,2) }}</td>
          <td>{{ number_format($ffb_rfb,2) }}</td>
          <td>{{ number_format($h_tools,2) }}</td>
          <td>{{ number_format($hdmf_lr,2) }}</td>
          <td>{{ number_format($sss_lr,2) }}</td>
          <td>{{ number_format($ap_elect,2) }}</td>
          <td>{{ number_format($phic_ap,2) }}</td>
          <td>{{ number_format($hdmf_ap,2) }}</td>
          <td>{{ number_format($sss_ap,2) }}</td>
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
    


