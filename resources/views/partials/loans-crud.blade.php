
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addLoanModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Add Loan Application</button>
<button type="button" class="btn btn-primary edit-loan-details" data-toggle="modal" data-target="" data-whatever="@fat"><i class="nav-icon icon-pencil"></i> Edit Loan Application</button>
<button type="button" class="btn btn-info" style="color: #fff;" data-toggle="modal" data-target="#releaseLoanModal" data-whatever="@getbootstrap"><i class="nav-icon icon-list"></i> Loan Releases</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="nav-icon icon-wrench"></i> Deactivate Loan Application</button>
<button type="button" class="btn btn-warning pull-right" style="color: #fff;" data-toggle="modal" data-target="#searchLoanModal" data-whatever="@getbootstrap"><i class="nav-icon icon-magnifier"></i> Advance Search</button>         
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
            <table class="table table-striped table-bordered datatable dataTable no-footer table-loans-content" id="DataTables_Table_0 loans-tbl-id" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th >#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;text-align:right; border-right-style: none !important;">Amortization </th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;text-align:left; border-left-style: none !important;">Action</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 121px;">First Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 45px;">Last Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">Loan Application</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">Date of Filing Hidden</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 45px;">Date of Filing</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Marital Status: activate to sort column ascending" style="width: 45px;">Amount Requested</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sex: activate to sort column ascending" style="width: 45px;">Terms (Month)</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Home Address: activate to sort column ascending" style="width: 45px;">Type of Loan</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Mode of Payment</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Member in good standing?</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Member type</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Amount Granted</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Interest</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Service Fee</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">CLPP Insurance</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Filing fee</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Notarial fee</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Life Insurance</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">CBU</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Coop savings</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Loan balance</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Other</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Total Deduction</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Net Proceed</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Amortization</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Starting on</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Aging</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Unit</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Computed by</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Certified correct</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Approval status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Loan status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Date Paid</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Member ID Hidden</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Co-member ID Hidden</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Member Status Hidden</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Starting On Hidden</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Mode Payment Hidden</th>
                  <th style="display:none;" class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="loan Status: activate to sort column ascending" style="width: 45px;">Amortization Hidden</th>
                  
                </tr>
              </thead>
              <tbody>
               @foreach ($loans as $loan)
                  <tr class="tbl-loans-row">
                      <td><input type='checkbox' style='width:30px; height:20px;' class='loan-id-checkbox' id='loan-id-checkbox' value="{{ $loan->id }}"></td>
                      <td style="display: none;">{{ $loan->id }}</td>
                      <td ><a href="#" class="btn btn-square btn-success generate {{ $loan->amortization_status == true ? 'disabled':'' }}" onclick="generateSchedule( {{ $loan->id }}, '{{ $loan->loan_type }}' )"><i class="nav-icon icon-plus"></i> Generate </a></td>
                      <td ><a href="{{ url('/show-amortization').'/'.$loan->id }}" target="__blank" class="btn btn-square btn-primary btn-showAmort {{ $loan->amortization_status == true ? '':'disabled' }}" ><i class="nav-icon icon-eye"></i> Show </a></td>
                      <td >{{ $loan->member->fname }}</td>
                      <td >{{ $loan->member->lname }}</td>
                      <td >{{ $loan->loan_application }}</td>
                      <td style="display:none;">{{ $loan->date_filed }}</td>
                      <td >{{ date("F j, Y", strtotime( $loan->date_filed )) }}</td>
                      <td >{{ $loan->amount_requested }}</td>
                      <td >{{ $loan->terms }}</td>
                      <td >{{ $loan->loan_type }}</td>
                      <td >{{ $basemodels[$loan->mode_payment] }}</td>
                      <td >{{ $loan->member_status == "true" ? "Yes":"No" }}</td>
                      <td >{{ $loan->member_type }}</td>
                      <td >{{ $loan->amount_granted }}</td>
                      <td >{{ $loan->interest }}</td>
                      <td >{{ $loan->service_fee }}</td>
                      <td >{{ $loan->clpp_insurance }}</td>
                      <td >{{ $loan->filling_fee }}</td>
                      <td >{{ $loan->notarial_fee }}</td>
                      <td >{{ $loan->life_insurance }}</td>
                      <td >{{ $loan->cbu }}</td>
                      <td >{{ $loan->savings }}</td>
                      <td >{{ $loan->loan_balance }}</td>
                      <td >{{ $loan->other }}</td>
                      <td >{{ $loan->total_deduction }}</td>
                      <td >{{ $loan->net_proceed }}</td>
                      <td style="color:#fff; text-align:center; background-color:#3276b1;">{{ number_format( $loan->amortization, 2 ) }}</td>
                      <td >{{ $loan->starting_on == "" ? "" : date("F j, Y", strtotime( $loan->starting_on )) }}</td>
                      <?php
                        $date1 = date_create();
                        $date2 = date_create($loan->starting_on);
                        $diff  = date_diff($date1,$date2);
                      ?>
                      <td style="color:#fff; text-align:center; background-color:#25A602;">{{ ( $date1 < $date2 ) ? $diff->format("0 days") : $diff->format("%a days") }}</td>
                      <td >{{ $loan->unit }}</td>
                      <td >{{ $loan->computed_by }}</td>
                      <td >{{ $loan->certified_correct }}</td>
                      <td style="text-align:center;">
                      <form class="approval-switch" id="approval-switch" method="POST" enctype="multipart/form-data">
                      {{ csrf_field() }}
                        <label class="switch switch-pill switch-label switch-outline-primary-alt">
                          <input type="checkbox" class="switch-input loan-approval-1" value="{{ $loan->id }}" <?php echo ($loan->approval_status == true ) ? "checked" : ""; ?>>
                          <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
                        </label>
                      </form>
                      </td>
                      <td style="<?php echo $loan->loan_status == TRUE ? 'background-color: #25A602; color:#fff' : 'background-color: #DC143C; color:#fff'; ?>">{{ $loan->loan_status == TRUE ? "Fully paid" : "Not fully paid" }}</td>
                      <td >{{ $loan->date_paid }}</td>
                      <td style="display:none;">{{ $loan->member_id }}</td>
                      <td style="display:none;">{{ $loan->co_maker_member_id }}</td>
                      <td style="display:none;">{{ $loan->member_status == "true" ? "1":"0" }}</td>
                      <td style="display:none;">{{ $loan->starting_on }}</td>
                      <td style="display:none;">{{ $loan->mode_payment }}</td>
                      <td style="display:none;">{{ $loan->amortization }}</td>
                                           
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

