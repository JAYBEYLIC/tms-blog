<?php 
$section1=selectContent($conn,"settings_project_section1",['visibility'=>'show'])[0];

 ?>

<?php   include "includes/header.php" ?>

 <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover py-135 rpy-100" style="background-image: url(<?=$section1['image_1']?>);">
            <div class="container">
                <div class="banner-inner text-white text-center">
                    <h1 class="page-title wow fadeInUp delay-0-2s"><?=$section1['input_title']?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-5 wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active">Project Masonry</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Project Masonry Area start -->
        <section class="project-masonry-area rel z-2 py-130 rpy-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                            <h2>Let’s Insides About Recent Project Best Work Gallery</h2>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae .</p>
                        </div>
                    </div>
                </div>
                <div class="row project-active">
                    <div class="col-xl-6 col-lg-8 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry1.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry1.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Web Development</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry2.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry2.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Mobile Applications</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry3.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry3.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">IT Consulting</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry4.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry4.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Business Analysis</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry5.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry5.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">UX/UI Strategy</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry6.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry6.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Digital Analysis</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry7.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry7.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">IT Consulting</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry8.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry8.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Mobile Application Development</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry9.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry9.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Web Design</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/projects/project-masonry10.jpg" alt="Project Masonry">
                                <a class="plus" href="assets/images/projects/project-masonry10.jpg"></a>
                            </div>
                            <div class="content">
                                <h5><a href="project-details.html">Product Engineering</a></h5>
                                <a href="project-details.html" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="project-more-btn pt-30 text-center">
                    <a href="project-grid.html" class="theme-btn style-two wow fadeInUp delay-0-2s">View More Gallery <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Project Masonry Area end -->
       <?php    include "includes/footer.php" ?>