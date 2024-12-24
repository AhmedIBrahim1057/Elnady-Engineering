@extends('welcome')
@section('content')
<style>
    .featured-boxes-full .featured-box-full .icons, .featured-boxes-full .featured-box-full [class*="fa-"] {
        font-size: 3.9em;
        margin-bottom: 15px;
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
                    Sound Plan
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
                <h4 class="text-dark-gray fw-700 ls-minus-2px md-fs-20" class="text-dark-gray fw-700 ls-minus-2px md-fs-20">Sound PLAN</h4>
                <p class="mb-40px sm-mb-25px">
                    Innovative software developer and engineering firm SoundPLAN GmbH is involved in noise control, noise mapping, room acoustics, and occupational health and safety. The foundation of its success is the SoundPLAN prediction programme, which has been successfully developed and used for over 30 years globally. Elnady Engineering has the privilege of serving as SoundPLAN's sole distributor in the Arab world since 2005. We were able to provide this unparalleled, top-notch software to an array of clients around the Arab world during this time.
                </p>
            </div>
            <div class="col-lg-4 position-relative md-mb-20">
                <div class="w-100" data-animation-delay="50" data-shadow-animation="true">
                    <img 
                        src="{{ asset('frontend_files/images/soundplan/soundplan_first_pic.gif') }}" 
                        alt="soundplan_first_pic"
                        class="border-radius-8px w-100"
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cover-background bg-extra-very-slate-blue" style="background-image: url('images/demo-hosting-home-02.png')" data-0-top="background-color:rgb(25,30,61);" data-center-bottom="background-color:rgb(14,16,29);">
    <div class="container">
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-2 row-cols-md-2 justify-content-center text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "scale":[0.8,1], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all lg-mb-30px">
                <div class="feature-box hover-box dark-hover border-radius-10px border border-color-transparent-white-light border-color-transparent-on-hover last-paragraph-no-margin overflow-hidden">
                    <div class="content-slide-up p-50px">
                        <div class="feature-box-icon">
                            <i class="line-icon-Sound-Wave icon-double-large text-cornflower-blue mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-white fw-500 fs-17 mb-5px">Sound PLAN Noise</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all lg-mb-30px">
                <div class="feature-box hover-box dark-hover border-radius-10px border border-color-transparent-white-light border-color-transparent-on-hover last-paragraph-no-margin overflow-hidden">
                    <div class="content-slide-up p-50px">
                        <div class="feature-box-icon">
                            <i class="line-icon-Wifi-2 icon-double-large text-cornflower-blue mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-white fw-500 fs-17 mb-5px">Sound Plan Essential</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all sm-mb-30px">
                <div class="feature-box hover-box dark-hover border-radius-10px border border-color-transparent-white-light border-color-transparent-on-hover last-paragraph-no-margin overflow-hidden">
                    <div class="content-slide-up p-50px">
                        <div class="feature-box-icon">
                            <i class="line-icon-Wave-2 icon-double-large text-cornflower-blue mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-white fw-500 fs-17 mb-5px">Sound Plan Manda</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-05 transition-inner-all">
                <div class="feature-box hover-box dark-hover border-radius-10px border border-color-transparent-white-light border-color-transparent-on-hover last-paragraph-no-margin overflow-hidden">
                    <div class="content-slide-up p-50px">
                        <div class="feature-box-icon">
                            <i class="line-icon-Laptop icon-double-large text-cornflower-blue mb-20px justify-content-center"></i>
                        </div>
                        <div class="feature-box-content">
                            <span class="d-inline-block alt-font text-white fw-500 fs-17 mb-5px">Sarooma</span>
                        </div>
                        <div class="feature-box-overlay bg-gradient-fast-blue-purple"></div>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>

<section>
    <div class="h-100">
        <div class="container h-100 d-flex align-items-center">
            <div class="row pt-5 ">
                <div class="row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('frontend_files/images/soundplan/soundplan_noise.jpg') }}" alt="layout styles">
                    </div>
                    <div class="col-md-8 pl-md-5">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">Sound Plan Noise </strong> </h4>
                        <p class="text-4">The libraries and tools you require to complete your projects in all application domains are provided by SoundPLANnoise. SoundPLANnoise, with its robust and quality-assured calculation kernel, is the professional answer for your jobs, whether it's a noise study for a building development plan, expert noise reports at the workplace, or noise remediation.</p>
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">Sound Plan Essential</strong></h4>
                        <p class="text-4">Whether you are dealing with development plans, transportation infrastructure, or noise protection surveys for industrial plants: You can rapidly become acquainted with our noise mapping programme, SoundPLANessential, because to its user-friendly design, which also offers you all the tools you require for conventional noise reporting. Calculations are performed incredibly quickly because to the robust, innovative SoundPLAN calculating kernel.</p>
                    </div>
                    <div class="col-md-4 px-5 px-md-3">
                        <img class="img-fluid scale-2 my-4" src="{{ asset('frontend_files/images/soundplan/soundplan_essential_2.png') }}" alt="style switcher">
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center pt-4 appear-animation animated fadeInLeftShorter appear-animation-visible" data-appear-animation="fadeInLeftShorter" style="animation-delay: 100ms;">
                    <div class="col-md-4 mb-4 mb-md-0">
                        <img class="img-fluid scale-2 pr-5 pr-md-0 my-4" src="{{ asset('frontend_files/images/soundplan/soundplan_manda.png') }}" alt="layout styles">
                    </div>
                    <div class="col-md-8 pl-md-5">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">Sound Plan Manda </strong> </h4>
                        <p class="text-4">SoundPLANmanda was developed for the documentation and assessment of noise exposure at work. Coloured noise maps that show the distribution of noise levels throughout the area are created based on measurement data. Specifically quick interpolation algorithms are used by SoundPLANmanda for this. It is possible to import measurement data easily or enter it manually. A risk assessment is required to be completed for the designated workplaces and employees inside the mapping region. Aside from the length of each visitor's stay, SoundPLANmanda assesses the noise exposure at each field. Other precautions, such wearing hearing protection, are advised if needed. The mapping of temperature, CO2, or other similar variables is one conceivable application area in addition to noise mapping.</p>
                    </div>
                </div>

                <hr class="solid my-5">

                <div class="row align-items-center py-5 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                    <div class="col-md-8 pr-md-5 mb-5 mb-md-0">
                        <h4 class="font-weight-normal text-6 mb-3"><strong class="font-weight-extra-bold text-black">Sarooma</strong></h4>
                        <p class="text-4">Targeted acoustics design for 12 distinct national standards is possible using Sarooma room acoustics software, which is available in 15 languages. The Room Acoustics Calculator is a user-friendly and simple-to-use tool that can be accessed through websites (Web App), mobile applications for tablets and smartphones (Mobile App), or traditional desktop software for Windows (Windows App). It makes it possible to compute level reduction and reverberation periods in octave bands ranging from 125 Hz to 4 kHz using the Sabine Diffuse Field Theory. The programme is built upon a state-of-the-art database that includes over 3400 models of sound-absorbing goods from numerous reputable manufacturers. The Windows App is designed for professional planners and gives them access to all absorber items that are accessible, whereas the Web App and Mobile App are solely focused on the products of the makers' brands (Public Data). The user is able to add further absorber product data (Private data).</p>
                    </div>
                    <div class="col-md-4 px-5 px-md-3">
                        <img class="img-fluid scale-2 my-4" src="{{ asset('frontend_files/images/soundplan/sarooma_2.png') }}" alt="style switcher">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endsection