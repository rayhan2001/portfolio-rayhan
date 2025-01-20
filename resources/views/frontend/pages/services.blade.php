@extends('layouts.frontend.app')
@section('title', 'Services & Pricing')

@section('content')
    <!-- Services & Pricing section start -->
    <section class="pt-120 pb-120 br-bottom-n3 mt-10 mt-lg-0">
        <div class="pb-60 br-bottom-n3">
            <div data-aos="zoom-in" class="page-heading">
                <h3 class="page-title fs-onefw-semibold n5-color mb-2 mb-md-3 text-center">
                    Services & Pricing
                </h3>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    I have 10+ years of development experience building software for
                    the web and mobile devices. You can take a look at my
                    <a href="{{ route('resume') }}" class="p1-color">online resume</a> and
                    <a href="{{ route('portfolio') }}" class="p1-color">project portfolio</a>
                    to find out more about my skills and experiences.
                </p>

                <a href="{{ route('contact') }}" class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto w-max">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>

        <div class="container mt-8 mt-md-15">
            <div data-aos="zoom-in" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                    <div class="title-line"></div>
                    <h2 class="display-four n5-color fw-semibold">
                        Service Packages
                    </h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                    Explore the range of services I provide to help bring your
                    projects to life. From initial concept to final delivery, I am
                    committed to delivering high-quality results tailored to your
                    needs.
                </p>
            </div>

            <div class="mt-8 mt-md-15">
                <div class="row g-6">
                    <div data-aos="fade-up" data-aos-delay="700" class="col-sm-6 col-xl-4">
                        <div class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center">
                            <span class="fs-eight n5-color">Basic</span>
                            <h3 class="p1-color fs-two">$900</h3>
                            <span class="fs-eight n5-color">Per Month</span>
                            <div class="line-divider my-4 my-md-7"></div>
                            <ul>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Web Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>UI/UX Design
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Webflow Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Website Optimization
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>24/7 Support
                                </li>
                            </ul>

                            <a href="javascript:void(0)"
                                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max">
                                <i class="ph ph-arrow-right"></i>Choose Basic
                            </a>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="800" class="col-sm-6 col-xl-4">
                        <div
                            class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center overflow-hidden position-relative">
                            <div class="popular-price px-2 px-md-5 py-1 py-md-3 py-xl-2 py-xxl-3">
                                <span class="fs-seven n1-color">Most popular</span>
                            </div>

                            <span class="fs-eight n5-color">Standard</span>
                            <h3 class="p1-color fs-two">$2500</h3>
                            <span class="fs-eight n5-color">Per Month</span>
                            <div class="line-divider my-4 my-md-7"></div>
                            <ul>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Web Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>UI/UX Design
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Webflow Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Website Optimization
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>24/7 Support
                                </li>
                            </ul>

                            <a href="javascript:void(0)"
                                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max">
                                <i class="ph ph-arrow-right"></i>Choose Standard
                            </a>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="900" class="col-sm-6 col-xl-4">
                        <div class="pricing-card bgn2-color brn4 px-3 px-md-6 py-4 py-md-8 text-center">
                            <span class="fs-eight n5-color">Premium</span>
                            <h3 class="p1-color fs-two">$5000</h3>
                            <span class="fs-eight n5-color">Per Month</span>
                            <div class="line-divider my-4 my-md-7"></div>
                            <ul>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Web Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>UI/UX Design
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Webflow Development
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>Website Optimization
                                </li>
                                <li class="d-flex gap-3 align-items-center n5-color mb-2 mb-md-3">
                                    <i class="ph-fill ph-check-circle fs-six p1-color"></i>24/7 Support
                                </li>
                            </ul>

                            <a href="javascript:void(0)"
                                class="primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto mt-5 mt-md-10 w-max">
                                <i class="ph ph-arrow-right"></i>Choose Premium
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div data-aos="zoom-in" class="hire-content mt-8 mt-md-15">
                <h4 class="n5-color fs-three fw-semibold text-center mb-2 mb-md-4">
                    Want to hire me for custom package?
                </h4>
                <p class="fs-seven n5-color mb-4 mb-md-8 text-center">
                    Lorem ipsum dolor sit amet consectetur adipiscing elit sed do
                    eiusmod tempor incididunt ut labore et dolore.
                </p>
                <a href="{{ route('contact') }}" class="w-max primary-btn fw-medium px-3 px-md-6 py-2 py-md-4 rounded-pill d-flex align-items-center gap-2 mx-auto">
                    <i class="ph ph-paper-plane-tilt"></i>Hire Me
                </a>
            </div>
        </div>
    </section>
    <!-- Services & Pricing section end -->

    <!-- Have any questions section start -->
    <section class="pt-120 pb-120">
        <div class="container">
            <div data-aos="zoom-in" class="section-heading">
                <div class="d-flex align-items-center gap-2">
                    <div class="title-line"></div>
                    <h2 class="display-four n5-color fw-semibold">
                        Have any questions?
                    </h2>
                </div>
                <p class="fs-seven n4-color mt-2 mt-md-4">
                    You can use this section to address any queries your potential
                    clients may have.
                </p>
            </div>
            <div class="row mt-8 mt-md-15 justify-content-between g-6">
                <div class="col-12 col-md-12 col-xl-6">
                    <div class="accordion-section d-grid gap-2 gap-md-4">
                        <div class="accordion-single" data-aos="fade-up">
                            <h5 class="header-area p-2 p-sm-4 p-md-8">
                                <button
                                    class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                                    type="button">
                                    <span
                                        class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                    What is Portfolify
                                </button>
                            </h5>
                            <div class="content-area overflow-hidden">
                                <p class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six">
                                    This is the first item's accordion body. It is hidden by
                                    default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any
                                    HTML can go within the .accordion-body, though the
                                    transition does limit overflow.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-single" data-aos="fade-up">
                            <h5 class="header-area p-2 p-sm-4 p-md-8">
                                <button
                                    class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                                    type="button">
                                    <span
                                        class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                    How Can I Help You?
                                </button>
                            </h5>
                            <div class="content-area overflow-hidden">
                                <p class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six">
                                    This is the first item's accordion body. It is hidden by
                                    default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any
                                    HTML can go within the .accordion-body, though the
                                    transition does limit overflow.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-single" data-aos="fade-up">
                            <h5 class="header-area p-2 p-sm-4 p-md-8">
                                <button
                                    class="accordion-btn n4-color d-flex gap-1 gap-sm-2 align-items-center position-relative w-100 fs-six fw-medium"
                                    type="button">
                                    <span
                                        class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                    Simple process for workflow?
                                </button>
                            </h5>
                            <div class="content-area overflow-hidden">
                                <p class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six">
                                    This is the first item's accordion body. It is hidden by
                                    default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any
                                    HTML can go within the .accordion-body, though the
                                    transition does limit overflow.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-single" data-aos="fade-up">
                            <h5 class="header-area p-2 p-sm-4 p-md-8">
                                <button
                                    class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                                    type="button">
                                    <span
                                        class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                    Is Portfolify a Multi-purpose template?
                                </button>
                            </h5>
                            <div class="content-area overflow-hidden">
                                <p class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six">
                                    This is the first item's accordion body. It is hidden by
                                    default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any
                                    HTML can go within the .accordion-body, though the
                                    transition does limit overflow.
                                </p>
                            </div>
                        </div>
                        <div class="accordion-single" data-aos="fade-up">
                            <h5 class="header-area p-2 p-sm-4 p-md-8">
                                <button
                                    class="accordion-btn n4-color d-flex gap-2 align-items-center position-relative w-100 fs-six fw-medium"
                                    type="button">
                                    <span
                                        class="faq_icon_width d-flex flex-shrink-0 align-items-center justify-content-between n2-color">
                                        <i class="ph ph-arrow-right"></i>
                                    </span>
                                    Why responsive multi page template?
                                </button>
                            </h5>
                            <div class="content-area overflow-hidden">
                                <p class="content-body n5-color px-4 px-md-8 pb-4 pb-md-8 fs-six">
                                    This is the first item's accordion body. It is hidden by
                                    default, until the collapse plugin adds the appropriate
                                    classes that we use to style each element. These classes
                                    control the overall appearance, as well as the showing
                                    and hiding via CSS transitions. You can modify any of
                                    this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any
                                    HTML can go within the .accordion-body, though the
                                    transition does limit overflow.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-xl-6">
                    <div class="overflow-hidden d-flex justify-content-center align-items-center">
                        <img src="{{ asset('frontend') }}/assets/images/light.png" alt="light" class="faq-light" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Have any questions section end -->
@endsection
