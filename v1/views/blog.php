<?php 
$section1=selectContent($conn,"settings_blog_section1",['visibility'=>'show'])[0];

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
                            <li class="breadcrumb-item active">Blog Standard</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Blog Standard Area start -->
        <section class="blog-standard-area py-130 rpy-100">
            <div class="container">
                <div class="row gap-60">
                    <div class="col-lg-8">
                        <div class="blog-standard-inner">
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard1.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Branding</a>
                                    </div>
                                    <h4><a href="blog-details.html">Rethinking Server-Timing As A Critical Monitoring Tool</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard2.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Designing</a>
                                    </div>
                                    <h4><a href="blog-details.html">Voice Control Considerations For Visually Hidden Link Names</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard3.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Marketing</a>
                                    </div>
                                    <h4><a href="blog-details.html">How To Create Vanilva Script Gantt Adding Task Editing</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard4.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Development</a>
                                    </div>
                                    <h4><a href="blog-details.html">Web Design Done Well Delhtful Visualization Examples</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard5.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Branding</a>
                                    </div>
                                    <h4><a href="blog-details.html">DevFest For Ukraine Charity Conference Future Tech</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard6.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">UI/UX strategy</a>
                                    </div>
                                    <h4><a href="blog-details.html">Smashing Podcast Episode 47 With Soueidan Accessibe Matter?</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-standard-item wow fadeInUp delay-0-2s">
                                <div class="image">
                                    <img src="assets/images/blog/blog-standard7.jpg" alt="Blog">
                                </div>
                                <div class="content">
                                    <div class="blog-meta-two mb-5">
                                        <a class="tag" href="blog.html">Mobile app</a>
                                    </div>
                                    <h4><a href="blog-details.html">DevFest For Ukraine Charity Conference Future Tech</a></h4>
                                    <p>Our experts help create the right website for acrosse and devices consideration user promotey</p>
                                    <div class="blog-meta-two">
                                        <a class="author" href="#">Kenneth S. Denman</a>
                                        <a class="date" href="#"><i class="far fa-calendar-alt"></i> June 26, 2022</a>
                                    </div>
                                    <hr>
                                    <a href="blog-details.html" class="read-more">Read More <i class="far fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                            <ul class="pagination flex-wrap wow fadeInUp delay-0-2s">
                                <li class="page-item disabled">
                                    <span class="page-link"><i class="fas fa-angle-left"></i></span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">
                                        01
                                        <span class="sr-only">(current)</span>
                                    </span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-7 col-sm-9">
                        <div class="main-sidebar rmt-75">
                            <div class="widget widget-search wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Find Keywords" required>
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div>
                            <div class="widget widget-category wow fadeInUp delay-0-4s">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="blog.html">Digital Solutions</a> <span>(25)</span></li>
                                    <li><a href="blog.html">Saas Landing</a> <span>(09)</span></li>
                                    <li><a href="blog.html">WordPress</a> <span>(18)</span></li>
                                    <li><a href="blog.html">Graphics Design</a> <span>(05)</span></li>
                                    <li><a href="blog.html">Business Consulting</a> <span>(03)</span></li>
                                    <li><a href="blog.html">SEO Optimization</a> <span>(04)</span></li>
                                    <li><a href="blog.html">Marketing</a> <span>(05)</span></li>
                                </ul>
                            </div>
                            <div class="widget widget-recent-news wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Recent News</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news1.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h5><a href="blog-details.html">Build Group Chat App With Vanilla JS Twilio Node</a></h5>
                                            <span class="date">
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="#">25 June 2022</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news2.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h5><a href="blog-details.html">Expand Your Horiz Desktop Wallpapers Edition See</a></h5>
                                            <span class="date">
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="#">25 June 2022</a>
                                            </span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news3.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <h5><a href="blog-details.html">Manage Accessible Design System With Colorntes</a></h5>
                                            <span class="date">
                                                <i class="far fa-calendar-alt"></i>
                                                <a href="#">25 June 2022</a>
                                            </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget-cta wow fadeInUp delay-0-2s">
                                <h4>Build Awesome Website/Template</h4>
                                <a href="contact.html" class="theme-btn style-two">Contact Us <i class="fas fa-angle-double-right"></i></a>
                                <img src="assets/images/widgets/cta.png" alt="CTA">
                                <img class="cta-bg-line" src="assets/images/widgets/cta-bg-line.png" alt="CTA bg line">
                                <img class="cta-bg-dots" src="assets/images/widgets/cta-bg-dots.png" alt="CTA bg Dots">
                            </div>
                            <div class="widget widget-tag-cloud wow fadeInUp delay-0-2s">
                                <h4 class="widget-title">Popular Tags</h4>
                                <div class="tag-coulds">
                                    <a href="blog.html">Design</a>
                                    <a href="blog.html">Landing</a>
                                    <a href="blog.html">software</a>
                                    <a href="blog.html">web</a>
                                    <a href="blog.html">education</a>
                                    <a href="blog.html">email marketing</a>
                                    <a href="blog.html">SEO</a>
                                    <a href="blog.html">development</a>
                                    <a href="blog.html">wordpress</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Standard Area end -->
        
<?php 	include "includes/footer.php" ?>