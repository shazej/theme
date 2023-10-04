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
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Sales Report</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Reports</li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <a href="#"  class="btn btn-primary">
                                    <i class="fas fa-file-pdf"></i>
                                </a>
                                <a class="btn btn-primary filter-btn" href="javascript:void(0);" id="filter_search">
                                    <i class="fas fa-filter"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
               
                    <!-- Search Filter -->
                    <div id="filter_inputs" class="card filter-card">
                        <div class="card-body pb-0">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Slect Date Range</label>
                                        <select class="select">
                                            <option>Select</option>
                                            <option>Today</option>
                                            <option>This Week</option>
                                            <option>This Month</option>
                                            <option>This Quarter</option>
                                            <option>This Year</option>
                                            <option>Previous Week</option>
                                            <option>Previous Month</option>
                                            <option>Previous Quarter</option>
                                            <option>Previous Year</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>From</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>To</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table"> 
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-center table-hover datatable">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Category</th>
                                                    <th>Sales</th>
                                                    <th>Refunded</th>
                                                    <th>Discounts</th>
                                                    <th>Taxs</th>
                                                    <th class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>7 Jan 2021</td>
                                                    <td>Accessories</td>
                                                    <td>$42</td>
                                                    <td>$0</td>
                                                    <td>$163</td>
                                                    <td>$221</td>
                                                    <td class="text-end">$762</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>28 Feb 2021</td>
                                                    <td>Books</td>
                                                    <td>$1249</td>
                                                    <td>$36</td>
                                                    <td>$3</td>
                                                    <td>$80</td>
                                                    <td class="text-end">$1238</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>10 Mar 2021</td>
                                                    <td>Others</td>
                                                    <td>$76</td>
                                                    <td>$0</td>
                                                    <td>$0</td>
                                                    <td>$4</td>
                                                    <td class="text-end">$80</td>
                                                </tr>
                                            </tbody>
                                        </table>
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