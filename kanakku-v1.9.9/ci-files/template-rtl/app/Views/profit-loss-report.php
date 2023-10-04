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
                                <h3 class="page-title">Profit & Loss Report</h3>
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
                                                    <th>Income</th>
                                                    <th>Income Amount</th>
                                                    <th>Expense</th>
                                                    <th>Expenses Amount</th>
                                                    <th class="text-end">Net Profit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>5 Jan 2021</td>
                                                    <td>Service Rendered</td>
                                                    <td>$ 90000</td>
                                                    <td>Salaries</td>
                                                    <td>$20000</td>
                                                    <td class="text-end">$70000</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>6 Jan 2021</td>
                                                    <td>Service Rendered</td>
                                                    <td>$ 50000</td>
                                                    <td>Salaries</td>
                                                    <td>$10000</td>
                                                    <td class="text-end">$40000</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>6 Jan 2021</td>
                                                    <td>Service Rendered</td>
                                                    <td>$ 50000</td>
                                                    <td>Salaries</td>
                                                    <td>$10000</td>
                                                    <td class="text-end">$40000</td>
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