<div class="modal fade bd-example-modal-lg" id="showSummaryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Generate Accounting Summary</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="show-summary-form" id="show-summary-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}

          <div class="row">
          <div class="form-group col-sm-4">
              <label  class="col-form-label" style="font-weight: 500;">Summary Type</label>
              <select name="show_summary_type" class="form-control form-control-md" id="show_summary_type" required>
                <option value="">Select Summary Type</option>
                <option value="CDB">CDB</option>
                <option value="CRB">CRB</option>
                <option value="Income Statement">Income Statement</option>
                <option value="Journal">Journal</option>
                <option value="Trial Balance">Trial Balance</option>
              </select>
            </div>
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Year</label>
              <select name="show_year" class="form-control form-control-md" id="show_summary_year" required>
                <option value="">Select Year</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
              </select>
            </div>

            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Month</label>
              <select name="show_month" class="form-control form-control-md" id="show_summary_month" required>
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
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
            <button type="submit" class="btn btn-success icon-eye btn-submit-summary"> Show</button>
          </div>
        </form>
        </div>
        <address></address>
      </div>
    
  </div>
 </div>
