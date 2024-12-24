@extends('welcome')
@section('content')
    <style>
        .bg-gradient-very-light-gray-transparent {
            background: -webkit-linear-gradient(right, rgba(240, 244, 253, 1.0), rgba(255, 255, 255, 0.0));
            background: linear-gradient(to right, rgba(240, 244, 253, 1.0), rgba(255, 255, 255, 0.0));
        }
        .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
            background-color: #001556;
        }
        .nav-link{
            color: #000;
        }
    </style>
    <section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})">
        <div class="opacity-extra-medium bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-12 position-relative text-center page-title-extra-large">
                    <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px"
                        data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        COMSOL</h1>
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
                    <h4 class="text-dark-gray fw-700 ls-minus-1px ">COMSOL Multiphysics®</h4>
                    <p class="mb-40px sm-mb-25px">
                        The COMSOL Multiphysics® software is used in all fields of engineering, manufacturing, and
                        scientific research and brings fully coupled multiphysics and single-physics modeling capabilities,
                        model management, and user-friendly tools for building and maintaining custom simulation apps. The
                        COMSOL Multiphysics® platform product includes the Model Builder for creating models, the
                        Application Builder for building custom simulation apps, and the Model Manager to further support
                        collaboration. With the add-on COMSOL Compiler™, simulation experts can create standalone simulation
                        apps and send them to their design teams, manufacturing departments, test laboratories, and
                        customers throughout the world.
                        Add-on modules expand the simulation platform with specialized functionality for electromagnetics,
                        structural mechanics, acoustics, fluid flow, heat transfer, and chemical applications. Interfacing
                        products enable the integration of COMSOL Multiphysics simulations with all major technical
                    </p>
                </div>
                <div class="col-lg-4 position-relative md-mb-20">
                    <div class="w-100" data-animation-delay="50" data-shadow-animation="true">
                        <img src="{{ asset('frontend_files/images/comsol/1.png') }}" alt=""
                            class="border-radius-8px w-100">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-solitude-blue">
        <div class="container">
            <div class="row align-items-center"
                data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
                    <ul class="nav nav-tabs justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_four1" class="nav-link d-flex align-items-center active">
                                <i class="feather icon-feather-bookmark icon-extra-medium text-dark-gray"></i>
                                <span>Single Physics</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_four2">
                                <i class="feather icon-feather-layers icon-extra-medium text-dark-gray"></i>
                                <span>Multiphysics</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="tab-content">
                        <div class="tab-pane fade in active show" id="tab_four1">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-md-6 offset-xl-1 text-center text-md-start">
                                    <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px">
                                        <span class="fw-600">Single Physics </span>
                                    </h5>
                                    <p>Model phenomena and processes in different engineering and physics fields in one
                                        integrated environment with the same principal workflow for all areas.
                                        Add one physics phenomenon at a time and couple when you want.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in" id="tab_four2">
                            <div class="row align-items-center">
                                <div class="col-xl-12 col-md-6 offset-xl-1 text-center text-md-start">
                                    <h5 class="alt-font text-dark-gray mb-20px fw-500 ls-minus-1px">
                                        <span class="fw-600">Multiphysics</span>
                                    </h5>
                                    <p>Couple two or more physics phenomena that affect each other. There are no limitations
                                        for which and how many phenomena can be coupled.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div>
                <div class="row mb-2">
                    <div class="col-md-7">
                        <h4 class="text-dark-gray fw-700 ls-minus-2px ">Why COMSOL Multiphysics®</h4>
                        <ul class="m-0 p-0">
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>General-purpose
                                simulation software based on advanced numerical methods.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>Fully coupled
                                multiphysics and single-physics modeling capabilities.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>Complete modeling
                                workflow, from geometry to results evaluation.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>User-friendly tools for
                                building, maintaining, and distributing simulation apps.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>13 products for
                                interfacing directly with CAD and other third-party software.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>Consistent user
                                experience, regardless of engineering application and physics phenomena.</li>
                            <li><i class="fas fa-check text-primary" style="margin-right: 10px"></i>36 add-on modules with
                                specialized functionality for modeling electromagnetics, fluid flow, heat transfer,
                                structural mechanics, acoustics, and chemical engineering phenomena.</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid  my-4 shadow" src="{{ asset('frontend_files/images/comsol/2.png') }}"
                            alt="style switcher">
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-lg-2 justify-content-center"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                        <div
                            class="feature-box custom-feature-box-2 feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-4 overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-18 text-white fw-500 mb-5px">APPLICATIONS</span>
                                <p class="text-light-opacity">Build apps with the Application Builder available in COMSOL
                                    Multiphysics®. Compile apps into standalone executable files with COMSOL Compiler™. Host
                                    and administer apps with COMSOL Server.</p>
                            </div>
                            <div class="feature-box-overlay bg-cornflower-blue"></div>
                        </div>
                    </div>
                    <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                        <div
                            class="feature-box custom-feature-box-2 feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-4 overflow-hidden last-paragraph-no-margin">
                            <div class="feature-box-content">
                                <span class="d-inline-block fs-18 text-white fw-500 mb-5px">MANAGEMENT</span>
                                <p class="text-light-opacity">Centrally administer and collaborate on models and apps with
                                    the Model Manager and Model Manager server.</p>
                            </div>
                            <div class="feature-box-overlay bg-cornflower-blue"></div>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="section section-scroll bg-light border-0 m-0" data-section-scroll-title="COMSOL Products"
        data-section-scroll-header-color="dark">
        <div class="container h-100 d-flex align-items-center">
            <div>
                <div class="row pt-5">
                    <div class="col-md-1"></div>
                    <div class="col-md-10 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="300">

                        <div class="owl-carousel owl-theme nav-inside nav-inside-edge nav-squared nav-with-transparency nav-dark nav-lg d-block overflow-hidden"
                            data-plugin-options="{'items': 1, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'autoHeight': true}"
                            style="height: 510px;">
                            <div>
                                <div class="img-thumbnail border-0 border-radius-0 p-0 d-block">
                                    <img src="{{ asset('frontend_files/images/comsol/3.png') }}"
                                        class="img-fluid border-radius-0" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="row pt-2 mt-2">
                    <div class="col-12">
                        <span
                            class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-flex">
                            <i class="bi bi-award fs-16 me-5px"></i>
                            Get your license number
                        </span>
                    </div>
                    <div class="col-md-7 ">

                        <h4 class="text-dark-gray fw-700 ls-minus-2px ">How to do it</h4>
                        <p>
                            The license number can be found in the COMSOL® software's "File" menu by selecting "licensed and
                            used products"; the license number will appear on the first line of the window that appears.
                        </p>
                        {{-- <ul class="list list-icons list-primary list-borders text-2"> --}}
                        <p><i class="fas fa-caret-right left-10"></i> <strong class="text-color-dark">The COMSOL
                                Multiphysics® software is developed by COMSOL. Elnady Engineering is a distributor of COMSOL
                                Multiphysics® for the Egypt market. Contact us at <a class="text-dark-slate-blue"
                                    href="mailto:COMSOL.sales@elnadyeng.com"
                                    target="_blank">COMSOL.sales@elnadyeng.com</a> to learn what package is suitable for
                                your business needs. </strong> </p>
                        {{-- </ul> --}}
                    </div>

                    <div class="col-md-5">
                        <h4 class="text-dark-gray fw-700 ls-minus-2px ">Important Links</h4>
                        <ul class="list list-icons list-primary list-borders text-2">
                            <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-dark">COMSOL
                                    Products:</strong> <a class="text-dark-slate-blue"
                                    href="https://www.comsol.com/products" target="_blank">www.comsol.com/products</a>
                            </li>
                            <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-dark">COMSOL License
                                    types:</strong> <a class="text-dark-slate-blue"
                                    href="https://www.comsol.com/products/licensing"
                                    target="_blank">www.comsol.com/products/licensing</a></li>
                            <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-dark">COMSOL Release
                                    Highlights:</strong> <a class="text-dark-slate-blue"
                                    href="https://www.comsol.com/release/6.2"
                                    target="_blank">www.comsol.com/release/6.2</a></li>
                            <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-dark">COMSOL
                                    Specification Chart:</strong> <a class="text-dark-slate-blue"
                                    href="https://www.comsol.com/products/specifications/"
                                    target="_blank">www.comsol.com/products/specifications</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="big-section">
        <div class="container">
            <div class="row">
                <div class="col tab-style-06">
                    <ul
                        class="nav nav-tabs alt-font justify-content-center border-0 text-center text-uppercase alt-font fw-500 mb-5">
                        <li class="nav-item bg-white border-color-extra-medium-gray">
                            <a class="nav-link active fw-500" data-bs-toggle="tab" href="#tab_six1">Academic License</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>
                        <li class="nav-item bg-white border-color-extra-medium-gray">
                            <a class="nav-link fw-500" data-bs-toggle="tab" href="#tab_six2">Commercial License</a>
                            <span class="tab-bg-active bg-dark-gray"></span>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_six1">
                            <div class="row align-items-center justify-content-center pricing-table-style-06" data-anime='{ "el": "childs", "willchange": "transform", "scale": [0.95, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <div class="d-flex align-items-center ">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button 
                                            class="nav-link active" 
                                            id="v-pills-home-tab" 
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" 
                                            type="button" role="tab"
                                            aria-controls="v-pills-home" 
                                            aria-selected="true"
                                            style="width: 162px"
                                        >
                                            <i class="fas fa-laptop"></i>
                                            CPU and NSL
                                        </button>
                                        <button 
                                            class="nav-link" 
                                            id="v-pills-profile-tab" 
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" 
                                            type="button" role="tab"
                                            aria-controls="v-pills-profile" 
                                            aria-selected="false"
                                            style="width: 162px"
                                        >
                                            <i class="fas fa-server"></i>
                                            FNL and CKL
                                        </button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div 
                                            class="tab-pane fade show active" 
                                            id="v-pills-home" 
                                            role="tabpanel"
                                            aria-labelledby="v-pills-home-tab"
                                        >
                                            <div>
                                                <h6 class="text-dark fw-600 fs-20">Please provide the following information and sign the correspondence attached:</h6>
                                                <ul class="p-0">
                                                    <li>The physical address of the computer(s) on which the COMSOL® software will be installed and the operating system. For steps, see:  <a href="https://www.comsol.com/support/knowledgebase/828" target="_blank">www.comsol.com/support/knowledgebase/828</a> </li>
                                                    <li>The end-user details from the university (Name – E-mail – Phone – Department – Title – Address).</li>
                                                    <li>Fill out and sign the Academic Letter by the university.</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div 
                                            class="tab-pane fade" 
                                            id="v-pills-profile" 
                                            role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab"
                                        >
                                            <div>
                                                <h6 class="text-dark fw-600 fs-20">Please provide the following information and sign the correspondence attached:</h6>
                                                <ul class="p-0">
                                                    <li>The physical address of the server on which the COMSOL® software will be installed and the operating system. For steps, see:  <a href="https://www.comsol.com/support/knowledgebase/828" target="_blank">www.comsol.com/support/knowledgebase/828</a> </li>
                                                    <li>The end-user details from the university (Name – E-mail – Phone – Department – Title – Address).</li>
                                                    <li>Fill out and sign the Academic Letter by the university.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_six2">
                            <div class="row align-items-center justify-content-center pricing-table-style-06">
                                <div class="d-flex align-items-center ">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button 
                                            class="nav-link active" 
                                            id="v-pills-home-tab" 
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home-2" 
                                            type="button" role="tab"
                                            aria-controls="v-pills-home" 
                                            aria-selected="true"
                                            style="width: 162px"
                                        >
                                            <i class="fas fa-laptop"></i>
                                            NSL & CPU
                                        </button>
                                        <button 
                                            class="nav-link" 
                                            id="v-pills-profile-tab" 
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile-2" 
                                            type="button" role="tab"
                                            aria-controls="v-pills-profile" 
                                            aria-selected="false"
                                            style="width: 162px"
                                        >
                                            <i class="fas fa-server"></i>
                                            FNL
                                        </button>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div 
                                            class="tab-pane fade show active" 
                                            id="v-pills-home-2" 
                                            role="tabpanel"
                                            aria-labelledby="v-pills-home-tab"
                                        >
                                            <div>
                                                <h6 class="text-dark fw-600 fs-20">Please provide the following information:</h6>
                                                <ul class="p-0">
                                                    <li>The physical address of the computer(s) on which the COMSOL® software will be installed and the operating system. For steps, see:  <a href="https://www.comsol.com/support/knowledgebase/828" target="_blank">www.comsol.com/support/knowledgebase/828</a></li>
                                                    <li>The end-user details (Name – E-mail – Phone – Affiliation – Title – Address).</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div 
                                            class="tab-pane fade" 
                                            id="v-pills-profile-2" 
                                            role="tabpanel"
                                            aria-labelledby="v-pills-profile-tab"
                                        >
                                            <div>
                                                <h6 class="text-dark fw-600 fs-20">Please provide the following information:</h6>
                                                <ul class="p-0">
                                                    <li>The physical address of the server on which the COMSOL® software will be installed and the operating system. For steps, see:  <a href="https://www.comsol.com/support/knowledgebase/828" target="_blank">www.comsol.com/support/knowledgebase/828</a></li>
                                                    <li>The end-user details (Name – E-mail – Phone – Affiliation – Title – Address).</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
