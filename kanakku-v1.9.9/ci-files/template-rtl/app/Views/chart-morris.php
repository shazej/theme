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
                                <h3 class="page-title">Morris Chart</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Morris Charts</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                    
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="morrisBar1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Stacked Bar Chart </div>
                                </div>
                                <div class="card-body">
                                    <div id="morrisBar3"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Line Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="morrisLine1"></div>
                                    </div>
                                </div>
                        </div>
                        <!-- /Chart -->
                        
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Area Chart</div>
                                    </div>
                                    <div class="card-body">
                                        <div id="morrisArea1"></div>
                                    </div>
                                </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="morrisBar6"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Line Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="morrisBar7"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Donut Chart</div>
                                </div>
                                <div class="card-body">
                                    <div id="morrisDonut1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                    </div>
                
                </div>          
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>