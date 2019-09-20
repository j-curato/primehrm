<button class="btn btn-success btn-ladda-progress" data-style="expand-right">Submit</button>
<button class="btn btn-success btn-ladda" data-style="expand-left">Submit</button>


<div id="ui-view" style="margin-top: 10px">
<div class="row">

  

{{--

  <table>
  
    @foreach($amortizations as $key => $amort)
    <tr>
      <td>{{ $key }}</td>
      <td>-----------------</td>
      <td>{{ $amort->id }}</td>
      <td>-----------------</td>
      <td>{{ $amort->running_balance_counter }}</td>

    </tr>
    @endforeach 
  </table>
  
--}}


</div>
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">

        <div class="card-header"><i class="fa fa-edit"></i> Billing List</div>

          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
              <div class="row">
                <div class="col-sm-12 col-md-6"></div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
                    <table class="table table-striped table-bordered datatable dataTable no-footer table-bills-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                        <thead>
                          <tr role="row">
                            <th style="width: 10px;">#</th>
                            <th style="display: none;">Bill ID</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Period: activate to sort column descending" style="width:2px;">Loan ID</th>
                            <th style="display: none;">member code</th>
                            <th style="display: none;">Amortization ID</th>
                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Period: activate to sort column descending" style="width: 100px;">Bill Period</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee ID: activate to sort column descending" style="width: 2px;">Member Code</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 60px;">LAST NAME</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Middle name: activate to sort column ascending" style="width: 60px;">FIRST NAME</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 60px;">MIDDLE NAME</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">Loan Type</th>
                           
                            
                          </tr>
                        </thead>
                      
                      <tbody>
                         @foreach ($inactive as $key => $bill)
                          <tr class="tbl-bills-row">  
                            <td><input type='checkbox' style='width:30px; height:20px;' class='bill-id-checkbox' id='bill-id-checkbox' value="{{ $bill->id }}" onclick="dateSeqChecker( this, {{ $bill->amortization_id }}, {{ $bill->loan_id }},'{{ $bill->schedule }}' )"></td>
                            <td style="display: none;">{{ $bill->id }}</td>
                            <td>{{ $bill->loan_id }}</td>
                            <td style="display: none;">{{ $bill->member_id }}</td>
                            <td style="display: none;">{{ $bill->amortization_id }}</td>
                            <td >{{ $bill->schedule }}</td>                            
                            <td>{{ $bill->member->member_code }}</td>
                            <td >{{ $bill->member->lname }}</td>
                            <td >{{ $bill->member->fname }}</td>
                            <td >{{ $bill->member->mname }}</td>
                            <td >{{ $bill->loan->loan_type }}</td>           
                      
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
