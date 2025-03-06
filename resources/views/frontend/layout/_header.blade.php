<header class="main-header">

    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left clearfix">
                    <div class="text">Bespoke Solutions Tailored to Your Business. Free Sermons</div>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right clearfix">
                    <div class="location">684 West College St. Sun City, USA</div>
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a></li>
                        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                        <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                        <li><a href="https://youtube.com/" class="fa fa-youtube"></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="clearfix">

                <div class="logo pull-left">
                    <div class="logo"><a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/logo_1.png')}}" alt="" title=""></a></div>
                </div>

                <div class="pull-right upper-right clearfix">

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box fas fa-envelope-open-text"></div>
                        <ul>
                            <li><strong>Mail Address</strong> <a
                                    href="mailto:mailto:info@website.com">support@techwizi.com</a></li>
                        </ul>
                    </div>

                    <!--Info Box-->
                    <div class="upper-column info-box">
                        <div class="icon-box fas fa-tty"></div>
                        <ul>
                            <li><strong>Phone Number</strong> <a href="tel:+860-272-9738">+91 9794445940</a>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Header Upper -->

    <!-- Header Lower -->
    <div class="header-lower">
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center">

                <!-- Nav Outer -->
                <div class="nav-outer clearfix">
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">

                                <li class="@activeMenu('home')"><a href="{{route('home')}}">Home</a></li>
                                <li class="@activeMenu('about')"><a href="{{route('about')}}">About</a></li>
                                <li class="dropdown @activeMenu('service*')"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="{{route('service')}}">Web Development</a></li>
                                        <li><a href="{{route('service')}}">Mobile App</a></li>
                                    </ul>
                                </li>
                                <li class="@activeMenu('portfolio')"><a href="{{route('portfolio')}}">Portfolio</a></li>
                                <li class="@activeMenu('blog')"><a href="{{route('blog')}}">Blog</a></li>
                                <li class="@activeMenu('contact')"><a href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>

                </div>

                <!-- Main Menu End-->
                <div class="outer-box clearfix">

                    <!-- Nav Btn -->
                    <div class="nav-btn navSidebar-button"><span class="icon flaticon-menu-2"></span></div>

                    <!-- Button Box -->
                    <div class="button-box">
                        <a href="mailto:support@techwizi.com" class="theme-btn btn-style-one"><span class="txt"><i
                                    class="fas fa-envelope-open-text"></i>
                                    support@techwizi.com</span></a>
                    </div>
                    <!-- End Button Box -->

                </div>

            </div>
        </div>
    </div>
    <!-- End Header Lower -->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/logo_1.png')}}" alt="" title=""></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">

                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Mobile Navigation Toggler -->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

            </div>
        </div>
    </div><!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('home')}}"><img src="{{asset('assets/frontend/images/logo_1.png')}}" alt=""
                        title=""></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

</header>