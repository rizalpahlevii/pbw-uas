<?php
if (isset($_POST['submit'])) {
    include("../helpers/database.php");
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $db->get("*", "users", "WHERE username='$username' AND password='$password'");
    $row = $result->rowCount();
    $data = $result->fetch();
    if ($row > 0) {
        $_SESSION['is_login'] = true;
        $_SESSION['session_id'] = $data['id'];
        $_SESSION['session_username'] = $data['username'];
        $_SESSION['session_name'] = $data['name'];
        echo "<script>document.location.href='index.php'</script>";
    } else {
        echo "<script>alert('Username atau Password Salah')</script>";
        echo "<script>document.location.href='login.php'</script>";
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php include("../helpers/config.php") ?>
    <title>Ecommerce | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/adminlte' ?>/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/adminlte' ?>/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/adminlte' ?>/bower_components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/adminlte' ?>/dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo APP_URL . 'assets/adminlte' ?>/plugins/iCheck/square/blue.css">


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo APP_URL . 'assets/adminlte' ?>/index2.html"><b>Ecommerce</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form action="" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password" required>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">

                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <input type="submit" value="Login" name="submit" class="btn btn-primary btn-block btn-flat">
                    </div>
                    <!-- /.col -->
                </div>
            </form>




        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery 3 -->
    <script src="<?php echo APP_URL . 'assets/adminlte' ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?php echo APP_URL . 'assets/adminlte' ?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo APP_URL . 'assets/adminlte' ?>/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function() {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' /* optional */
            });
        });
    </script>
</body>

</html>