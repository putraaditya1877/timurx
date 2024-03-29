<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/bootstrap-responsive.min.css" />
    <link rel="stylesheet" href="<?= BASEURL ?>assets/css/matrix-login.css" />
    <link href="<?= BASEURL ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>

<body>
    <div id="loginbox">
        <form action="<?= BASEURL ?>admin/_login" method="POST" id="loginform" class="form-vertical" action="index.html">
            <div class="control-group normal_text">
                <!-- <h3><img src="<?= BASEURL ?>img/logo.png" alt="Logo" /></h3> -->
                <h3>Login Page</h3>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <?php Flasher::flash();  ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lg"><i class="icon-user"> </i></span><input type="text" name="email" placeholder="E-mail" />
                    </div>
                </div>
            </div>
            <div class="control-group">
                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" name="password" placeholder="Password" />
                    </div>
                </div>
            </div>
            <div class="form-actions">
                <!-- <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-recover">Lost
                        password?</a></span> -->
                <!-- <span class="pull-right"><a type="submit" class="btn btn-success" /> Login</a></span> -->
                <span class="pull-right">
                    <button type='submit' class="btn btn-success btn-login btn-lg text-white">Login</button>
                </span>
            </div>
        </form>
        <!-- <form id="recoverform" action="#" class="form-vertical">
            <p class="normal_text">Enter your e-mail address below and we will send you instructions how to recover a
                password.</p>
            <div class="controls">
                <div class="main_input_box">
                    <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text"
                        placeholder="E-mail address" />
                </div>
            </div>
            <div class="form-actions">
                <span class="pull-left"><a href="#" class="flip-link btn btn-success" id="to-login">&laquo; Back to
                        login</a></span>
                <span class="pull-right"><a class="btn btn-info" />Reecover</a></span>
            </div>
        </form> -->
    </div>
    <script src="<?= BASEURL ?>assets/js/jquery.min.js"></script>
    <script src="<?= BASEURL ?>assets/js/matrix.login.js"></script>
</body>

</html>