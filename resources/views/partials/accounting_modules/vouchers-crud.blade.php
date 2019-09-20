
<button type="button" class="btn btn-success add-journalvouchers-details" data-toggle="modal" data-target="#addJournalvoucherModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Add Voucher</button>
<button type="button" class="btn btn-primary edit-journalvouchers-details" data-toggle="modal" data-target="" data-whatever="@fat"><i class="nav-icon icon-pencil"></i> Edit Voucher</button>
<button type="button" class="btn btn-primary summary-details" data-toggle="modal" data-target="#showSummaryModal" data-whatever="@fat"><i class="nav-icon icon-list"></i> Summary Report</button>
<button type="button" class="btn btn-danger  deactivate-vouchers" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="nav-icon icon-wrench"></i> Deactivate Voucher</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Voucher Transaction List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-journalvouchers-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th style="width: 45px;">#</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 30px;">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Journal Number: activate to sort column ascending" style="width: 90px;">Voucher Number</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Voucher Type: activate to sort column ascending" style="width: 90px;">Voucher Type</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payee Name: activate to sort column ascending" style="width: 121px;">Payee Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 45px;">Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Transaction Date: activate to sort column ascending" style="width: 90px;">Transaction Date</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product/Service: activate to sort column ascending" style="width: 20px;">Product/Service</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Particular: activate to sort column ascending" style="width: 20px;">Particular</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Debit: activate to sort column ascending" style="width: 45px;">Debit</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Credit: activate to sort column ascending" style="width: 45px;">Credit</th> 
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 45px;">Status</th> 
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Remarks: activate to sort column ascending" style="width: 45px;">Remarks</th>
              </thead>
              <tbody>
               @foreach ($vouchers as $voucher)
                  <tr class="tbl-journalvouchers-row"> 
                      <td><input type='checkbox' style='width:30px; height:20px;' class='journalvoucher-id-checkbox' id='journalvoucher-id-checkbox' value="{{ $voucher->id }}"></td>
                      <td >{{ $voucher->id }}</td>
                      <td >{{ $voucher->voucher_number }}</td>
                      <td >{{ $voucher->voucher_type }}</td>
                      <td >{{ $voucher->payee_name }}</td>
                      <td >{{ $voucher->address }}</td>
                      <td >{{ $voucher->transaction_date }}</td>
                      <td >{{ $voucher->product_service }}</td>
                      <td >{{ $voucher->particular }}</td>
                      <td >{{ $voucher->debit }}</td>
                      <td >{{ $voucher->credit }}</td>
                      <td ><?php if($voucher->status==1){ ?><span class="badge badge-success">Active</span> <?php } else {?><span class="badge badge-danger">Inactive</span></td><?php }?></td>
                      <td >{{ $voucher->remarks }}</td>        
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

