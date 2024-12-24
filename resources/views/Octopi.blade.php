@extends('welcome')
@section('content')
<style>
    .why-octopi-section {
        background-color: #f3f1f1;
    }
    .why-octopi-section h3 strong {
        color: #007bff; /* Match the brand color */
    }
    .why-octopi-section .text-primary {
        color: #007bff; /* Icon color */
    }
    .why-octopi-section ul li p {
        font-size: 14px;
        color: #666;
    }
</style>
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
                    OCTOPI
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
            <div 
                class="col-xl-8 col-lg-6"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'
            >
                <div class="feature-box-content">
                    <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">One software environment
                    </span>
                </div>
                <h4 class="text-dark-gray fw-700 ls-minus-2px md-fs-20" class="text-dark-gray fw-700 ls-minus-2px md-fs-20">Octopi</h4>
                <p class="mb-40px sm-mb-25px">
                    Discover the leading educational management system software in Egypt! Control All Operations of Your University from One Place!
                </p>
            </div>
            <div class="col-lg-4 position-relative md-mb-20">
                <div class="col rotate-box-style-02 mb-30px">
                    <div class="w-100  text-center rotate-box to-left">
                        <!-- start front side -->
                        <div class="w-100 h-100 overflow-hidden z-index-1 front-side bg-white border-radius-6px box-shadow-quadruple-large">
                            <div class="rotate-content-front z-index-2 p-30px">
                                {{-- <img class="mb-25px h-70px" src="images/demo-lawyer-practice-areas-icon-01.svg" alt=""> --}}
                                <h1 class="fw-700 text-dark-slate-blue" >#1</h1>
                                <div class="fs-19 text-dark-gray alt-font fw-600 mb-5px">Educational Management System</div>
                                <span>Get to know more about Octopi EMS Modules, Solutions and Cost flexible plans from.</span>
                            </div>
                        </div>
                        <!-- end front side -->
                        <!-- start back side -->
                        <div class="w-100 h-100 overflow-hidden back-side cover-background border-radius-6px box-shadow-quadruple-large" style="background-color: #fff">
                            <div class="opacity-light"></div>
                            <div class="d-flex flex-column align-items-center justify-content-center h-100 z-index-2 rotate-content-back p-30px">
                                
                                <a href="https://octopiems.com" target="_blank" class="btn btn-small bg-dark-slate-blue btn-rounded text-white btn-box-shadow">Read More</a>
                            </div>
                            <!-- end back side -->
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-octopi-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <h4 class="text-dark-gray fw-700 ls-minus-2px md-fs-20 pb-4">
                    Why <strong class="font-weight-extra-bold">Octopi</strong>
                </h4>
                <ul class="list-unstyled">
                    <li class="mb-4">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check text-primary fs-30 md-fs-20 me-1"></i>
                            <div>
                                <h6 class="text-gray fw-700 ls-minus-1px md-fs-18 mb-1">
                                    The #1 choice for educational institutions
                                </h6>
                                <p class="mb-0">
                                    Elnady Engineering Octopi is one of the most trusted educational management systems in Egypt. Our software is designed to streamline administrative tasks, enhance communication, and provide a seamless learning experience for students, instructors, and staff.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check text-primary fs-30 md-fs-20 me-1"></i>
                            <div>
                                <h6 class="text-gray fw-700 ls-minus-1px md-fs-18 mb-1">
                                    Built by experts, owned by Elnady Engineering
                                </h6>
                                <p class="mb-0">
                                    Elnady Engineering, a renowned name in the field of software development, has developed and owns Octopi. With our expertise and dedication to innovation, we have created a robust platform that meets the unique needs of educational institutions.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="mb-4">
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check text-primary fs-30 md-fs-20 me-1"></i>
                            <div>
                                <h6 class="text-gray fw-700 ls-minus-1px md-fs-18 mb-1">
                                    Continuous research and development
                                </h6>
                                <p class="mb-0">
                                    At Elnady Engineering, we believe in staying ahead of the curve. Our dedicated team of researchers and developers constantly work on enhancing Octopi's features and functionality to ensure it remains at the forefront of educational technology.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="d-flex align-items-start">
                            <i class="fas fa-check text-primary fs-30 md-fs-20 me-1"></i>
                            <div>
                                <h6 class="text-gray fw-700 ls-minus-1px md-fs-18 mb-1">
                                    3 years of excellence in the market
                                </h6>
                                <p class="mb-0">
                                    We are proud to have served the education sector for over 3 years. Our long-standing presence in the market is a testament to our commitment to quality, reliability, and customer satisfaction.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- Image Content -->
            {{-- <div class="col-md-6">
                <div class="card border-0 shadow-sm p-3">
                    <img src="https://elnadyeng.com/frontend_files/images/coaching-1.jpg" class="img-fluid rounded" alt="Octopi Educational Management System">
                </div>
            </div> --}}
        </div>
    </div>
</section>

@endsection