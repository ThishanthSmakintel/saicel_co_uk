<style>
    .latest-post.card {
        position: relative;
        overflow: hidden;
        height: 100%;
    }

    .latest-post.card .latest-post-media {
        height: 200px;
        /* Set a fixed height for the media container */
    }

    .latest-post.card:hover .latest-post-media::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        transition: all 0.3s ease;
    }

    .latest-post.card:hover .post-body {
        transform: translateY(-50%);
    }

    .latest-post.card:hover .latest-post-meta,
    .latest-post.card:hover .post-title {
        opacity: 1;
        transform: translateY(0);
    }

    .latest-post-media::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0);
        transition: all 0.3s ease;
    }

    .post-body {
        position: relative;
        z-index: 1;
        transition: all 0.3s ease;
        transform: translateY(0);
    }

    .latest-post-meta,
    .post-title {
        opacity: 0;
        transition: all 0.3s ease;
        transform: translateY(20px);
    }

    .latest-post-img {
        height: 100%;
    }

    .post-item-tools.text-bold {
        font-weight: bold;
        font-size: 1.2em;
    }
</style>

<section id="news" class="news">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <span class="section-title">As an </span>
                <div class="">
                    <img loading="lazy" class="img-fluid" src="{{ asset('public/images/logos/amazonAsscoi.png') }}"
                        alt="Subtitle Image" style="max-width: 300px; height: auto;">
                </div>
                <span class="section-title pb-2">we earn from qualifying purchases</span>
            </div>
        </div>


        <!--/ Title row end -->

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post card">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('public/images/news/enginerrin-support') }}" alt="img" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block"></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i>Enginnering Support
                            </span>
                            <span class="post-item-tools">procedures</span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 1st post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post card">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('public/images/news/enginerrin-support') }}" alt="img" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block"></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i>Enginnering Support
                            </span>
                            <span class="post-item-tools">workshop </span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 2nd post col end -->



            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post card">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('public/images/news/enginerrin-support.jpg') }}" alt="img" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block"></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i>Enginnering Support
                            </span>
                            <span class="post-item-tools">Tools</span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>


            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post card">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('public/images/news/enginerrin-support.jpg') }}" alt="img" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block"></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i>Enginnering Support
                            </span>
                            <span class="post-item-tools">books</span>
                        </div>
                    </div>
                </div>
                <!-- Latest post end -->
            </div>
            <!-- 2nd post col end -->

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="latest-post card">
                    <div class="latest-post-media">
                        <a href="news-single.html" class="latest-post-img">
                            <img loading="lazy" class="img-fluid"
                                src="{{ asset('public/images/news/enginerrin-support.jpg') }}" alt="img" />
                        </a>
                    </div>
                    <div class="post-body">
                        <h4 class="post-title">
                            <a href="news-single.html" class="d-inline-block"></a>
                        </h4>
                        <div class="latest-post-meta">
                            <span class="post-item-date">
                                <i class="fa fa-clock-o"></i>Enginnering Support
                            </span>
                            <span class="post-item-tools">materials</span>
                        </div>
                    </div>
                </div>


                <!-- Latest post end -->
            </div>
            <!-- 3rd post col end -->
        </div>

        <div class="row">
            <!-- More posts here -->
        </div>

        {{-- <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
        </div> --}}
    </div>
    <!--/ Container end -->
</section>
