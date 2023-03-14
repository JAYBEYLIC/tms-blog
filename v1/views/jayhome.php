<?php 
$section1=selectContent($conn,"settings_home_section1",['visibility'=>'show'])[0];
$addition1=selectContent($conn,"addition_home_section1",['visibility'=>'show']);
$section2=selectContent($conn,"settings_home_servicearea",['visibility'=>'show'])[0];
$panelhome=selectContent($conn,"panel_home_servicearea",['visibility'=>'show']);
$section3=selectContent($conn,"settings_home_section3",['visibility'=>'show'])[0];
$addition3=selectContent($conn,"addition_home_section3",['visibility'=>'show']);
$panelhome4=selectContent($conn,"panel_home_section4",['visibility'=>'show']);
$testimonial=selectContent($conn,"panel_home_testimonial",['visibility'=>'show']);




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
              </div>
            <div class="hero-shapes-two">
                <img src="assets/images/hero/hero-bg-lines.png" alt="BG Lines">
            </div>
        </section>
        <!-- Hero Section End -->
        
    
        
        
        <!-- Services Area Two start -->
        <section class="services-area-two rel z-2">
            <div class="container">
               <div class="<?=$section2['fade_in']?>">
                    <span class="sub-title mb-10"></span>
                    <h2><?=$section2['input_title']?></h2>
                </div>
                <div class="row justify-content-center">
                    <?php foreach ($panelhome as $key => $value): ?>
                         <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="service-item-two <?=$value['fade-in']?>">
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
            <?php foreach ($panelhome4 as $key => $value): ?>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                       <div class="<?=$value['fade_in']?>">
                           <div class="image">
                               <img src="<?=$value['image_1']?>" alt="Project">
                           </div>
                           <div class="content">
                               <span class="number"><?=$value['input_number']?></span>
                               <h3><?=$value['input_title']?></h3>
                               <!-- <p>With over 20 years of experience and 850+ employees board Iflexion serves</p> -->
                               <!-- <a href="project-details.html" class="theme-btn">View Details <i class="fas fa-long-arrow-right"></i></a> -->
                           </div>
                       </div>
                    </div>
            <?php endforeach ?>
               </div>
            </div>
        </section>
        <!-- Project Area end -->

        <!-- Testimonials Area Two start -->
        <section class="testimonials-area-two pb-130 rpb-100 rel z-1">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="section-title text-center mb-45 wow fadeInUp delay-0-2s">
                            <span class="sub-title mb-15"></span>
                            <h2>Clients Feedback</h2>
                        </div>
                    </div>
                </div>


                <div class="testimonial-slider">
                     <?php foreach ($testimonial as $key => $value): ?>
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                            <div class="image">
                            <!-- <img src="<?=$value['image_1']?>" alt="Author"> -->
                        </div>
                        <div class="content">
                            <div class="testi-header">
                                <h4><?=$value['input_text2']?></h4>
                                <div class="ratting">
                                    <i class="<?=$value['input_ratting_icon']?>"></i>
                                    <i class="<?=$value['input_ratting_icon2']?>"></i>
                                    <i class="<?=$value['input_ratting_icon3']?>"></i>
                                    <i class="<?=$value['input_ratting_icon4']?>"></i>
                                    <i class="<?=$value['input_ratting_icon5']?>"></i>
                                </div>
                            </div>
                            <div class="testi-text">
                                <?=$value['input_text']?>
                            </div>
                            <div class="testi-footer">
                                <div class="icon"><i class="flaticon-quotation"></i></div>
                                <div class="title">
                                    <h4><?=$value['input_title']?></h4>
                                    <span class="designation"><?=$value['input_subtitle']?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                        <?php endforeach ?>
            
                </div>
            </div>
        </section>
        <!-- Testimonials Area Two end -->
        
        
        <!-- Blog Area Two start -->
    
        <!-- Blog Area Two end -->
        
<?php   include "includes/footer.php" ?>
        
     