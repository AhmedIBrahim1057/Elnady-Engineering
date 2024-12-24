@extends('welcome')
@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5"
        style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})">
        <div class="opacity-extra-medium bg-dark-slate-blue"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center extra-small-screen">
                <div class="col-12 position-relative text-center page-title-extra-large">
                    <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px"
                        data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        Contact Us</h1>
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

<section id="down-section">
    <div class="container"> 
        <div class="row align-items-end justify-content-center mb-6 text-center text-lg-start sm-mb-8">                    
            <div class="col-xl-5 col-lg-7 col-md-10 md-mb-25px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">How can help you?</span>
                <h3 class="text-dark-gray fw-700 ls-minus-1px mb-0">Have a project in mind? Get in touch!</h3>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-5 col-md-10 last-paragraph-no-margin">
                <p class="w-90 lg-w-100" data-anime='{ "el": "lines", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>We're here to help and answer any question you might have. We look forward to hearing from you. Any need help you please contact us or meet to office with coffee.</p>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-4 row-cols-md-2 row-cols-sm-2 mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col md-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-map-pin d-inline-block icon-small me-10px"></i>Office location</span>
                <div class="last-paragraph-no-margin">
                    <p>2 Elgabal Elakhdar Buildings Floor: 4, Nasr City, 11471 Cairo, Egypt</p>
                </div>
            </div>
            <div class="col md-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-mail d-inline-block icon-small me-10px"></i>Send a message</span>
                <a href="mailto:info@elnadyeng.com">info@elnadyeng.com</a><br>
                {{-- <a href="mailto:sales@yourdomain.com">sales@yourdomain.com</a> --}}
            </div>
            <div class="col xs-mb-30px text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-phone d-inline-block icon-small me-10px"></i>Call us directly</span>
                <a href="tel:+201222421483">Mobile: +20 122 2421483</a><br>
                <a href="tel:+20223425763">Office: +20 2 23425763</a><br>
                <a href="fax:+20223425763">Fax: +20 2 23421793</a>
            </div>
            <div class="col text-center text-sm-start">
                <span class="alt-font fs-18 fw-700 d-block w-90 text-dark-gray border-bottom border-2 border-color-dark-gray pb-15px mb-15px xs-w-100"><i class="feather icon-feather-users d-inline-block icon-small me-10px"></i>Join our team</span>
                <a href="mailto:info@elnadyeng.com">info@elnadyeng.com</a><br>
            </div>
        </div>
        <div class="row justify-content-center g-0" data-anime='{ "el": "childs", "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-gradient-flamingo-amethyst-green border-radius-100px xs-border-radius-30px">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-text fs-24 icon-very-medium text-white"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin text-white text-uppercase fs-15 fw-600 ls-05px xs-lh-24">
                        Let's make something great work together. <a href="demo-corporate-contact.html" class="text-white text-decoration-line-bottom-medium">Got a project in mind?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="position-relative one-half-screen sm-small-screen overflow-hidden border border-radius-top-lr lg-border-radius-0px" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1920x1100)">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="fs-225 ls-minus-10px alt-font text-gradient-orange-sky-blue fw-600 position-absolute left-minus-25px bottom-minus-50px sm-ls-minus-5px sm-bottom-minus-20px sm-fs-200 xs-left-minus-10px xs-fs-130">contact</div>
</section> --}}

@endsection