@extends('default')

@section('title', 'Saicel Cleaning Services')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="banner-carousel banner-carousel-1 mb-0">
                <div class="banner-carousel-item"
                    style="background-image: url({{ asset('images/slider-main/img-engineering.png') }}); background-color: transparent; background-size: cover; background-position: center;">
                    <div class="slider-content text-left">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-12">
                                    <h2 class="slide-title" data-animation-in="slideInDown">
                                        Innovative <span class="low-highlight">Engineering Solutions</span> for Your
                                        Projects
                                    </h2>
                                    <h3 class="slide-title" data-animation-in="fadeIn">
                                        Elevate Your Spaces with Cutting-Edge Engineering
                                    </h3>
                                    <p data-animation-in="slideInRight">
                                        Explore our innovative engineering solutions designed to optimize your projects and
                                        elevate your spaces to new heights.
                                    </p>
                                    <div data-animation-in="slideInLeft">
                                        <a href="services/engineering.html" class="slider btn btn-primary border">Discover
                                            Our Engineering Services</a>
                                        <a href="about.html" class="slider btn btn-primary border"
                                            aria-label="learn-more-about-us">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Add similar adjustments for other banner-carousel-items -->
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <!-- First card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 255px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- Second card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 255px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- Third card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 255px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Fourth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- Fifth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <!-- Sixth card -->
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="https://smartseal.2dimg.com/25/untitled-design-4_b4ca94ef5c.jpg" class="card-img-top"
                            style="height: 250px;" alt="Card Image">
                        <div class="card-body d-flex flex-column">
                            <a href="#" class="btn btn-primary mt-auto">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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













    <section class="card mx-0">
        <div class="row">
            <!-- Before & After Images Column -->
            <div class="col-md-6 ">
                <div class="row align-items-center"> <!-- Added align-items-center class -->
                    <div class="col-md-5">
                        <div class="card"> <!-- Apply custom class -->
                            <div class="card-body before-image"
                                style="font-size: 16px; background-image: url('{{ asset('images/sealing-services/img-sealing-before.jpg') }}');">
                                <!-- Content for the first nested column -->
                                <p class="mt-0 mb-0 text-center"><button class="btn btn-secondary" disabled>
                                        Before</button>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 text-center my-3" style="font-size: 56px; font-weight:bolder">
                        <!-- Adjust font size and added text-center class -->
                        vs
                    </div>
                    <div class="col-md-5">
                        <div class="card ">
                            <!-- Apply custom class and negative margin -->
                            <div class="card-body before-image"
                                style="font-size: 16px; background-image: url('{{ asset('images/sealing-services/img-sealing-after.jpg') }}');">
                                <!-- Content for the first nested column -->
                                <p class="mt-0 mb-0 text-center"><button class="btn btn-secondary" disabled>
                                        After</button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content Column -->
            <div class="col-md-6 my-3">
                <div class="card">
                    <div class="card-body" style="font-size: 18px;">
                        <h3>Why Choose Us</h3>
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Experienced
                                professionals</li>
                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>High-quality
                                sealants</li>
                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Long-lasting
                                protection</li>
                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Expert
                                consultation</li>
                            <li><span class="fa-li"><i class="fas fa-check-circle text-primary"></i></span>Transformative
                                results</li>
                        </ul>
                        <p class="text-center my-3" style="font-size: 18px;">Ready to transform your space? <br> Contact
                            us today!</p>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg">Hire Us</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>





@endsection

<style>
    .before-image,
    .after-image {
        background-size: cover;
        background-position: center;
        height: 300px;

        margin: 5%;
        /* Adjust height as needed */
        color: #fff;
        /* Optional: Add text color for better readability */
    }
</style>
