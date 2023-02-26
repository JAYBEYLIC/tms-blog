<?php   
$section1=selectContent($conn,"settings_services_section1",['visibility'=>'show'])[0];

// var_dump($section1[0]['id']);
// var_dump($section1['input_title']);

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
                            <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
         <!-- Services Area Three start -->
        <section class="services-area-three overflow-hidden pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row gap-100 align-items-center">
                    <div class="col-lg-5">
                        <div class="services-content-three mb-30 rmb-65 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Amazing Services</span>
                                <h2>We Provide Best IT Services to Growth you Business</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudantium totam rem aperiame aque ipsa quae abillo inventore veritatis etuas</p>
                            <ul class="list-style-one pt-5">
                                <li>Comprehensive UI/UX Assessment</li>
                                <li>Deep Contextual Research and 360° Planning</li>
                                <li>Wireframing & Prototyping</li>
                            </ul>
                            <a href="services.html" class="theme-btn mt-45">View All Services <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="feature-item style-two mt-25 wow fadeInUp delay-0-2s">
                                    <div class="icon"><i class="flaticon-trust"></i></div>
                                    <a href="service-details.html"><h4>Trusted Partner</h4></a>
                                    <p>With over 20 year of experience 850+ employees flexion</p>
                                    <a class="more-btn" href="service-details.html"><i class="far fa-angle-right"></i></a>
                                </div>
                                <div class="feature-item style-two wow fadeInUp delay-0-2s">
                                    <div class="icon"><i class="flaticon-social-media"></i></div>
                                    <a href="service-details.html"><h4>Digital Marketing</h4></a>
                                    <p>With over 20 year of experience 850+ employees flexion</p>
                                    <a class="more-btn" href="service-details.html"><i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="feature-item style-two wow fadeInDown delay-0-2s">
                                    <div class="icon"><i class="flaticon-technical-support"></i></div>
                                    <a href="service-details.html"><h4>Technical Support</h4></a>
                                    <p>With over 20 year of experience 850+ employees flexion</p>
                                    <a class="more-btn" href="service-details.html"><i class="far fa-angle-right"></i></a>
                                </div>
                                <div class="feature-item style-two mt-25 wow fadeInDown delay-0-2s">
                                    <div class="icon"><i class="flaticon-brainstorming"></i></div>
                                    <a href="service-details.html"><h4>IT Consulting</h4></a>
                                    <p>With over 20 year of experience 850+ employees flexion</p>
                                    <a class="more-btn" href="service-details.html"><i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="servcies-bg-shape">
                <img src="assets/images/shapes/services-bg-shape.png" alt="Shape">
            </div>
        </section>
        <!-- Services Area Three end -->
        
        
        <!-- Statistics Area start -->
        <section class="statistics-area-four text-white bgs-cover pt-80 pb-20" style="background-image: url(assets/images/background/statistics-three.jpg);">
            <div class="container">
                <div class="row align-items-xl-start align-items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="statistics-content mb-55 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15">Company Statistics</span>
                                <h2>Learn About Our Comapny Statistics</h2>
                            </div>
                            <a href="about.html" class="read-more">Learn More <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-6">
                        <div class="row">
                            <div class="col-xl-3 col-6">
                                <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                    <i class="flaticon-target"></i>
                                    <span class="count-text plus" data-speed="3000" data-stop="2563">0</span>
                                    <span class="counter-title">Project Complate</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6">
                                <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                                    <i class="flaticon-target-audience"></i>
                                    <span class="count-text percent" data-speed="3000" data-stop="98.9">0</span>
                                    <span class="counter-title">Clinets Happy</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6">
                                <div class="counter-item counter-text-wrap wow fadeInDown delay-0-3s">
                                    <i class="flaticon-customer-experience"></i>
                                    <span class="count-text plus" data-speed="3000" data-stop="35.6">0</span>
                                    <span class="counter-title">Years Experience</span>
                                </div>
                            </div>
                            <div class="col-xl-3 col-6">
                                <div class="counter-item counter-text-wrap wow fadeInUp delay-0-3s">
                                    <i class="flaticon-medal"></i>
                                    <span class="count-text k-plus" data-speed="3000" data-stop="63">0</span>
                                    <span class="counter-title">Award Winning</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Statistics Area end -->
        
        
        <!-- What We Provide Area Start -->
        <section class="what-we-provide overflow-hidden py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-10">What We Provides</span>
                    <h2>Digital Core Services</h2>
                </div>
                <div class="service-three-slider">
                    <div class="service-item-three wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="assets/images/services/service-three1.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three1.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">01</span>
                                <div class="icon"><i class="flaticon-coding-1"></i></div>
                                <h4><a href="service-details.html">Custom Software Development</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-item-three active wow fadeInUp delay-0-4s">
                        <div class="image">
                            <img src="assets/images/services/service-three2.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three2.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">02</span>
                                <div class="icon"><i class="flaticon-layers"></i></div>
                                <h4><a href="service-details.html">Web Design (UI/UX) & Development</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-item-three wow fadeInUp delay-0-6s">
                        <div class="image">
                            <img src="assets/images/services/service-three3.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three3.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">03</span>
                                <div class="icon"><i class="flaticon-cyber-security-1"></i></div>
                                <h4><a href="service-details.html">Cyber Security and IT Management</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-item-three wow fadeInUp delay-0-2s">
                        <div class="image">
                            <img src="assets/images/services/service-three1.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three1.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">01</span>
                                <div class="icon"><i class="flaticon-coding-1"></i></div>
                                <h4><a href="service-details.html">Custom Software Development</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-item-three active">
                        <div class="image">
                            <img src="assets/images/services/service-three2.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three2.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">02</span>
                                <div class="icon"><i class="flaticon-layers"></i></div>
                                <h4><a href="service-details.html">Web Design (UI/UX) & Development</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="service-item-three">
                        <div class="image">
                            <img src="assets/images/services/service-three3.jpg" alt="Service">
                            <a class="plus" href="assets/images/services/service-three3.jpg"><i class="fal fa-plus"></i></a>
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number">03</span>
                                <div class="icon"><i class="flaticon-cyber-security-1"></i></div>
                                <h4><a href="service-details.html">Cyber Security and IT Management</a></h4>
                            </div>
                            <div class="bottom-part">
                                <p>Sed perspiciat unde omnis esteo natus sit voluptatem ways</p>
                                <a href="service-details.html" class="read-more">Read More <i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-bg-shape">
                <img src="assets/images/background/what-we-provide.png" alt="Shape">
            </div>
        </section>
        <!-- What We Provide Area End -->
        
        
        <!-- Pricing Plan Area start -->
        <section class="price-plan-area overflow-hidden bgc-lighter pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Amazing Pricing Plan</span>
                    <h2>Affordable Pricing Packages</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">Basic Plan</h4>
                            <span class="price-count">5 Services Included</span>
                            <span class="price">29.85</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-4s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">standard Plan</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">49.64</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                                <li><a href="#">UX/UI Strategy (Design & Develop)</a></li>
                                <li><a href="#">Product Engineering</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-6s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">Golden Package</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">98.73</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                                <li><a href="#">UX/UI Strategy (Design & Develop)</a></li>
                                <li><a href="#">Product Engineering</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-shapes">
                <img class="shape one wow fadeInLeft delay-0-5s" src="assets/images/shapes/price-left.png" alt="Shape">
                <img class="shape two w-50" src="assets/images/shapes/price-right.png" alt="Shape">
            </div>
        </section>
        <!-- Pricing Plan Area end -->
        
        
        <!-- Testimonials Area Two start -->
        <section class="testimonials-area-two py-130 rpy-100 rel z-1">
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
<?php   include "includes/footer.php" ?>
      