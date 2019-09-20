
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addAccountnameModal" data-whatever="@mdo">Add Account Name</button>
<button type="button" class="btn btn-primary edit-accountname" data-toggle="modal" data-target="" data-whatever="@fat">Edit Account Name</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate Account Name</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Account Name List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-accountnames-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th style="width: 10px;">#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Account ID: activate to sort column descending" style="width: 10px;">Account ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Account Category: activate to sort column ascending" style="width: 121px;">Account Category</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Account Code: activate to sort column ascending" style="width: 121px;">Account Code</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Account Name: activate to sort column ascending" style="width: 121px;">Account Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 120px;">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 120px;">Created At</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated At: activate to sort column ascending" style="width: 120px;">Updated At</th>
                </tr>
              </thead>
              <tbody>
               @foreach ($accountnames as $account)
                <tr class="tbl-accountnames-row">  
                    <td><input type='checkbox' style='width:30px; height:20px;' class='accountname-id-checkbox' id='accountname-id-checkbox' value="{{ $account->id }}"></td>
                    <td style="display: none;">{{ $account->id }}</td>
                    <td>{{ $account->id }}</td>
                    <td>{{ $account->category_code }}</td>
                    <td>{{ $account->account_code }}</td>
                    <td>{{ $account->account_name }}</td>
                    <td>{{ $account->account_description }}</td>
                    <td>{{ $account->created_at }}</td>
                    <td>{{ $account->updated_at }}</td>
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

