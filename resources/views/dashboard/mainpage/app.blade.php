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


    <!-- BEGIN: include_js-->
      @yield('include_css')
    <!-- END: include_js-->


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


                    <!-- SESSION -->

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif

                    @if (session('restore'))
                    <div class="alert alert-success">
                        {{ session('restore') }}
                    </div>
                    @endif

                    @if (session('delete'))
                    <div class="alert alert-danger">
                        {{ session('delete') }}
                    </div>
                    @endif

                    <!-- SESSION END-->
              @if ($errors->any())



                  <div class="alert alert-warning alert-dismissible fade show error_message" role="alert">

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>

                    @foreach ($errors->all() as $error)
                          <strong class="d-block">{{ $error }}</strong>
                    @endforeach


                  </div>



              @endif


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
