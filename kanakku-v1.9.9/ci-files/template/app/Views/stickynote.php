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
                                <h3 class="page-title">Sticky Note</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Sticky Note</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                    
                        <!-- Sticky -->
                        <div class="col-md-12"> 
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Sticky Note <a class="btn btn-primary float-sm-end m-l-10" id="add_new" href="javascript:;">Add New Note</a></h5>
                                </div>
                                <div class="card-body">
                                     <div class="sticky-note" id="board"></div>
                                </div>
                            </div>
                        </div>
                        <!-- /Sticky -->
                            
                    </div>
                
                </div>          
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>