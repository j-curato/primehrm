<div class="modal fade bd-example-modal-lg" id="addPaymentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Payment Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="payment-form" id="payment-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}
       
           <div class="row">
             <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Loan ID:</label>
                <input type="text" name="loan_id" class="form-control form-control-sm disabled" id="add-loan-id" value="" required/>
              </div>
              <div class="form-group col-sm-6">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member ID:</label>
                <input type="text" name="member_id" class="form-control form-control-sm disabled" id="add-member-id" value="" required/>
              </div>
              <div class="form-group col-sm-6" style="display: none;">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Schedule</label>
                <input type="text" name="bill_schedule" class="form-control form-control-sm disabled" id="bill-schedule-id" value="" required/>
              </div>
            </div>
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">First Name:</label>
                <input type="text" name="fname" class="form-control form-control-sm disabled" id="first-name" value="" required/>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Middle Name:</label>
                <input type="text" name="mname" class="form-control form-control-sm disabled" id="middle-name" value="" required/>
              </div>
              <div class="form-group col-sm-3">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Last Name:</label>
                <input type="text" name="lname" class="form-control form-control-sm disabled" id="last-name" value="" required/>
              </div>
              <div class="form-group col-sm-2">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Extension:</label>
                <input type="text" name="extension" class="form-control form-control-sm " id="extension" value="" required/>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="form-group col-sm-4">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Type of Loan</label>
                <select name="loan_type_payment" class="form-control form-control-sm" id="loan_type_payment">
                    <option value="">Select loan type</option>
                    <option value="Hospitalization">Hospitalization</option>
                    <option value="Salary">Salary loan</option>
                    <option value="Emergency">Emergency</option>
                    <option value="Pension">Pension Loan</option>
                    <option value="Personal">Personal</option>
                    <option value="Others">Others</option>
                  </select>
                </div>

                <div class="form-group col-sm-4">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Schedule</label>
                <!--<select name="schedule_payment" class="form-control form-control-sm" id="schedule_payment" onchange="getAmortizationAmount()">-->
                <select name="schedule_payment" class="form-control form-control-sm" id="schedule_payment" onchange="compareBillDate()">
                </select>
                </div>

                <div class="form-group col-sm-4" style="display: none;">
                <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Bill id</label>
                 <input type="text" name="bill_id" class="form-control form-control-sm" id="bill_id" value="" />
                </div>

                <div class="form-group col-sm-4">
                <label for="amortization" class="col-form-label" style="font-weight: 500;">Amortization</label>
                <input type="text" name="payment_amortization" class="form-control form-control-sm" id="payment_amortization" value="" required/>
              </div>   
            </div>
             <div class="row">
                <div class="form-group col-sm-12">
                  <label for="amount" class="col-form-label" style="font-weight: 500;">OR Number</label>
                  <input type="text" name="or_number" class="form-control form-control-sm" id="or_number" value="" required/>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-sm-6">
                  <label for="amount" class="col-form-label" style="font-weight: 500;">Amount</label>
                  <input type="text" name="payment_amount" class="form-control form-control-sm" id="payment_amount" value="" onchange="getRBC()" required/>
                </div>
                <div class="form-group col-sm-6">
                  <label for="payment_date" class="col-form-label" style="font-weight: 500;">Payment Date</label>
                  <input type="date" name="payment_date" class="form-control form-control-sm" id="payment_date" value="" required/>
                </div>   
            </div>
          <address></address>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
            <button type="submit" class="btn btn-success btn-submit-payment" id="btn-payment-submit" >Submit</button>
          </div>
        </form>
      </div>
      
     </div>
    </div>
   </div>