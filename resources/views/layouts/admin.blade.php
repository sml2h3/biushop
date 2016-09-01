<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>easyshop后台管理系统-天津蚁尚科技有限公司</title>

    {{--<link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">--}}
    <link rel="stylesheet" href="{{asset('assets/css/fonts/linecons/css/linecons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-components.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-skins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body">
@yield('content')
<!-- Bottom Scripts -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/resizeable.js')}}"></script>
<script src="{{asset('assets/js/joinable.js')}}"></script>
<script src="{{asset('assets/js/xenon-api.js')}}"></script>
<script src="{{asset('assets/js/xenon-toggles.js')}}"></script>
<script>
    $(document).ready(function(){
        var title = '{{$_SERVER['REQUEST_URI']}}';
        var title = title.substr(7);
        $('a[href='+title+']').addClass("active");
        $('a[href='+title+']').parent().addClass("active");
        $('a[href='+title+']').parent().parent().parent().addClass("active").addClass("opened");
    })
</script>
<!-- JavaScripts initializations and stuff -->
<script src="{{asset('assets/js/xenon-custom.js')}}"></script>

</body>
</html>