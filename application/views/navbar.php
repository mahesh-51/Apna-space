<header id="topnav" class="defaultscroll sticky">
        <div class="container">
            <!-- Logo container-->
            <a class="logo" href="<?php echo base_url() ?>">
                    <img src="assets/images/logo.png" class="l-dark" height="24" alt="">
                    <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                </a>
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>

                <div class="buy-button">
                    <a href="<?php echo base_url() . 'login' ?>" class="text-white login scroll-down"><i class="uil uil-user"></i></a>
                </div><!--end login button-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light nav-right">
                    <li class="has-submenu parent-menu-item">
                        <a href="<?php echo base_url() ?>" class="sub-menu-item">Home</a></span>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="<?php echo base_url() . 'services' ?>" class="sub-menu-item">Services</a></span>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="<?php echo base_url() . 'pricing' ?>" class="sub-menu-item">Pricing</a></span>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="<?php echo base_url() . 'benefits' ?>" class="sub-menu-item">Benefits</a></span>
                    </li>
                    <li class="has-submenu parent-menu-item">
                        <a href="<?php echo base_url() . 'about-us' ?>" class="sub-menu-item">About us</a></span>
                    </li>
                    <li><a href="<?php echo base_url() . 'contact-us' ?>" class="sub-menu-item">Contact Us</a></li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
    </header>