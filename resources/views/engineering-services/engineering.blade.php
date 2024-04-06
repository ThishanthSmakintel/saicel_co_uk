@extends('default')

@section('title', 'saicel.co.uk - Home')

@section('content')
    <section id="main-container" class="main-container pb-2">
        <div class="container">
            <div class="row">
                <!-- CCTV & Security Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('images/services/service1.jpg') }}"
                                alt="CCTV & Security Image" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}"
                                    alt="CCTV & Security Icon" />
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ url('service-single.html') }}">CCTV & Security</a>
                                </h3>
                                <p>
                                    We offer comprehensive CCTV and security solutions to safeguard your premises and
                                    assets.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ url('service-single.html') }}"
                                    aria-label="CCTV & Security Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Col end -->

                <!-- Smart Sealing Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('images/services/service1.jpg') }}"
                                alt="Smart Sealing Image" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}"
                                    alt="Smart Sealing Icon" />
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ url('service-single.html') }}">Smart Sealing</a>
                                </h3>
                                <p>
                                    Our smart sealing solutions ensure tight and effective sealing, protecting your premises
                                    from external elements.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ url('service-single.html') }}"
                                    aria-label="Smart Sealing Service Details"><i class="fa fa-caret-right"></i> Learn
                                    more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Col end -->

                <!-- Thermal Heat Reduction Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('images/services/service1.jpg') }}"
                                alt="Thermal Heat Reduction Image" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}"
                                    alt="Thermal Heat Reduction Icon" />
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ url('service-single.html') }}">Thermal Heat Reduction</a>
                                </h3>
                                <p>
                                    Our thermal heat reduction solutions effectively minimize heat transfer, enhancing
                                    comfort and energy efficiency.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ url('service-single.html') }}"
                                    aria-label="Thermal Heat Reduction Service Details"><i class="fa fa-caret-right"></i>
                                    Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Col end -->

                <!-- COVID19 Sneeze Protection Screen Installation Service Box -->
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('images/services/service1.jpg') }}"
                                alt="COVID19 Sneeze Protection Screen Installation Image" />
                        </div>
                        <div class="d-flex">
                            <div class="ts-service-box-img">
                                <!-- Use appropriate icon -->
                                <img loading="lazy" src="{{ asset('images/icon-image/service-icon1.png') }}"
                                    alt="COVID19 Icon" />
                            </div>
                            <div class="ts-service-info">
                                <h3 class="service-box-title">
                                    <a href="{{ url('service-single.html') }}">COVID19 Sneeze Protection Screen
                                        Installation</a>
                                </h3>
                                <p>
                                    Our COVID19 sneeze protection screen installation service ensures a safe environment by
                                    preventing the spread of airborne particles.
                                </p>
                                <a class="learn-more d-inline-block" href="{{ url('service-single.html') }}"
                                    aria-label="COVID19 Service Details"><i class="fa fa-caret-right"></i> Learn more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Col end -->

                <!-- Additional Content -->
                <div class="col-lg-12">
                    <div class="ts-service-info">
                        <h3 class="service-box-title">About SAICEL UK</h3>
                        <p>
                            With over 20 years in the industry working on major projects across the UK, we aim for the
                            highest standards of site safety, quality, efficiency, and environmental management. SAICEL UK
                            offers a wide range of civil engineering solutions by a team of qualified and experienced civil
                            engineers and project managers. Our project managers and engineers are SMSTS qualified and have
                            valid CSCS cards, giving our clients peace of mind that they are dealing with a single
                            contractor who can offer quality workmanship and service as per their requirements.
                        </p>
                    </div>
                </div>
                <!-- Additional Content end -->

            </div>
            <!-- Main row end -->
        </div>
        <!-- Container end -->
    </section>
@endsection
