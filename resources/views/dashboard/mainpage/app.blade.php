
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    @include('dashboard.mainpage.css.index_css')

    <script src="https://unpkg.com/feather-icons"></script>



  </head>
  <!-- END: Head-->

  <style>

      .feather{
          width: 20px !important;
      }

      .menu-item,.menu-title{
          padding: 0 10px !important;
      }
</style>

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    @include('dashboard.mainpage.widgets.header_navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('dashboard.mainpage.widgets.left_side_menu')
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">


@yield('content')



      </div>
      </div>
    </div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
  @include('dashboard.mainpage.widgets.customizer')
<!-- Navbar Type Starts -->
<!-- END: Customizer-->


@include('dashboard.mainpage.widgets.footer')


@include('dashboard.mainpage.js.index_js')

<script>
feather.replace({ class: 'foo', });
</script>

</body>
<!-- END: Body-->

</html>
