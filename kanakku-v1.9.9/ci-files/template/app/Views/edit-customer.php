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
                                <h3 class="page-title">Customers</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="customer">Customers</a></li>
                                    <li class="breadcrumb-item active">Edit Customers</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Basic Info</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Display Name</label>
                                                    <input type="text" class="form-control" value="Brian Johnson">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control" value="brianjohnson@example.com">
                                                </div>
                                                <div class="form-group">
                                                    <label>Primary Currency</label>
                                                    <select class="select">
                                                        <option selected>USD- US Dollar</option>
                                                        <option>EUR Euro</option>
                                                        <option>INR Indoan Rupee</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Primary Contact Name</label>
                                                    <input type="text" class="form-control" value="Brian Johnson">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" value="+1-252-444-7535">
                                                </div>
                                                <div class="form-group">
                                                    <label>Website</label>
                                                    <input type="text" class="form-control" value="http://www.example.com">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <h4 class="card-title mt-4">Billing Address</h4>
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="Brian Johnson">
                                                </div>
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" value="Georgia">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder="938 Green Acres Road"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="select">
                                                        <option>Afghanistan</option>
                                                        <option>Afghanistan</option>
                                                        <option>Albania</option>
                                                        <option>Algeria</option>
                                                        <option>American Samoa</option>
                                                        <option>Andorra</option>
                                                        <option>Angola</option>
                                                        <option>Anguilla</option>
                                                        <option selected>United States</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" value="ROME">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" value="+1-252-444-7535">
                                                </div>
                                                <div class="form-group">
                                                    <label>Zip Code</label>
                                                    <input type="text" class="form-control" value="30161">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <h4 class="card-title mt-4">Shipping Address</h4>
                                    <form action="#">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-outline-primary btn-sm">Copy from Billing</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <input type="text" class="form-control" value="Brian Johnson">
                                                </div>
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control" value="Georgia">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <textarea rows="5" cols="5" class="form-control" placeholder="938 Green Acres Road"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="select">
                                                        <option>Afghanistan</option>
                                                        <option>Afghanistan</option>
                                                        <option>Albania</option>
                                                        <option>Algeria</option>
                                                        <option>American Samoa</option>
                                                        <option>Andorra</option>
                                                        <option>Angola</option>
                                                        <option>Anguilla</option>
                                                        <option selected>United States</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control" value="ROME">
                                                </div>
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control" value="+1-252-444-7535">
                                                </div>
                                                <div class="form-group">
                                                    <label>Zip Code:</label>
                                                    <input type="text" class="form-control" value="30161">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-end mt-4">
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
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