@extends('default')

@section('title', 'Contact Us')

@section('content')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Reaching our Offices</h2>
                    <h3 class="section-sub-title">Find Our Locations</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-6">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visit Our Canada Office</h4>
                            <p>15 Purbrook Court<br>North York, Ontario<br>Canada M2R2B6</p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->

                <div class="col-md-6">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visit Our UK Office</h4>
                            <p>Worcester Park, Surrey<br>KT4 8AY, UK</p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            {{-- <div class="google-map">
                <div id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974"
                    data-marker="images/marker.png" data-marker-name="Constra"></div>
            </div> --}}

            <div class="gap-40"></div>

            <div class="row">
                <div class="col-md-12">
                    <h3 class="column-title">We'd Love to Hear From You</h3>
                    <!-- contact form works with formspree.io  -->
                    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
                    <form id="contact-form" action="#" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control form-control-name" name="name" id="name"
                                        placeholder="" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                        placeholder="" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input class="form-control form-control-subject" name="subject" id="subject"
                                        placeholder="" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10"
                                required></textarea>
                        </div>
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                </div>

            </div><!-- Content row -->
        </div><!-- Container end -->
    </section><!-- Main container end -->

@endsection
