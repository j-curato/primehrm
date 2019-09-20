
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addPayeeModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Add Payee</button>
<button type="button" class="btn btn-primary edit-payee" data-toggle="modal" data-target="" data-whatever="@fat"><i class="nav-icon icon-pencil"></i> Edit Payee</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="nav-icon icon-wrench"></i> Deactivate Payee</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Payee List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-payees-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th style="width: 10px;">#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Position ID: activate to sort column descending" style="width: 10px;">Payee ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Payee Name: activate to sort column ascending" style="width: 121px;">Payee Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 120px;">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Address: activate to sort column ascending" style="width: 120px;">Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 120px;">Created At</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated At: activate to sort column ascending" style="width: 120px;">Updated At</th>
                    
                </tr>
              </thead>
              <tbody>
               @foreach ($payees as $payee)
                <tr class="tbl-payees-row">  
                    <td><input type='checkbox' style='width:30px; height:20px;' class='payee-id-checkbox' id='payee-id-checkbox' value="{{ $payee->id }}"></td>
                    <td style="display: none;">{{ $payee->id }}</td>
                    <td>{{ $payee->id }}</td>
                    <td>{{ $payee->payee_name }}</td>
                    <td>{{ $payee->description }}</td>
                    <td>{{ $payee->address }}</td>
                    <td>{{ $payee->created_at }}</td>
                    <td>{{ $payee->updated_at }}</td>
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

