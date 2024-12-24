@extends('welcome')
@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>About - Who We Are</h1>
            </div> 
            <div class="down-section text-center" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#down-section" aria-label="scroll down" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="pt-2">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="row text-center">
                    <div class="col-md-12 mx-md-auto">
                        <div class="overflow-hidden">
                            <h4 class="fw-700 text-dark-gray ls-minus-1px fancy-text-style-1 my-5 lh-60 ">
                                We are ElNady Engineering, We 
                                <span 
                                    data-fancy-text='{ "effect": "rotate", "direction": "left", "string": ["Create", "Build", "Develop"] }' 
                                    class="bg-dark-slate-blue text-light px-2 pb-10px">
                                </span> 
                                Solutions
                            </h4>
                        </div>
                        <div class="overflow-hidden mb-3">
                            <p class="mb-0 appear-animation animated maskUp appear-animation-visible" data-appear-animation="maskUp" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                                Elnady Engineering is an Egyptian engineering firm with expertise across multiple engineering services, Acoustic and Vibration Design, software development, and software product agency. Thus, these three key engineering activities can be drawn from Elnady Engineering's extensive business to; Acoustics Consultation, Software Development which involves SIDLAB, Octopi, and BEATLAB software, as well as the Software Agencies that includes COMSOL and SoundPLAN software.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-gradient-top-very-light-gray big-section pt-0">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 justify-content-center counter-style-01">
            <!-- start counter item -->
            <div class="col feature-box md-mb-50px xs-mb-30px">
                <div class="feature-box-icon">
                    <i class="ti-user icon-large text-dark-gray mb-20px d-block"></i>
                </div>
                <div class="feature-box-content">
                    <div class="d-flex">
                        <h4 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="30000"></h4>
                        <h4 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0"> + </h4>
                    </div>
                    
                    <span class="d-block text-dark-gray fw-500">Happy Clients</span>
                </div>                        
            </div>
            <!-- end counter item -->                    
            <!-- start counter item -->
            <div class="col feature-box md-mb-50px xs-mb-30px">
                <div class="feature-box-icon">
                    <i class="ti-bookmark-alt icon-large text-dark-gray mb-20px d-block"></i>
                </div>
                <div class="feature-box-content">
                    <h4 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="15"></h4>
                    <span class="d-block text-dark-gray fw-500">Years In Business</span> 
                </div>
            </div>
            <!-- end counter item -->                    
            <!-- start counter item -->
            <div class="col feature-box xs-mb-30px">
                <div class="feature-box-icon">
                    <i class="ti-stats-up icon-large text-dark-gray mb-20px d-block"></i>
                </div>
                <div class="feature-box-content">
                    <h4 class="d-inline-block align-middle counter-number fw-700 text-dark-gray mb-0 counter" data-speed="2000" data-to="178"></h4>
                    <span class="d-block text-dark-gray fw-500">High Score</span>
                </div>                        
            </div>
            <!-- end counter item -->                    
        </div>
    </div>
</section>

<section>
    <div class="h-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="row pt-5 ">
                <div class="row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('frontend_files/images/logos/comsol_logo.png') }}" alt="layout styles">
                    </div>
                    <div class="col-md-8 pl-md-5">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">COMSOL </strong> </h4>
                        <p class="text-4">We started providing software solutions for Multiphysics modelling since 2005 and we officially speak for COMSOL widely in the Arab countries. COMSOL Multiphysics software develops feasible software for modelling and simulation of real-world Multiphysics systems. Additionally, we provide software solutions for noise mapping from SoundPLAN software which we represent in the Arab countries as well.</p>
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">SIDLAB</strong></h4>
                        <p class="text-4">The collaboration between Elnady Engineering, researchers from Ain shams university (ASU) in Egypt and the Royal Institute of Technology (KTH) in Sweden, resulted fruitfully in bringing SIDLAB software to life in 2006. SIDLAB provides software &amp; hardware solutions for the analysis and the measurement of sound generation and propagation inside duct networks. It complies a long experience and knowledge of using similar codes for all types of ducts acoustics applications in research, teaching and consultancy.</p>
                    </div>
                    <div class="col-md-4 px-5 px-md-3">
                        <img class="img-fluid scale-2 my-4" src="{{ asset('frontend_files/images/logos/sidlab_logo.png') }}" alt="style switcher">
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('frontend_files/images/logos/acoustic_logo.png') }}" alt="layout styles">
                    </div>
                    <div class="col-md-8 pl-md-5">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">Acoustics </strong> </h4>
                        <p class="text-4">Our Acoustics Consultancy Team provides engineering services in the fields of acoustics and vibrations, supporting domestic and worldwide clients to design, assess, manage and control sound and vibrations in the built environment. Our consultancy services is featured by our expert team of Professors, M.Sc. holders and Engineers in the field of Acoustics, Vibration, Modelling &amp; Simulation, and Machine Design. We have designed the Acoustics of several sensitive projects in Egypt, Gulf Countries, Europe, USA and China.</p>
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">OCTOPI</strong></h4>
                        <p class="text-4">In 2021, we unveiled an innovative educational management system that draws on years of platform management expertise in educational institutions. This platform brings cutting-edge automation to the administration of schools and universities. Together with Swedish entrepreneurs, we co-founded a Swedish startup in 2022. The startup's product, BEATLAB, is a tool for early detection of cardiovascular diseases and is regarded as one of Elnady Engineering's most recent releases.</p>
                    </div>
                    <div class="col-md-4 px-5 px-md-3">
                        <img class="img-fluid scale-2 my-4" src="{{ asset('frontend_files/images/logos/octopi_logo.png') }}" alt="style switcher">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection