@extends('welcome')
@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url({{ asset('frontend_files/images/slides/slide-1.jpg') }})">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>About - History</h1>
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

<section class="coaching-consulting d-flex p-relative bg-color-light">
    <div class="container">
        <div class="row justify-content-end py-2">
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <p class="font-weight-semibold mb-4 text-color-dark pt-3 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300" style="animation-delay: 300ms;">Elnady Engineering has an extensive track record in the industry. Since the beginning of our company in 1994, we have offered a variety of services that deliver turn-key projects in the fields of construction services, mechanical installations, and electrical installations. Over the years of our presence in this industry, we have had the honour of providing steel structures, electro-mechanical, wired and wireless communications networks, as well as water, gas, fuel and sewage networks and stations to our clients. Elnady Engineering provided services for more than 120 projects throughout this time until ceasing to operate in the construction sector in 2021.</p>
                    <p class="mb-4 pb-2 text-color-dark appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400" style="animation-delay: 400ms;">A legacy of nearly three decades of consistent excellence serves as a foundation for our current success. We have established a solid and strong foundation of services and have consistently demonstrated an unmatched capacity to look after the important business of our clients. To support their sustained success and advance the whole engineering industry, we surround our clients with great experience, in-depth expertise, and service excellence. We do this by placing our clients at the centre of everything we do.</p>
                </div>
            </div>
            <div class="col-lg-6 col-coaching-consulting-imgs p-relative mb-5">
                <div class="card border-radius-0 box-shadow-1 border-0 p-3 appear-animation animated fadeIn appear-animation-visible" data-appear-animation="fadeIn" data-appear-animation-delay="300" style="animation-delay: 300ms;">
                    <img src="{{ asset('frontend_files/images/history/home-concept.png') }}" class="img-fluid border-radius-0" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection