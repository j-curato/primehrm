<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addBillModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Generate Billing</button>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#showBillModal" data-whatever="@fat"><i class="nav-icon icon-eye icon-align-center"></i> Show Billing</button>
<button type="button" class="btn btn-primary add-payments-details" id="payment-btn" data-toggle="modal" data-target="" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Enter Payment</button>
<button type="button" class="btn btn-primary edit-loan-details" data-toggle="modal" data-target="" data-whatever="@fat"><i class="nav-icon icon-pencil"></i> Edit Payment</button>

<div id="ui-view" style="margin-top: 10px">
<div class="row">

  <div class="col-sm-2">
    <div class="callout callout-warning b-t-1 b-r-1 b-b-1">
      <medium>Total Amortizations</medium><br>
      <strong class="h4"><?php echo ($total_amortizations) ? number_format($total_amortizations,2) : "0.00"; ?></strong>
    </div>
  </div><!--/.col-->


  <div class="col-sm-2">
    <div class="callout callout-info b-t-1 b-r-1 b-b-1">
      <medium >Total Billing Generated</medium><br>
      <strong class="h4"><?php echo ($total_bills) ? number_format($total_bills,2) : "0.00"; ?></strong>
    </div>
  </div><!--/.col-->

   <div class="col-sm-2">
    <div class="callout callout-success b-t-1 b-r-1 b-b-1">
      <medium >Total Actual Payments</medium><br>
      <strong class="h4"><?php echo ($total_payments) ? number_format($total_payments,2) : "0.00"; ?></strong>
    </div>
  </div><!--/.col-->

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
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">EXT.</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending" style="width: 45px;">DIVISION</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Particular: activate to sort column ascending" style="width: 45px;">PARTICULAR</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Principal: activate to sort column ascending" style="width: 45px;">PRINCIPAL</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Interest: activate to sort column ascending" style="width: 45px;">INTEREST</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Billing: activate to sort column ascending" style="width: 60px;">Running balance</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Billing: activate to sort column ascending" style="width: 60px;">TOTAL BILLING</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Billing: activate to sort column ascending" style="width: 60px;">Actual Payment</th>
                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Total Billing: activate to sort column ascending" style="width: 60px;">OR #</th>  
                          </tr>
                        </thead>
                      
                      <tbody>
                         @foreach ($bills as $key => $bill)
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
                            <td >{{ $bill->member->extension }}</td>
                            <td >{{ $bill->member->division }}</td>
                            <td >{{ $bill->member->particular_name }}</td>
                            <td >{{ $bill->principal_amount }}</td>
                            <td >{{ $bill->interest_amount }}</td>
                           
                            <!--<td style="color:#fff; text-align:center; background-color:#25A602;">{{ $bill->principal_amount + $bill->interest_amount }}</td>-->
  

                            <?php for($i = 0; $i < count($amortizations); $i++){ ?>

                            <?php if( $amortizations[$i]['id'] == $bill->amortization_id){ ?>

                                  <td >{{ $amortizations[$i]['running_balance_counter'] }}</td>

                            <?php } }  ?>


                            <td style="color:#fff; text-align:center; background-color:#25A602;">{{ $bill->loan_amortization }}</td>

                            <td <?php if ( empty( $bill->payment['payment_amount'] ) ){ ?>
                              style="color:#fff; text-align:center; background-color: #DC143C;"
                            <?php }elseif($bill->loan_amortization == $bill->payment['payment_amount'] ){ ?>
                              style="color:#fff; text-align:center; background-color: #25A602;"
                            <?php }elseif ( $bill->loan_amortization > $bill->payment['payment_amount'] ){ ?>
                              style="color:#fff; text-align:center; background-color: #3CB371;"
                            <?php }elseif ( $bill->loan_amortization < $bill->payment['payment_amount'] ){ ?> 
                              style="color:#fff; text-align:center; background-color: #006400;"
                            <?php }else{ ?> 
                              style="color:#fff; text-align:center; background-color: #DC143C;"
                            <?php } ?> >

                            {{ $bill->payment['payment_amount'] ? $bill->payment['payment_amount'] : "No payment entered" }}

                            </td>

                            <td >{{ $bill->payment['or_number'] }}</td> 
                           
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
