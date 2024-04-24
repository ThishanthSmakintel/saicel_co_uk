@extends('default')

@section('title', 'Maintenance Mode')

@section('content')
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-12">
                    <div class="maintenance-page text-center">
                        <div class="maintenance-logo">
                            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="150">
                        </div>
                        <div class="maintenance-message">
                            <h2>We'll Be Back Soon!</h2>
                            <p>Our website is currently undergoing scheduled maintenance. We apologize for any inconvenience
                                this may cause. Please check back later.</p>
                            <p>Estimated downtime: <strong>2 hours</strong></p>
                        </div>
                        <div class="maintenance-body">
                            <p>In the meantime, follow us on:</p>
                            <ul class="social-icons">
                                <li><a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" class="social-icon"><i class="fab fa-instagram"></i></a></li>
                                <!-- Add more social media icons as needed -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div><!-- Content row -->
        </div><!-- Container end -->
    </section><!-- Main container end -->
@endsection
