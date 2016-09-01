<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />

    <title>Xenon - Login Light</title>

    <link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic">
    <link rel="stylesheet" href="{{asset('assets/css/fonts/linecons/css/linecons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-core.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-forms.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-components.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/xenon-skins.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}" media="screen" title="no title" charset="utf-8">
    <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body login-page login-light">


<div class="login-container">

    <div class="row">

        <div class="col-sm-6">

            <script type="text/javascript">
                jQuery(document).ready(function($)
                {
                    // Reveal Login form
                    setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);
                });
            </script>

            <!-- Errors container -->
            @if(session('msg'))
                <div class="errors-container">
                    {{session('msg')}}
                </div>
            @endif
        <!-- Add class "fade-in-effect" for login form effect -->
            <form method="post" role="form" id="login" class="login-form fade-in-effect" action="{{asset('admin/signup')}}">
                {{csrf_field()}}
                <div class="login-header">
                    <a href="" class="logo">
                        <img src="{{asset('assets/images/logo-white-bg@2x.png')}}" alt="" width="80" />
                        <span>log in</span>
                    </a>

                    <p>欢迎来到easyshop系统！Easy!</p>
                </div>


                <div class="form-group">
                    <label class="control-label" for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" autocomplete="off" />
                </div>

                <div class="form-group">
                    <label class="control-label" for="passwd">Password</label>
                    <input type="password" class="form-control" name="password" id="passwd" autocomplete="off" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary  btn-block text-left">
                        <i class="fa-lock"></i>
                        Log In
                    </button>
                </div>

                <div class="login-footer">
                    <a href="#">Forgot your password?</a>

                    <div class="info-links">
                        <a href="#">ToS</a> -
                        <a href="#">Privacy Policy</a>
                    </div>

                </div>

            </form>

            <!-- External login -->
            <!-- <div class="external-login"> -->
            <!-- <a href="#" class="facebook">
                <i class="fa-facebook"></i>
                Facebook Login
            </a> -->

            <!--
            <a href="#" class="twitter">
                <i class="fa-twitter"></i>
                Login with Twitter
            </a>

            <a href="#" class="gplus">
                <i class="fa-google-plus"></i>
                Login with Google Plus
            </a>
             -->
            <!-- </div> -->

        </div>

    </div>

</div>



<!-- Bottom Scripts -->
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/js/resizeable.js')}}"></script>
<script src="{{asset('assets/js/joinable.js')}}"></script>
<script src="{{asset('assets/js/xenon-api.js')}}"></script>
<script src="{{asset('assets/js/xenon-toggles.js')}}"></script>
<script src="{{asset('assets/js/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/toastr/toastr.min.js')}}"></script>


<!-- JavaScripts initializations and stuff -->
<script src="{{asset('assets/js/xenon-custom.js')}}"></script>

</body>
</html>
