<?php include_once "header.php" ?>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary">
        <div class="card-header text-center">
            <a href="<?php echo base_url();?>" class="h1"><b>Abc</b> TECH</a>
        </div>
        <div class="card-body">

            <?php
                $message=$this->session->userdata('message');
                if ($message) {
                    echo "<p class='login-box-msg login-failed'>$message</p>";
                    $this->session->unset_userdata('message');
                }
                else{
                    echo "<p class='login-box-msg'>Sign in to start your session</p>";
                }

            ?>

            <form action="<?php echo base_url()?>login_check" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="admin_email" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="admin_pass" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <!--<div class="social-auth-links text-center mt-2 mb-3">
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>-->
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="<?php echo base_url();?>forgot_pw">I forgot my password</a>
            </p>
            <!--<p class="mb-0">
                <a href="register.html" class="text-center">Register a new membership</a>
            </p>-->
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>
<!-- /.login-box -->
<?php include_once "footer.php"?>
