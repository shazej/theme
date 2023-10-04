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
                    <!-- Blog List -->
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="list-links mb-4">
                                <li><a href="blogs">Active Blog</a></li>
                                <li class="active"><a href="pending_blog">Pending Blog</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-md-end">
                            <a href="add_blog" class="btn btn-primary btn-blog mb-3" ><i data-feather="plus-circle" class="me-1"></i> Add New</a>
                        </div>
                    </div>
                    
                    <div class="row">
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-1.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 225
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-12.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Alex Campbell</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="#" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i data-feather="trash-2" class="me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_4" class="check" type="checkbox" checked>
                                            <label for="rating_4" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-2.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 132
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-04.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Barbara Moore</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="edit_blog" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i data-feather="trash-2" class="me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_5" class="check" type="checkbox" checked>
                                            <label for="rating_5" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">    
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-3.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 344
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-02.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Brian Johnson</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="edit_blog" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i data-feather="trash-2" class="me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_6" class="check" type="checkbox" checked>
                                            <label for="rating_6" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-4.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 215
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-05.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Greg Lynch</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="edit_blog" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i data-feather="trash-2" class="me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_7" class="check" type="checkbox" checked>
                                            <label for="rating_7" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-5.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 285
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-11.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Jennifer Floyd  </span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="edit_blog" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i data-feather="trash-2" class="me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_8" class="check" type="checkbox" checked>
                                            <label for="rating_8" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                        
                        <!-- Blog Post -->
                        <div class="col-md-6 col-xl-4 col-sm-12 d-flex">
                            <div class="blog grid-blog flex-fill">
                                <div class="blog-image">
                                    <a href="blog_details"><img class="img-fluid" src="<?php echo base_url();?>/assets/img/category/blog-6.jpg" alt="Post Image"></a>
                                    <div class="blog-views">
                                       <i data-feather="eye" class="me-1"></i> 654
                                    </div>
                                    
                                </div>
                                <div class="blog-content">
                                    <ul class="entry-meta meta-item">
                                        <li>
                                            <div class="post-author">
                                                <a href="profile">
                                                    <img src="<?php echo base_url();?>/assets/img/profiles/avatar-06.jpg" alt="Post Author"> 
                                                    <span>
                                                        <span class="post-title">Karlene Chaidez</span>
                                                        <span class="post-date"><i class="far fa-clock"></i>  4 Dec 2022</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                    <h3 class="blog-title"><a href="blog_details">
                                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
                                </div>
                                <div class="row">
                                    <div class="edit-options">
                                        <div class= "edit-delete-btn">
                                            <a href="edit_blog" class="text-success edit-blog"  ><i data-feather="edit-3" class="me-1"></i> Edit</a>
                                            <a href="edit_blog" class="text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="feather-trash-2 me-1"></i> Delete</a>
                                        </div>
                                        <div class="status-toggle">
                                            <input id="rating_9" class="check" type="checkbox" checked>
                                            <label for="rating_9" class="checktoggle checkbox-bg">checkbox</label><span>Active</span>
                                        </div>
                                    </div>
                                </div>
                            </div>                                      
                        </div>
                        <!-- /Blog Post -->
                
                        
                    </div>
                    <!-- Pagination -->
                        <div class="row ">
                            <div class="col-md-12">
                                <div class="pagination-tab  d-flex justify-content-center">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i class="feather-chevron-left mr-2"></i>Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next<i class="feather-chevron-right ml-2"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /Pagination -->
                        <!-- Modal -->
            <div class="modal fade contentmodal" id="deleteModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content doctor-profile">
                        <div class="modal-header pb-0 border-bottom-0  justify-content-end">
                            <button type="button" class="close-btn" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x-circle"></i></button>
                        </div>
                        <div class="modal-body">
                            <div class="delete-wrap text-center">
                                <div class="del-icon"><i class="feather-x-circle"></i></div>
                                <h2>Sure you want to delete</h2>
                                <div class="submit-section">
                                    <a href="blogs" class="btn btn-success me-2">Yes</a>
                                    <a href="#" class="btn btn-danger" data-bs-dismiss="modal">No</a>
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