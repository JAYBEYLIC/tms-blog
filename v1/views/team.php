<?php   
$section1=selectContent($conn,"settings_team_section1",['visibility'=>'show'])[0];

 ?>

<?php 	include "includes/header.php" ?>
 <!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover py-135 rpy-100" style="background-image: url(<?=$section1['image_1']?>);">
            <div class="container">
                <div class="banner-inner text-white text-center">
                    <h1 class="page-title wow fadeInUp delay-0-2s"><?=$section1['input_title']?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-5 wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
                            <li class="breadcrumb-item active">Team Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Team Top Area start -->
        <section class="team-top-area pt-75 rpt-45 rel z-2">
            <div class="container">
                <div class="row gap-80 align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="team-top-video mt-55 wow fadeInRight delay-0-2s">
                            <img src="assets/images/team/team-page.jpg" alt="Team Page">
                            <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="team-top-content mt-55 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Dedicated Team Member</span>
                                <h2>Our Team is Driven for your Success</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error voluptatem accue antium doloremque laudantium totam rem aperiam eaque epsaus inventore veritatis architecto beatae dicta explicabo.</p>
                            <div class="team-circle-progress mt-35">
                                <div class="circle-progress-counter">
                                    <span class="h2">0</span>
                                </div>
                                <div class="content">
                                    <h4>Clients Satisfaction</h4>
                                    <p>On the other hand denounce with righteous indig nation and dislike men beguiled demoralize</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Top Area end -->
        
        
        <!-- Team Area start -->
        <section class="team-page-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Team Member</span>
                    <h2>Amazing Team Members</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-2s">
                            <img src="assets/images/team/member1.jpg" alt="Team">
                            <h4>Johnathan P. Bailey</h4>
                            <span class="designation">UX/UI Designer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-4s">
                            <img src="assets/images/team/member2.jpg" alt="Team">
                            <h4>Mark M. Hughes</h4>
                            <span class="designation">Web Developer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-6s">
                            <img src="assets/images/team/member3.jpg" alt="Team">
                            <h4>Donald B. Mitchell</h4>
                            <span class="designation">Software Engineer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-8s">
                            <img src="assets/images/team/member4.jpg" alt="Team">
                            <h4>Bennie N. Bannister</h4>
                            <span class="designation">Senior Consultant</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-2s">
                            <img src="assets/images/team/member5.jpg" alt="Team">
                            <h4>Federico M. Upton</h4>
                            <span class="designation">UX/UI Designer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-4s">
                            <img src="assets/images/team/member6.jpg" alt="Team">
                            <h4>Julio M. McDowell</h4>
                            <span class="designation">Web Developer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-6s">
                            <img src="assets/images/team/member7.jpg" alt="Team">
                            <h4>Michael S. Pearson</h4>
                            <span class="designation">Software Engineer</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-8s">
                            <img src="assets/images/team/member8.jpg" alt="Team">
                            <h4>Kenneth L. Booth</h4>
                            <span class="designation">Senior Consultant</span>
                            <div class="social-style-two">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="view-all-btn pt-30 text-center">
                            <a href="team.html" class="theme-btn style-two">View All Member <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="team-shapes">
                <img class="shape one" src="assets/images/team/team-shape-one.png" alt="Shape">
                <img class="shape two" src="assets/images/team/team-shape-two.png" alt="Shape">
            </div>
        </section>
        <!-- Team Area end -->
        
        
         <!-- FAQs Area start -->
        <section class="faq-area pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-5 col-lg-6">
                        <div class="faq-content rmb-65 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Faqs</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <div class="faq-accordion style-two pt-20" id="faq-accordion">
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                            UX Principles Embedded Systems ?
                                        </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                            Charity Conference Future Of Tech?
                                        </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Sed ut perspiciatis unde omniste natus voluptatem accusantium doloremque laudantium totam rem aperiam quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                            Simplify Your Color Palette With CSS ?
                                        </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                            Build A Group Chat App With Vanilla JS ?
                                        </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                        <div class="accordion-body">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-images wow fadeInRight delay-0-2s">
                            <div class="logo"><a href="index-2.html"><img src="assets/images/logos/logo-one2.png" alt="Logo" title="Logo"></a></div>
                            <img src="assets/images/about/faq-right.jpg" alt="FAQs">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQs Area end -->
<?php 	include "includes/footer.php" ?>