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
                            <div class="col-sm-6">
                                <h3 class="page-title">Settings</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tax Types</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->
                
                    <div class="row">
                        <div class="col-xl-3 col-md-4">
                        
                            <?= $this->include('partials/settings_sidebar') ?>
                            
                        </div>
                        
                        <div class="col-xl-9 col-md-8">
                            <div class="card card-table">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col">
                                            <h5 class="card-title">Tax Types</h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="javascript:void(0);" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#add_tax">Add New Tax</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover mb-0">
                                            <thead class="thead-light">
                                                <tr>
                                                    <th>Tax Name </th>
                                                    <th>Tax Percentage (%) </th>
                                                    <th>Status</th>
                                                    <th class="text-right">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>VAT</td>
                                                    <td>14%</td>
                                                    <td>
                                                        <span class="badge bg-success-light">Active</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>GST</td>
                                                    <td>30%</td>
                                                    <td>
                                                        <span class="badge bg-danger-light">Inactive</span>
                                                    </td>
                                                    <td class="text-right">
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#edit_tax" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> Edit</a> 
                                                        <a href="#" data-bs-toggle="modal" data-bs-target="#delete_tax" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i>Delete</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Add Tax Modal -->
                    <div id="add_tax" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add Tax</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Tax Name <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                                            <input class="form-control" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Pending</option>
                                                <option>Approved</option>
                                            </select>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Add Tax Modal -->
                    
                    <!-- Edit Tax Modal -->
                    <div id="edit_tax" class="modal custom-modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Tax</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label>Tax Name <span class="text-danger">*</span></label>
                                            <input class="form-control" value="VAT" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Tax Percentage (%)  <span class="text-danger">*</span></label>
                                            <input class="form-control" value="14%" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Status <span class="text-danger">*</span></label>
                                            <select class="select">
                                                <option>Active</option>
                                                <option>Inactive</option>
                                            </select>
                                        </div>
                                        <div class="submit-section">
                                            <button class="btn btn-primary submit-btn">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Edit Tax Modal -->
                    
                    <!-- Delete Tax Modal -->
                    <div class="modal custom-modal fade" id="delete_tax" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div class="modal-icon text-center mb-3">
                                        <i class="fas fa-trash-alt text-danger"></i>
                                    </div>
                                    <div class="modal-text text-center">
                                        <h2>Delete Tax</h2>
                                        <p>Are you sure want to delete?</p>
                                    </div>
                                </div>
                                <div class="modal-footer text-center">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-primary">Delete</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Delete Tax Modal -->
                    
                </div>
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>