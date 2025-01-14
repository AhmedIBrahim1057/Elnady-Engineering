@extends('Welcome')
@section('content')
    <section class="section-dark p-0 bg-dark-gray">
        <div {{-- magic-cursor   --}}
            class="
            swiper lg-no-parallax 
            full-screen md-h-600px 
            sm-h-500px ipad-top-space-margin 
            swiper-light-pagination
        "
            data-slider-options='{ 
            "slidesPerView": 1, 
            "loop": false, 
            "parallax": true, 
            "speed": 1000, 
            "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, 
            "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, 
            "autoplay": { "delay": 4000, "disableOnInteraction": false },  
            "keyboard": { "enabled": true, "onlyInViewport": true }, 
            "effect": "slide" }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide overflow-hidden">
                    <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                        style="background-image:url('{{ asset('frontend_files/images/slides/slide-1.jpg') }}');">
                        <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                        <div class="container h-100" data-swiper-parallax="-500">
                            <div class="row align-items-center h-100">
                                <div class="col-xl-8 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                    data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                    
                                    <h1 class="alt-font  ls-1px w-90 xl-w-100 text-shadow-double-large ls-minus-2px">
                                        Engineering with new perspectives
                                        <h1 class="fw-600 fs-40">
                                            <a href="" class="typewrite text-white" data-period="1000"
                                                data-type='[ 
                                            "We build solutions.", 
                                            "A Vision to Clear Solutions.", 
                                            "Excellence in all endeavors.", 
                                            "Experience precision Excellence." 
                                            ]'>
                                                <span class="wrap text-white"></span>
                                            </a>
                                        </h1>
                                    </h1>
                                    <div>
                                        <span class="fs-20 fw-400 mb-25px sm-mb-15px d-inline-block fw-300 text-tussock-yellow">
                                            Elnady Engineering is a huge success, learn more about us.
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500"
                    style="background-image:url('https://via.placeholder.com/1920x1100');">
                    <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                    <div class="container h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start"
                                data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Business
                                        strategies and top ideas</span>
                                </div>
                                <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Provide
                                    solutions to <span class="fw-600">small business.</span></h1>
                                <a href="index.html" target="_blank"
                                    class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get
                                    started now<span class="bg-white text-base-color"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                            <div class="position-absolute bottom-minus-45px"
                                data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <span class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">03</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
                    <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
        <!-- end slider navigation -->
        </div>
    </section>
    <section class="bg-dark-slate-blue pt-4 pb-4 lg-pt-6 lg-pb-6" data-parallax-background-ratio="0.5"
        data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="opacity-medium bg-dark-slate-blue"></div>
        <div class="container z-index-1 position-relative">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-1"></div>
                <div class="col-md-10 text-center"> 
                    <h4 class="alt-font text-white mb-2 fw-300 fancy-text-style-4 ">Excellence in all endeavors 
                        <span class="fw-600 text-tussock-yellow" 
                            data-fancy-text='{ 
                            "effect": "wave", 
                            "direction": "down", 
                            "string": [ 
                                "Experience", 
                                "Precision", 
                                "Excellence" 
                            ],  "duration": 2000 }' 
                        >
                        </span>
                    </h4>
                    <p class="text-light fs-18 md-fs-14 xs-fs-12 text-white-50 mb-0">
                        Elnady Engineering is an Egyptian engineering firm with expertise across multiple engineering services, Acoustic and Vibration Design, software development, and software product agency.
                    </p>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <section class="bg-very-light-gray overflow-hidden">
        <div class="container">
            <div class="row align-items-center justify-content-center mb-6 text-center text-lg-start">
                <div class="col-xl-5 col-lg-5 md-mb-20px" data-anime='{ "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 mb-0 ls-minus-1px ">Our Products & Services</h4>
                </div>
                <div class="col-xl-5 col-lg-5 last-paragraph-no-margin md-mb-30px" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    {{-- <p class="w-90 xl-w-100 md-w-80 sm-w-100 md-mx-auto">We put a strong focus on the needs of your business to figure out solutions that best fits your demand.</p> --}}
                </div>
                <div class="col-xl-2 col-lg-2 d-flex justify-content-center justify-content-lg-end" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'> 
                    <!-- start slider navigation -->
                    <div class="slider-one-slide-prev-1 icon-small text-dark-gray swiper-button-prev slider-navigation-style-04 bg-white text-dark-gray box-shadow-large"><i class="fa-solid fa-arrow-left"></i></div>
                    <div class="slider-one-slide-next-1 icon-small text-dark-gray swiper-button-next slider-navigation-style-04 bg-white text-dark-gray box-shadow-large"><i class="fa-solid fa-arrow-right"></i></div>
                    <!-- end slider navigation --> 
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 position-relative">
                    <div class="outside-box-right-40 xs-outside-box-right-0" data-anime='{ "translateX": [100, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="swiper magic-cursor" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 28, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start content carousal item --> 
                                <div class="swiper-slide"> 
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('Acoustics') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/acoustic_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-12">
                                                {{-- <a href="{{ route('Acoustics') }}">
                                                    <i class="line-icon-Medal-2 text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('Acoustics') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Acoustics Engineering</a>
                                                    </div>
                                                    <a href="{{ route('Acoustics') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>  
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div> 
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item --> 
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('COMSOL') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/comsol_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                {{-- <a href="{{ route('COMSOL') }}">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('COMSOL') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">COMSOL</a>
                                                    </div>
                                                    <a href="{{ route('COMSOL') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a> 
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item --> 
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('SidLab') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/sidlab_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                {{-- <a href="{{ route('SidLab') }}">
                                                    <i class="line-icon-Archery-2 text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('SidLab') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">SIDLAB</a>
                                                    </div>
                                                    <a href="{{ route('SidLab') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a> 
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item --> 
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('Octopi') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/octopi_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                {{-- <a href="{{ route('Octopi') }}">
                                                    <i class="line-icon-Money-Bag text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('Octopi') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Octopi</a>
                                                    </div>
                                                    <a href="{{ route('Octopi') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a>
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item --> 
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('SoundPlan') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/soundplan_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                {{-- <a href="{{ route('SoundPlan') }}">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('SoundPlan') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">Sound Plan</a>
                                                    </div>
                                                    <a href="{{ route('SoundPlan') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a> 
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- end content carousal item -->
                                <!-- start content carousal item --> 
                                <div class="swiper-slide">
                                    <div class="interactive-banner-style-08">
                                        <figure class="m-0 hover-box overflow-hidden position-relative border-radius-6px">
                                            <a href="{{ route('BEATLAB') }}">
                                                <img src="{{ asset('frontend_files/images/portfolio/beatlab_logo.png') }}" alt="" />
                                            </a>
                                            <figcaption class="d-flex flex-column align-items-start justify-content-center position-absolute left-0px top-0px w-100 h-100 z-index-1 p-14 lg-p-10">
                                                {{-- <a href="{{ route('BEATLAB') }}">
                                                    <i class="line-icon-Financial text-white icon-extra-large"></i>
                                                </a> --}}
                                                <div class="mt-auto d-flex w-100 align-items-center">
                                                    <div class="col last-paragraph-no-margin">
                                                        <a href="{{ route('BEATLAB') }}" class="text-white fs-24 lh-28 w-65 xl-w-75 d-block">BeatLab</a>
                                                    </div>
                                                    <a href="{{ route('BEATLAB') }}" class="circle-box bg-yellow w-50px h-50px rounded-circle ms-auto position-relative rounded-box">
                                                        <i class="bi bi-arrow-right-short absolute-middle-center icon-very-medium lh-0px text-dark-gray"></i>
                                                    </a> 
                                                </div>
                                                <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-gray-light-dark-transparent z-index-minus-1 opacity-9"></div> 
                                            </figcaption>
                                        </figure>
                                    </div>
                                </div>
                                <!-- end content carousal item -->
                            </div>
                        </div>
                    </div>
                    <!-- start slider pagination -->
                    <!--<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets"></div>-->
                    <!-- end slider pagination --> 
                </div>
            </div>
        </div>
    </section>
    <section class="pb-8 md-pb-17 xs-pb-28">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-9 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Find a Career!</span>
                    <h3 class="alt-font fs-30 text-dark-gray fw-700 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">Explore Your Next Job Opportunity at Elnady Engineering.</h3>
                    <p>We are continuously seeking top talents for a wide range of positions. Send us your resume to 
                       <a href="mailto:hr@elnadycompany.com" class="text-dark-slate-blue">hr@elnadycompany.com</a> for any future opening positions.</p>
                </div>
                <div class="col-xl-6 col-lg-6 position-relative ">
                    <div class="blockquote-style-01">
                        <i class="bi bi-chat-quote float-start me-30px xs-me-20px text-crusoe-green icon-extra-double-large xs-icon-double-large"></i>
                        <blockquote class="mb-0 d-table last-paragraph-no-margin">
                            <p class="fs-32 text-dark-gray ls-minus-1px w-90 lg-w-100 mb-15px">We serve our clients well by taking care of our people. Be one of our team and get the chance you need to grow and thrive.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
