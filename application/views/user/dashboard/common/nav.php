<!-- [ navigation menu ] start -->
<nav class="pcoded-navbar menupos-fixed menu-light brand-blue ">
    <div class="navbar-wrapper ">
        <div class="navbar-brand header-logo">
            <a href="<?php echo base_url('userhome') ?>" class="b-brand">
                <img src="<?php echo base_url('assets/dashboard/images/logo.svg') ?>" alt="" class="logo images">
                <img src="<?php echo base_url('assets/dashboard/images/logo-icon.svg') ?>" alt="" class="logo-thumb images">
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
        </div>
        <div class="navbar-content scroll-div">
            <ul class="nav pcoded-inner-navbar">
                <li class="nav-item">
                    <a href="<?php echo base_url('userhome') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                </li>
                <li class="nav-item pcoded-menu-caption">
                    <label>Pricing</label>
                </li>
                <li class="nav-item">
                    <a href="<?php echo base_url('service') ?>" class="nav-link"><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Services</span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- [ navigation menu ] end -->

<!-- [ Header ] start -->
<header class="navbar pcoded-header navbar-expand-lg navbar-light headerpos-fixed">
    <div class="m-header">
        <a class="mobile-menu" id="mobile-collapse1" href="#!"><span></span></a>
        <a href="<?php echo base_url('userhome') ?>" class="b-brand">
            <img src="<?php echo base_url('assets/dashboard/images/logo.svg') ?>" alt="" class="logo images">
            <img src="<?php echo base_url('assets/dashboard/images/logo-icon.svg') ?>" alt="" class="logo-thumb images">
        </a>
    </div>
    <a class="mobile-menu" id="mobile-header" href="#!">
        <i class="feather icon-more-horizontal"></i>
    </a>
    <div class="collapse navbar-collapse">
        <a href="#!" class="mob-toggler"></a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="main-search open">
                    <div class="input-group">
                        <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                        <a href="#!" class="input-group-append search-close">
                            <i class="feather icon-x input-group-text"></i>
                        </a>
                        <span class="input-group-append search-btn btn btn-primary">
                            <i class="feather icon-search input-group-text"></i>
                        </span>
                    </div>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            
            <li>
                <div class="dropdown drp-user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon feather icon-settings"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right profile-notification">
                        <div class="pro-head">
                            <!-- <img src="../assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image"> -->
                            <span><?php echo $basicInfo->businessName; ?></span>
                            <a href="<?php echo base_url('logout') ?>" class="dud-logout" title="Logout">
                                <i class="feather icon-log-out"></i>
                            </a>
                        </div>
                        <ul class="pro-body">
                            <li><a href="#!" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>
<!-- [ Header ] end -->