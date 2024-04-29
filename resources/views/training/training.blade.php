@extends('default')

@section('title', 'Saicel Training')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="banner-carousel banner-carousel-1 mb-0">
                <div class="banner-carousel-item"
                    style="background-image: url({{ asset('images/training/img-training.png') }}); background-color: transparent; background-size: cover; background-position: center;">
                    <div class="slider-content text-left">
                        <div class="container h-100">
                            <div class="row align-items-center h-100">
                                <div class="col-md-12">
                                    <h2 class="slide-title" data-animation-in="slideInDown">
                                        Empower Your Team with Expert Training
                                    </h2>
                                    <h3 class="slide-title" data-animation-in="fadeIn">
                                        Comprehensive Training Solutions for Your Organization
                                    </h3>
                                    <p data-animation-in="slideInRight">
                                        Discover our range of training programs designed to enhance the
                                        skills and knowledge of your workforce. From technical training to soft skills
                                        development, we offer tailored solutions to meet your organization's needs.
                                    </p>
                                </div>
                            </div>
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
                                    <h2 class="service-box-title fs-5"><strong>Expert Training Services</strong></h2>
                                    <p>Discover our comprehensive range of <strong>training programs</strong> designed to
                                        empower your team and enhance their skills:</p>
                                    <p>We offer <strong>customized training solutions</strong> tailored to your specific
                                        organizational needs, ensuring <strong>maximum impact</strong> and <strong>lasting
                                            results</strong>.</p>
                                    <p>Our services include <strong>flexible scheduling</strong>, <strong>high-quality
                                            materials</strong>, and <strong>interactive learning experiences</strong> for
                                        effective training delivery.</p>
                                    <p>Trust our experienced team to provide <strong>reliable</strong> and
                                        <strong>engaging</strong> training services that meet your organization's goals.
                                    </p>
                                </div>
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                        <div class="col-lg-6">
                            <div class="ts-service-box bg-image hover-zoom">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset('images/training/img-training-card.png') }}" alt="training-service-image">
                            </div><!-- Service box end -->
                        </div><!-- Col end -->
                    </div><!--/ Title row end -->
                </div><!--/ Container end -->
            </section>
        </div>
    </section>


    <div class="container my-4">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h1 class="text-center ">Our Awesome Courses</h1>
                <h4 class="text-center mb-4">Explore our wide range of high-quality courses</h4>
                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    @foreach ($courses as $course)
                        <div class="col mb-4">
                            <div class="card card-hover-effect h-100 d-flex flex-column">
                                <a href="{{ $course['url'] }}">
                                    <img src="{{ $course['img'] }}" class="card-img-top" alt="{{ $course['title'] }}">
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title text-center">{{ $course['title'] }}</h5>
                                    <p class="card-category text-center">{{ $course['category'] }}</p>
                                    <p class="card-description text-center">{{ $course['description'] }}</p>
                                    <a href="{{ $course['url'] }}" class="btn btn-primary mt-auto">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>




@endsection
<style>
    .card {

        transition: transform 0.3s, box-shadow 0.3s;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        width: 100%;
        height: 100%;
    }

    .card-hover-effect:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 1.5rem;
        height: 100%;
    }

    .card-img-top {
        object-fit: cover;
        width: 100%;
        max-width: 100%;
        height: 200px;
        /* Adjust the height as needed */
    }

    .card-title {
        font-size: 1.5rem;
        /* Adjust the font size as needed */
        margin-bottom: 0.5rem;
        text-align: center;
    }

    .card-category {
        font-size: 1rem;
        /* Adjust the font size as needed */
        color: #6c757d;
        text-align: center;
        margin-bottom: 0.5rem;
    }

    .card-description {
        text-align: center;
        margin-bottom: 0;
    }

    .btn-enroll {
        width: 100%;
    }
</style>
