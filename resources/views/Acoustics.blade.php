@extends('welcome')
@section('content')
<style>
    .service-title {
      font-weight: bold;
      margin-bottom: 20px;
    }
    .service-list li {
      display: flex;
      margin-bottom: 10px;
    }
    .service-list li i {
        color: #007bff; /* Blue color for the icon */
        margin-top: 10px;
      margin-right: 10px;
    }
</style>
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Acoustics</h1>
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

<section>
    <div class="container">
        <div class="row">
            <div class="row align-items-center py-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <div class="col-md-7 pr-md-5 mb-2 mb-md-0">
                    
                    <h4 class="font-weight-normal  mb-3"><strong class="font-weight-extra-bold text-black">Acoustics Engineering</strong></h4>
                    <p class="text-4 mb-2">Elevating every kind of acoustics space with technical mastery and artistic genius. Enhancing spaces by adding our Expertise to your Vision.</p>
                    <p>
                        Our Acoustics Consultancy Team consists of a highly skilled group of professionals, including Professors, M.Sc. holders, and Engineers who specialize in the fields of Acoustics, Vibration, Modelling &amp; Simulation, and Machine Design. With their extensive knowledge and experience, we offer unparalleled expertise in providing effective solutions for all your acoustics and vibration needs.
                    </p>
                </div>
                <div class="col-md-5 px-5 px-md-3">
                    <img class="img-fluid scale-2 my-4 shadow" src="https://elnadyeng.com/frontend_files/images/place_holder.jpg" alt="style switcher">
                </div>
            </div>
        </div>
    </div>
</section>


<section class="position-relative background-position-center-top overflow-hidden" style="background-image: url('images/vertical-line-bg-medium-gray.svg')">
    <div class="container position-relative">
        <div class="position-absolute top-50px right-minus-50px lg-right-minus-20px d-none d-md-inline-block"><img src="https://via.placeholder.com/140x140" data-bottom-top="transform: rotate(-10deg) translateY(50px)" data-top-bottom="transform:rotate(10deg) translateY(-50px)" alt=""/></div>
        <div class="position-absolute bottom-40px md-bottom-60px left-minus-50px d-none d-md-inline-block"><img src="https://via.placeholder.com/150x86" data-bottom-top="transform: rotate(10deg) translateX(50px)" data-top-bottom="transform:rotate(-10deg) translateX(-50px)" alt=""/></div>
        <div class="row mb-3">
            <div class="col-12 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h4 class="fw-800 ls-minus-1px md-fs-30 alt-font text-dark-gray text-uppercase">Expert Acoustics Consultancy Services</h4>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-md-2 justify-content-center mb-5 md-mb-7" data-anime='{ "el": "childs", "rotateZ": [5, 0], "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px p-5">
                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                        <i class="line-icon-Tablet-Phone icon-extra-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Design</span>
                        <p>sound and vibrations in the built environment with our top-notch engineering solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-10 md-mb-30px" data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px p-5">
                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                        <i class="line-icon-Diploma-2 icon-extra-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Assess</span>
                        <p>sound and vibrations in the built environment with our top-notch engineering solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-10 sm-mb-30px" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px p-5">
                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                        <i class="line-icon-Gear icon-extra-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Manage</span>
                        <p>sound and vibrations in the built environment with our top-notch engineering solutions.</p>
                    </div>
                </div>
            </div>
            <div class="col icon-with-text-style-10" data-bottom-top="transform: translateY(-20px)" data-top-bottom="transform: translateY(20px)">
                <div class="feature-box bg-white h-100 justify-content-start box-shadow-quadruple-large box-shadow-quadruple-large-hover p-50px xl-p-30px border-radius-8px p-5">
                    <div class="feature-box-icon feature-box-icon-rounded w-100px h-100px rounded-circle mb-20px">
                        <i class="line-icon-Equalizer icon-extra-large text-dark-gray"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin">
                        <span class="d-inline-block fw-500 text-dark-gray mb-5px fs-18">Control</span>
                        <p>sound and vibrations in the built environment with our top-notch engineering solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-extra-dark-slate-blue big-section">
    <div class="container"> 
        <div class="row row-cols-1 row-cols-lg-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box custom-feature-box feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">Global reach</span>
                        <p class="text-light-opacity">We have successfully completed numerous projects across various countries including Egypt, Gulf Countries, Europe, USA, and China. Our international experience allows us to understand the unique challenges faced by different regions and provide tailored solutions that meet local regulations and standards</p>
                    </div>
                    <div class="feature-box-overlay bg-cornflower-blue"></div>
                </div>  
            </div>
            <div class="col icon-with-text-style-02 transition-inner-all mb-30px">
                <div class="feature-box custom-feature-box feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">Comprehensive services</span>
                        <p class="text-light-opacity">From initial design to final implementation, our consultancy services cover every aspect of acoustics engineering. Whether you need assistance in designing soundproofing systems for buildings or managing noise pollution in industrial settings, our team is equipped to handle it all.</p>
                    </div>
                    <div class="feature-box-overlay bg-cornflower-blue"></div>
                </div>  
            </div>
            <div class="col icon-with-text-style-02 transition-inner-all md-mb-30px">
                <div class="feature-box custom-feature-box feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">Cutting-edge technology</span>
                        <p class="text-light-opacity">We utilize advanced tools and technologies to accurately model and simulate acoustic environments. This enables us to provide precise predictions and recommendations for optimizing sound quality and controlling vibrations in your projects.</p>
                    </div>
                    <div class="feature-box-overlay bg-cornflower-blue"></div>
                </div>  
            </div>
            <div class="col icon-with-text-style-02 transition-inner-all">
                <div class="feature-box custom-feature-box feature-box-left-icon-middle text-start hover-box dark-hover bg-dark-slate-blue border-radius-8px p-9 overflow-hidden last-paragraph-no-margin">
                    <div class="feature-box-content">
                        <span class="d-inline-block fs-18 text-white fw-500 mb-5px">Dedicated support</span>
                        <p class="text-light-opacity">We are committed to delivering exceptional customer service. Our team will work closely with you throughout the project lifecycle to ensure your specific requirements are met. We pride ourselves on our ability to provide timely responses and proactive solutions that exceed expectations.</p>
                    </div>
                    <div class="feature-box-overlay bg-cornflower-blue"></div>
                </div>  
            </div>
        </div>
        <div class="row justify-content-center mt-5" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-auto text-center last-paragraph-no-margin">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-text icon-extra-medium text-white"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin text-white text-uppercase fs-15 fw-500 ls-05px">
                        Let's make something great work together.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="p-0 pt-5">
    <div class="container">
        <div class="text-center  mb-5">
            <h4 class="text-dark-gray fw-700 md-fs-30">Fields of Services</h4>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Mechanical Noise & Vibration Control</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i>Machine room design.</li>
                    <li><i class="fas fa-check"></i>Machine vibration isolation.</li>
                    <li><i class="fas fa-check"></i>HVAC Rooftop equipment noise control HVAC air duct design to meet specified noise criteria.</li>
                    <li><i class="fas fa-check"></i>Silencing of Fans and other mechanical equipment.</li>
                    <li><i class="fas fa-check"></i>Generator Sets noise and vibration control.</li>
                    <li><i class="fas fa-check"></i>Design of shelters and skid structures.</li>
                    <li><i class="fas fa-check"></i>Sound Power measurements.</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Industrial Acoustics & Noise Control</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i>Hearing Conservation Programs.</li>
                    <li><i class="fas fa-check"></i>Sound Surveys to identify and evaluate noise sources for control.</li>
                    <li><i class="fas fa-check"></i>Acoustical enclosure design.</li>
                    <li><i class="fas fa-check"></i>Noise control for equipment, machines and process facilities.</li>
                    <li><i class="fas fa-check"></i>Guidance with equipment selection to meet established criteria.</li>
                    <li><i class="fas fa-check"></i>Design of Public Address and General Alarm Systems.</li>
                    <li><i class="fas fa-check"></i>Noise and vibration measurements.</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Architectural Acoustics Design</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i>Room Acoustics design, including shaping, sizing of rooms, structures and finishes.</li>
                    <li><i class="fas fa-check"></i>Sound isolation.</li>
                    <li><i class="fas fa-check"></i>Design of Auditoriums and Theaters.</li>
                    <li><i class="fas fa-check"></i>Room Criteria calculation and measurement.</li>
                    <li><i class="fas fa-check"></i>Complete Acoustic design of public buildings, hotels and hospitals.</li>
                    <li><i class="fas fa-check"></i>Measurement of Reverberation Time, Room Absorption, Building Isolation.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="p-0">
    <div class="container mt-5">
        <div class="text-center mb-5">
            <h4 class="text-dark-gray fw-700 md-fs-30">Fields of Services</h4>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Product and System Sound Design</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i> Reduction of product noise levels.</li>
                    <li><i class="fas fa-check"></i> Enhancing the sound quality of products.</li>
                    <li><i class="fas fa-check"></i> Alarm level notification compliance.</li>
                    <li><i class="fas fa-check"></i> Sound system design.</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Acoustic Design of Mufflers</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i> Design and optimization of exhaust/intake systems.</li>
                    <li><i class="fas fa-check"></i> Modeling and simulation of muffles and silencers for acoustic performance and back pressure compliance.</li>
                    <li><i class="fas fa-check"></i> Measurement of the muffler transmission loss, flow generated noise and pressure drop.</li>
                    <li><i class="fas fa-check"></i> Training on design concepts of muffler acoustics.</li>
                </ul>
            </div>
            <div class="col-md-4 mb-4">
                <h5 class="service-title fs-20 fw-600 md-fs-16 mb-3 text-dark-gray">Environmental Noise Studies</h5>
                <ul class="list-unstyled service-list">
                    <li><i class="fas fa-check"></i> Noise monitoring.</li>
                    <li><i class="fas fa-check"></i> Site suitability studies.</li>
                    <li><i class="fas fa-check"></i> Applications for site plan approval.</li>
                    <li><i class="fas fa-check"></i> Aircraft and ground transportation planning.</li>
                    <li><i class="fas fa-check"></i> Noise studies for wind turbine farms.</li>
                    <li><i class="fas fa-check"></i> Analysis, mediation and mitigation of environmental noise sources.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="section section-scroll bg-white border-0 m-0" data-section-scroll-title="List of Clients" data-section-scroll-header-color="dark">
    <div class="container h-100 d-flex align-items-center">
        <div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <h4 class="font-weight-bold line-height-2 text-7 text-black fw-700">List of Clients</h4>
                </div>
            </div>
    
            <div class="row">
                <img src="https://elnadyeng.com/frontend_files/images/acoustics/clients.jpg" style="width: 100%; margin-top: -30px" alt="">
            </div>
        </div>
    </div>
</section>

@endsection