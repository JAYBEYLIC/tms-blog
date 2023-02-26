<?php   
$section1=selectContent($conn,"settings_pricing_section1",['visibility'=>'show'])[0];

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
                            <li class="breadcrumb-item active">Price Package</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Pricing Plan Area start -->
        <section class="price-plan-page-top pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Amazing Pricing Plan</span>
                    <h2>Affordable Pricing Packages</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item style-three wow fadeInUp delay-0-2s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">Basic Plan</h4>
                            <span class="price-count">5 Services Included</span>
                            <span class="price">29.85</span>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                            </ul>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item style-three wow fadeInUp delay-0-4s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">standard Plan</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">49.64</span>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                            </ul>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="pricing-plan-item style-three wow fadeInUp delay-0-6s">
                            <span class="badge">Best Package</span>
                            <h4 class="title">Golden Package</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">98.73</span>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Premium Quality Supports (24/7)</a></li>
                                <li><a href="#">IT Consultations (Business Growth)</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Search Engine Optimization (SEO )</a></li>
                                <li><a href="#">User & Market Research</a></li>
                            </ul>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan Area end -->
        
        
        <!-- Pricing Plan Area start -->
        <section class="price-plan-page-middle bgc-lighter pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-8 col-md-10">
                        <div class="pricing-tab-wrap mt-75 wow fadeInUp delay-0-2s">
                            <div class="section-title mb-25">
                                <span class="sub-title mb-15">Amazing Pricing Plan</span>
                                <h2>Affordable Pricing Packages</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis iste natus voluptate accusantium doloremque laudantium totam aperaus abillo inventore veritatis quasi architecto</p>
                            <ul class="nav pricing-tab mt-15" role="tablist">
                                <li>
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#monthly">Monthly <i class="fas fa-long-arrow-right"></i></button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly <i class="fas fa-long-arrow-right"></i></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="tab-content wow fadeInUp delay-0-4s">
                            <div class="tab-pane fade show active" id="monthly">
                                <div class="row">
                                     <div class="col-md-6">
                                        <div class="pricing-plan-item">
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
                                    <div class="col-md-6">
                                        <div class="pricing-plan-item">
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
                            <div class="tab-pane fade yearly" id="yearly">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="pricing-plan-item">
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
                                    <div class="col-md-6">
                                        <div class="pricing-plan-item">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-page-shapes">
                <img class="shape one" src="assets/images/shapes/price-page-bottom.png" alt="Shape">
                <img class="shape two" src="assets/images/shapes/price-page-right.png" alt="Shape">
            </div>
        </section>
        <!-- Pricing Plan Area end -->
        
        
        <!-- Pricing Plan Area start -->
        <section class="price-plan-page-bottom pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-15">Amazing Pricing Plan</span>
                    <h2>Affordable Pricing Packages</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                            <h4 class="title">Basic Plan</h4>
                            <span class="price-count">5 Services Included</span>
                            <span class="price">0.0</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a><br>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Quality Supports</a></li>
                                <li><a href="#">IT Consultations</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Search Engine (SEO )</a></li>
                                <li><a href="#">Market Research</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                            <h4 class="title">Standard Plan</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">19.5</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a><br>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Quality Supports</a></li>
                                <li><a href="#">IT Consultations</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Search Engine (SEO )</a></li>
                                <li><a href="#">Market Research</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Mobile Applications</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                            <h4 class="title">silver Plan</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">48.6</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a><br>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Quality Supports</a></li>
                                <li><a href="#">IT Consultations</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Search Engine (SEO )</a></li>
                                <li><a href="#">Market Research</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Mobile Applications</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="pricing-plan-item wow fadeInUp delay-0-2s">
                            <h4 class="title">golden Plan</h4>
                            <span class="price-count">7 Services Included</span>
                            <span class="price">99.3</span>
                            <a href="pricing.html" class="theme-btn style-two">Choose Package <i class="fas fa-long-arrow-right"></i></a><br>
                            <h5>This Plan Included :</h5>
                            <ul>
                                <li><a href="#">Quality Supports</a></li>
                                <li><a href="#">IT Consultations</a></li>
                                <li><a href="#">Product Design</a></li>
                                <li><a href="#">Search Engine (SEO )</a></li>
                                <li><a href="#">Market Research</a></li>
                                <li><a href="#">Web Development</a></li>
                                <li><a href="#">Mobile Applications</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Plan Area end -->
      
<?php 	include "includes/footer.php" ?>