<?php 
$section1=selectContent($conn,"settings_home_section1",['visibility'=>'show'])[0];
$addition1=selectContent($conn,"addition_home_section1",['visibility'=>'show']);
$section2=selectContent($conn,"settings_home_servicearea",['visibility'=>'show'])[0];
$panelhome=selectContent($conn,"panel_home_servicearea",['visibility'=>'show']);
$section3=selectContent($conn,"settings_home_section3",['visibility'=>'show'])[0];
$addition3=selectContent($conn,"addition_home_section3",['visibility'=>'show']);



// $section2=selectContent($conn,"settings_about_section2",['visibility'=>'show'])[0];





 ?>
<?php   include "includes/header.php" ?>
     
        
        <!-- Hero Section Start -->
        <section class="hero-area-two bgs-cover" style="background-image: url(assets/images/hero/hero-two.jpg);">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="hero-content-two pt-155 pb-160 rpt-115 rpb-65 wow fadeInUp delay-0-4s">
                            <span class="sub-title"><?=$section1['input_subtitle']?></span>
                            <h1><?=$section1['input_title']?></h1>
                            <a href="<?=$section1['input_link_direction']?>" class="theme-btn mt-25 wow fadeInUp delay-0-6s"><?=$section1['input_link_text']?> <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8 col-10 col-small">
                        <div class="hero-gradient-circle">
                            <div class="icon">
                                <img src="assets/images/hero/hero-circle-icon.png" alt="Icon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($addition1 as $key => $value): ?>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="<?=$value['fade_in'] ?>">
                            <div class="icon"><i class="<?=$value['icon_icon']?>"></i></div>
                            <h5><a href="<?=$value['input_link_text']?>"><?=$value['input_text']?></a></h5>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                    <!-- <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="icon"><i class="flaticon-project-management"></i></div>
                            <h5><a href="service-details.html">Management</a></h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="flaticon-ui"></i></div>
                            <h5><a href="service-details.html">Application</a></h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="icon"><i class="flaticon-coding-1"></i></div>
                            <h5><a href="service-details.html">Development</a></h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="feature-item wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="flaticon-seo-1"></i></div>
                            <h5><a href="service-details.html">SEO Optimize</a></h5>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                        <div class="feature-item wow fadeInDown delay-0-2s">
                            <div class="icon"><i class="flaticon-rocket"></i></div>
                            <h5><a href="service-details.html">Business Dev</a></h5>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="hero-shapes-two">
                <img src="assets/images/hero/hero-bg-lines.png" alt="BG Lines">
            </div>
        </section>
        <!-- Hero Section End -->
        
        
        <!-- About Area start -->
        <!-- <section class="about-area-two py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="row align-items-center gap-90">
                    <div class="col-lg-6">
                        <div class="about-two-image rel z-1 rmb-65 wow fadeInRight delay-0-2s">
                            <img src="assets/images/about/about-two.jpg" alt="About">
                            <div class="bg-circle-shape"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content rel z-1 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">About Company</span>
                                <h2>Small Enough to Care Big Enough to Success</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam eaque ipsa quae abillo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            <div class="about-btns">
                                <a href="about.html" class="theme-btn style-three mt-15">Learn More <i class="fas fa-long-arrow-right"></i></a>
                                <div class="hotline mt-15">
                                    <i class="fas fa-phone"></i>
                                    <div class="content">
                                        <span>Hotline</span><br>
                                        <a href="callto:+000(123)45688">+000 (123) 456 88</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- About Area end -->
        
        
        <!-- Services Area Two start -->
        <section class="services-area-two rel z-2">
            <div class="container">
               <div class="<?=$section2['fade_in']?>">
                    <span class="sub-title mb-10"></span>
                    <h2><?=$section2['input_title']?></h2>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($panelhome as $key => $value): ?>
                         <div class="<?=$value['class']?>">
                        <div class="<?=$value['fade_in']?>">
                            <div class="image">
                                <img src="<?=$value['image_1']?>" alt="Service">
                            </div>
                            <div class="content">
                                <h4 class="title"><?=$value['input_title']?></h4>
                                <ul class="list-style-three">
                                    <li><?=$value['li_listing_1']?></li>
                                    <li><?=$value['li_listing_2']?></li>
                                    <li><?=$value['li_listing_3']?></li>
                                    <li><?=$value['li_listing_4']?></li>
                                    <li><?=$value['li_listing_5']?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                   
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-item-two wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/services/service2.png" alt="Service">
                            </div>
                            <div class="content">
                                <h4 class="title">Web Intrusion</h4>
                                <ul class="list-style-three">
                                    <li>Grade Hack</li>
                                    <li>Credit Score Hack</li>
                                    <li>Swift Criminal Records</li>
                                    <li>Debt Clearance</li>
                                    <li>Online Transcript Hack</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-item-two wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/services/service3.png" alt="Service">
                            </div>
                            <div class="content">
                                <h4 class="title">Email Hacks</h4>
                                <ul class="list-style-three">
                                    <li>Outlook</li>
                                    <li>Gmail</li>
                                    <li>Yahoo Mail</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="service-item-two wow fadeInUp delay-0-8s">
                            <div class="image">
                                <img src="assets/images/services/service4.png" alt="Service">
                            </div>
                            <div class="content">
                                <h4 class="title">Others</h4>
                                <ul class="list-style-three">
                                    <li>Location Tracking</li>
                                    <li>Automated Deployments </li>
                                    <li>Spyware</li>
                                    <li>Track Phone</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area Two end -->
        
        
        
        <!-- Customer Satisfaction Area end -->
        
        
        <!-- Statistics Area start -->
        <section class="statistics-area-two rel z-2 mb-130 rmb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-50 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-10"><?=$section3['input_subtitle']?></span>
                            <h5><?=$section3['input_title']?></h5>
                        </div>
                    </div>
                </div>
                <div class="row no-gap justify-content-center">
                    <?php foreach ($addition3 as $key => $value): ?>
                        <div class="col-xl-4 col-md-6">
                        <div class="<?=$value['fade_in']?>">
                            <div class="icon"><i class="<?=$value['icon_icon']?>"></i></div>
                            <div class="content">
                                <span class="<?=$value['input_class']?>" data-speed="3000" data-stop="<?=$value['input_number']?>">0</span>
                                <span class="counter-title"><?=$value['input_title']?></span>
                                <p><?=$value['input_subtitle']?></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach ?>
                    
                  
                </div>
            </div>
        </section>
        <!-- Statistics Area end -->
        
        
        <!-- Project Area start -->
        <section class="project-area-two">
            <div class="container-fluid gap-wide">
               <div class="row no-gap justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                       <div class="project-item wow fadeInUp delay-0-2s">
                           <div class="image">
                               <img src="assets/images/projects/project1.jpg" alt="Project">
                           </div>
                           <div class="content">
                               <span class="number">01</span>
                               <h3>Web Design & Development</h3>
                               <p>With over 20 years of experience and 850+ employees board Iflexion serves</p>
                               <a href="project-details.html" class="theme-btn">View Details <i class="fas fa-long-arrow-right"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                       <div class="project-item wow fadeInUp delay-0-4s">
                           <div class="image">
                               <img src="assets/images/projects/project2.jpg" alt="Project">
                           </div>
                           <div class="content">
                               <span class="number">02</span>
                               <h3>Web Design & Development</h3>
                               <p>With over 20 years of experience and 850+ employees board Iflexion serves</p>
                               <a href="project-details.html" class="theme-btn">View Details <i class="fas fa-long-arrow-right"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                       <div class="project-item wow fadeInUp delay-0-6s">
                           <div class="image">
                               <img src="assets/images/projects/project3.jpg" alt="Project">
                           </div>
                           <div class="content">
                               <span class="number">03</span>
                               <h3>Web Design & Development</h3>
                               <p>With over 20 years of experience and 850+ employees board Iflexion serves</p>
                               <a href="project-details.html" class="theme-btn">View Details <i class="fas fa-long-arrow-right"></i></a>
                           </div>
                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                       <div class="project-item wow fadeInUp delay-0-8s">
                           <div class="image">
                               <img src="assets/images/projects/project4.jpg" alt="Project">
                           </div>
                           <div class="content">
                               <span class="number">04</span>
                               <h3>Web Design & Development</h3>
                               <p>With over 20 years of experience and 850+ employees board Iflexion serves</p>
                               <a href="project-details.html" class="theme-btn">View Details <i class="fas fa-long-arrow-right"></i></a>
                           </div>
                       </div>
                    </div>
               </div>
            </div>
        </section>
        <!-- Project Area end -->
        
        
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
            <div class="why-choose-shapes">
                <img class="shape one" src="assets/images/about/why-choose-shape1.png" alt="Shape">
                <img class="shape two" src="assets/images/about/why-choose-shape2.png" alt="Shape">
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Testimonials Area Two start -->
        <section class="testimonials-area-two pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-45 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15">Clients Feedback</span>
                            <h2>What Our Clients Say Us</h2>
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
        
        
        <!-- Blog Area Two start -->
        <section class="blog-area-two pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row align-items-end pb-35">
                    <div class="col-lg-8">
                        <div class="section-title mb-25 wow fadeInLeft delay-0-2s">
                            <span class="sub-title mb-10">Our Blog & News</span>
                            <h2>Latest Blog, New & Articles</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-25 text-lg-end">
                        <a href="blog.html" class="theme-btn style-four wow fadeInRight delay-0-2s">View More News <i class="fas fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item wow fadeInUp delay-0-2s">
                            <div class="image">
                                <img src="assets/images/blog/blog1.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Jule 26, 2022</a></li>
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Comments (25)</a></li>
                                </ul>
                                <h4><a href="blog-details.html">Voice Usabilit Consideration Partially Visually Hidden</a></h4>
                                <div class="author-more">
                                    <span class="author">By <a href="#">Luis J. Hill</a></span>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item wow fadeInUp delay-0-4s">
                            <div class="image">
                                <img src="assets/images/blog/blog2.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Jule 26, 2022</a></li>
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Comments (25)</a></li>
                                </ul>
                                <h4><a href="blog-details.html">How Create Van JavaScript Gant Chart Adding Task</a></h4>
                                <div class="author-more">
                                    <span class="author">By <a href="#">Luis J. Hill</a></span>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item wow fadeInUp delay-0-6s">
                            <div class="image">
                                <img src="assets/images/blog/blog3.jpg" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Jule 26, 2022</a></li>
                                    <li><i class="far fa-calendar-alt"></i> <a href="#">Comments (25)</a></li>
                                </ul>
                                <h4><a href="blog-details.html">Smashing Podcast Episode 47 Soueidan Accessibility </a></h4>
                                <div class="author-more">
                                    <span class="author">By <a href="#">Luis J. Hill</a></span>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area Two end -->
        
<?php   include "includes/footer.php" ?>
        
     