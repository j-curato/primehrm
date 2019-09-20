<div class="row">
<div class="col-sm-12">
<div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
<table class="table table-striped table-bordered datatable dataTable no-footer table-loans-content" id="DataTables_Table_0 loans-tbl-id" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
    <thead>
    <tr role="row">
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 121px;">First Name</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 45px;">Last Name</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 45px;">Date of Filing</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Marital Status: activate to sort column ascending" style="width: 45px;">Amount Requested</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sex: activate to sort column ascending" style="width: 45px;">Terms (Month)</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Home Address: activate to sort column ascending" style="width: 45px;">Type of Loan</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Mode of Payment</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Amount Granted</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Interest</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Loan balance</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Total Deduction</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Net Proceed</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Amortization</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Starting on</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Aging</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Loan status</th>
      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Date Paid</th>
    </tr>
  </thead>
  <tbody>
   @foreach ($loans as $loan)
      <tr class="tbl-loans-row">
		  <td >{{ $loan->fname }}</td>
          <td >{{ $loan->lname }}</td>
          <td >{{ date("F j, Y", strtotime( $loan->date_filed )) }}</td>
          <td >{{ number_format($loan->amount_requested,2) }}</td>
          <td >{{ $loan->terms }}</td>
          <td >{{ $loan->loan_type }}</td>
          <td >{{ $basemodels[$loan->mode_payment] }}</td>
          <td >{{ number_format($loan->amount_granted,2) }}</td>
          <td >{{ number_format($loan->interest,2) }}</td>
          <td >{{ number_format($loan->loan_balance,2) }}</td>
          <td >{{ number_format($loan->total_deduction,2) }}</td>
          <td >{{ number_format($loan->net_proceed,2) }}</td>
          <td style="color:#fff; text-align:center; background-color:#3276b1;">{{ number_format( $loan->amortization, 2 ) }}</td>
          <td >{{ $loan->starting_on == "" ? "" : date("F j, Y", strtotime( $loan->starting_on )) }}</td>
                      <?php
                        $date1 = date_create();
                        $date2 = date_create($loan->starting_on);
                        $diff  = date_diff($date1,$date2);
                      ?>
                      <td style="color:#fff; text-align:center; background-color:#25A602;">{{ ( $date1 < $date2 ) ? $diff->format("0 days") : $diff->format("%a days") }}</td>
          <td >{{ $loan->loan_status }}</td>
          <td >{{ $loan->date_paid }}</td>  
      </tr>
  @endforeach 
  </tbody>
</table>
</div>
</div>
</div>