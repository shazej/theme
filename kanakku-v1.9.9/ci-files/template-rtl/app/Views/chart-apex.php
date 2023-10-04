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
                                <h3 class="page-title">Charts</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Charts</li>
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
                                    <h5 class="card-title">Apex Simple</h5>
                                </div>
                                <div class="card-body">
                                    <div id="s-line"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                            
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Area Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="s-line-area"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                            
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Column Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="s-col"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Column Stacked Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="s-col-stacked"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Bar Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="s-bar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Mixed Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="mixed-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Donut Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="donut-chart"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Radial Chart</h5>
                                </div>
                                <div class="card-body">
                                    <div id="radial-chart"></div>
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