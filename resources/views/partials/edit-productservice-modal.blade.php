<div class="modal fade bd-example-modal-lg" id="editProductserviceModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Product/Service Modification Form</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="update-productservice-form" id="update-productservice-form" method="POST" >

         {{ csrf_field() }}

          <input type="hidden" name="id" class="form-control" id="primary_id" value="">
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Product/Service Name:</label>
                <input type="text" name="name" class="form-control form-control-md" id="edit_name" value="" required>
              </div>
              <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Description:</label>
                <input type="text" name="description" class="form-control form-control-md" id="editDescription" value="" required>
              </div>
            </div>
            <address></address>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
              <input type="submit" class="btn btn-primary btn-update-productservice" value="Save Updates"/>
            </div>
          </form>
      </div>
    </div>
   </div>
  </div>