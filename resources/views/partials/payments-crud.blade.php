
<!--<button type="button" class="btn btn-success add-payments-details" data-toggle="modal" data-target="" data-whatever="@mdo">Enter Payment</button>
<button type="button" class="btn btn-primary edit-loan-details" data-toggle="modal" data-target="" data-whatever="@fat">Edit Payment Application</button>-->
<button type="button" class="btn btn-primary" style="color: #fff;" data-toggle="modal" data-target="#receivedPaymentModal" data-whatever="@getbootstrap">Payment Received</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate Payment Application</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Loan List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-payments-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th style="width: 45px;">#</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 30px;">Loan ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 45px;">Member ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="last Name: activate to sort column ascending" style="width: 121px;">Last Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 45px;">First Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Middle name: activate to sort column ascending" style="width: 45px;">Middle Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 20px;">Ext.</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Loan Type: activate to sort column ascending" style="width: 45px;">Loan Type</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Loan Amount: activate to sort column ascending" style="width: 45px;">Loan Amount</th> 
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Interest: activate to sort column ascending" style="width: 45px;">Interest</th> 
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Amortization: activate to sort column ascending" style="width: 45px;">Amortization</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Balance: activate to sort column ascending" style="width: 45px;">Balance</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 45px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 45px;">Payment History</th>
              </thead>
              <tbody>
               @foreach ($loans as $loan)
                  <tr class="tbl-payments-row"> 
                      <td><input type='checkbox' style='width:30px; height:20px;' class='payment-id-checkbox' id='payment-id-checkbox' value="{{ $loan->id }}"></td>
                      <td >{{ $loan->id }}</td>
                      <td >{{ $loan->member->member_code }}</td>
                      <td >{{ $loan->member->lname }}</td>
                      <td >{{ $loan->member->fname }}</td>
                      <td >{{ $loan->member->mname }}</td>
                      <td >{{ $loan->member->extention }}</td>
                      <td >{{ $loan->loan_type }}</td>
                      <td >{{ number_format($loan->amount_granted,2) }}</td>
                      <td >{{ number_format($loan->interest,2) }}</td>
                      <td >{{ $loan->amortization }}</td>
                      <td >{{ $loan->loan_balance }}</td>
                      <td style="<?php echo $loan->loan_status == TRUE ? 'background-color: #25A602; color:#fff' : 'background-color: #DC143C; color:#fff'; ?>">{{ $loan->loan_status == TRUE ? "Fully paid" : "Not fully paid" }}</td>               
                      <td ><a href="{{ url('/show-payment').'/'.$loan->id }}" target="__blank" class="btn btn-square btn-primary btn-showPaymentHistory" ><i class="nav-icon icon-eye"></i> Payment History </a></td>               
                  </tr>
              @endforeach
              </tbody>
            </table>
            </div>
            </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

