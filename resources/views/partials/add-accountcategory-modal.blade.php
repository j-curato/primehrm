<div class="modal fade bd-example-modal-lg" id="addAccountcategoryModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-success" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Account Category Registration Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

       <div class="container">
       <div class="row justify-content-center">
        <div class="col-md-8">
          
              <h4> Create New Category Name</h4>
              <form class="accountcategory-form" id="accountcategory-form" method="POST" enctype="multipart/form-data">
                        @csrf
             <div class="card-body p-8">
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="icon-list"></i>
                  </span>
                </div>
                <div class="col-md-10">
                    <input id="category_code" type="text" placeholder="Category Code" class="form-control{{ $errors->has('category_code') ? ' is-invalid' : '' }}" name="category_code" value="{{ old('category_code') }}" required autofocus>

                    @if ($errors->has('category_code'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_code') }}</strong>
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
                    <input id="category_name" type="text" placeholder="Category Name" class="form-control{{ $errors->has('category_name') ? ' is-invalid' : '' }}" name="category_name" value="{{ old('category_name') }}" required autofocus>

                    @if ($errors->has('category_name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_name') }}</strong>
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
                    <input id="category_description" type="text" placeholder="Category Description" class="form-control{{ $errors->has('category_description') ? ' is-invalid' : '' }}" name="category_description" value="{{ old('category_description') }}" required autofocus>

                    @if ($errors->has('category_description'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('category_description') }}</strong>
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