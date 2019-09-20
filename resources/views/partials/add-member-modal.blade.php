<div class="modal fade bd-example-modal-lg" id="addMemberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Member Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form class="member-form" id="member-form" method="POST" enctype="multipart/form-data">

       {{ csrf_field() }}

          <div class="form-group">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member ID:</label>
            <input type="text" name="member_code" class="form-control form-control-sm" id="add-member-code" value="" required/>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">First Name:</label>
              <input type="text" name="fname" class="form-control form-control-sm member-tag" id="recipient-name" value="" required/>
            </div>

            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Middle Name:</label>
              <input type="text" name="mname" class="form-control form-control-sm member-tag" id="recipient-name" value="" required/>
            </div>

            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Last Name:</label>
              <input type="text" name="lname" class="form-control form-control-sm member-tag" id="recipient-name" value="" required/>
            </div>

            <div class="form-group col-sm-2">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Extension:</label>
              <input type="text" name="extension" class="form-control form-control-sm member-tag" id="recipient-name" value="" required/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Date of birth:</label>
              <input type="date" name="date_of_birth" class="form-control form-control-sm member-tag" id="date_of_birth" value="" required/>
            </div>
            
            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Marital Status:</label>
              <select name="marital_status" required="" class="form-control form-control-sm member-tag">
                <option value="">Select a marital status</option>
                <option value="Single">Single</option>
                <option value="Married">Married</option>
                <option value="Divorced">Divorced</option>
                <option value="Separated">Separated</option>
                <option value="Widowed">Widowed</option>
              </select>
            </div>

            <div class="form-group col-sm-3">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Sex:</label>
              <select name="sex" required="" class="form-control form-control-sm member-tag">
                <option value="">Select a sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <div class="form-group col-sm-2">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Age:</label>
              <input type="number" name="age" class="form-control form-control-sm member-tag" id="age" value="" required/>
            </div>

         </div>
         <div class="row">
          <div class="form-group col-sm-4">
            <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Home address:</label>
            <input type="text" name="home_address" class="form-control form-control-sm member-tag" id="recipient-name" value="" required>
          </div>
           <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Division:</label>
              <select name="division" required="" class="form-control form-control-sm member-tag" id="member_division">
                <option value="">Select a Division</option>
                @foreach($divisions as $div)
                <option value="{{$div->division_name}}">{{$div->division_name}}</option>
                @endforeach
              </select>
            </div>
             <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Particular:</label>
              <select name="particular_name" required="" class="form-control form-control-sm member-tag" id="member_particular">
                <option value="">Select a Particular</option>
                @foreach($particulars as $par)
                <option value="{{$par->particular_name}}">{{ $par->particular_name }}</option>
                @endforeach
              </select>
            </div>
           </div>
          <div class="row">
            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Email address:</label>
              <input type="text" name="email_address" class="form-control form-control-sm member-tag" id="recipient-name" value="" required>
            </div>

            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Contact #:</label>
              <input type="text" name="contact_number" class="form-control form-control-sm member-tag" id="recipient-name" value="" required>
            </div>

            <div class="form-group col-sm-4">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Photo:</label>
              <input type="text" name="photo_url" class="form-control form-control-sm member-tag" id="recipient-name" value="" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member type:</label>
              <select name="member_type" class="form-control form-control-sm member-tag">
                <option value="">Select member type</option>
                <option value="ARB Member">ARB Member</option>
                <option value="ARB Member + FPPI ARB Regular Worker">ARB Member + FPPI ARB Regular Worker</option>
                <option value="ARB Member + Agency Worker">ARB Member + Agency Worker</option>
                <option value="Non Member">Non Member</option>
                <option value="Non Member + FPPI Company Regular Worker">Non Member + FPPI Company Regular Worker</option>
                <option value="Non Member + Agency Worker">Non Member + Agency Worker</option>
              </select>
            </div>

            <div class="form-group col-sm-6">
              <label for="recipient-name" class="col-form-label" style="font-weight: 500;">Member status:</label>
              <select name="member_status" required="" class="form-control form-control-sm member-tag">
                <option value="">Select member status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
                <option value="Resignee">Resignee</option>
              </select>     
            </div>
         </div>
         <address></address>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
            <input type="submit" class="btn btn-success btn-submit-member member-tag" value="Submit">
          </div>
        </form>
      </div>
  </div>
 </div>
</div>