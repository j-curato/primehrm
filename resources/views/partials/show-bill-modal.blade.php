<div class="modal fade bd-example-modal-lg" id="showBillModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Billing Search Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="show-bill-form" id="show-bill-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}

          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Year</label>
              <select name="show_year" class="form-control form-control-md" id="show_bill_year" required>
                <option value="">Select Year</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
              </select>
            </div>

            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Month</label>
              <select name="show_month" class="form-control form-control-md" id="show_bill_month" required>
                <option value="">Select a month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
              </select>
            </div>
             <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Quencena</label>
              <select name="show_quencena" class="form-control form-control-md" id="show_bill_period" required>
                <option value="">Select a quencena</option>
                <option value="01">First Quencena</option>
                <option value="16">Second Quencena</option>
              </select>
            </div>
         </div>
         
         
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
            <button type="submit" class="btn btn-success icon-eye btn-submit-bill"> Show</button>
          </div>
        </form>
        </div>
        <address></address>
      </div>
    
  </div>
 </div>
