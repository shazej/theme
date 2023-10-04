<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico">

            <?= $this->include('partials/head-css') ?>

</head>


    <!-- <body data-layout="horizontal"> -->
<body>
    
        <!-- Main Wrapper -->
        <div class="main-wrapper login-body">

            <div class="login-wrapper">
                <div class="container">
                <img class="img-fluid logo-dark mb-4" src="assets/img/logo.png" alt="Logo">
                    <div class="loginbox">
                        <div class="login-right">
                            <div class="login-right-wrap">
                                <div class="lock-user">
                                    <img class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="User Image">
                                    <h4>John Doe</h4>
                                </div>
                                
                                <!-- Form -->
                                <form action="<?php echo base_url();?>/dashboard">
                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <input class="form-control" type="text">
                                    </div>
                                    <div class="form-group mb-0">
                                        <button class="btn btn-lg btn-block btn-primary w-100" type="submit">Enter</button>
                                    </div>
                                </form>
                                <!-- /Form -->
                                
                                <div class="text-center dont-have">Sign in as a different user? <a href="index">Login</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main Wrapper -->

        <!-- JAVASCRIPT -->
       <?= $this->include('partials/vendor-scripts') ?>

    </body>

</html>