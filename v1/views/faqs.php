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
                            <li class="breadcrumb-item"><a href="index-2.html">home</a></li>
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
                    <!-- <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab2">IT Consulting</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab3">Package</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab4">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab5">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab6">Customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab7">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#faq-tab8">Payments</a>
                    </li> -->
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
                                            <img src="assets/images/about/inner-faq.jpg" alt="Faqs">
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
                           
                    </div>
                   <!--  <div class="tab-pane fade" id="faq-tab2">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse10">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse9">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse11">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab3">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse14">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse14" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse12">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse13">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab4">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse15">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse15" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse16">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse16" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse17">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse17" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab5">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse19">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse19" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse18">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse18" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse20">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse20" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab6">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse22">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse22" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse23">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse23" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse21">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse21" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab7">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse26">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse26" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse24">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse24" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse25">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse25" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="faq-tab8">
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse29">
                                    How To Use Google CrUX To Analyze And Compare The Performance Of JS Frameworks ?
                                </button>
                            </h5>
                            <div id="collapse29" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse27">
                                    Open-Source 3dicons Library: Case Study And Free Downloads ?
                                </button>
                            </h5>
                            <div id="collapse27" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse28">
                                    Rethinking Server-Timing As A Critical Monitoring Tool ?
                                </button>
                            </h5>
                            <div id="collapse28" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Sorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam incidunt debitis magnam sit dicta asperiores quidem cum, blanditiis harum non nulla, esse sapiente doloremque, dolores natus! Harum consectetur saepe iure obcaecati illo, maiores minima in dolorem, deleniti unde aut similique fugit earum. Numquam ut ex ipsum molestiae, consequatur obcaecati? Velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam aperiam eaquey quae abillo inventore</p>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
                           <!--  <form class="form-style-one" action="#" name="contact-form" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" id="emailid" name="email" class="form-control" value="" placeholder="Email" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message" required=""></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn style-two mt-15 w-100">send message <i class="far fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form> -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-right-image wow fadeInLeft delay-0-2s">
                            <img src="assets/images/about/faq-page.png" alt="FAQs">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section End -->
<?php 	include "includes/footer.php" ?>