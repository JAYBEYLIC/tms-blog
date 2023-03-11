<?php 
$section1=selectContent($conn,"settings_project_section1",['visibility'=>'show'])[0];
$section2=selectContent($conn,"settings_project_section2",['visibility'=>'show'])[0];
$projects=selectContent($conn,"panel_projects",['visibility'=>'show']);
$addition=selectContent($conn,"addition_projects_section2",['visibility'=>'show']);

 ?>

<?php   include "includes/header.php" ?>

 <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover py-135 rpy-100" style="background-image: url(<?=$section1['image_1']?>);">
            <div class="container">
                <div class="banner-inner text-white text-center">
                    <h1 class="page-title wow fadeInUp delay-0-2s"><?=$section1['input_title']?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-5 wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="main">home</a></li>
                            <li class="breadcrumb-item active">Portfolios</li>
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
                            <h2><?=$section2['input_title']?></h2>
                            <p><?=$section2['input_subtitle']?></p>
                        </div>
                    </div>
                </div>
                    <?php foreach ($projects as $key => $value): ?>
                        <div class="row project-active">
                    <div class="col-xl-6 col-lg-8 item">
                        <div class="<?=$value['fade-in']?>">
                            <div class="image">
                                <img src="<?=$value['image_1']?>" alt="Project Masonry">
                            </div>
                            <div class="content">
                                <h5><a href="info"><?=$value['input_link_text']?></a></h5>
                                <a href="info" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <?php endforeach ?>
                

                        <?php foreach ($addition as $key => $value): ?>
                              <div class="col-xl-3 col-lg-4 col-md-6 item">
                        <div class="project-grid-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="<?=$value['image_1']?>" alt="Project Masonry">
                                <!-- <a class="plus" href="assets/images/projects/project-masonry2.jpg"></a> -->
                            </div>
                            <div class="content">
                                <h5><a href="info"><?=$value['input_link_text']?></a></h5>
                                <a href="info" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                        <?php endforeach ?>

                 
                  
                     <!-- <div class="col-xl-3 col-lg-4 col-md-6 item">
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
                    </div>  --> 
                      <div class="col-xl-6 col-lg-8 item">
                        <div class="project-grid-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="../assets/images/projects/bitcoin-p.jpg" alt="Project Masonry">
                                <!-- <a class="plus" href="../assets/images/projects/bitcoin-p.jpg"></a> -->
                                <span style="color: #30F0B6;">A secret number that allows bitcoins to be spent</span>

                            </div>
                            <div class="content">
                                <h5><a href="info">Bitcoin Private Key</a></h5>
                                <a href="info" class="detail-btn"><i class="far fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-8 item">
                        <div class="project-grid-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="../assets/images/projects/stocks-bonds1.jpg" alt="Project Masonry">
                                <!-- <a class="plus"  href="../assets/images/projects/stocks-bonds.jpg"></a> -->
                                <span style="color: #30F0B6;">Buy and hold the best Companies</span>
                            </div>
                            <div class="content">
                                <h5><a href="info">Stock Investment</a></h5>
                                <a href="info" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-xl-3 col-lg-4 col-md-6 item">
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
                    </div> -->
                    <!-- <div class="col-xl-3 col-lg-4 col-md-6 item">
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
                    </div> -->
                </div>
                <div class="project-more-btn pt-30 text-center">
                    <a href="info" class="theme-btn style-two wow fadeInUp delay-0-2s">Get in Touch <i class="fas fa-long-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Project Masonry Area end -->
       <?php    include "includes/footer.php" ?>