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
                                <h3 class="page-title">Invoice Grid</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Invoice Grid</li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <a href="add_invoice" class="btn btn-primary">
                                    <i class="fas fa-plus"></i>
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
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <label>Customer:</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Status:</label>
                                        <select class="select">
                                            <option>Select Status</option>
                                            <option>Draft</option>
                                            <option>Sent</option>
                                            <option>Viewed</option>
                                            <option>Expired</option>
                                            <option>Accepted</option>
                                            <option>Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>From</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>To</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Invoice Number</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Search Filter -->
                    
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-04.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Barbara Moore</a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220001</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$118</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">23 Nov, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-success-light">Paid</span>
                                            </div>
                                            <div class="col d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-06.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Karlene Chaidez</a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220002</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$222</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">18 Nov, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-info-light">Sent</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-08.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Russell Copeland</a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220003</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$347</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">10 Nov, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-warning-light">Partially Paid</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-10.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Joseph Collins</a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220004</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$826</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">25 Sep, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-danger-light">Overdue</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-11.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Jennifer Floyd</a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220005</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$519</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">17 Sep, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-info-light">Sent</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-09.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Leatha Bailey </a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220006</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$480</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">2 Oct, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-warning-light">Partially Paid</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-03.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Marie Canales </a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220007</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$2700</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">30 Dec, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-danger-light">Overdue</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="inv-header mb-3">
                                            <a href="profile" class="avatar avatar-sm me-2">
                                                <img class="avatar-img rounded-circle" src="<?php echo base_url();?>/assets/img/profiles/avatar-12.jpg" alt="User Image"> 
                                            </a>
                                            <a class="text-dark" href="profile">Alex Campbell </a>
                                        </div>
                                        <div class="invoice-id mb-3">
                                            <a href="view_invoice" class="text-primary btn-link">#20220008</a>
                                        </div>
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <span class="text-sm text-muted"><i class="far fa-money-bill-alt"></i> Amount</span>
                                                <h6 class="mb-0">$1999</h6>
                                            </div>
                                            <div class="col-auto text-end">
                                                <span class="text-sm text-muted"><i class="far fa-calendar-alt"></i> Due Date</span>
                                                <h6 class="mb-0">27 Apr, 2022</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <span class="badge bg-success-light">Paid</span>
                                            </div>
                                            <div class="col text-end d-flex justify-content-end">
                                                <a href="view_invoice" class="btn btn-light btn-sm me-2 rounded-pill circle-btn">
                                                    <i class="far fa-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-light btn-sm rounded-pill circle-btn">
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </div>
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