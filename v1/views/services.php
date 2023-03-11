<?php   
$section1=selectContent($conn,"settings_services_section1",['visibility'=>'show'])[0];
$section2=selectContent($conn,"settings_services_section2",['visibility'=>'show'])[0];
$addition2=selectContent($conn,"addition_services_section2",['visibility'=>'show']);
$section3=selectContent($conn,"settings_services_section3",['visibility'=>'show'])[0];
$services=selectContent($conn,"panel_services",['visibility'=>'show']);



// var_dump($section1[0]['id']);
// var_dump($services[0]['input_title']);

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
                        <div class="<?=$section2['fade_in']?>">
                            <div class="section-title mb-30">
                                <span class="sub-title mb-15"><?=$section2['input_title']?></span>
                                <h2><?=$section2['input_subtitle']?></h2>
                            </div>
                            <p><?=$section2['input_text']?></p>
                            <ul class="list-style-one pt-5">
                                <li><?=$section2['li_listing_1']?></li>
                                <li><?=$section2['li_listing_2']?></li>
                                <li><?=$section2['li_listing_3']?></li>
                            </ul>
                            <a href="info" class="theme-btn mt-45"><?=$section2['input_link_text']?> <i class="fas fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <!-- <div class="col-sm-6"> -->
                                <?php foreach ($addition2 as $key => $value): ?>
                                <div class="col-sm-6">
                                     <div class="<?=$value['fade_in']?>">
                                    <div class="icon"><i class="<?=$value['icon_icon']?>"></i></div>
                                    <a href=""><h4><?=$value['input_title']?></h4></a>
                                    <p><?=$value['input_subtitle']?></p>
                                 <i class="fa fa-badge-check"></i>                                </div>
                            </div>
                                <?php endforeach ?>
                               
                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="servcies-bg-shape">
                <img src="assets/images/shapes/services-bg-shape.png" alt="Shape">
            </div>
        </section>
        <!-- Services Area Three end -->
        
        
        
        
        
        <!-- What We Provide Area Start -->
        <section class="what-we-provide overflow-hidden py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="section-title text-center mb-55 wow fadeInUp delay-0-2s">
                    <span class="sub-title mb-10"><?=$section3['input_title']?></span>
                    <h2><?=$section3['input_subtitle']?></h2>
                </div>
                <div class="service-three-slider">
                   
                        <?php foreach ($services as $key => $value): ?>
                           <div class="<?=$value['fade_in']?>">  
                            <div class="image">
                            <img src="<?=$value['image_1']?>" alt="Service">
                        </div>
                        <div class="content">
                            <div class="top-part">
                                <span class="number"><?=$value['input_number']?></span>
                                <div class="icon"><i class="<?=$value['icon_icon']?>"></i></div>
                                <h4><a href="info"><?=$value['input_title']?></a></h4>
                            </div>
                            <div class="bottom-part">
                                <p><?=$value['input_text']?></p>
                                <a href="info" class="read-more"><?=$value['input_link_text']?><i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                  </div>
                        <?php endforeach ?>
                          
            <div class="about-bg-shape">
                <img src="assets/images/background/what-we-provide.png" alt="Shape">
            </div>
        </section>
        <!-- What We Provide Area End -->
        
        
        
        
        
<?php   include "includes/footer.php" ?>
      