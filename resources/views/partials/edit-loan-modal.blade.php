<div class="modal fade bd-example-modal-lg" id="editLoanModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Loan Modification Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="edit-loan-form" id="edit-loan-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}

       <input type="hidden" name="id" class="form-control" id="loan-primaryID" value="">

           <div class="form-group">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Application for Loan:</label>
              <select name="loan_application" class="form-control form-control-sm" id="edit-app-for-loan">
                  <option value="">Select loan application</option>
                  <option value="New">New</option>
                  <option value="Renewal">Renewal</option>
                  <option value="Additional">Additional</option>
                </select>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date of filing:</label>
                  <input type="date" name="date_filed" class="form-control form-control-sm" id="edit-date-of-filing" value="" required>
                </div>

                <div class="form-group col-sm-4">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Amount Requested</label>
                  <input type="number" step="any" name="amount_requested" class="form-control form-control-sm" id="edit-amount-requested" value="" placeholder="0.00" required>
                </div>

                <div class="form-group col-sm-4">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Terms</label>
                   <select name="terms" class="form-control form-control-sm" id="edit-loan-terms" required>
                      <option value="">Select terms</option>
                      <option value="6">6 months</option>
                      <option value="12">12 months</option>
                      <option value="24">24 months</option>
                      <option value="36">36 months</option>
                      <option value="48">48 months</option>
                      <option value="60">60 months</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Type of Loan</label>
                  <select name="loan_type" class="form-control form-control-sm" id="edit-loan-type">
                      <option value="">Select loan type</option>
                      <option value="Hospitalization">Hospitalization</option>
                      <option value="Salary">Salary loan</option>
                      <option value="Emergency">Emergency</option>
                      <option value="Educational">Educational</option>
                      <option value="Pension">Pension Loan</option>
                      <option value="Personal">Personal</option>
                      <option value="Others">Others</option>
                    </select>
                </div>

                <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Mode of Payment</label>
                  <select name="mode_payment" class="form-control form-control-sm" id="edit-mode-payment">
                      <option value="">Select mode of payment</option>
                      <option value="7">Weekly</option>
                      <option value="2">Bimonthly</option>
                      <option value="1">Monthly</option>
                      <option value="3">Quarterly</option>
                    </select>
                </div>
            </div>

            <hr>
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Name of borrower:</label>
            {{ Form::select('member_id', [null=>'Please Select'] + $members, null, array('class' => 'form-control', 'id' => 'edit-member-id')) }}
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Name of Co-maker:</label>
            {{ Form::select('co_maker_member_id', [null=>'Please Select'] + $members, null, array('class' => 'form-control', 'id' => 'edit-comaker-member-id' )) }}
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Home address:</label>
            <input type="text" class="form-control form-control-sm " id="edit-member-homeaddress" value="" required>
          </div>

          <div class="row">
              <div class="form-group col-sm-2">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Age:</label>
                <input type="number" class="form-control form-control-sm " id="edit-member-age" value="" required>
              </div>

              <div class="form-group col-sm-3">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date of birth:</label>
                  <input type="date" class="form-control form-control-sm " id="edit-member-dateofbirth" value="" required>
              </div>

              <div class="form-group col-sm-3">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Contact #:</label>
                  <input type="text" class="form-control form-control-sm " id="edit-member-contactnumber" value="" required>
              </div>

              <div class="form-group col-sm-4">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Marital Status:</label>
                  <select class="form-control form-control-sm " id="edit-member-maritalstatus">
                    <option value="">Select a marital status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Divorced">Divorced</option>
                    <option value="Separated">Separated</option>
                    <option value="Widowed">Widowed</option>
                  </select>
              </div>
          </div>

          <hr>

          <div class="row">
              <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member Status:</label>
                  <select name="member_status" class="form-control form-control-sm " id="edit-member-status">
                    <option value="">Member in good standing</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                  </select>
              </div>

              <div class="form-group col-sm-6">
                  <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member Type:</label>
                  <select name="member_type" class="form-control form-control-sm " id="edit-member-type">
                    <option value="">Select member type</option>
                    <option value="Resignee">Resignee</option>
                    <option value="Active">Active</option>
                    <option value="Associate">Associate</option>
                    <option value="Non-member">Non-member</option>
                  </select>
              </div>
          </div>

  
          <address></address>
          <hr>

           
          <div class="row">
             <div class="form-group col-sm-6">
              <label class="switch switch-pill switch-label switch-outline-primary-alt">Approval
                <input type="checkbox" class="switch-input loan-approval-2">
                <span class="switch-slider" data-checked="On" data-unchecked="Off"></span>
              </label>
             </div>
          </div>
    
          <div class="row">

              <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Amount Loan Granted:</label>
                <input type="number" step="any" name="amount_granted" class="form-control form-control-sm loan-item-required" id="edit-amount-granted" value="" onchange="editCalculateLoan()" disabled>
              </div>

          </div>

          <div class="row">

            <div class="form-group col-sm-6">

              <label for="recipient-name" class="col-form-label" style="font-weight: bold;">Deductions:</label>

            </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Interest:</label>
                      <input type="number" step="0.01" name="interest" class="form-control form-control-sm loan-item-required" id="edit-interest" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Service Fee:</label>
                      <input type="number" step="any" name="service_fee" class="form-control form-control-sm loan-item-required" id="edit-service-fee" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">CLPP Insurance:</label>
                      <input type="number" step="any" name="clpp_insurance" class="form-control form-control-sm loan-item-required" id="edit-clpp-insurance" onchange="editCalculateLoan()" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Filing Fee:</label>
                      <input type="number" step="any" name="filling_fee" class="form-control form-control-sm loan-item-required" id="edit-filing-fee" onchange="editCalculateLoan()" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Notarial Fee:</label>
                      <input type="number" step="any" name="notarial_fee" class="form-control form-control-sm loan-item-required" id="edit-notarial-fee" onchange="editCalculateLoan()" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Life Insurance:</label>
                      <input type="number" step="any" name="life_insurance" class="form-control form-control-sm loan-item-required" id="edit-life-insurance" onchange="editCalculateLoan()" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-4">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">CBU:</label>
                      <input type="number" step="any" name="cbu" class="form-control form-control-sm loan-item-required" id="edit-cbu" value="" disabled>
              </div>

              <div class="form-group col-sm-4">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Savings:</label>
                      <input type="number" step="any" name="savings" class="form-control form-control-sm loan-item-required" id="edit-savings" onchange="editCalculateLoan()" value="" disabled>
              </div>

               <div class="form-group col-sm-4">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Other:</label>
                      <input type="number" step="any" name="other" class="form-control form-control-sm loan-item-required" id="edit-other" onchange="editCalculateLoan()" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Total Deduction:</label>
                      <input type="number" step="any" name="total_deduction" class="form-control form-control-sm loan-item-required" id="edit-total-deduction" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Net Proceed:</label>
                      <input type="number" step="any" name="net_proceed" class="form-control form-control-sm loan-item-required" id="edit-net-proceed" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Loan Balance:</label>
                      <input type="number" step="any" name="loan_balance" class="form-control form-control-sm loan-item-required" id="edit-loan-balance" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Amortization:</label>
                      <input type="number" step="any" name="amortization" class="form-control form-control-sm loan-item-required" id="edit-amortization" value="" disabled>
              </div>

          </div>

          <div class="row">

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Starting on:</label>
                      <input type="date" name="starting_on" class="form-control form-control-sm loan-item-required" id="edit-date-start" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                      <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Unit:</label>
                      <input type="text" name="unit" class="form-control form-control-sm loan-item-required" id="edit-unit" value="" disabled>
              </div>

          </div>
     
          <hr>

          <div class="row">

              <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Computed by:</label>
                <input type="text" name="computed_by" class="form-control form-control-sm loan-item-required" id="edit-computedby" value="" disabled>
              </div>

              <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Certified correct:</label>
                <input type="text" name="certified_correct" class="form-control form-control-sm loan-item-required" id="edit-certifiedby" value="" disabled>
              </div>

          </div>

        </form>

      </div>

      <div class="modal-footer">
     
        <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
        <button type="button" class="btn btn-success btn-update-loan">Submit</button>
      </div>
     </div>
    </div>
   </div>