
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addMemberModal" data-whatever="@mdo"><i class="nav-icon icon-plus"></i> Add Member</button>
<button type="button" class="btn btn-primary edit-member" data-toggle="modal" data-target="" data-whatever="@fat"><i class="nav-icon icon-pencil"></i> Edit Member</button>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Deactivate Membership</button>
          
  <div id="ui-view" style="margin-top: 10px">
    <div><link href="{{ url('assets/css/dataTables.bootstrap4.css') }}" rel="stylesheet" />
      <div class="animated fadeIn">
        <div class="card border-success">
        <div class="card-header"><i class="fa fa-edit"></i> Member List</div>
          <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
            <div class="row">
              <div class="col-sm-12 col-md-6"></div>
              </div>
            <div class="row">
            <div class="col-sm-12">
            <div class="animated fadeIn" style="overflow-x: scroll;margin-top: 10px">
            <table class="table table-striped table-bordered datatable dataTable no-footer table-members-content" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info" style="border-collapse: collapse !important">
                <thead>
                <tr role="row">
                  <th >#</th>
                  <th style="display: none;">ID</th>
                  <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee ID: activate to sort column descending" style="width: 144px;">Member ID</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="First Name: activate to sort column ascending" style="width: 121px;">First Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Middle name: activate to sort column ascending" style="width: 45px;">Middle Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Last name: activate to sort column ascending" style="width: 45px;">Last Name</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Ext: activate to sort column ascending" style="width: 45px;">Ext</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date of Birth: activate to sort column ascending" style="width: 45px;">Date of Birth</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Marital Status: activate to sort column ascending" style="width: 45px;">Marital Status</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sex: activate to sort column ascending" style="width: 45px;">Sex</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 45px;">Age</th>
                  
                  
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Home Address: activate to sort column ascending" style="width: 45px;">Home Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Division: activate to sort column ascending" style="width: 45px;">Division</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Particular: activate to sort column ascending" style="width: 45px;">Particular</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Email Address: activate to sort column ascending" style="width: 45px;">Email Address</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Contact #: activate to sort column ascending" style="width: 45px;">Contact #</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Photo: activate to sort column ascending" style="width: 45px;">Photo</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Member Type: activate to sort column ascending" style="width: 45px;">Member Type</th>
                  <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Member Status: activate to sort column ascending" style="width: 45px;">Member Status</th>
                  
                </tr>
              </thead>
              <tbody>

              <?php 
                //$division = Division::find()
              ?>
             
               @foreach ($members as $member)

                  <tr class="tbl-members-row">  
                      <td><input type='checkbox' style='width:30px; height:20px;' class='member-id-checkbox' id='member-id-checkbox' value="{{ $member->id }}"></td>
                      <td style="display: none;">{{ $member->id }}</td>
                      <td>{{ $member->member_code }}</td>
                      <td>{{ $member->fname }}</td>
                      <td>{{ $member->mname }}</td>
                      <td>{{ $member->lname }}</td>
                      <td>{{ $member->extension }}</td>
                      <td>{{ $member->date_of_birth }}</td>
                      <td>{{ $member->marital_status }}</td>
                      <td>{{ $member->sex }}</td>
                      <td>{{ $member->age }}</td>
                      <td>{{ $member->home_address }}</td>
                      <td>{{ $member->division }}</td>
                      <td>{{ $member->particular_name }}</td>
                      <td>{{ $member->email_address }}</td>
                      <td>{{ $member->contact_number }}</td>
                      <td>{{ $member->photo_url }}</td>
                      <td>{{ $member->member_type }}</td>
                      <td>{{ $member->member_status }}</td>
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

