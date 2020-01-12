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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Dashboard |
        @isset($title)
            {{ $title }}
        @endisset
    </title>

    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.html">
    <link rel="shortcut icon" type="image/x-icon" href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="//at.alicdn.com/t/font_o5hd5vvqpoqiwwmi.css">


    <!-- BEGIN: include_js-->
      @yield('include_css')
    <!-- END: include_js-->


    <script src="https://unpkg.com/feather-icons"></script>



  </head>
  <!-- END: Head-->


  {{-- BEGIN: custom_css --}}
  @yield('custom_css')
  {{-- END: custom_css --}}


  <style>
      .feather{
          width: 20px !important;
      }
      .menu-item,.menu-title{
          padding: 0 10px !important;
      }
      /* .breadcrumb .breadcrumb-item+.breadcrumb-item:before{
        content:'/';
      }
      .pagination .page-item.next .page-link:after{
        content: '';
      }
      .pagination .page-item.previous .page-link:before{
        content: '';
      }

      .dropdown-toggle::after{
        content:' ' !important;
      } */

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

        @include('dashboard.mainpage.widgets.breadcrumbs')

        <div class="content-body">



          @include('dashboard.mainpage.widgets.error_session')


@yield('content')



      </div>
      </div>
    </div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
  @yield('customizer')
<!-- END: Customizer-->

<!-- BEGIN: footer-->
  @yield('footer')
<!-- END: footer-->

<!-- BEGIN: include_js-->
  @yield('include_js')
<!-- END: include_js-->

  {{-- BEGIN: custom_js --}}
  @yield('custom_js')
  {{-- END: custom_js --}}



<script>
feather.replace({ class: 'foo', });
</script>

<script src="https://res.cloudinary.com/dvd2tat8q/raw/upload/v1571473785/js/sweetalert2.all_g3qaus.js"></script>


<script type="text/javascript">
  @include('sweetalert::alert')
</script>


</body>
<!-- END: Body-->

</html>
