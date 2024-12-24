@extends('welcome')
@section('content')
<section 
    class="page-title-big-typography bg-dark-gray ipad-top-space-margin" 
    data-parallax-background-ratio="0.5"
    style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})"
>
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 
                    class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px"
                    data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'
                >
                    BEATLAB
                </h1>
            </div>
            <div class="down-section text-center"
                data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#down-section" aria-label="scroll down" class="section-link">
                    <div
                        class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row mb-10 align-items-center">
            <div class="col-xl-8 col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                        class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex">
                        <i class="bi bi-award fs-16 me-5px"></i>
                        One software environment, any engineering field
                    </span>
                <h4 class="text-dark-gray fw-700 ls-minus-2px ">BEATLAB</h4>
                <p class="mb-40px sm-mb-25px">
                    Revolutionizing Cardiovascular analysis, with simple, accessible, and fast technology. Experience the Future of Arterial Networks Modeling.
                    BEATLAB is a cutting-edge simulation software designed to revolutionize the way arterial networks are modeled. Powered by innovative technology and backed by extensive research and development, our software is set to transform the industry.
                </p>
            </div>
            {{-- <div class="col-lg-4 position-relative md-mb-20">
                <div class="w-100" data-animation-delay="50" data-shadow-animation="true">
                    <img src="{{ asset('frontend_files/images/comsol/1.png') }}" alt=""
                        class="border-radius-8px w-100">
                </div>
            </div> --}}
        </div>
    </div>
</section>
@endsection