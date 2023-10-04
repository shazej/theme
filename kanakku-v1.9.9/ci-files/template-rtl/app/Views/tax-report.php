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
                                <h3 class="page-title">Taxs Report</h3>
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
                                                    <th>Economic Zone</th>
                                                    <th>Tax</th>
                                                    <th>Tax Rate</th>
                                                    <th>Net Revenue</th>
                                                    <th>Gross Revenue</th>
                                                    <th class="text-end">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>7 Jan 2021</td>
                                                    <td>Tax Free Customers</td>
                                                    <td>Tax Free</td>
                                                    <td>5%</td>
                                                    <td>$108</td>
                                                    <td>$108</td>
                                                    <td class="text-end">$0</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>28 Feb 2021</td>
                                                    <td>Default</td>
                                                    <td>General Sales Tax</td>
                                                    <td>6%</td>
                                                    <td>$3660</td>
                                                    <td>$3898</td>
                                                    <td class="text-end">$238</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>10 Mar 2021</td>
                                                    <td>Default</td>
                                                    <td>General Sales Tax</td>
                                                    <td>7%</td>
                                                    <td>$4517</td>
                                                    <td>$4889</td>
                                                    <td class="text-end">$372</td>
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