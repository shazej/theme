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
                                <h3 class="page-title">Range Slider</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Range Slider</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                    
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Default</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_01">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Min-Max</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_02">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Prefix</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_03">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Range</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_04">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Step</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_05">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Custom Values</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_06">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Modern skin</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_13">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Sharp Skin</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_14">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Round skin</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_15">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                        <!-- Rangeslider -->
                        <div class="col-md-6">  
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Square Skin</h5>
                                </div>
                                <div class="card-body">
                                     <input type="text" id="range_16">
                                </div>
                            </div>
                        </div>
                        <!-- /Rangeslider -->
                        
                            
                    </div>              
                </div>          
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>