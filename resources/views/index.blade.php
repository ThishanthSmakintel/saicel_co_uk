<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Saicel.co.uk - Home</title>

    <!-- Mobile Specific Metas -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/CompanyLogo.ico') }}">

    <!-- CSS files inclusion -->
    @include('include.layouts.css-paths')
    <!-- End of CSS files inclusion -->
</head>

<body>
    <div class="body-inner">
        @include('include.sections.top-bar')
        <!-- Header start -->
        @include('include.layouts.header')
        <!-- Header end -->

        <!-- Slide show -->
        @include('include.sections.slide-show')
        <!-- Slide show end -->

        <!-- Section -->
        @include('include.sections.section')
        <!-- Section end -->

        <!-- Section 2 -->
        @include('include.sections.section2')
        <!-- Section 2 end -->

        <!-- Section 3 -->
        @include('include.sections.section3')
        <!-- Section 3 end -->

        <!-- Section 4 -->
        @include('include.sections.section4')
        <!-- Section 4 end -->

        <!-- Section 5 course deatils wtih alsion -->
        @include('include.sections.section5')
        <!-- Section 5 end  deatils wtih alsion -->

        <!-- Section 8 (News) -->
        @include('include.sections.section8-news')
        <!-- Section 8 end -->



        <!-- Section 6 -->
        @include('include.sections.section6')
        <!-- Section 6 end -->

        <!-- Section 7 (Subscribe) -->
        @include('include.sections.section7-subscribe')
        <!-- Section 7 end -->



        <!-- Footer -->
        @include('include.layouts.footer')
        <!-- Footer end -->

        <!-- JavaScript Files inclusion -->
        @include('include.layouts.js-paths')
        <!-- End of JavaScript Files inclusion -->
    </div>
    <!-- Body inner end -->
</body>

</html>
