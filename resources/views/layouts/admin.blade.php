<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<html>
  <head>
    <meta charset="utf-8"/>
    <title>Metronic | Admin Dashboard Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    @section('common_css')
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <!-- <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
      <link href="{{asset('backend/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('backend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('backend/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('backend/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      <link href="{{asset('backend/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
      <link href="{{asset('backend/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <link href="{{asset('backend/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('backend/css/darkblue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
      <link href="{{asset('backend/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END THEME LAYOUT STYLES -->
    @show

    @yield('custom_css')
    <link rel="shortcut icon" href="favicon.ico"/>
  </head>
  
  <body>
    @include('layouts.admin.header')
    
    @include('layouts.admin.slidemenu')

    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
      <div class="page-content">
        @yield('modal')
          
          <!-- BEGIN PAGE HEADER-->
          <h3 class="page-title">
              Blank Page <small>blank page</small>
          </h3>
          <div class="page-bar">
              <ul class="page-breadcrumb">
                <li>
                  <i class="fa fa-home"></i>
                  <a href="index.html">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="#">Page Layouts</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="#">Blank Page</a>
                </li>
              </ul>
          </div>
          <!-- END PAGE HEADER-->
          <!-- BEGIN PAGE CONTENT-->
          <div class="row">
              <div class="col-md-12">
                  @yield('content')
              </div>
          </div>
          <!-- END PAGE CONTENT-->
      </div>
    </div>
    <!-- END CONTENT -->

    @include('layouts.admin.footer')

    @section('common_js')
      <script src="{{asset('backend/plugins/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
      <!-- END CORE PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="{{asset('backend/js/app.min.js')}}" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
      <script src="{{asset('backend/js/layout.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('backend/js/demo.min.js')}}" type="text/javascript"></script>
      
      <script type="text/javascript">
      jQuery(document).ready(function() {    
         App.init(); // init metronic core componets
         Layout.init(); // init layout
      });
      </script>
    @show

    @yield('custom_js')
  </body>  
</html>