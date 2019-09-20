
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>@yield('title')</title>
    <!-- Icons-->
    <!--<link href="/coreui/src/css/coreui-icons.min.css" rel="stylesheet">-->
    
    <link href="{{ url('assets/node_modules/loader/css/jquery.loadingModal.css') }}" rel="stylesheet">
    <link href="{{ url('assets/node_modules/loader/css/jquery.loadingModal.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/sweetalert-master/dist/sweetalert.min.js') }}"></script> 
    <link rel="stylesheet" type="text/css" href="{{ url('assets/js/sweetalert-master/dist/sweetalert.css') }}">


<style type="text/css">

body {
  background-color: #fff !important;
  margin: 0;
}

a {
    color: #20a8d8;
    text-decoration: none;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

a:hover {
    color: #167495;
    text-decoration: underline;
}

.pagination {
  display: -ms-flexbox;
  display: flex;
  padding-left: 0;
  list-style: none;
  border-radius: 0.25rem;
}

.page-link {
  position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #20a8d8;
  background-color: #fff;
  border: 1px solid #c8ced3;
}

.page-link:hover {
  z-index: 2;
  color: #167495;
  text-decoration: none;
  background-color: #e4e7ea;
  border-color: #c8ced3;
}

.page-link:focus {
  z-index: 2;
  outline: 0;
  box-shadow: 0 0 0 0.2rem rgba(32, 168, 216, 0.25);
}

.page-link:not(:disabled):not(.disabled) {
  cursor: pointer;
}

.page-item:first-child .page-link {
  margin-left: 0;
  border-top-left-radius: 0.25rem;
  border-bottom-left-radius: 0.25rem;
}

.page-item:last-child .page-link {
  border-top-right-radius: 0.25rem;
  border-bottom-right-radius: 0.25rem;
}

.page-item.active .page-link {
  z-index: 1;
  color: #fff;
  background-color: #20a8d8;
  border-color: #20a8d8;
}

.page-item.disabled .page-link {
  color: #73818f;
  pointer-events: none;
  cursor: auto;
  background-color: #fff;
  border-color: #c8ced3;
}

.pagination-lg .page-link {
  padding: 0.75rem 1.5rem;
  font-size: 1.09375rem;
  line-height: 1.5;
}

.pagination-lg .page-item:first-child .page-link {
  border-top-left-radius: 0.3rem;
  border-bottom-left-radius: 0.3rem;
}

.pagination-lg .page-item:last-child .page-link {
  border-top-right-radius: 0.3rem;
  border-bottom-right-radius: 0.3rem;
}

.pagination-sm .page-link {
  padding: 0.25rem 0.5rem;
  font-size: 0.765625rem;
  line-height: 1.5;
}

.pagination-sm .page-item:first-child .page-link {
  border-top-left-radius: 0.2rem;
  border-bottom-left-radius: 0.2rem;
}

.pagination-sm .page-item:last-child .page-link {
  border-top-right-radius: 0.2rem;
  border-bottom-right-radius: 0.2rem;
}        

    
</style>

</head>

<body class="@yield('bodyclassname')">
     @include('partials/jscripts')   
</body>
</html>