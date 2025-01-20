@extends('layouts.frontend.app')
@section('title', 'Home')

@section('content')
    <!-- banner section start  -->
    <section class="pt-120 pb-60 br-bottom-n3 overflow-hidden mt-10 mt-lg-0">
        <div class="container">
            <div class="d-flex flex-wrap gap-10 gap-md-15 align-items-center justify-content-between">
                <div class="banner-content">
                    <span class="n5-color fs-five">HI, I'M A FREELANCER</span>
                    <h2 class="typing-text display-one p1-color mt-2 mb-3"></h2>
                    <p class="fs-seven n5-color">
                        I'm a software engineer specializing in scalable web apps. Explore my
                        <a href="{{ route('blog') }}" class="p1-color"> blog</a>,<a href="portfolio.html" class="p1-color">
                            project portfolio</a>
                        and <a href="{{ route('resume') }}" class="p1-color">online resume</a>.
                    </p>
                    <div class="d-flex flex-wrap align-itmes-center gap-3 gap-md-6 mt-4 mt-md-8">
                        <a href="portfolio.html"
                            class="primary-btn px-3 px-md-6 py-2 py-md-4 fw-medium rounded-pill d-flex align-items-center gap-2">
                            <i class="ph ph-arrow-right"></i>View Portfolio
                        </a>
                        <a href="{{ route('resume') }}"
                            class="primary-btn2 fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2">
                            <img src="{{ asset('frontend') }}/assets/images/resume-icon.png" alt="icon" />View
                            Resume
                        </a>
                    </div>
                </div>

                <div class="position-relative profile-img">
                    <div class="user-bg"></div>
                    <div class="bg-white">
                        <img src="{{ asset('frontend') }}/assets/images/user.jpg" alt="user" class="user-img" />
                    </div>
                </div>
            </div>
            <!-- counter -->
            <div class="banner-counter d-flex flex-wrap flex-xl-nowrap align-items-center gap-3 gap-md-6 mt-10 mt-md-17">
                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color">
                        <span class="counter">5</span>
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Years of Experience</span>
                </div>
                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color">
                        <span class="counter">110</span>
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Projects Completed</span>
                </div>
                <div class="d-flex align-items-center gap-2 gap-xl-4">
                    <h2 class="display-two fw-semibold p1-color d-flex gap-1">
                        <span class="counter">6</span>k
                    </h2>
                    <div class="line"></div>
                    <span class="n5-color">Clients Worldwide</span>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- What I do section start -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end pb-60">
                <div data-aos="zoom-in-left" class="section-heading">
                    <div class="d-flex align-items-center gap-2">
                        <div class="title-line"></div>
                        <h2 class="display-four n5-color fw-semibold">What I do</h2>
                    </div>
                    <p class="fs-seven n4-color mt-2 mt-md-4">
                        I have more than 10 years' experience building software for
                        clients all over the world. Below is a quick overview of my
                        main technical skill sets and technologies I use. Want to find
                        out more about my experience? Check out my
                        <a href="{{ route('resume') }}" class="p1-color">online resume</a> and
                        <a href="{{ route('portfolio') }}" class="p1-color">project portfolio</a>.
                    </p>
                </div>
                <a href="{{ route('services') }}" data-aos="zoom-in-right"
                    class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap">
                    <i class="ph ph-arrow-right"></i>Services & Pricing
                </a>
            </div>

            <div class="row g-3 g-md-6">
                <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('frontend') }}/assets/images/js.png" alt="js" class="service-icon" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Vanilla JavaScript
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('frontend') }}/assets/images/angular.png" alt="angular"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/react.png" alt="react"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/vue.png" alt="vue" class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Angular, React & Vue
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('frontend') }}/assets/images/node.png" alt="node" class="service-icon" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Node.js
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('frontend') }}/assets/images/python.png" alt="python" class="service-icon" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Python & Django
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="500" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <img src="{{ asset('frontend') }}/assets/images/php.png" alt="php" class="service-icon" />
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            PHP
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="600" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('frontend') }}/assets/images/npm.png" alt="npm"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/gulp.png" alt="gulp"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/grunt.png" alt="grunt"
                                class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            npm, Gulp & Grunt
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('frontend') }}/assets/images/html.png" alt="html"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/css.png" alt="css"
                                class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            HTML & CSS
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-md-4 col-lg-6 col-xl-4 col-xxl-3">
                    <div class="service-card px-4 px-lg-8 py-5 py-lg-10">
                        <div class="d-flex gap-3">
                            <img src="{{ asset('frontend') }}/assets/images/sass.png" alt="sass"
                                class="service-icon" />
                            <img src="{{ asset('frontend') }}/assets/images/less.png" alt="less"
                                class="service-icon" />
                        </div>
                        <h4 class="fs-six n5-color fw-medium mt-3 mt-md-6 mb-2 mb-md-3">
                            Sass & LESS
                        </h4>
                        <p class="fs-seven n4-color">
                            List skills and technologies here. Customize as needed.
                            Built on HTML5, Sass, and Bootstrap 5.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What I do section end -->

    <!-- next project section start -->
    <section class="next-project pt-120 pb-120">
        <div class="container d-flex gap-3 gap-md-6 flex-wrap justify-content-between align-items-center">
            <div data-aos="zoom-in-left" class="next-project-content">
                <h3 class="display-four n11-color fw-semibold mb-2 mb-md-4">
                    Let’s Work together on your next Project
                </h3>
                <p class="fs-seven n11-color">
                    I am available for freelance projects. Hire me and get your
                    project done.
                </p>
            </div>
            <a data-aos="zoom-in-right" href="{{ route('contact') }}" class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100">
                <i class="ph ph-arrow-right"></i>Let’s get in touch
            </a>
        </div>
    </section>
    <!-- next project section end -->

    <!-- Featured Projects section start -->
    <section class="projects-section pt-120 pb-120 br-bottom-n3">
        <div class="container">
            <div class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end mb-8 mb-md-15">
                <div data-aos="zoom-in-left" class="section-heading">
                    <div class="d-flex align-items-center gap-2">
                        <div class="title-line"></div>
                        <h2 class="display-four n5-color fw-semibold">
                            Featured Projects
                        </h2>
                    </div>
                    <p class="fs-seven n4-color mt-2 mt-md-4">
                        My step-by-step guide ensures a smooth project journey, from
                        the initial consultation to the final delivery. I take care of
                        every detail, allowing you to focus on what you do best.
                    </p>
                </div>
                <a data-aos="zoom-in-right" href="portfolio.html"
                    class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 h-100 text-nowrap">
                    <i class="ph ph-arrow-right"></i>View Portfolio
                </a>
            </div>

            <div class="row g-6 g-md-8">
                <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                    <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                        </a>

                        <div class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                            <div>
                                <div class="d-flex flex-wrap gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">React
                                        JS</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">gsap</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">Web
                                        Development</a>
                                </div>
                                <a href="portfolio_details.html"
                                    class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block">
                                    Crypto Website Development for DeFi X
                                </a>
                            </div>
                            <a href="portfolio_details.html"
                                class="project-link d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                    <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                        </a>

                        <div class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">React
                                        JS</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">gsap</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">Web
                                        Development</a>
                                </div>
                                <a href="portfolio_details.html"
                                    class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block">
                                    Salesforce CRM - Invoice Management
                                </a>
                            </div>
                            <a href="portfolio_details.html"
                                class="project-link d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="700" class="col-xl-6">
                    <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                        </a>

                        <div class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">React
                                        JS</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">gsap</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">Web
                                        Development</a>
                                </div>
                                <a href="portfolio_details.html"
                                    class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block">
                                    Car Rental App
                                </a>
                            </div>
                            <a href="portfolio_details.html"
                                class="project-link d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                    <div class="project-card">
                        <a href="portfolio_details.html" class="thumb d-block">
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                            <div class="post-thumb">
                                <div class="post-thumb-inner">
                                    <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..."
                                        class="w-100 p-2" />
                                </div>
                            </div>
                        </a>

                        <div class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
                            <div>
                                <div class="d-flex gap-2 align-items-center">
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">React
                                        JS</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">gsap</a>
                                    <a href="javascript:void(0)"
                                        class="n5-color fs-nine px-2 px-md-4 py-1 py-md-2 brn3 rounded-pill fw-medium">Web
                                        Development</a>
                                </div>
                                <a href="portfolio_details.html"
                                    class="project-title fs-five fw-semibold n5-color mt-3 mt-md-5 d-block">
                                    Financial management
                                </a>
                            </div>
                            <a href="portfolio_details.html"
                                class="project-link d-flex align-items-center justify-content-center flex-shrink-0">
                                <i class="ph-bold ph-arrow-up-right n5-color"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured Projects section end -->

    <!-- Testimonials section start -->
    <section class="pt-120 pb-120 br-bottom-n3">
        <div class="container">
            <div data-aos="zoom-in-up" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                    <div class="title-line"></div>
                    <h2 class="display-four n5-color fw-semibold">Testimonials</h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                    See how I've helped our clients succeed. IT’s a highly
                    Customizable,creative, modern, visually stunning and Bootstrap5
                    HTML5 Template.
                </p>
            </div>
            <div class="mt-8 mt-md-15 overflow-x-hidden">
                <div class="swiper testimonial_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “ I highly recommend Portfolify to anyone looking for a
                                    high-quality best Bootstrap theme.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/assets/images/buyer1.png" alt="testimonial"
                                        class="testimonial_img" />

                                    <div>
                                        <span class="fs-eight d-block n5-color">Esther Howard
                                        </span>
                                        <span class="fs-nine d-block n5-color">Australia
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “Best Bootstrap template ever: easy to customize,
                                    feature-rich, and meets all our needs.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/assets/images/buyer2.png" alt="testimonial"
                                        class="testimonial_img" />

                                    <div>
                                        <span class="fs-eight d-block n5-color">Cameron Williamson</span>
                                        <span class="fs-nine d-block n5-color">Brazil </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “Portfolify is the perfect theme for businesses that
                                    want to create a stylish and functional website.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/assets/images/buyer3.png" alt="testimonial"
                                        class="testimonial_img" />
                                    <div>
                                        <span class="fs-eight d-block n5-color">Robert Fox
                                        </span>
                                        <span class="fs-nine d-block n5-color">China </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “Best Bootstrap template ever: easy to customize,
                                    feature-rich, and meets all our needs.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/images/buyer4.png" alt="testimonial"
                                        class="testimonial_img" />

                                    <div>
                                        <span class="fs-eight d-block n5-color">Jenny Wilson</span>
                                        <span class="fs-nine d-block n5-color">Russia</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “ I highly recommend Portfolify to anyone looking for a
                                    high-quality best Bootstrap theme.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/assets/images/buyer1.png" alt="testimonial"
                                        class="testimonial_img" />

                                    <div>
                                        <span class="fs-eight d-block n5-color">Esther Howard
                                        </span>
                                        <span class="fs-nine d-block n5-color">Australia
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="slide-card px-3 px-md-6 py-5 py-md-10 bgn2-color box-shadow1 br-left-p1">
                                <div class="d-flex gap-1 mb-2 mb-md-3">
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                    <i class="ph-fill ph-star y1-color fs-six"></i>
                                </div>
                                <p class="n4-color fs-six">
                                    “Portfolify is the perfect theme for businesses that
                                    want to create a stylish and functional website.”
                                </p>
                                <div class="d-flex gap-3 align-items-center mt-4 mt-md-7">
                                    <img src="{{ asset('frontend') }}/assets/images/buyer3.png" alt="testimonial"
                                        class="testimonial_img" />
                                    <div>
                                        <span class="fs-eight d-block n5-color">Robert Fox
                                        </span>
                                        <span class="fs-nine d-block n5-color">China </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative mt-15">
                        <div class="swiper-pagination d-flex allign-items-center justify-content-center gap-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials section end -->

    <!-- Latest Blog Posts section start -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div class="d-flex gap-3 flex-wrap flex-xxl-nowrap justify-content-between align-items-end mb-8 mb-md-15">
                <div data-aos="zoom-in-left" class="section-heading">
                    <div class="d-flex align-items-center gap-2">
                        <div class="title-line"></div>
                        <h2 class="display-four n5-color fw-semibold">
                            Latest Blog Posts
                        </h2>
                    </div>
                    <p class="fs-seven n4-color mt-2 mt-md-4">
                        More than 1500+ agencies using Portfolify
                    </p>
                </div>
                <a data-aos="zoom-in-right" href="{{ route('blog') }}" class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill text-nowrap">
                    See All Articles
                </a>
            </div>
            <div class="row g-6">
                <div data-aos="fade-up" data-aos-duration="700" class="col-sm-6 col-xxl-4">
                    <a href="blog_details.html" class="blog-card">
                        <div class="blog-img rounded-3 overflow-hidden">
                            <img src="{{ asset('frontend') }}/assets/images/blog1.png" alt="blog"
                                class="rounded-3 w-100" />
                        </div>
                        <div class="pt-4 pt-md-8 px-3 px-md-5">
                            <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                                <span class="n4-color fs-eight">March 18, 2024</span>
                                <span class="p1-color fs-eight">/</span>
                                <span class="n4-color fs-eight">Articles</span>
                            </div>
                            <h4 class="blog-title fs-five n5-color fw-semibold">
                                7 Great Web Development Languages to Learn this Year
                            </h4>
                        </div>
                    </a>
                </div>
                <div data-aos="fade-up" data-aos-duration="800" class="col-sm-6 col-xxl-4">
                    <a href="blog_details.html" class="blog-card">
                        <div class="blog-img rounded-3 overflow-hidden">
                            <img src="{{ asset('frontend') }}/assets/images/blog2.png" alt="blog"
                                class="rounded-3 w-100" />
                        </div>
                        <div class="pt-4 pt-md-8 px-3 px-md-5">
                            <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                                <span class="n4-color fs-eight">March 18, 2024</span>
                                <span class="p1-color fs-eight">/</span>
                                <span class="n4-color fs-eight">Tutorials</span>
                            </div>
                            <h4 class="blog-title fs-five n5-color fw-semibold">
                                How to Optimize your Website for Better Performance
                            </h4>
                        </div>
                    </a>
                </div>
                <div data-aos="fade-up" data-aos-duration="900" class="col-sm-6 col-xxl-4">
                    <a href="blog_details.html" class="blog-card">
                        <div class="blog-img rounded-3 overflow-hidden">
                            <img src="{{ asset('frontend') }}/assets/images/blog3.png" alt="blog"
                                class="rounded-3 w-full" />
                        </div>
                        <div class="pt-4 pt-md-8 px-3 px-md-5">
                            <div class="d-flex align-items-center gap-3 mb-2 mb-md-3">
                                <span class="n4-color fs-eight">March 18, 2024</span>
                                <span class="p1-color fs-eight">/</span>
                                <span class="n4-color fs-eight">Articles</span>
                            </div>
                            <h4 class="blog-title fs-five n5-color fw-semibold">
                                8 Tips to Improve your Web Development Skills in 2024
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Posts section end -->

@endsection
