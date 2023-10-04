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
                            <div class="col">
                                <h3 class="page-title">Accordions</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Components</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Page Header -->

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Default Tabs</h4>
    
                                    <ul class="nav nav-tabs">
                                        <li class="nav-item">
                                            <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Messages
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="home">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane show active" id="profile">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane" id="messages">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Tabs Justified</h4>
    
                                    <ul class="nav nav-pills navtab-bg nav-justified">
                                        <li class="nav-item">
                                            <a href="#home1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Messages
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="home1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane show active" id="profile1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane" id="messages1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
    
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Tabs Vertical Left</h4>
    
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                                    aria-selected="true">
                                                    Home</a>
                                                <a class="nav-link mb-1" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile"
                                                    aria-selected="false">
                                                    Profile</a>
                                                <a class="nav-link mb-1" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                    aria-selected="false">
                                                    Messages</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">
                                                    Settings</a>
                                            </div>
                                        </div> <!-- end col-->
                                        <div class="col-sm-9">
                                            <div class="tab-content">
                                                <div class="tab-pane fade active show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        qui.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                            </div>
                                        </div> <!-- end col-->
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Tabs Vertical Right</h4>
    
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane fade active show" id="v-pills-home2" role="tabpanel" aria-labelledby="v-pills-home-tab2">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-profile2" role="tabpanel" aria-labelledby="v-pills-profile-tab2">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-messages2" role="tabpanel" aria-labelledby="v-pills-messages-tab2">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-settings2" role="tabpanel" aria-labelledby="v-pills-settings-tab2">
                                                    <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                                        Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
                                        <div class="col-sm-3">
                                            <div class="nav flex-column nav-pills nav-pills-tab" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active show mb-1" id="v-pills-home-tab2" data-bs-toggle="pill" href="#v-pills-home2" role="tab" aria-controls="v-pills-home2"
                                                    aria-selected="true">
                                                    Home</a>
                                                <a class="nav-link mb-1" id="v-pills-profile-tab2" data-bs-toggle="pill" href="#v-pills-profile2" role="tab" aria-controls="v-pills-profile2"
                                                    aria-selected="false">
                                                    Profile</a>
                                                <a class="nav-link mb-1" id="v-pills-messages-tab2" data-bs-toggle="pill" href="#v-pills-messages2" role="tab" aria-controls="v-pills-messages2"
                                                    aria-selected="false">
                                                    Messages</a>
                                                <a class="nav-link mb-1" id="v-pills-settings-tab2" data-bs-toggle="pill" href="#v-pills-settings2" role="tab" aria-controls="v-pills-settings2"
                                                    aria-selected="false">
                                                    Settings</a>
                                            </div>
                                        </div> <!-- end col -->
                                    </div> <!-- end row-->
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
    
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Tabs Bordered</h4>
    
                                    <ul class="nav nav-tabs nav-bordered">
                                        <li class="nav-item">
                                            <a href="#home-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b1" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b1" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Messages
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="home-b1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane show active" id="profile-b1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane" id="messages-b1">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
    
                        <div class="col-xl-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="header-title mb-4">Tabs Bordered Justified</h4>
    
                                    <ul class="nav nav-tabs nav-bordered nav-justified">
                                        <li class="nav-item">
                                            <a href="#home-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#profile-b2" data-bs-toggle="tab" aria-expanded="true" class="nav-link active">
                                                Profile
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#messages-b2" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                Messages
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="home-b2">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane active" id="profile-b2">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                        <div class="tab-pane" id="messages-b2">
                                            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                            <p class="mb-0">Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end card-->
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
    
                    <div class="row">
                        <div class="col-xl-6">
                            <div id="accordion" class="custom-faq mb-3">
                                <div class="card mb-1">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <i class="mdi mdi-help-circle me-1 text-primary"></i> 
                                                What is Vakal text here?
                                            </a>
                                        </h5>
                                    </div>
                        
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseTwo" aria-expanded="false">
                                                <i class="mdi mdi-help-circle me-1 text-primary"></i> 
                                                Why use Vakal text here?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseThree" aria-expanded="false">
                                                <i class="mdi mdi-help-circle me-1 text-primary"></i> 
                                                How many variations exist?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card mb-1">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="accordion-faq m-0">
                                            <a class="text-dark" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false">
                                                <i class="mdi mdi-help-circle me-1 text-primary"></i> 
                                                What is Vakal text here?
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="collapseFour" data-bs-parent="#accordion">
                                        <div class="card-body">
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                            Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end #accordions-->
                        </div> <!-- end col -->

                        <div class="col-xl-6">
                            <div class="accordion custom-accordion" id="custom-accordion-one">
                                <div class="card mb-1">
                                    <div class="card-header" id="headingNine">
                                        <h5 class="accordion-faq m-0 position-relative">
                                            <a class="custom-accordion-title text-reset d-block"
                                                data-bs-toggle="collapse" href="#collapseNine"
                                                aria-expanded="true" aria-controls="collapseNine">
                                                Q. Can I use this template for my client? <i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseNine" class="collapse show"
                                        aria-labelledby="headingFour"
                                        data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yup, the marketplace license allows you to use this theme
                                            in any end products.
                                            For more information on licenses, please refere <a
                                                href="#" target="_blank">here</a>.
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="accordion-faq m-0 position-relative">
                                            <a class="custom-accordion-title text-reset collapsed d-block"
                                                data-bs-toggle="collapse" href="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseFive">
                                                Q. Can this theme work with Wordpress? <i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse"
                                        aria-labelledby="headingFive"
                                        data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            No. This is a HTML template. It won't directly with
                                            wordpress, though you can convert this into wordpress
                                            compatible theme
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="accordion-faq m-0 position-relative">
                                            <a class="custom-accordion-title text-reset collapsed d-block"
                                                data-bs-toggle="collapse" href="#collapseSix"
                                                aria-expanded="false" aria-controls="collapseSix">
                                                Q. How do I get help with the theme? <i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                        data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Use our dedicated support email (support@coderthemes.com) to
                                            send your issues or feedback. We are here to help anytime
                                        </div>
                                    </div>
                                </div>
                                <div class="card mb-1">
                                    <div class="card-header" id="headingSeven">
                                        <h5 class="accordion-faq m-0 position-relative">
                                            <a class="custom-accordion-title text-reset collapsed d-block"
                                                data-bs-toggle="collapse" href="#collapseSeven"
                                                aria-expanded="false" aria-controls="collapseSeven">
                                                Q. Will you regularly give updates of DGT ? <i
                                                    class="mdi mdi-chevron-down accordion-arrow"></i>
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseSeven" class="collapse"
                                        aria-labelledby="headingSeven"
                                        data-bs-parent="#custom-accordion-one">
                                        <div class="card-body">
                                            Yes, We will update the DGT regularly. All the
                                            future updates would be available without any cost
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p>
                                <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Link with href
                                </a>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                    Button with data-bs-target
                                </button>
                            </p>
                            <div class="collapse show" id="collapseExample">
                                <div class="card">
                                    <div class="card-body">
                                    Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-lg-6">
                            <p>
                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample"
                                    aria-expanded="false" aria-controls="collapseWidthExample">
                                    Toggle width collapse
                                </button>
                            </p>
                            <div style="min-height: 120px;">
                                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                    <div class="card card-body mb-0" style="width: 450px;">
                                        This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- end row --> 
                </div>
            </div>
            <!-- /Page Wrapper -->
    </div>
    <!-- end main content-->




<?= $this->include('partials/vendor-scripts') ?>

</body>

</html>