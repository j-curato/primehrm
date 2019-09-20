<div class="modal fade bd-example-modal-lg" id="searchLoanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md modal-warning" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advanced Loan Search Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <form class="search-loan-form" id="search-loan-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}
   
            <div class="row">
                <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Last Name:</label>
                    <input type="text" name="lname" class="form-control form-control-sm member-tag" id="search_lname" value="" required/>
                </div> 
                <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">First Name:</label>
                  <input type="text" name="fname" class="form-control form-control-sm member-tag" id="search_fname" value="" required/>
              </div>
              <div class="form-group col-sm-12">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Middle Name:</label>
                <input type="text" name="mname" class="form-control form-control-sm member-tag" id="search_mname" value="" required/>
              </div>
                <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Type of Loan</label>
                  <select name="loan_type" class="form-control form-control-sm" id="search_loan_type">
                      <option value="">Select loan type</option>
                      <option value="Hospitalization">Hospitalization</option>
                      <option value="Salary">Salary loan</option>
                      <option value="Emergency">Emergency</option>
                      <option value="Pension">Pension Loan</option>
                      <option value="Personal">Personal</option>
                      <option value="Others">Others</option>
                    </select>
                </div>
                 <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Loan Status</label>
                  <select name="loan_status" class="form-control form-control-sm" id="search_loan_status">
                      <option value="">Select loan status</option>
                      <option value="Paid">Paid</option>
                      <option value="Unpaid">Unpaid</option>
                    </select>
                </div>  
            
                <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Year</label>
                  <select name="show_year" class="form-control form-control-md" id="search_year" required>
                    <option value="">Select Year</option>
                    <option value="2019">2019</option>
                    <option value="2018">2018</option>
                  </select>
                </div>

                <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Month</label>
                  <select name="show_month" class="form-control form-control-md" id="search_month">
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
                 <div class="form-group col-sm-12">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Quencena</label>
                  <select name="show_quencena" class="form-control form-control-md" id="search_period">
                    <option value="">Select a quencena</option>
                    <option value="01">First Quencena</option>
                    <option value="16">Second Quencena</option>
                  </select>
                </div>
             </div>

        </form>
      </div>
      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
        <button type="button" class="btn btn-warning btn-submit-search">Search</button>
      </div>
     </div>
    </div>
   </div>