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
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ">
                                <li class="nav-item">
                                    <a href="{{ route('home-page') }}" class="nav-link">home</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Engineering Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('engineering-services') }}">Civil Engineering Courses</a>
                                        </li>
                                        <li><a href="{{ route('chemical-engineering') }}">Chemical Engineering</a></li>
                                        <li><a href="{{ route('management-planning') }}">Management Planning</a></li>
                                        <li><a href="{{ route('skilled-labour-supply') }}">Skilled Labour Supply</a>
                                        </li>
                                        <li><a href="{{ route('setting-out-levelling') }}">Setting Out & Surveying</a>
                                        </li>
                                        <li><a href="{{ route('smart-sealing-solutions') }}">Smart Sealing Solutions</a>
                                        </li>
                                        <li><a href="{{ route('driveways') }}">Driveways</a></li>
                                        <li><a href="{{ route('patios') }}">Patios</a></li>
                                        <li><a href="{{ route('concrete') }}">Concrete</a></li>
                                        <li><a href="{{ route('cavity-wall-loft-insulation') }}">Cavity Wall / Loft
                                                Insulation</a></li>
                                        <li><a href="{{ route('cctc-security-alarms') }}">CCTV & Security Alarm
                                                Solutions</a></li>
                                        <li><a href="{{ route('protection-screens-Fitting-services') }}">Protection
                                                Screens Fitting Services</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Procedures
                                        & Templates <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="projects.html">Projects All</a></li>
                                        <li><a href="projects-single.html">Projects Single</a></li>
                                    </ul>
                                </li>

                                {{-- <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Workshops
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="services.html">Services All</a></li>
                                        <li><a href="service-single.html">Services Single</a></li>
                                    </ul>
                                </li> --}}

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Property Investments in UK</a>
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">Free Online Businesses</a>
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
</header>
