<?php   
$section1=selectContent($conn,"settings_about_section1",['visibility'=>'show'])[0];
$section2=selectContent($conn,"settings_about_section2",['visibility'=>'show'])[0];
$addition2=selectContent($conn,"addition_about_section2",['visibility'=>'show']);
$skills=selectContent($conn,"panel_skills",['visibility'=>'show']);
$team=selectContent($conn,"panel_team",['visibility'=>'show']);
$section4=selectContent($conn,"settings_about_section4",['visibility'=>'show'])[0];
$addition4=selectContent($conn,"addition_about_section4",['visibility'=>'show']);
$addition5=selectContent($conn,"addition_about_section5",['visibility'=>'show']);
 var_dump($addition5[0]['input_title']);

// $sectrion='array must be on th eselection on the interference of thew echo key to the redirection loink page to come in thje section of the socres in the addition layer on th eprompt command';
// $key=>'array section key 3 and have a scetion to command on the line of actioopn  to the incoming key array';
//
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
                            <li class="breadcrumb-item active">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- About Area start -->
        <section class="about-area-five py-130 rpt-100 rpb-65 rel z-1">
            <div class="container">
                <div class="row align-items-center gap-100">
                    <div class="col-lg-6">
                        <div class="about-five-images mt-55 rel z-1 wow fadeInRight delay-0-2s">
                            <img src="<?=$section2['image_2']?>" alt="About">
                            <img src="<?=$section2['image_1']?>" alt="About">
                            <div class="experience-years">
                                <!-- <span class="years">25</span> -->
                                <h4><?=$section2['input_short_description']?></h4>
                            </div>
                            <img class="abut-bg-shape" src="assets/images/about/about-five-bg.png" alt="Shape">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content mt-55 rel z-1 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-60 rmb-40">
                                <span class="sub-title mb-15"><?=$section2['input_subtitle']?></span>
                                <h2><?=$section2['input_title']?></h2>
                            </div>
                            <div class="row gap-40">  
                                <?php foreach ($addition2 as $key => $value): ?>      

                                    <div class="col-md-6">
                                    <div class="service-item style-three">
                                        <div class="icon">
                                            <i class="<?=$value['icon_icon']?>"></i>
                                        </div>
                                        <h4><a href="<?=$value['input_link_direction']?>"><?=$value['input_title']?></a></h4>
                                        <p><?=$value['input_text']?></p>
                                        <a href="<?=$value['input_link_direction']?>" class="read-more"><?=$value['input_link_text']?> <i class="far fa-arrow-right"></i></a>
                                    </div>
                                
                                </div>
                            
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Services Area start -->
        <section class="services-area-six pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row">
                    <?php foreach ($skills as $key => $value): ?>
                        <div class="col-lg-4 col-md-6">
                        <div class="service-item-six wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="<?=$value['icon_icon']?>"></i></div>
                            <h4><a href="<?=$value['input_link_direction']?>"><?=$value['input_title']?></a></h4>
                            <p><?=$value['input_text']?></p>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                    <!-- <div class="col-lg-4 col-md-6">
                        <div class="service-item-six wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="flaticon-mission"></i></div>
                            <h4><a href="service-details.html">Social Good</a></h4>
                            <p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
                        </div>
                    </div> -->
                  <!--   <div class="col-lg-4 col-md-6">
                        <div class="service-item-six wow fadeInUp delay-0-6s">
                            <div class="icon"><i class="flaticon-mission-1"></i></div>
                            <h4><a href="service-details.html">Trust Partner</a></h4>
                            <p>Sed ut perspiciatis unde omniste natusey error sit voluptatem accusantium</p>
                        </div>
                    </div>
                </div>
            </div> -->
        </section>
        <!-- Services Area Three end -->
        
        
        <!-- Statistics Area start -->
        <section class="statistics-area-two rel z-2">
            <div class="container">
                <div class="statistics-inner style-two bgs-cover text-white p-80 pb-20" style="background-image: url(assets/images/background/statistics.jpg);">
                    <div class="row align-items-xl-start align-items-center">
                        <div class="col-xl-5 col-lg-6">
                            <div class="statistics-content mb-55 wow fadeInUp delay-0-2s">
                                <div class="section-title mb-30">
                                    <span class="sub-title mb-15"><?=$section4['input_title']?></span>
                                    <h2><?=$section4['input_text']?></h2>
                                </div>
                                <a href="<?=$section4['input_link_direction']?>" class="read-more"><?=$section4['input_link_text']?><i class="fas fa-long-arrow-right"></i></a>
                            </div>
                        </div>

                            <div class="col-xl-7 col-lg-6">
                            <div class="row">

                            <?php foreach ($addition4 as $key => $value): ?>
                            
                                <div class="col-xl-3 col-small col-6">
                                    <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                        <i class="<?=$value['icon_icon']?>"></i>
                                        <span class="count-text plus" data-speed="3000" data-stop="<?=$value['input_number']?>">0</span>
                                        <span class="counter-title"><?=$value['input_title']?></span>
                                    </div>
                                </div>
                            <?php endforeach ?>


                       
                               <!--  <div class="col-xl-3 col-small col-6">
                                    <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                                        <i class="flaticon-target-aud   ience"></i>
                                        <span class="count-text percent" data-speed="3000" data-stop="98.9">0</span>
                                        <span class="counter-title">Clinets Happy</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-small col-6">
                                    <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                        <i class="flaticon-customer-experience"></i>
                                        <span class="count-text plus" data-speed="3000" data-stop="35.6">0</span>
                                        <span class="counter-title">Years Experience</span>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-small col-6">
                                    <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                                        <i class="flaticon-medal"></i>
                                        <span class="count-text k-plus" data-speed="3000" data-stop="63">0</span>
                                        <span class="counter-title">Award Winning</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Statistics Area end -->
        
        
        <!-- Team Area start -->
        <section class="team-area-two pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <?php foreach ($team as $key => $value): ?>
                    <div class="section-title text-center mb-60 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15"><?=$value['input_title']?></span>
                    <h2><?=$value['input_subtitle']?></h2>
                </div>
                <?php endforeach ?>

                
                <div class="row justify-content-center">
                    <?php foreach ($addition5 as $key => $value): ?>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="team-member style-two wow fadeInUp delay-0-2s">
                            <img src="<?=$value['image']?>" >
                            <h4><?=$value['input_title']?></h4>
                            <span class="designation"><?=$value['input_text']?></span>
                            <div class="social-style-two">
                                <a href="<?=$value['input_facebook_link']?>"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
                </div>
                    
                    
                   <!--  <div class="col-xl-3 col-lg-4 col-md-6">
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
                </div>
            </div> -->
            <div class="team-shapes">
                <img class="shape one" src="assets/images/team/team-shape-one.png" alt="Shape">
                <img class="shape two" src="assets/images/team/team-shape-two.png" alt="Shape">
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-45 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Why Choose Us</span>
                            <h2>Top-Notch Software Development and Digital Transformation</h2>
                        </div>
                    </div>
                </div>
                <div class="why-choose-tab">
                    <ul class="nav nav-pills nav-fill mb-80 rmb-50 wow fadeInUp delay-0-4s">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#wc-tap1">
                                <i class="flaticon-creativity"></i> <span>UX/UI Design</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#wc-tap2">
                                <i class="flaticon-test"></i> <span>Apps Development</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#wc-tap3">
                                <i class="flaticon-cyber-security-1"></i> <span>Cyber Security</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#wc-tap4">
                                <i class="flaticon-support"></i> <span>Tech Support</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="wc-tap1">
                            <div class="row gap-90 align-items-center">
                                <div class="col-lg-6">
                                    <div class="why-choose-image rmb-55">
                                        <img src="assets/images/about/why-choose1.jpg" alt="Why Choose">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="why-choose-content">
                                        <h3>An impactful Application Needs an innovative and interactive.</h3>
                                        <p>Our experts help create the right website for across all major platforms and devices. Taking into consideration your user behavior volu promotey the optimal experience we design responsive performance</p>
                                        <ul class="list-style-one pt-5">
                                            <li>Comprehensive UI/UX Assessment</li>
                                            <li>Deep Contextual Research and 360° Planning</li>
                                            <li>Wireframing & Prototyping</li>
                                        </ul>
                                        <a href="about.html" class="theme-btn mt-30">Learn More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wc-tap2">
                            <div class="row gap-90 align-items-center">
                                <div class="col-lg-6">
                                    <div class="why-choose-content">
                                        <h3>An impactful Application Needs an innovative and interactive.</h3>
                                        <p>Our experts help create the right website for across all major platforms and devices. Taking into consideration your user behavior volu promotey the optimal experience we design responsive performance</p>
                                        <ul class="list-style-one pt-5">
                                            <li>Comprehensive UI/UX Assessment</li>
                                            <li>Deep Contextual Research and 360° Planning</li>
                                            <li>Wireframing & Prototyping</li>
                                        </ul>
                                        <a href="about.html" class="theme-btn mt-30">Learn More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="why-choose-image rmt-55">
                                        <img src="assets/images/about/why-choose1.jpg" alt="Why Choose">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wc-tap3">
                            <div class="row gap-90 align-items-center">
                                <div class="col-lg-6">
                                    <div class="why-choose-image rmb-55">
                                        <img src="assets/images/about/why-choose1.jpg" alt="Why Choose">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="why-choose-content">
                                        <h3>An impactful Application Needs an innovative and interactive.</h3>
                                        <p>Our experts help create the right website for across all major platforms and devices. Taking into consideration your user behavior volu promotey the optimal experience we design responsive performance</p>
                                        <ul class="list-style-one pt-5">
                                            <li>Comprehensive UI/UX Assessment</li>
                                            <li>Deep Contextual Research and 360° Planning</li>
                                            <li>Wireframing & Prototyping</li>
                                        </ul>
                                        <a href="about.html" class="theme-btn mt-30">Learn More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="wc-tap4">
                            <div class="row gap-90 align-items-center">
                                <div class="col-lg-6">
                                    <div class="why-choose-content">
                                        <h3>An impactful Application Needs an innovative and interactive.</h3>
                                        <p>Our experts help create the right website for across all major platforms and devices. Taking into consideration your user behavior volu promotey the optimal experience we design responsive performance</p>
                                        <ul class="list-style-one pt-5">
                                            <li>Comprehensive UI/UX Assessment</li>
                                            <li>Deep Contextual Research and 360° Planning</li>
                                            <li>Wireframing & Prototyping</li>
                                        </ul>
                                        <a href="about.html" class="theme-btn mt-30">Learn More <i class="fas fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="why-choose-image rmt-55">
                                        <img src="assets/images/about/why-choose1.jpg" alt="Why Choose">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Testimonials Area Two start -->
        <section class="testimonials-area-two pb-115 rpb-85 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-30">
                    <div class="col-lg-8">
                        <div class="section-title mb-25 wow fadeInRight delay-0-2s">
                            <span class="sub-title mb-15">Clients Feedback</span>
                            <h2>What Our Clients Say Us</h2>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="slider-arrow mb-25 text-lg-end">
                            <button class="testi-prev"><i class="far fa-angle-left"></i></button>
                            <button class="testi-next"><i class="far fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider">
                    <div class="testimonial-item wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="assets/images/testimonials/testi-author1.jpg" alt="Author">
                        </div>
                        <div class="content">
                            <div class="testi-header">
                                <h4>Excellent Works</h4>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="testi-text">
                                Sed ut perspiciatis unde omnis iste natus voluptatem accus antiume dolorem queauy antium totam aperiam eaque quaey abillosa inventore veritatis vitaec
                            </div>
                            <div class="testi-footer">
                                <div class="icon"><i class="flaticon-quotation"></i></div>
                                <div class="title">
                                    <h4>Andrew D. Bricker</h4>
                                    <span class="designation">CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeInUp delay-0-4s">
                        <div class="content">
                            <div class="testi-header">
                                <h4>Excellent Works</h4>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="testi-text">
                                On the other hand denounce righteous indignations and dislike men who beguiled and demoralized by the charms of pleasure moment blinded foresee
                            </div>
                            <div class="testi-footer">
                                <div class="icon"><i class="flaticon-quotation"></i></div>
                                <div class="title">
                                    <h4>Jose T. McMichael</h4>
                                    <span class="designation">Senior Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/testimonials/testi-author4.jpg" alt="Author">
                        </div>
                        <div class="content">
                            <div class="testi-header">
                                <h4>Excellent Works</h4>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="testi-text">
                                Unde omnis iste natus voluptatem accus antiume dolorem queauy antium totam aperiam eaque quaey abillosa inventore veritatis etuarchite beatae vitaec
                            </div>
                            <div class="testi-footer">
                                <div class="icon"><i class="flaticon-quotation"></i></div>
                                <div class="title">
                                    <h4>Andrew D. Bricker</h4>
                                    <span class="designation">CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area Two end -->
        
        
        <!-- Partners Area start -->
        <div class="partners-area-three text-center rel z-1 pb-110 rpb-80">
            <div class="container">
                <hr class="mb-75">
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
                    <div class="col">
                        <a href="contact.html" class="partner-item-two wow fadeInUp delay-0-3s">
                            <img src="assets/images/partners/partner1.png" alt="Partner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="contact.html" class="partner-item-two wow fadeInUp delay-0-4s">
                            <img src="assets/images/partners/partner2.png" alt="Partner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="contact.html" class="partner-item-two wow fadeInUp delay-0-5s">
                            <img src="assets/images/partners/partner3.png" alt="Partner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="contact.html" class="partner-item-two wow fadeInUp delay-0-6s">
                            <img src="assets/images/partners/partner4.png" alt="Partner">
                        </a>
                    </div>
                    <div class="col">
                        <a href="contact.html" class="partner-item-two wow fadeInUp delay-0-7s">
                            <img src="assets/images/partners/partner5.png" alt="Partner">
                        </a>
                    </div>
                </div>
                <hr class="mt-45">
            </div>
        </div>
       
<?php 	include "includes/footer.php" ?>