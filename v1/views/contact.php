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
                        <div class="contact-info-box wow fadeInUp delay-0-3s">
                            <div class="icon"><i class="fal fa-envelope-open"></i></div>
                            <h4>Email Us</h4>
                            <a href="https://demo.webtend.net/cdn-cgi/l/email-protection#bccfc9ccccd3cec8d5c8d5d2dad3fcdbd1ddd5d092dfd3d1"><span class="__cf_email__" data-cfemail="2f5c5a5f5f405d5b465b464149406f48424e4643014c4042">[astrocybernet&#160;@yahoo.com]</span></a><br>
                            <a href="http://www.itservice.net/">www.astrocybenet.org</a>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="contact-info-box wow fadeInUp delay-0-4s">
                            <div class="icon"><i class="fal fa-phone-plus"></i></div>
                            <h4>Contact</h4>
                            <span>Mobile : <a href="callto:+000(123)45667">Undisclosed</a></span>
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
        <!-- <div class="contact-page-map wow fadeInUp delay-0-2s">
            <div class="our-location">
                <iframe src="https://www.google.com/maps/embed?pb=!1m12!1m10!1m3!1d142190.2862584524!2d-74.01298319978558!3d40.721725351435126!2m1!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1sen!2sbd!4v1663473911885!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div> -->
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
                    <div id="contactForm" class="contactForm"  name="contactForm" >
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="nameInput"  name="name" class="form-control" value="" placeholder="Full name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="numberInput" name="phone_number" class="form-control" value="" placeholder="Phone Number" required data-error="Please enter your Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="emailInput" name="email" class="form-control" value="" placeholder="Email Address" required data-error="Please enter your Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="subjectInput" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="message" id="messageInput" class="form-control" rows="3" placeholder="Message" required data-error="Please enter your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-xl-12">
                                <div class="form-group text-center mb-0">
                                    <button type="submit" onclick="submitContactFunc(this)" class="theme-btn style-two"><i id="defIcon" class="fa fa-paper-plane"></i> <i id="loadIcon" style="display:none" class="fa fa-spinner fa-spin"></i>send message <i class="far fa-long-arrow-right"></i></button>
                                    <div id="msgSubmit" class="hidden"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form End -->
              <script type="text/javascript">

          nameInput = document.getElementById("nameInput")
          emailInput = document.getElementById("emailInput")
          numberInput = document.getElementById("numberInput")
          subjectInput = document.getElementById("subjectInput")
          messageInput = document.getElementById("messageInput")


          function submitContactFunc(e){
            // console.log(event.target)

            name = nameInput.value
            email = emailInput.value
            number = numberInput.value
            message = messageInput.value
            subject = subjectInput.value
            var error = [];


            defIcon = e.querySelector("#defIcon");
            loadIcon = e.querySelector("#loadIcon");

            if(name.length < 1 || name ==""){
              error.push(true);
            }

            if(email.length < 1 || email ==""){
              error.push(true);
            }

            if(number.length < 1 || subject ==""){
              error.push(true);
            }

            if(subject.length < 1 || subject ==""){
              error.push(true);
            }

            if(message.length < 1 || message ==""){
              error.push(true);
            }


            if(error.length < 1){

              defIcon.style.display = "none"
              loadIcon.style.display = "";
              e.disabled = true;

              var url = "/contact-us-mail";

              var param = {
                name,
                email,
                number,
                message,
                subject,
              }

              // console.log("i got here1")
              ajaxPost(url, param, (err, res) => {

                // console.log("i got here2")
                // console.log(err)
                // console.log(res)


                var returnData = JSON.parse(res);
                if(returnData.success){

                  e.disabled = false;

                  defIcon.style.display = ""
                  loadIcon.style.display = "none";
                  swal.fire("Success!","Message Sent Successfully, we'll get in touch with you soonest","success");
                  nameInput.value ="";
                  emailInput.value ="";
                  messageInput.value="";
                  numberInput.value="";
                  subjectInput.value="";


                 //  swal({
                 //   title: "Success",
                 //   text: returnData.success,
                 //   icon: "success",
                 // })
                 // window.location("/contact")
                }else if (returnData.failed) {
                  e.disabled = false;

                  defIcon.style.display = ""
                  loadIcon.style.display = "none";
                  swal.fire("Failed!","Sorry, an error occured, please try again.","warning");
                 //  swal({
                 //   title: "Error",
                 //   text: returnData.failed,
                 //   icon: "warning",
                 // })
                }
              })

            }else{
              alert("Please Input Required Fields")
            }



          }

        </script>

<?php 	include "includes/footer.php" ?>

