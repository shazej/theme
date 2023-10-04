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
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active">Preferences</li>
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
                                    <h5 class="card-title">Preferences</h5>
                                </div>
                                <div class="card-body">
                                    <!-- Form -->
                                    <form>
                                        <div class="row form-group">
                                            <label for="currencyLabel" class="col-sm-3 col-form-label input-label">Currency</label>
                                            <div class="col-sm-9">
                                                <select class="select" id="currencyLabel">
                                                    <option>USD - US Dollar</option>
                                                    <option>GBP - British Pound</option>
                                                    <option>EUR - Euro</option>
                                                    <option>INR - Indian Rupee</option>
                                                    <option>AUD - Australian Dollar</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="languageLabel" class="col-sm-3 col-form-label input-label">Language</label>
                                            <div class="col-sm-9">
                                                <select class="select" id="languageLabel">
                                                    <option>English</option>
                                                    <option>French</option>
                                                    <option>German</option>
                                                    <option>Italian</option>
                                                    <option>Spanish</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="timezoneLabel" class="col-sm-3 col-form-label input-label">Time Zone</label>
                                            <div class="col-sm-9">
                                                <select class="select" id="timezoneLabel">
                                                    <option>English</option>
                                                    <option>French</option>
                                                    <option>German</option>
                                                    <option>Italian</option>
                                                    <option>Spanish</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="dateformat" class="col-sm-3 col-form-label input-label">Date Format</label>
                                            <div class="col-sm-9">
                                                <select class="select" id="dateformat">
                                                    <option>2020 Nov 09</option>
                                                    <option>09 Nov 2020</option>
                                                    <option>09/11/2020</option>
                                                    <option>09.11.2020</option>
                                                    <option>09-11-2020</option>
                                                    <option>11/09/2020</option>
                                                    <option>2020/11/09</option>
                                                    <option>2020-11-09</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <label for="financialyear" class="col-sm-3 col-form-label input-label">Financial Year</label>
                                            <div class="col-sm-9">
                                                <select class="select" id="financialyear">
                                                    <option>january-december</option>
                                                    <option>february-january</option>
                                                    <option>march-february</option>
                                                    <option>april-march</option>
                                                    <option>may-april</option>
                                                    <option>june-may</option>
                                                    <option>july-june</option>
                                                    <option>august-july</option>
                                                    <option>september-august</option>
                                                    <option>october-september</option>
                                                    <option>november-october</option>
                                                    <option>december-november</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- Toggle Switch -->
                                        <label class="row form-group toggle-switch" for="preferencesSwitch1">
                                            <span class="col-8 col-sm-9 toggle-switch-content ml-0">
                                                <span class="d-block text-dark">Discount Per Item</span>
                                                <span class="d-block text-muted">Enable this if you want to add Discount to individual invoice items. By default, Discount is added directly to the invoice.</span>
                                            </span>
                                            <span class="col-4 col-sm-3">
                                                <input type="checkbox" class="toggle-switch-input" id="preferencesSwitch1">
                                                <span class="toggle-switch-label ms-auto">
                                                    <span class="toggle-switch-indicator"></span>
                                                </span>
                                            </span>
                                        </label>
                                        <!-- /Toggle Switch -->

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