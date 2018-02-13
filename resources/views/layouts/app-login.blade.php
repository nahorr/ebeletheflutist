<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
         <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Dashboard - Ace Admin</title>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="{{asset('ace/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />

        <!-- page specific plugin styles -->

        <!-- text fonts -->
        <link rel="stylesheet" href="{{asset('ace/assets/css/fonts.googleapis.com.css')}}" />

        <!-- ace styles -->
        <link rel="stylesheet" href="{{asset('ace/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

        <!--[if lte IE 9]>
            <link rel="stylesheet" href="{{asset('ace/assets/css/ace-part2.min.css')}}" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="{{asset('ace/assets/css/ace-skins.min.css')}}" />
        <link rel="stylesheet" href="{{asset('ace/assets/css/ace-rtl.min.css')}}" />

        <!--[if lte IE 9]>
          <link rel="stylesheet" href="{{asset('ace/assets/css/ace-ie.min.css')}}" />
        <![endif]-->

        <!-- inline styles related to this page -->

        <!-- ace settings handler -->
        <script src="{{asset('ace/assets/js/ace-extra.min.js')}}"></script>

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>

    <body class="login-layout">
        <div class="main-container">
            <div class="main-content">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <div class="login-container">
                            <div class="center">
                                <h1>
                                    <a href="{{ url('/') }}">
                                        <i class="ace-icon fa fa-leaf green"></i>
                                        <span class="red">Awesome</span>
                                        <span class="white" id="id-text2">Application</span>
                                    </a>
                                </h1>
                                <h4 class="blue" id="id-company-text">&copy; Nahorr Analytics</h4>
                            </div>

                            <div class="space-6"></div>

                            <div class="position-relative">

                            @yield('content')

                            </div><!-- /.position-relative -->

                        </div>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.main-content -->
        </div><!-- /.main-container -->

        <!-- basic scripts -->

        <!--[if !IE]> -->
        <script src="{{asset('ace/assets/js/jquery-2.1.4.min.js')}}"></script>

        <!-- <![endif]-->

        <!--[if IE]>
        <script src="assets/js/jquery-1.11.3.min.js"></script>
        <![endif]-->
        <script type="text/javascript">
            if('ontouchstart' in document.documentElement) document.write("<script src='{{asset('ace/assets/js/jquery.mobile.custom.min.js')}}'>"+"<"+"/script>");
        </script>


    </body>

       
</html>
