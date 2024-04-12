@extends('default')

@section('title', 'Saicel Cleaning Services')

@section('content')
    <section id="facts" class="ts-service-box d-flex">
        <!-- About Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".3s">
                        <div class="about-img">
                            <div class="rotate-left bg-dark"></div>
                            <div class="rotate-right bg-dark"></div>
                            <img src="{{ asset('images/banner/img-about.jpg') }}" class="img-fluid h-100" alt="img">
                            <div class="bg-white experiences">
                                <h1 class="display-3">35</h1>
                                <h6 class="fw-bold">Years Of Experiences</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay=".6s">
                        <div class="about-item overflow-hidden">
                            <h5 class="mb-2 px-3 py-1 text-dark rounded-pill d-inline-block border border-2 border-primary">
                                About Us</h5>
                            <h1 class="display-5 mb-2"> provide Best Cleaning Services Since 2008</h1>
                            <div class="ts-service-box">
                                <div class="ts-service-box-info">
                                    <h3 class="service-box-title"><strong>Bespoke Cleaning Solutions</strong></h3>
                                    <p>
                                        <span class="text-left">Experience the Total Clean difference with our
                                            <strong>customized cleaning plans</strong> tailored to your needs.
                                            <strong>Flexibility</strong> tailored to your schedule, <strong>specialized
                                                protocols</strong> for thorough cleaning, and
                                            <strong>environmentally-friendly options</strong> for a green clean. Add-ons are
                                            available to enhance your cleaning package, with <strong>budget-friendly
                                                options</strong> that don't compromise quality. We offer <strong>quality
                                                assurance</strong> to guarantee your satisfaction. Let us craft a cleaning
                                            plan that fits your <strong>goals</strong> and <strong>budget</strong>
                                            perfectly</span>
                                    </p>
                                </div>
                            </div><!-- Service box end -->


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    </section>

    <section id="ts-service-area" class="ts-service-area pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Elevate Your Space with Total Clean</h2>
                    <h3 class="section-sub-title">Tailored Cleaning Solutions for Your Business</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><strong>Industry-Leading Expertise</strong></h3>
                            <p>With Total Clean, you benefit from decades of expertise across various sectors:</p>
                            <ul>
                                <li><strong>Office Buildings</strong></li>
                                <li><strong>Medical Facilities</strong></li>
                                <li><strong>Educational Institutions</strong></li>
                                <li><strong>Retail Stores</strong></li>
                                <li><strong>Hospitality Establishments</strong></li>
                                <li><strong>Manufacturing Facilities</strong></li>
                            </ul>
                            <p>Our expertise ensures your space receives top-notch cleaning tailored to your industry's
                                unique needs.</p>
                        </div>
                    </div><!-- Service 1 end -->
                </div><!-- Col end -->

                <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="{{ asset('images/cleaningServices/img-middle.jpg') }}"
                        alt="service-avater-image">
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">

                            <h3 class="service-box-title"><strong>Bespoke Cleaning Solutions</strong></h3>
                            <p>Experience the Total Clean difference with our customized cleaning plans:</p>
                            <ul>
                                <li>Flexibility tailored to your schedule</li>
                                <li>Specialized protocols for thorough cleaning</li>
                                <li>Environmentally-friendly options for a green clean</li>
                                <li>Add-ons to enhance your cleaning package</li>
                                <li>Budget-friendly options without compromising quality</li>
                                <li>Quality assurance to guarantee satisfaction</li>
                            </ul>
                            <p>Let us craft a cleaning plan that fits your goals and budget perfectly.</p>
                        </div>
                    </div>
                </div><!-- Col end -->
            </div><!-- Content row end -->
        </div><!--/ Container end -->
    </section>


    <section class="card mx-0 shadow">
        <div class="card-body text-left">
            <section id="ts-service-area" class="ts-service-area pb-0">
                <div class="container">
                    <div class="row text-left align-items-center">
                        <div class="col-lg-6">
                            <div class="ts-service-box">
                                <div class="ts-service-box-info">
                                    <h3 class="service-box-title"><strong>Bespoke Cleaning Solutions</strong></h3>
                                    <p>Experience the Total Clean difference with our <strong>customized cleaning
                                            plans</strong> tailored to your needs:</p>
                                    <p><strong>Flexibility</strong> tailored to your schedule, <strong>specialized
                                            protocols</strong> for thorough cleaning, and <strong>environmentally-friendly
                                            options</strong> for a green clean. Add-ons are available to enhance your
                                        cleaning package, with <strong>budget-friendly options</strong> that don't
                                        compromise quality. We offer <strong>quality assurance</strong> to guarantee your
                                        satisfaction.</p>
                                    <p>Let us craft a cleaning plan that fits your <strong>goals</strong> and
                                        <strong>budget</strong> perfectly.
                                    </p>
                                </div>
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                        <div class="col-lg-6">
                            <div class="ts-service-box bg-image hover-zoom">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('images/cleaningServices/img-right.jpg') }}" alt="service-avater-image">
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                    </div><!--/ Title row end -->
                </div><!--/ Container end -->
            </section>
        </div>
    </section>



    <section class="ts-service-area pb-5">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Check out </h2>
                    <h3 class="section-sub-title">Our Cleaning Services</h3>
                </div>
            </div>
            <div class="row">

                <!-- Car Dealership & Showroom Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100" src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Car Dealership & Showroom Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Car Dealership & Showroom Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for car dealerships and showrooms ensure a pristine and welcoming
                                    environment for your customers.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Car Dealership & Showroom Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Hospitality, Hotel & Pub Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100" src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Hospitality, Hotel & Pub Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Hospitality, Hotel & Pub Cleaning
                                </h3>
                                <p>
                                    Our cleaning services cater to the unique requirements of hospitality businesses,
                                    ensuring cleanliness and hygiene standards are maintained at all times.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Hospitality, Hotel & Pub Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Healthcare & Medical Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Healthcare & Medical Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Healthcare & Medical Cleaning
                                </h3>
                                <p>
                                    Our specialized cleaning services for healthcare and medical facilities prioritize
                                    cleanliness and infection control to ensure the safety of patients and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Healthcare & Medical Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Daily Office Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Daily Office Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Daily Office Cleaning
                                </h3>
                                <p>
                                    Our office cleaning services ensure a clean and hygienic workspace for increased
                                    productivity and employee well-being.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Daily Office Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Fintech Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Fintech Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Fintech Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for fintech companies maintain a clean and professional
                                    environment, adhering to industry standards and regulations.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Fintech Cleaning Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Banking and Finance Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Banking and Finance Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Banking and Finance Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for banking and finance institutions ensure a clean and
                                    professional environment for staff and clients alike.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Banking and Finance Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Property Management Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Property Management Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Property Management Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for property management companies maintain the cleanliness and
                                    appeal of residential and commercial properties.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Property Management Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Professional Practices Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Professional Practices Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Professional Practices Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for professional practices ensure a clean and welcoming
                                    environment for clients and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Professional Practices Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Public Sector Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Public Sector Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Public Sector Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for public sector organizations maintain cleanliness and hygiene
                                    in government facilities and offices.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Public Sector Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Retail, Gym and Leisure Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Retail, Gym and Leisure Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Retail, Gym and Leisure Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for retail, gym, and leisure facilities ensure a clean and
                                    hygienic environment for customers and patrons.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Retail, Gym and Leisure Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Schools & Educational Facilities Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Schools & Educational Facilities Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Schools & Educational Facilities Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for schools and educational facilities promote a clean and safe
                                    learning environment for students and staff.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Schools & Educational Facilities Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- TV, Radio and Film Studio Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="TV, Radio and Film Studio Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    TV, Radio and Film Studio Cleaning
                                </h3>
                                <p>
                                    Our cleaning services for TV, radio, and film studios maintain cleanliness and hygiene
                                    standards to ensure a conducive working environment.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="TV, Radio and Film Studio Cleaning Service Details"><i
                                        class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->

                <!-- Pharmaceutical Cleaning Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <a href="#">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('images/cleaningServices/img-card.jpg') }}"
                                    alt="Pharmaceutical Cleaning Image" />
                            </div>
                            <div class="d-flex">
                                <!-- No icon image here -->
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    Pharmaceutical Cleaning
                                </h3>
                                <p>
                                    Our specialized cleaning services for pharmaceutical facilities adhere to strict
                                    cleanliness and safety standards to meet regulatory requirements.
                                </p>
                                <a class="learn-more d-inline-block" href="#"
                                    aria-label="Pharmaceutical Cleaning Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Col end -->


            </div><!-- Row end -->
            <div class="call-to-action classic">
                <div class="row align-items-center">
                    <div class="col-md-8 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Looking for professional cleaning services?</h3>

                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                        <div class="call-to-action-btn">
                            <a class="btn btn-primary" href="#">Hire Us</a>
                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action end -->
        </div><!-- Container end -->

    </section><!-- Service end -->
@endsection
