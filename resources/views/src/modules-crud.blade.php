@extends('layouts/layout')

 @if( Request::segment(1) === "members" )
    @section('title')
      Members Page
    @endsection
 @elseif( Request::segment(1) === "employees" )
    @section('title')
      Employees Page
    @endsection
 @elseif( Request::segment(1) === "loans" )
    @section('title')
      Loans Page
    @endsection
 @elseif( Request::segment(1) === "bills" )
    @section('title')
      Bills Page
    @endsection
@elseif( Request::segment(1) === "inactivebills" )
    @section('title')
      Inactive Bills Page
    @endsection
 @elseif( Request::segment(1) === "payments" )
    @section('title')
      Payments Page
    @endsection   
 @elseif( Request::segment(1) === "users" )
    @section('title')
      Users Page
    @endsection
 @elseif( Request::segment(1) === "positions" )
    @section('title')
      Positions Page
    @endsection
 @elseif( Request::segment(1) === "divisions" )
    @section('title')
      Divisions Page
    @endsection
 @elseif( Request::segment(1) === "particulars" )
    @section('title')
      Particulars Page
    @endsection
 @elseif( Request::segment(1) === "accountnames" )
    @section('title')
      Account Names Page
    @endsection
 @elseif( Request::segment(1) === "accountcategories" )
    @section('title')
      Account Categories Page
    @endsection
 @elseif( Request::segment(1) === "productservices" )
    @section('title')
      Products/Services Page
    @endsection
 @elseif( Request::segment(1) === "vouchers" )
    @section('title')
      Vouchers Page
    @endsection
 @elseif( Request::segment(1) === "payees" )
    @section('title')
      Payees Page
    @endsection
 @endif   

@section('bodyclassname')
app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show
@endsection

@section('content')

@if( Request::segment(1) === "members" )
  @include('partials/add-member-modal') 
  @include('partials/edit-member-modal')
@elseif( Request::segment(1) === "bills" )
  @include('partials/add-bill-modal')
  @include('partials/show-bill-modal')
  @include('partials/add-payment-modal')
  @include('partials/edit-payment-modal')
@elseif( Request::segment(1) === "payments" )
  @include('partials/add-payment-modal')
  @include('partials/edit-payment-modal')  
  @include('partials/show-payment-modal')  
@elseif( Request::segment(1) === "employees" )
  @include('partials/add-employee-modal') 
  @include('partials/edit-employee-modal')
@elseif( Request::segment(1) === "users" )
  @include('partials/add-user-modal')
  @include('partials/edit-user-modal')
@elseif( Request::segment(1) === "loans")
  @include('partials/add-loan-modal') 
  @include('partials/edit-loan-modal')
  @include('partials/show-loanreleases-modal')
  @include('partials/search-loan-modal')
  @include('partials/loans-ledger-modal')
@elseif( Request::segment(1) === "positions")
  @include('partials/add-position-modal')
  @include('partials/edit-position-modal')
@elseif( Request::segment(1) === "divisions")
  @include('partials/add-division-modal')
  @include('partials/edit-division-modal')
@elseif( Request::segment(1) === "particulars")
  @include('partials/add-particular-modal')
  @include('partials/edit-particular-modal')
@elseif( Request::segment(1) === "accountnames")
  @include('partials/add-accountname-modal')
  @include('partials/edit-accountname-modal')
@elseif( Request::segment(1) === "accountcategories")
  @include('partials/add-accountcategory-modal')
  @include('partials/edit-accountcategory-modal')
@elseif( Request::segment(1) === "productservices")
  @include('partials/add-productservice-modal')
  @include('partials/edit-productservice-modal')
@elseif( Request::segment(1) === "payees")
  @include('partials/accounting_modules/add-payee-modal')
  @include('partials/accounting_modules/edit-payee-modal')
@elseif( Request::segment(1) === "vouchers")
  @include('partials/accounting_modules/add-journalvoucher-modal')
  @include('partials/accounting_modules/edit-journalvoucher-modal')
  @include('partials/accounting_modules/deactivate-voucher-modal')
  @include('partials/accounting_modules/show-summary-modal')
@endif

  <main class="main">
    <!-- Breadcrumb-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">Home</li>
      <li class="breadcrumb-item">
        <a href="#">Admin</a>
      </li>
      <li class="breadcrumb-item active">Dashboard</li>
      <!-- Breadcrumb Menu-->
      <li class="breadcrumb-menu d-md-down-none">
        <div class="btn-group" role="group" aria-label="Button group">
          <a class="btn" href="#">
            <i class="icon-speech"></i>
          </a>
          <a class="btn" href="./">
            <i class="icon-graph"></i>  Dashboard</a>
          <a class="btn" href="#">
            <i class="icon-settings"></i>  Settings</a>
        </div>
      </li>
    </ol>

    <div class="container-fluid">

      @if ( Request::segment(1) === "members" )
           @include('partials/members-crud')
      @elseif( Request::segment(1) === "bills" )
           @include('partials/bills-crud')
      @elseif( Request::segment(1) === "inactivebills" )
           @include('partials/inactive-bills-crud')
      @elseif( Request::segment(1) === "payments" )
           @include('partials/payments-crud')
      @elseif( Request::segment(1) === "employees" )
           @include('partials/employees-crud')
      @elseif( Request::segment(1) === "users" )
           @include('partials/users-crud')
      @elseif( Request::segment(1) === "loans" )
           @include('partials/loans-crud')
      @elseif( Request::segment(1) === "divisions" )
           @include('partials/divisions-crud')
      @elseif( Request::segment(1) === "positions" )
           @include('partials/positions-crud')
      @elseif( Request::segment(1) === "accountnames" )
           @include('partials/accountnames-crud')
      @elseif( Request::segment(1) === "accountcategories" )
           @include('partials/accountcategories-crud')
      @elseif( Request::segment(1) === "productservices" )
           @include('partials/productservices-crud')
      @elseif( Request::segment(1) === "vouchers" )
           @include('partials/accounting_modules/vouchers-crud')
      @elseif( Request::segment(1) === "payees" )
           @include('partials/accounting_modules/payees-crud')
      @else
           @include('partials/particulars-crud')
      @endif

    </div>
  </main> 
</div>
@endsection
