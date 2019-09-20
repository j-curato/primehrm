<div class="modal fade bd-example-modal-lg" id="addAccountnameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Name Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-8">
          
              <h4> Create New Account Name</h4>
              <form class="accountname-form" id="accountname-form" method="POST" enctype="multipart/form-data">
                        @csrf
               <div class="card-body p-8">
                <div class="input-group mb-3">
                 <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="icon-list"></i>
                    </span>
                  </div>
                  <div class="col-md-10">
                  <select name="category_code" required="" class="form-control form-control-md" id="category_code">
                    <option value="">Select a Category</option>
                    @foreach($accountcategories as $category)
                    <option value="{{$category->category_code}}">{{$category->category_name}}</option>
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
                    <input id="account_code" type="text" placeholder="Account Code" class="form-control{{ $errors->has('account_code') ? ' is-invalid' : '' }}" name="account_code" value="{{ old('account_code') }}" required autofocus>

                    @if ($errors->has('account_code'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_code') }}</strong>
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
                    <input id="account_name" type="text" placeholder="Account Name" class="form-control{{ $errors->has('account_name') ? ' is-invalid' : '' }}" name="account_name" value="{{ old('account_name') }}" required autofocus>

                    @if ($errors->has('account_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_name') }}</strong>
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
                    <input id="account_description" type="text" placeholder="Account Description" class="form-control{{ $errors->has('account_description') ? ' is-invalid' : '' }}" name="account_description" value="{{ old('account_description') }}" required autofocus>

                    @if ($errors->has('account_description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('account_description') }}</strong>
                        </span>
                    @endif
                </div>
              </div>
              <address></address>
              <div class="col-md-10 offset-md-1">
               <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="window.location.reload()" >Close</button>
                      <button class="btn btn-success" type="submit">
                          {{ __('Register') }}
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