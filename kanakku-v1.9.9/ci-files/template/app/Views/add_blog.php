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
                    <div class="row">
                        <div class="col-xl-8 offset-xl-2">
                        
                            <!-- Page Header -->
                            <div class="page-header">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <h3 class="page-title">Add Post</h3>
                                    </div>
                                </div>
                            </div>
                            <!-- /Page Header -->
                            
                            <div class="card">
                                <div class="card-body">
                                    <div class="bank-inner-details">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Title<span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group modal-select-box">
                                                    <label>Category</label>
                                                    <select class="select">
                                                        <option value="1">Expenses</option>
                                                        <option value="2">Sales</option>
                                                        <option value="3">profit-loss</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Tag</label>
                                                    <input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Enter Tags" name="services" value="Tax ">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Blog Image</label>
                                                    <div class="change-photo-btn">
                                                        <div>
                                                        <p>Add Image</p></div>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div id="editor"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" blog-categories-btn pt-0">
                                    <div class="bank-details-btn ">
                                        <a href="blogs" class="btn btn-primary me-2">Add Post</a>
                                    </div>
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