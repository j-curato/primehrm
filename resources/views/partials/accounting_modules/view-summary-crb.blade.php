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
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>CRB</p><p>FOR THE MONTH OF {{ strtoupper(date("F", mktime(0, 0, 0, $period_str[0], 10))).' '.$period_str[1] }}</p></th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
  <thead>
    <tr style="text-align:center;">
        <th style="text-align:center">DATE</th>
        <th style="text-align:center">PARTICULARS</th>
        <th style="text-align:center">OR #</th>
        <th colspan = "2" style="text-align:center">CASH ON HAND</th>
        <th style="text-align:center">CASH IN BANK</th>
        <th style="text-align:center">L/R</th>
        <th style="text-align:center">INTEREST</th>
        <th style="text-align:center">CASH ADVANCE</th>
        <th style="text-align:center">CBU</th>
        <th style="text-align:center">DUE TO LABOR</th>
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
          <td></td>
          <td></td>
          <td></td>
          <td>{{ $details->cash_on_hand }}</td>
          <td></td>
          <td>{{ $details->cash_in_bank }}</td>
          <td>{{ $details->lr }}</td>
          <td>{{ $details->interest }}</td>
          <td>{{ $details->cash_advance }}</td>
          <td>{{ $details->cbu }}</td>
          <td>{{ $details->due_labor }}</td>
          <td>{{ $details->lr_sss }}</td>
          <td>{{ $details->due_ffpi }}</td>
          <td>{{ $details->ffb_rfb }}</td>
          <td>{{ $details->htools }}</td>
          <td>{{ $details->hdmf_lr }}</td>
          <td>{{ $details->sss_lr }}</td>
          <td>{{ $details->ap_elect }}</td>
          <td>{{ $details->phic_ap }}</td>
          <td>{{ $details->sss_ap }}</td>
        </tr>
        <?php }?>
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
    


