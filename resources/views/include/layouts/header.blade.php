<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="index.html">
                            <img loading="lazy" src="{{ asset('public/images/logo.png') }}"
                                alt="Constra Construction Company">
                        </a>
                    </div>
                    <!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle">(+9) 847-291-4353</p>
                                    </div>
                                </div>
                            </li>
                            <!-- Add more contact information if needed -->

                            <li class="header-get-a-quote">
                                <a class="btn btn-primary" href="contact.html">Get A Quote</a>
                            </li>
                        </ul>
                        <!-- Ul end -->
                    </div>
                    <!-- header right end -->
                </div>
                <!-- logo area end -->
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </div>

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="site-navigation">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                            data-target=".navbar-collapse" aria-controls="navbar-collapse"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <div id="navbar-collapse" class="collapse navbar-collapse">
                                            <ul class="nav navbar-nav mr-auto">
                                                <li class="nav-item dropdown active">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown"> Engineering Services <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="{{ route('engineering-services') }}">Civil
                                                                Engineering Courses</a></li>
                                                        <li><a href="{{ route('chemical-engineering') }}">
                                                                Chemical Engineering</a></li>

                                                        <li><a href="{{ route('management-planning') }}">
                                                                Management Planning</a></li>


                                                        <li><a href="{{ route('skilled-labour-supply') }}">Skilled
                                                                Labour Supply
                                                            </a></li>

                                                        <li><a href="{{ route('setting-out-levelling') }}">Skilled
                                                                setting out levelling
                                                            </a></li>


                                                        {{-- <li><a href="path-to-your-page.html">Chemical Engineering</a>
                                                        </li>
                                                        <li><a href="path-to-your-page.html">Management & Planning</a>
                                                        </li>
                                                        <li><a href="path-to-your-page.html">Skill Labour Supply</a>
                                                        </li>
                                                        <li><a href="path-to-your-page.html">Setting Out & Surveying</a>
                                                        </li>
                                                        <li><a href="path-to-your-page.html">Smart Sealing Solutions</a>
                                                        </li>
                                                        <li><a href="path-to-your-page.html">Driveways</a></li>
                                                        <li><a href="path-to-your-page.html">Patios</a></li>
                                                        <li><a href="path-to-your-page.html">Concrete</a></li>
                                                        <li><a href="path-to-your-page.html">Cavity Wall / Loft
                                                                Insulation</a></li>
                                                        <li><a href="path-to-your-page.html">CCTV & Security Alarm
                                                                Solutions</a></li>
                                                        <li><a href="path-to-your-page.html">COVID19 Sneeze Protection
                                                                Screens</a></li> --}}
                                                    </ul>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown">Projects <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="projects.html">Projects All</a></li>
                                                        <li><a href="projects-single.html">Projects Single</a></li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown">Services <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="services.html">Services All</a></li>
                                                        <li><a href="service-single.html">Services Single</a></li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown">Features <i
                                                            class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="typography.html">Typography</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li class="dropdown-submenu">
                                                            <a href="#!" class="dropdown-toggle"
                                                                data-toggle="dropdown">Parent Menu</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#!">Child Menu 1</a></li>
                                                                <li><a href="#!">Child Menu 2</a></li>
                                                                <li><a href="#!">Child Menu 3</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item dropdown">
                                                    <a href="#" class="nav-link dropdown-toggle"
                                                        data-toggle="dropdown">News <i class="fa fa-angle-down"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="news-left-sidebar.html">News Left Sidebar</a></li>
                                                        <li><a href="news-right-sidebar.html">News Right Sidebar</a>
                                                        </li>
                                                        <li><a href="news-single.html">News Single</a></li>
                                                    </ul>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link" href="contact.html">Contact</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </nav>
                                </div>
                                <!--/ Col end -->
                            </div>
                            <!--/ Row end -->
                        </div>
                        <!--/ Container end -->
                    </div>
                    <!--/ Navigation end -->
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Navigation end -->
</header>
