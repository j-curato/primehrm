
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addProductServiceModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Add Product/Service</button>
<button type="button" class="btn btn-primary edit-productservice" data-toggle="modal" data-target="" data-whatever="@fat">Edit Product/Service</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate Product/Service</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Products/Services List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-productservices-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th style="width: 10px;">#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" ID: activate to sort column descending" style="width: 10px;"> ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Product/Service Name: activate to sort column ascending" style="width: 121px;">Product/Service Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Description: activate to sort column ascending" style="width: 120px;">Description</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Created At: activate to sort column ascending" style="width: 120px;">Created At</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Updated At: activate to sort column ascending" style="width: 120px;">Updated At</th>
                    
                </tr>
              </thead>
              <tbody>
               @foreach ($productservices as $pros)
                <tr class="tbl-productservices-row">  
                    <td><input type='checkbox' style='width:30px; height:20px;' class='productservice-id-checkbox' id='productservice-id-checkbox' value="{{ $pros->id }}"></td>
                    <td style="display: none;">{{ $pros->id }}</td>
                    <td>{{ $pros->id }}</td>
                    <td>{{ $pros->name }}</td>
                    <td>{{ $pros->description }}</td>
                    <td>{{ $pros->created_at }}</td>
                    <td>{{ $pros->updated_at }}</td>
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

