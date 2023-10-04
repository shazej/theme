<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>Error 500</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.ico">

            <?= $this->include('partials/head-css') ?>

</head>


    <!-- <body data-layout="horizontal"> -->
 <body class="error-page">
    
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            
            <div class="error-box">
                <h1>500</h1>
                <h3 class="h2 mb-3"><i class="fas fa-exclamation-circle"></i> Oops! Something went wrong</h3>
                <p class="h4 font-weight-normal">The page you requested was not found.</p>
                <a href="dashboard" class="btn btn-primary">Back to Home</a>
            </div>
        
        </div>
        <!-- /Main Wrapper -->

        <!-- JAVASCRIPT -->
       <?= $this->include('partials/vendor-scripts') ?>

    </body>

</html>