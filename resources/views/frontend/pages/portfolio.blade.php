@extends('layouts.frontend.app')
@section('title', 'Portfolio')

@section('content')
    <!-- best project section start -->
    <section class="pt-120 pb-120 mt-10 mt-lg-0">
        <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
                <h3 class="page-title n5-color fs-onefw-semibold n5-color mb-2 mb-md-3 text-center">
                    A collection of my best projects
                </h3>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    With many years in web development, I acquired extensive
                    experience working on projects across multiple industries and
                    technologies. Let me show you my best creations.
                </p>
                <a href="{{ route('contact') }}" class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>
        <div class="container mt-8 mt-md-15">
            <!-- tab -->
            <div>
                <ul data-aos="zoom-in" data-aos-duration="800"
                    class="tabs d-flex gap-3 gap-md-6 justify-content-center flex-wrap p-2 pb-5 pb-md-10">
                    <li data-tab-target="#all" class="active fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                        All
                    </li>
                    <li data-tab-target="#web" class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                        Web App
                    </li>
                    <li data-tab-target="#mobile" class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                        Mobile App
                    </li>
                    <li data-tab-target="#frontend" class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                        Frontend
                    </li>
                    <li data-tab-target="#backend" class="fs-seven fw-medium cursor-pointer n3-color pb-1 tab">
                        Backend
                    </li>
                </ul>

                <div class="tab-content position-relative overflow-hidden">
                    <div id="all" data-tab-content class="active">
                        <div class="row g-6 g-md-8">
                            <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div data-aos="fade-up" data-aos-duration="800" class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                    <div id="web" data-tab-content>
                        <div class="row g-6 g-md-8">
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                    <div id="mobile" data-tab-content>
                        <div class="row g-6 g-md-8">
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                        </div>
                    </div>
                    <div id="frontend" data-tab-content>
                        <div class="row g-6 g-md-8">
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project1.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                    <div id="backend" data-tab-content>
                        <div class="row g-6 g-md-8">
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project2.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project3.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                            <div class="col-xl-6">
                                <div class="project-card">
                                    <a href="portfolio_details.html" class="thumb d-block">
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                        <div class="post-thumb">
                                            <div class="post-thumb-inner">
                                                <img src="{{ asset('frontend') }}/assets/images/project4.png" alt="..." class="w-100 p-2" />
                                            </div>
                                        </div>
                                    </a>

                                    <div
                                        class="d-flex justify-content-between gap-2 align-items-center pt-4 pt-md-8 px-3 px-md-6">
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
                </div>
            </div>
        </div>
    </section>
    <!-- best project section end -->
@endsection
