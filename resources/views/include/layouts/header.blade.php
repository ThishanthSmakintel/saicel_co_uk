<header id="header" class="header-one">
    <div class="bg-white">
        <div class="container">
            <div class="logo-area">
                <div class="row align-items-center">
                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                        <a class="d-block" href="{{ route('home-page') }}">
                            <img loading="lazy" src="{{ asset('images/logo.png') }}" alt="Constra Construction Company">
                        </a>

                    </div>
                    <!-- logo end -->

                    <div class="col-lg-9 header-right">
                        <ul class="top-info-box">
                            <li>
                                <div class="info-box">
                                    <div class="info-box-content">
                                        <p class="info-box-title">Call Us</p>
                                        <p class="info-box-subtitle mx-2">+44 (0) 7939057566

                                        </p>
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
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item">
                                    <a href="{{ route('home-page') }}" class="nav-link">Home</a>
                                </li>


                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Engineering Services <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{ route('engineering-services') }}">Civil Engineering
                                                Courses</a></li>
                                        <li><a href="{{ route('chemical-engineering') }}">Chemical Engineering</a>
                                        </li>
                                        <!-- Other engineering services -->
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="{{ route('procedures-and-templates') }}"
                                        class="nav-link dropdown-toggle mainLink" data-toggle="dropdown">Procedures
                                        & Templates <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="https://amzn.to/3RA1KRW"
                                                target="_blank">Construction Products</a></li>
                                        <li><a class="dropdown-item"
                                                href="https://www.amazon.co.uk/s?k=safety+signs&language=en_GB&crid=2DAR5B78PEKEK&linkCode=sl2&linkId=69a88cdf9ab3dae8c122d8781e46a13d&sprefix=safety+si%2Caps%2C69&tag=saicel-21&ref=as_li_ss_tl"
                                                target="_blank">Safety Signs</a></li>
                                        <!-- Other procedures and templates -->
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('property-investments') }}" class="nav-link">Property
                                        Investments in UK</a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route('free-online-businesses') }}" class="nav-link">Free Online
                                        Businesses</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('home-page') }}" class="nav-link">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a>
                                </li>

                            </ul>
                        </div>
                    </nav>


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
