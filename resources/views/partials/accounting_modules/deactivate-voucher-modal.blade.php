<div class="modal fade bd-example-modal-lg" id="deactivateVoucherModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-danger" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deactivate Voucher Remarks</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-12">
          
              <h4> Deactivate Voucher</h4>
            <form class="voucher-form" id="voucher-form" method="POST" enctype="multipart/form-data">
                        @csrf
             <input type="hidden" name="id" class="form-control" id="primary_id" value=""> 
             <div class="card-body p-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="deactvoucher_number" type="text" placeholder="Voucher Number" class="form-control{{ $errors->has('voucher_number') ? ' is-invalid' : '' }}" name="voucher_number" value="{{ old('voucher_number') }}" required autofocus>
                    @if ($errors->has('voucher_number'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('voucher_number') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="deactremarks" type="text" placeholder="Description" class="form-control{{ $errors->has('remarks') ? ' is-invalid' : '' }}" name="remarks" value="{{ old('remarks') }}" autofocus>
                    @if ($errors->has('remarks'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('remarks') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <address></address>
              <div class="col-md-10 offset-md-1">
               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
                      <button class="btn btn-success" type="submit">
                          {{ __('Deactivate') }}
                      </button>
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