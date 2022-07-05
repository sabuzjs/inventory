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
    <title>Login</title>
    
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
                <div class="card border-success">
                    <div class="card-header bg-success">
                        <h4 class="m-b-0 text-white">Inventory system</h4></div>
                    <div class="card-body">
                        <h3 class="card-title">Login</h3>
                        <h3 class="float-end" style="margin-top: -50px"><img src="{{asset('inv/assets/images/background/Login-amico.png')}}" alt="No img" width="90" height="90"></h3>
                        @if (session('status'))
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group m-t-40">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="email" required="" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="d-flex no-block align-items-center">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="remember">
                                            <label class="form-check-label" for="customCheck1">Remember me</label>
                                        </div>
                                    </div>   
                                </div>
                            </div>
                        <button type="submit" class="btn btn-primary text-white">Login</button>
                    </form>
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