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
                                <h3 class="page-title">Flot Chart</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Flot Charts</li>
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
                                    <div class="h-250" id="flotBar1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Bar Chart</div>
                                </div>
                                <div class="card-body">
                                    <div  class="h-250" id="flotBar2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Line  Chart</div>
                                </div>
                                <div class="card-body">
                                    <div  class="h-250" id="flotLine1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Line ChartPOints</div>
                                </div>
                                <div class="card-body">
                                    <div class="h-250" id="flotLine2"></div>
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
                                    <div class="h-250" id="flotArea1"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Area Chart Points</div>
                                </div>
                                <div class="card-body">
                                    <div class="h-250" id="flotArea2"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Chart -->
                        
                        <!-- Chart -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Pie Chart</div>
                                </div>
                                <div class="card-body">
                                    <div class="h-250" id="flotPie1"></div>
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
                                    <div class="h-250" id="flotPie2"></div>
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