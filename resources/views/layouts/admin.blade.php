<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" >
    <title></title>
    <link href="/css/bootstrap.css" rel="stylesheet" >
    <link href="/css/offcanvas.css" rel="stylesheet" >
    <link href="/css/admin-custom.css" rel="stylesheet" >
    <link href="/css/bootstrap-rtl.css">
    <title>Laravel Admin</title>
  </head>
  <body dir="rtl">
    @include('admin.partial.nav')
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          @yield('content')
        </div>
      </div>
    </div>

    <script src="/js/jquery-3.js" ></script>
    <script src="/js/popper.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/holder.js"></script>
    <script src="/js/offcanvas.js"></script>
  </body>
</html>
