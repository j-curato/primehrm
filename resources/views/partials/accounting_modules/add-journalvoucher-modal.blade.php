<div class="modal fade bd-example-modal-lg" id="addJournalvoucherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Voucher/OR Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-12">
          
            <h4> Create New Voucher</h4>
            <form class="journalvoucher-form" id="journalvoucher-form" method="POST" enctype="multipart/form-data">
                        @csrf
             <div class="card-body p-8">
             <div class="row">
              <div class="input-group mb-3">
                <div class="col-md-12">
                    <input id="voucher_number" type="text" placeholder="Voucher/OR Number" class="form-control{{ $errors->has('voucher_number') ? ' is-invalid' : '' }}" name="voucher_number" value="{{ old('voucher_number') }}" required autofocus>
                    @if ($errors->has('voucher_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('voucher_number') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
               <div class="input-group mb-3">
                <div class="col-md-12">
                     <select name="voucher_type" class="form-control form-control-md" id="voucher_type" onchange="showField()">
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
              <div class="input-group mb-3" id="check_div" style="display:none">
                <div class="col-md-12">
                    <input id="check_number" type="text" placeholder="Check Number" class="form-control{{ $errors->has('check_number') ? ' is-invalid' : '' }}" name="check_number" value="{{ old('check_number') }}" autofocus>
                    @if ($errors->has('check_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('check_number') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="col-md-12">
                     <select name="payee_name" class="form-control form-control-md add_payee_name" id="payee_name">
                        <option value="">Select Payee</option>
                        @foreach($payees as $payee)
                          <option value="{{$payee->payee_name}}">{{$payee->payee_name}}</option>
                        @endforeach
                      </select>
                    @if ($errors->has('payee_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('payee_name') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
               <div class="input-group mb-3">
                <div class="col-md-12">
                    <input name="address" id="address" type="text" placeholder="Address" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}"  value="{{ old('address') }}" required autofocus>
                    @if ($errors->has('address'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="col-md-12">
                    <input id="transaction_date" type="date" placeholder="Transaction" class="form-control{{ $errors->has('transaction_date') ? ' is-invalid' : '' }}" name="transaction_date" value="{{ old('transaction_date') }}" required autofocus>
                    @if ($errors->has('transaction_date'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('transaction_date') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              </div>
              <div class="row item" id="item">
              <div class="input-group mb-3">
                <div class="col-md-3">                    
                      <select name="item[]" class="form-control form-control-md" id="product_service">
                          <option value="">Select Product/Service</option>
                             @foreach($productservices as $item)
                              <option value="{{$item->name}}">{{$item->name}}</option>
                             @endforeach
                        </select>                 
                    @if ($errors->has('product_service'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('product_service') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                      <select name="item[]" id="particular" class="form-control form-control-md">
                        <option value="">Select Particular</option>
                        @foreach($accountnames as $account)
                          <option value="{{$account->account_name}}">{{$account->account_name}}</option>
                        @endforeach
                      </select>
                    @if ($errors->has('particular'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('particular') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="col-md-3">
                      <input name="item[]" id="debit" type="text" placeholder="Debit" class="form-control{{ $errors->has('debit') ? ' is-invalid' : '' }} debit" value="{{ old('debit') }}" autofocus>
                      @if ($errors->has('debit'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('debit') }}</strong>
                          </span>
                      @endif
                  </div>
                  <div class="col-md-3">
                      <input name="item[]" id="credit" type="text" placeholder="Credit" class="form-control{{ $errors->has('credit') ? ' is-invalid' : '' }} credit" value="{{ old('credit') }}"  autofocus>
                      @if ($errors->has('debit'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('credit') }}</strong>
                          </span>
                      @endif
                  </div>
                </div>
                </div>
                <div class="row">
                <div class="input-group mb-3">
                <div class="col-md-12">
                    <input name="remarks" id="remarks" type="text" placeholder="Description" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}"  value="{{ old('remarks') }}" required>
                    @if ($errors->has('remarks'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('remarks') }}</strong>
                      </span>
                    @endif
                </div>
              </div>
              </div>
              <address></address>
              <div class="row">
                 <div class="col-md-6">
                  <div class="block"><button class="btn btn-success checkEntries" type="button"><span><i class="nav-icon icon-check"></i> Check Entries</span></button></div>
                 </div>
                 <div class="col-md-3">
                    <input name="totaldebit" id="totaldebit" type="text" placeholder="Total Debit" class="form-control"  value="" disabled>     
                 </div>
                 <div class="col-md-3">
                    <input name="totaldebit" id="totalcredit" type="text" placeholder="Total Credit" class="form-control"  value="" disabled>     
                 </div>
              </div>  
              </br>          
              <div class="col-md-12 offset-md-1">
               <div class="modal-footer">
                <div class="block"><button class="btn btn-success" type="button"><span class="addrow"><i class="nav-icon icon-plus"></i> Add Item</span></button></div>
                <div class="block"><button type="button" class="btn btn-warning"><span class="removerow"><i class="nav-icon icon-close"></i> Remove Item</span></button></div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" ><i class="nav-icon icon-close"></i> Close</button>
                <button class="btn btn-success registerItem" type="submit" disabled="true"><i class="nav-icon icon-plus"></i> {{ __('Register') }} </button>
                </div>
              </div>
            </div>
            </form>
        </div>
      </div>
    </div>
  </div>  
  </div>
 </div>
</div>