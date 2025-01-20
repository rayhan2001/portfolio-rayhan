<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{asset('frontend')}}/assets/images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/unpkg.com/aos%403.0.0-beta.6/dist/aos.css" />
    <link rel="stylesheet" href="{{asset('frontend')}}/cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.css" />
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
</head>

<body>
    <!-- don't remove this  -->
    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="15" viewBox="0 0 11 15" fill="none"
        class="d-none">
        <g clip-path="url(#clip0_3569_434)">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M5.69145 8.43063L1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L5.69145 10.9887V8.43063Z"
                fill="rgba(var(--p1))" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.72801 5.49387L5.69145 2.54023V0L0 4.21303V6.75919L1.72801 5.49387Z" fill="rgba(var(--p1))" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.86328 6.5702L8.82672 9.5065L4.86328 12.4606V15.0004L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                fill="rgba(var(--p1))" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M4.86328 6.5702L8.82672 9.5065L10.5552 10.7864V8.24163L4.86328 4.01172V6.5702Z"
                fill="rgba(var(--p1))" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M8.72466 2.00391C9.52091 2.00391 10.1657 2.64912 10.1657 3.44491C10.1657 4.24115 9.52091 4.88591 8.72466 4.88591C7.92841 4.88591 7.2832 4.2407 7.2832 3.44491C7.2832 2.64912 7.92841 2.00391 8.72466 2.00391Z"
                fill="rgba(var(--p1))" />
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M1.83013 12.9972C1.03388 12.9972 0.388672 12.352 0.388672 11.5562C0.388672 10.7604 1.03388 10.1152 1.82967 10.1152C2.62546 10.1152 3.27067 10.76 3.27067 11.5562C3.27067 12.3525 2.62592 12.9972 1.82967 12.9972H1.83013Z"
                fill="rgba(var(--p1))" />
        </g>
        <defs>
            <clipPath>
                <rect width="10.5561" height="15" fill="white" />
            </clipPath>
        </defs>
    </svg>

    <!-- preloder  srart -->
    @include('frontend.sections.preloder')
    <!-- preloder  end -->

    <div class="d-flex gap-6">
        <!-- sidebar start -->
        @include('frontend.sections.sidebar')
        <!-- sidebar end -->

        <div class="main-content w-100">
            <!-- top header  -->
            @include('frontend.sections.top_header')

            <!-- bottom header  -->
            @include('frontend.sections.bottom_header')

            <!-- color palettes btns -->
            @include('frontend.sections.color_palettes')

            <!-- hero section start -->
            @yield('content')
            <!-- hero section end -->

            <!-- footer section start -->
            @include('frontend.sections.footer')
            <!-- footer section end -->
        </div>
    </div>

    <!-- script js  -->
    <script src="{{asset('frontend')}}/assets/js/plugins/plugins.js"></script>
    <script src="{{asset('frontend')}}/assets/js/main.js"></script>
    <script src="{{asset('frontend')}}/assets/js/type-word.js"></script>
    <!-- swiper js  -->
    <script src="{{asset('frontend')}}/cdn.jsdelivr.net/npm/swiper%4011/swiper-bundle.min.js"></script>
    <!-- email js  -->
    <script type="text/javascript" src="{{asset('frontend')}}/cdn.jsdelivr.net/npm/%40emailjs/browser%404/dist/email.min.js"></script>
    <!-- aos -->
    <script src="{{asset('frontend')}}/unpkg.com/aos%403.0.0-beta.6/dist/aos.js"></script>
</body>

</html>
