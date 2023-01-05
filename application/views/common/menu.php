<!-- Offcanvas Menu Begin -->
<div class="offcanvas-menu-overlay"></div>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <!-- <a href="./index.html"><img src="img/logo.png" alt=""></a> -->
        <a href="<?php echo base_url(); ?>"><h5><b>Simple Billing</b></h5></a>
    </div>
    <nav class="offcanvas__menu mobile-menu">
        <ul>
            <li><a href="./index.html">Home</a></li>
            <li><a href="./courses.html">Courses</a></li>
            <li class="active"><a href="#">Pages</a>
                <ul class="dropdown">
                    <li><a href="./about.html">About</a></li>
                    <li><a href="./instructor.html">Instructor</a></li>
                    <li><a href="./pricing.html">Pricing</a></li>
                    <li><a href="./faq.html">FAQ</a></li>
                    <li><a href="./course-details.html">Course Details</a></li>
                    <li><a href="./blog-details.html">Blog Details</a></li>
                </ul>
            </li>
            <li><a href="./blog.html">News</a></li>
            <li><a href="./contact.html">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="offcanvas__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-dribbble"></i></a>
    </div>
    <div class="offcanvas__btn">
        <a href="#" class="primary-btn">Get Started</a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header  fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2">
                <div class="header__logo">
                    <!-- <a href="./index.html"><img src="img/logo.png" alt=""></a> -->
                    <a href="<?php echo base_url(); ?>"><h5><b>Simple Billing</b></h5></a>
                </div>
            </div>
            <div class="col-lg-5">
                <nav class="header__menu">
                    <ul>
                        <li><a href="<?php echo base_url('features'); ?>">Features</a></li>
                        <li><a href="<?php echo base_url('pricing'); ?>">Pricing</a></li>
                        <?php if($this->session->userdata ( 'userLoggedIn' )==TRUE):?>     
                            <li><a href="#">My Account</a>
                                <ul class="dropdown">
                                    <li><a href="<?php echo base_url('userhome'); ?>">Business Home</a></li>
                                    <li><a href="<?php echo base_url('logout'); ?>">Logout</a></li>
                                </ul>
                            </li>                            
                        <?php else: ?>
                            <li><a href="<?php echo base_url('login'); ?>">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-5">
                <div class="header__right">
                </div>
            </div>
        </div>
        <div class="canvas__open">
            <span class="fa fa-bars"></span>
        </div>
    </div>
</header>
<!-- Header Section End -->