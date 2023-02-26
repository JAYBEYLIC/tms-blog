<?php 
$section1=selectContent($conn,"settings_contact_section1",['visibility'=>'show'])[0];

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
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        

        <!-- Contact Info Area start -->
        <section class="contact-page-info pt-130 rpt-100 pb-100 rpb-70 rel z-1">
            <div class="container">
                <div class="row text-center mb-35 justify-content-center wow fadeInUp delay-0-2s">
                    <div class="col-xl-8 col-lg-10">
                        <div class="section-title mb-25">
                            <span class="sub-title mb-15">Need any Helps</span>
                            <h2>Contact Informations</h2>
                        </div>
                        <p>Sed ut perspiciatis unde omnis natus errorsit voluptatem accusantium doloremque laudantium aperiam eaque quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-2s">
                            <div class="icon"><i class="fal fa-map-marker-alt"></i></div>
                            <h4>Locations</h4>
                            <span>553 Main Street, 2nd - Block, New York 32500</span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-3s">
                            <div class="icon"><i class="fal fa-envelope-open"></i></div>
                            <h4>Email Us</h4>
                            <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#bccfc9ccccd3cec8d5c8d5d2dad3fcdbd1ddd5d092dfd3d1"><span class="__cf_email__" data-cfemail="2f5c5a5f5f405d5b465b464149406f48424e4643014c4042">[email&#160;protected]</span></a><br>
                            <a href="http://www.itservice.net/">www.itservice.net</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="fal fa-phone-plus"></i></div>
                            <h4>Locations</h4>
                            <span>Mobile : <a href="callto:+000(123)45667">+000 (123) 45 667</a></span>
                            <span>Teliphone : <a href="callto:+1234566">+1234566</a></span>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-5s">
                            <div class="icon"><i class="fal fa-clock"></i></div>
                            <h4>Working Hour</h4>
                            <b>Monday _ Friday,</b>
                            <span>08:00am - 06:00pm</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Info Area end -->
        
        
        <!-- Location Map Area Start -->
        <div class="contact-page-map wow fadeInUp delay-0-2s">
            <div class="our-location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m10!1m3!1d142190.2862584524!2d-74.01298319978558!3d40.721725351435126!2m1!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1663473911885!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- Location Map Area End -->
        
        
        <!-- Contact Form Start -->
        <section class="contact-page-form pb-130 rpb-100">
            <div class="container">
                <div class="contact-form-wrap form-style-two bgc-lighter wow fadeInUp delay-0-2s">
                    <div class="row text-center mb-35 justify-content-center">
                        <div class="col-xl-9 col-lg-11">
                            <div class="section-title mb-25 wow fadeInUp delay-0-2s">
                                <span class="sub-title mb-15">Get In Touch</span>
                                <h2>Send Us  Message</h2>
                            </div>
                            <p>Sed ut perspiciatis unde omnis natus errorsit voluptatem accusantium doloremque laudantium aperiam eaque quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo</p>
                        </div>
                    </div>
                    <form id="contactForm" class="contactForm" action="https://demo.webtend.net/html/jeena/assets/php/form-process.php" name="contactForm" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" value="" placeholder="Full name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="phone_number" name="phone_number" class="form-control" value="" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="3" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group text-center mb-0">
                                    <button type="submit" class="theme-btn style-two">send message <i class="far fa-long-arrow-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->
        

<?php 	include "includes/footer.php" ?>