<?php   
$section1=selectContent($conn,"settings_faqs_section1",['visibility'=>'show'])[0];

 ?>

<?php 	include "includes/header.php" ?>

<!-- Page Banner Start -->
        <section class="page-banner-area bgs-cover py-135 rpy-100" style="background-image: url(<?=$section1['image_1']?>);">
            <div class="container">
                <div class="banner-inner text-white text-center">
                    <h1 class="page-title wow fadeInUp delay-0-2s"><?=$section1['input_title']?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center mb-5 wow fadeInUp delay-0-4s">
                            <li class="breadcrumb-item"><a href="main">home</a></li>
                            <li class="breadcrumb-item active">FAQs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
         <!-- FAQs Area start -->
        <section class="faq-page-area pt-130 rpt-100 rel z-1">
            <div class="container">
                <div class="section-title mb-45">
                    <span class="sub-title mb-15">Faqs</span>
                    <h2>Frequently Asked Questions</h2>
                </div>
                <ul class="nav tab-style-one mb-35">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#faq-tab1">General</a>
                    </li>
                  
                </ul>
                <div class="tab-content faq-accordion style-three" id="faq-accordion">
                    <div class="tab-pane fade show active" id="faq-tab1">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                    How Do i Proceed ?
                                </button>
                            </h5>
                            <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Once you contact us for genuine hackers for hire, our professional phone spy agent will ask for some essential information about the objective before you make payment for us to get started.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                    Will My identity Remain Anonymous?
                                </button>
                            </h5>
                            <div id="collapse2" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                   <hr>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p>100% Strictly Confidential</p>
                                            <ul class="list-style-one my-15">
                                                <li>Yes we maintain strict confidentiality</li>
                                                <li>Deep Contextual Research and 360° hack Process</li>
                                                <li>undisclosed Remote Alorgithms</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 my-15 text-lg-end">
                                            <img src="assets/images/partners/anonymous1.jpg" alt="Faqs">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                    What is the refund Policy ?
                                </button>
                            </h5>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>If you are not satisfied with the provided service which you received, you can contact us within 30 days of the service provided and we will fully refund you. Normally it takes 3 to 5 business days to process the refund.</p>
                                </div>
                            </div>
                        </div>
                            <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse5">
                                    How do i process the Hacked Target Device ?
                                </button>
                            </h5>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>We have a proprietary app which we would give you a login details to access and view your targets back-end which enables you to start monitoring and mirroring your target</p>
                                </div>
                            </div>
                        </div>

                          <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse6">
                                    Money Back Guarantee ?
                                </button>
                            </h5>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>We offer a full money back guarantee for first timers. If the hack is taking too long, having too many bugs, or is generally ineffective, you can easily request for a refund.</p>
                                </div>
                                <div class="col-lg-6 my-15 text-lg-end">
                                            <img src="assets/images/partners/money1.jpg" alt="Faqs">
                                        </div>
                            </div>
                        </div>
                           
                    </div>
                
        </section>
        <!-- FAQs Area end -->
        
        
        <!-- Contact Form Section Start -->
        <section class="contact-form-area py-130 rpy-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-form bg-white p-80 rmb-55 wow fadeInRight delay-0-2s">
                            <div class="section-title mb-30">
                                <h3>Get In Touch With Us</h3>
                            </div>
                          
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right-image wow fadeInLeft delay-0-2s">
                            <img src="assets/images/about/logo1.jpg" alt="FAQs">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section End -->
<?php 	include "includes/footer.php" ?>