<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/webtestiq/Login_v1/images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/css/util.css">
    <link rel="stylesheet" type="text/css" href="/webtestiq/Login_v1/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="/webtestiq/HinhIQ/logo1.png" alt="logo">
                </div>

                <form class="login100-form validate-form" action="/webtestiq/index.php/Admin_Con/Login_Post" method="post" enctype="multipart/form-data">
                    <span class="login100-form-title">
                        Admin Login
                    </span>

                    <br />
                    <div class="wrap-input100 validate-input" data-validate="Hãy nhập tên tài khoản !">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-user-secret" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Hãy nhập mật khẩu !">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>




    <!--===============================================================================================-->
    <script src="/webtestiq/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="/webtestiq/Login_v1/vendor/bootstrap/js/popper.js"></script>
    <script src="/webtestiq/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="/webtestiq/Login_v1/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="/webtestiq/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
    <script>
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>
    <!--===============================================================================================-->
    <script src="/webtestiq/Login_v1/js/main.js"></script>

</body>
</html>