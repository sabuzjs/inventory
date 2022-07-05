<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('inv/assets/images/favicon.png')}}">
    <title>Welcome</title>
    
    <!-- page css -->
    <link href="{{asset('inv/dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('inv/dist/css/style.min.css')}}" rel="stylesheet">
    
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background-image:url(../assets/images/background/login-register.png);">
            <div class="login-box card shadow mb-5 bg-white rounded">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title">System Oparetor</h4>
                        <p class="card-text"><img src="{{asset('inv/assets/images/background/Operating system-amico.png')}}" alt="No img" width="100" height="100"></p>
                        <a href="{{ route('login') }}" class="btn btn-primary text-white"><i class="ti-user"></i> Admin</a>
                        <a href="#" class="btn btn-success text-white"><i class="ti-pencil-alt"></i> Sign up</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('inv/assets/node_modules/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('inv/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!--Custom JavaScript -->
    {{-- <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script> --}}
    
</body>
</html>