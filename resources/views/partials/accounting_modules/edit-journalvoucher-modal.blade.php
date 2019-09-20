<div class="modal fade bd-example-modal-lg" id="editJournalvoucherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-primary" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel">Voucher Modification Form</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form class="update-journalvoucher-form" id="update-journalvoucher-form" method="POST" >

         {{ csrf_field() }}
           <input type="hidden" name="id" class="form-control" id="primary_id" value=""> 
          <div class="card-body p-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="editVoucher_number" type="text" placeholder="Voucher Number" class="form-control{{ $errors->has('voucher_number') ? ' is-invalid' : '' }}" name="voucher_number" value="{{ old('voucher_number') }}" required autofocus>
                </div>
              </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                     <select name="voucher_type" class="form-control form-control-sm" id="EditVoucher_type">
                        <option value="">Select Voucher Type</option>
                        <option value="Check Voucher">Check Voucher</option>
                        <option value="Journal Voucher">Journal Voucher</option>
                        <option value="Official Receipt">Official Receipt</option>
                        <option value="Withdrawals">Withdrawals</option>
                      </select>
                    @if ($errors->has('voucher_type'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('voucher_type') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                     <select name="payee_name" class="form-control form-control-sm" id="Editpayee_name">
                        <option value="">Select Payee</option>
                        @foreach($payees as $payee)
                          <option value="{{$payee->payee_name}}">{{$payee->payee_name}}</option>
                        @endforeach
                      </select>
                </div>
              </div>
               <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-location-pin"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input name="address" id="Editaddress" type="text" placeholder="Address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{ old('address') }}" autofocus>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="Edittransaction_date" type="date" placeholder="Transaction" class="form-control{{ $errors->has('transaction_date') ? ' is-invalid' : '' }}" name="transaction_date" value="{{ old('transaction_date') }}" required autofocus>
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">                    
                      <select name="product_service" class="form-control form-control-sm" id="Editproduct_service">
                          <option value="">Select Product/Service</option>
                             @foreach($productservices as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                             @endforeach
                        </select>                 
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-user"></i>
                  </span>
                </div>
                <div class="col-md-10">
                      <select name="particular" class="form-control form-control-sm" id="Editparticular">
                        <option value="">Select Particular</option>
                        @foreach($accountnames as $account)
                          <option value="{{$account->account_name}}">{{$account->account_name}}</option>
                        @endforeach
                      </select>
                </div>
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-list"></i>
                    </span>
                  </div>
                  <div class="col-md-10">
                      <input id="Editdebit" type="text" placeholder="Debit" class="form-control{{ $errors->has('debit') ? ' is-invalid' : '' }}" name="debit" value="{{ old('debit') }}" autofocus>
                  </div>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-list"></i>
                    </span>
                  </div>
                  <div class="col-md-10">
                      <input id="Editcredit" type="text" placeholder="Credit" class="form-control{{ $errors->has('credit') ? ' is-invalid' : '' }}" name="credit" value="{{ old('credit') }}"  autofocus>
                  </div>
                </div>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="Editremarks" type="text" placeholder="Remarks" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" value="{{ old('remarks') }}" autofocus>
                </div>
              </div>
              <address></address>
              <div class="col-md-10 offset-md-1">
               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
                      <button class="btn btn-success" type="submit">
                          {{ __('Update') }}
                      </button>
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
   </div>
  </div>