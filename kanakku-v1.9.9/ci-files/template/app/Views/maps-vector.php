<!DOCTYPE html>
<html lang="en">

<head>

    <?= $title_meta ?>

    <?= $this->include('partials/head-css') ?>

</head>

<?= $this->include('partials/body') ?>


    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-wrapper">
    <?= $this->include('partials/menu') ?>

<!-- Page Wrapper -->
            <div class="page-wrapper">
         
                <div class="content container-fluid">
                
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                <h3 class="page-title">Vector Maps</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Vector Maps</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <!-- World Map -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">World Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="world_map" style="height: 400px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /World Map -->
               
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- USA Map -->
                            <div class="card bg-white">
                                <div class="card-header">
                                    <h5 class="card-title">USA Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="usa" style="height: 400px"></div>
                                </div>
                            </div>
                            <!-- /USA Map -->
                        </div>
                        <div class="col-lg-6">
                            <!-- UK Map -->
                            <div class="card bg-white">
                                <div class="card-header">
                                    <h5 class="card-title">UK Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="uk" style="height: 400px"></div>
                                </div>
                            </div>
                            <!-- /UK Map -->
                        </div>
                    </div>
               
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- India Map -->
                            <div class="card bg-white">
                                <div class="card-header">
                                    <h5 class="card-title">India Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="india" style="height: 400px"></div>
                                </div>
                            </div>
                            <!-- /India Map -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Russia Map -->
                            <div class="card bg-white">
                                <div class="card-header">
                                    <h5 class="card-title">Russia Map</h5>
                                </div>
                                <div class="card-body">
                                    <div id="russia" style="height: 400px"></div>
                                </div>
                            </div>
                            <!-- /Russia Map -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>