<?php   
$section1=selectContent($conn,"settings_about_section1",['visibility'=>'show'])[0];
$section2=selectContent($conn,"settings_about_section2",['visibility'=>'show'])[0];
$addition2=selectContent($conn,"addition_about_section2",['visibility'=>'show']);
$skills=selectContent($conn,"panel_skills",['visibility'=>'show']);
$team=selectContent($conn,"panel_team",['visibility'=>'show']);
$section4=selectContent($conn,"settings_about_section4",['visibility'=>'show'])[0];
$addition4=selectContent($conn,"addition_about_section4",['visibility'=>'show']);
$addition5=selectContent($conn,"addition_about_section5",['visibility'=>'show']);
$section6=selectContent($conn,"settings_about_section6",['visibility'=>'show'])[0];
$addition6=selectContent($conn,"addition_about_section6",['visibility'=>'show']);
$section7=selectContent($conn,"settings_about_section7",['visibility'=>'show'])[0];
$testimonial=selectContent($conn,"panel_testimonial",['visibility'=>'show']);
$patners=selectContent($conn,"panel_patners",['visibility'=>'show']);




























 var_dump($patners[0]['input_link_direction']);

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
      <!--   <section class="statistics-area-two rel z-2">
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
                                        <span class="count-text plus" data-speed="3000" data-stop="<?=$value['input_text']?>">0</span>
                                        <span class="counter-title"><?=$value['input_title']?></span>
                                    </div>
                                </div>
                            <?php endforeach ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
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
                   <p>Our mission is to harness the power of technology to create innovative, culturally-sensitive solutions that meet the unique needs of African communities. We are dedicated to bridging the digital divide and empowering the next generation of African leaders through the development of custom technology solutions that are designed to meet the specific needs of the African people.
                   Our vision is to be the foremost provider of Afrocentric technology solutions, delivering positive impact to businesses and communities across the African continent and beyond. We strive to drive economic growth and social progress through innovative and inclusive technology solutions.Our vision is to be the foremost provider of Afrocentric technology solutions, delivering positive impact to businesses and communities across the African continent and beyond. We strive to drive economic growth and social progress through innovative and inclusive technology solutions.Our mission is to harness the power of technology to create innovative, culturally-sensitive solutions that meet the unique needs of African communities. We are dedicated to bridging the digital divide and empowering the next generation of African leaders through the development of custom technology solutions that are designed to meet the specific needs of the African people.
               </p>
              
                </div>
               <!--  <div>
                     <img src="https://cdn-icons-png.flaticon.com/512/37/37186.png?w=740&t=st=1678304399~exp=1678304999~hmac=1869af3e9888ca86206a60923438204fc878288aec0e2c2b1acc5c4e71280306" alt>
                </div> -->
                      
                    

            <div class="team-shapes">
                <img class="shape one" src="assets/images/team/team-shape-one.png" alt="Shape">
                <img class="shape two" src="assets/images/team/team-shape-two.png" alt="Shape">
            </div>
        </section>
        <!-- Team Area end -->
        
        
                
        
        <!-- Testimonials Area Two start -->
        <section class="testimonials-area-two pb-115 rpb-85 rel z-1">
            <div class="container">
                <div class="row justify-content-between align-items-end mb-30">
                    <div class="col-lg-8">
                        <div class="section-title mb-25 wow fadeInRight delay-0-2s">
                            <span class="sub-title mb-15"><?=$section7['input_title']?></span>
                            <h2><?=$section7['input_subtitle']?></h2>
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
                    
                        <?php foreach ($testimonial as $key => $value): ?>
                            <div class="testimonial-item wow fadeInUp delay-0-2s">
                            <div class="image">
                            <img src="<?=$value['image_1']?>" alt="Author">
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
                        
                
        </section>
        <!-- Testimonials Area Two end -->
        
        
        <!-- Partners Area start -->
        <div class="partners-area-three text-center rel z-1 pb-110 rpb-80">
            <div class="container">
                <hr class="mb-75">
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-2 justify-content-center">
                    <?php foreach ($patners as $key => $value): ?>
                         <div class="col">
                        <a href="<?=$value['input_link_direction']?>" class="partner-item-two wow fadeInUp delay-0-4s">
                            <img src="<?=$value['image_1']?>" alt="Partner">
                        </a>
                    </div>
                    <?php endforeach ?>
                 
                </div>
                <hr class="mt-45">
            </div>
        </div>
       
<?php 	include "includes/footer.php" ?>