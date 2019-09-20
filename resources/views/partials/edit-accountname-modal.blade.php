<div class="modal fade bd-example-modal-lg" id="editAccountnameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Account Name Modification Form</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="update-accountname-form" id="update-accountname-form" method="POST" >
         {{ csrf_field() }}
          <input type="hidden" name="id" class="form-control" id="primary_id" value="">
            <div class="row">
             <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Account Category:</label>
                <select name="category_code" required="" class="form-control form-control-md" id="editCategory_code">
                  <option value="">Select a Category</option>
                  @foreach($accountcategories as $category)
                  <option value="{{$category->category_code}}">{{$category->category_name}}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Account Code:</label>
                <input type="text" name="account_code" class="form-control form-control-md" id="editAccount_code" value="" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Account Name:</label>
                <input type="text" name="account_name" class="form-control form-control-md" id="editAccount_name" value="" required>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Description:</label>
                <input type="text" name="account_description" class="form-control form-control-md" id="editDescription" value="" required>
              </div>
            </div>
            <address></address>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
              <input type="submit" class="btn btn-primary btn-update-accountname" value="Save Updates"/>
            </div>
          </form>
      </div>
    </div>
   </div>
  </div>