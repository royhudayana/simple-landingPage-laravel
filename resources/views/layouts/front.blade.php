
<!DOCTYPE html>
<html>
<head>

    <!-- Title -->
    <title>{{ config('app.name') }} | a product of {{ config('app.company') }}</title>

    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta charset="UTF-8">
    <meta name="description" content="{{ config('app.name') }}" />
    <meta name="keywords" content="{{ config('app.name') }}" />
    <meta name="author" content="{{ config('app.company') }}" />

    <!-- Styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:500,400,300' rel='stylesheet' type='text/css'>
    <link href="{{asset('front/assets/plugins/pace-master/themes/blue/pace-theme-flash.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/uniform/css/uniform.default.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front/assets/plugins/fontawesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('front/assets/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/assets/plugins/tabstylesinspiration/css/tabs.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/assets/plugins/tabstylesinspiration/css/tabstyles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/assets/plugins/pricing-tables/css/style.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('front/assets/css/landing.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/toastr/toastr.min.css')}}" rel="stylesheet"/>

    <script src="{{asset('front/assets/plugins/pricing-tables/js/modernizr.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body data-spy="scroll" data-target="#header">
<!--Content-->
@yield('content')
<!--Content-->

<!-- Javascripts -->
<script src="{{asset('front/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/pace-master/pace.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/uniform/jquery.uniform.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/wow/wow.min.js')}}"></script>
<script src="{{asset('front/assets/plugins/tabstylesinspiration/js/cbpfwtabs.js')}}"></script>
<script src="{{asset('front/assets/plugins/pricing-tables/js/main.js')}}"></script>
<script src="{{asset('front/assets/js/landing.js')}}"></script>
<script src="{{asset('admin/assets/plugins/toastr/toastr.min.js')}}"></script>

</body>

</html>