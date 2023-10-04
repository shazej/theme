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
                
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h3 class="page-title">Settings</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Delete Account</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                        
                            <?= $this->include('partials/settings_sidebar') ?>
                            
                        </div>
                        
                        <div class="col-xl-9 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Delete your account</h5>
                                </div>
                                <div class="card-body">
                                
                                    <!-- Form -->
                                    <form>
                                        <p class="card-text">When you delete your account, you lose access to Kanakku account services, and we permanently delete your personal data.</p>
                                        <p class="card-text">Are you sure you want to close your account?</p>

                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="delete_account">
                                                <label class="custom-control-label text-danger" for="delete_account">Confirm that I want to delete my account.</label>
                                            </div>
                                        </div>

                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    <!-- /Form -->
                                    
                                </div>
                            </div>
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