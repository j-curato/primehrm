<link href="{{ url('assets/css/bootstrap.css') }}" rel="stylesheet">

<style type="text/css">
  
  table.table-borderless td,table.table-borderless th{
     border: none !important;
     margin:2px;
    }

</style>
<?php
$cash_advance       = 0;
$due_fppi           = 0;
$separation_pay     = 0;
$sss                = 0;
$due_employee       = 0;
$due_labor          = 0;
$diez               = 0;
$pongase            = 0;
$daguman            = 0;
$tolentino          = 0;
$rdadios            = 0;
$stravero           = 0;
$ar_tools           = 0;
$employee_ben       = 0;
$employee_ben_ppe   = 0;
$light_expenses     = 0;
$permit_licences    = 0;
$postage            = 0;
$travel             = 0;
$represent          = 0;
$per_diem           = 0;
$security_service   = 0;
$office_supplies    = 0;
$repair_maintenance = 0;
$bod_honorarium     = 0;
$meeting            = 0;
$cash_bank          = 0;
$repair_main_truck  = 0;

?>

<table class="table table-borderless">
    <thead>
        <tr style="text-align:justify;">
            <th><p>FPPI ARB MULTI PURPOSE COOPERATIVE</p><p>JOURNAL</p><p>FOR THE MONTH OF {{ strtoupper(date("F", mktime(0, 0, 0, $period_str[0], 10))).' '.$period_str[1] }}</p></th>
        </tr>
    </thead>        
</table>
<table class="table table-bordered">
  <thead>
    <tr style="text-align:center;">
        <th style="text-align:center">DATE</th>
        <th style="text-align:center">PARTICULARS</th>
        <th style="text-align:center">JV #</th>
        <th style="text-align:center">CASH ADVANCE</th>
        <th style="text-align:center">DUE TO FPPI</th>
        <th style="text-align:center">SEPARATION PAY</th>
        <th style="text-align:center">SSS/SICKNESS</th>
        <th style="text-align:center">DUE TO EMPLOYEE</th>
        <th style="text-align:center">DUE TO LABOR</th>
        <th style="text-align:center">DIEZ</th>
        <th style="text-align:center">PONGASE</th>
        <th style="text-align:center">DAGUMAN</th>
        <th style="text-align:center">TOLENTINO</th>
        <th style="text-align:center">R DADIOS</th>
        <th style="text-align:center">S. TRAVERO</th>
        <th style="text-align:center">A/R TOOLS</th>
        <th style="text-align:center">EMPLOYEE BEN. SL/VL</th>
        <th style="text-align:center">EMPLOYEE BENEFIT PPE</th>
        <th style="text-align:center">LIGHT EXPENSES</th>
        <th style="text-align:center">PERMIT & LICENCES</th>
        <th style="text-align:center">POSTAGE</th>
        <th style="text-align:center">TRAVEL</th>
        <th style="text-align:center">REPRESENT</th>
        <th style="text-align:center">PER DIEM</th>
        <th style="text-align:center">SECURITY SERVICE</th>
        <th style="text-align:center">OFFICE SUPPLIES</th>
        <th style="text-align:center">REPAIR & MAINTENANCE</th>
        <th style="text-align:center">BOD HONORARIUM</th>
        <th style="text-align:center">MEETING</th>
        <th style="text-align:center">CASH IN BANK</th>
        <th style="text-align:center">REPAIR & MAINTENANCE - TRUCK</th>
      </tr>
  </thead>
  <tbody>      
        <?php foreach($journalDetails as $details){?>
        <tr>         
          <?php $details->particular == 'Cash Advance' ? $cash_advance += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Due to FPPI' ?  $due_fppi     += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Separation Pay' ? $separation_pay += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'SSS' ? $sss += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Due to Employee' ? $due_employee += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Due to Labor' ? $due_labor += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Diez' ? $diez += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Pongase' ? $pongase += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Daguman' ? $daguman += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Tolentino' ? $stravero += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'R Dadios' ? $rdadios += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'S Travero' ? $stravero += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'A/R Tools' ? $ar_tools += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Employee Benefits SL/VL' ? $employee_ben += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Employee Benefits PPE' ? $employee_ben_ppe += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Light Expenses' ? $employee_ben_ppe += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Permit and Licences' ? $permit_licences += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Postage' ? $postage += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Travel' ? $travel += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Represent' ? $represent += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Per Diem' ? $per_diem += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Security Service' ? $security_service += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Office Supplies' ? $office_supplies += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Repair and Maintenance' ? $repair_maintenance += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'BOD Honorarium' ? $bod_honorarium += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Meeting' ? $meeting += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Cash In Bank' ? $cash_bank += $details->tot_debit - $details->tot_credit:0 ?>
          <?php $details->particular == 'Repair and Maintenance - Truck' ? $repair_main_truck += $details->tot_debit - $details->tot_credit:0 ?>

          <td>{{ $details->transaction_date }}</td>
          <td>{{ $details->payee_name }}</td>
          <td>{{ $details->voucher_number }}</td>
          <td>{{ $details->particular == 'Cash Advance' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Due to FPPI' ?  number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Separation Pay' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'SSS' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Due to Employee' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Due to Labor' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Diez' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Pongase' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Daguman' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Tolentino' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'R Dadios' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'S Travero' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'A/R Tools' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Employee Benefits SL/VL' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Employee Benefits PPE' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Light Expenses' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Permit and Licences' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Postage' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Travel' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Represent' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Per Diem' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Security' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Office Supplies' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Repair and Maintenance' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'BOD Honorarium' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Meeting' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Cash In Bank' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
          <td>{{ $details->particular == 'Repair and Maintenance - Truck' ? number_format($details->tot_debit - $details->tot_credit,2):0 }}</td>
        </tr>
        <?php }?>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>{{ number_format($cash_advance,2) }}</td>
          <td>{{ number_format($due_fppi,2) }}</td>
          <td>{{ number_format($separation_pay,2) }}</td>
          <td>{{ number_format($sss,2) }}</td>
          <td>{{ number_format($due_employee,2) }}</td>
          <td>{{ number_format($due_labor,2) }}</td>
          <td>{{ number_format($diez,2) }}</td>
          <td>{{ number_format($pongase,2) }}</td>
          <td>{{ number_format($daguman,2) }}</td>
          <td>{{ number_format($stravero,2) }}</td>
          <td>{{ number_format($rdadios,2) }}</td>
          <td>{{ number_format($stravero,2) }}</td>
          <td>{{ number_format($ar_tools,2) }}</td>
          <td>{{ number_format($employee_ben,2) }}</td>
          <td>{{ number_format($employee_ben_ppe,2) }}</td>
          <td>{{ number_format($light_expenses,2) }}</td>
          <td>{{ number_format($permit_licences,2) }}</td>
          <td>{{ number_format($postage,2) }}</td>
          <td>{{ number_format($travel,2) }}</td>
          <td>{{ number_format($represent,2) }}</td>
          <td>{{ number_format($per_diem,2) }}</td>
          <td>{{ number_format($security_service,2) }}</td>
          <td>{{ number_format($office_supplies,2) }}</td>
          <td>{{ number_format($repair_maintenance,2) }}</td>
          <td>{{ number_format($bod_honorarium,2)  }}</td>
          <td>{{ number_format($meeting,2)  }}</td>
          <td>{{ number_format($cash_bank,2)  }}</td>
          <td>{{ number_format($repair_main_truck,2) }}</td>
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
    


