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
                <h4 class="text-light fw-700 ls-minus-2px ">SIDLAB</h4>
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
        <div class="row">
            <div class="row align-items-center py-2 appear-animation animated fadeInRightShorter appear-animation-visible" data-appear-animation="fadeInRightShorter" style="animation-delay: 100ms;">
                <div class="col-md-12 pr-md-5 mb-2 mb-md-0">
                    
                    <h4 class="font-weight-normal mb-3"><strong class="font-weight-extra-bold text-black">SIDLAB</strong></h4>
                    <p class="text-4 mb-2">
                        SIDLAB suite is a combination of software and hardware solutions for the simulation and analysis of sound propagation and generation inside duct networks. SIDLAB unites simulations and verification measurements to offer complete characterization of the system. Sound propagation and generation modelling and analysis in duct networks, software and hardware solutions. All can be applied to exhaust systems, intake systems, Oil and Gas pipelines and HVAC ducts.</p>
                    <p>
                        The software SIDLAB was developed in Sweden during the 1980s for linear acoustic modelling of flow duct networks. For 1D linear acoustic modelling of cascade linked duct networks, Ragnar Glav at KTH wrote the FORTRAN algorithm. In the 1990s, the code was enhanced to support wider networks and a graphical user interface using Visual Basic. A general framework with arbitrary element connections for acoustic two-port networks was developed in 1999 by Stefan Nygrd and Matsbom. In 2005, Tamer Elnady and bom worked together to develop SIDLAB 1, which was then converted to MATLAB. Models for diesel particulate filters and other novel element types created as part of the EC-project ARTEMIS are included in the programme. When SIDLAB 2 was released in 2008, it included two more measurement-related. The development team at Elnady Engineering has released SIDLAB 5 in 2022, which is jam-packed with new features.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <img class="img-fluid scale-2 my-4 shadow" src="{{ asset('frontend_files/images/sidlab/sidlab.png') }}" alt="style switcher">
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container h-100 d-flex align-items-center">
        <div>
            <div class="row mb-2">
                <div class="col-md-12">
                    <h4 class="text-dark-gray fw-700 ls-minus-1px ">SIDLAB Releases</h4>
                </div>
                <div class="col-md-12">
                    <img class="img-fluid  my-4 " src="https://elnadyeng.com/frontend_files/images/sidlab/sidlab-1.png" alt="style switcher">
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container ">
        <div class="row pt-2 mt-2 w-100">
            <div class="col-md-6 ">
                <h4 class="text-dark-gray fw-700 ls-minus-2px ">Applications</h4>
                <ul class="list list-icons p-1">
                    <li><i class="fas fa-check me-1"></i>
                        Automotive Exhaust &amp; systems
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        After Treatment Devices
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        Power Generation
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        Engine-powered Machines
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        HVAC Systems
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        Chimneys
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        Gas &amp; Steam Turbines
                    </li>
                    <li><i class="fas fa-check me-1"></i>
                        Oil &amp; Gas Pipeline Networks
                    </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4 class="text-dark-gray fw-700 ls-minus-2px ">Check SIDLAB License types</h4>
                <ul class="list list-icons list-primary list-borders text-2 pl-1">
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">SIDLAB Products:</strong> <a href="https://www.sidlab.se/products/" target="_blank">www.sidlab.se/products</a></li>
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">SIDLAB License types:</strong> <a href="https://www.sidlab.se/licenses" target="_blank">www.sidlab.se/licenses</a></li>
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">SIDLAB latest release:</strong> <a href="https://www.sidlab.se/download" target="_blank">www.sidlab.se/download</a></li>
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">SIDLAB Distributers worldwide:</strong> <a href="https://www.sidlab.se/contact" target="_blank">www.sidlab.se/contact</a></li>
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">Request a Trial:</strong> <a href="mailto:info@sidlab.se" target="_blank">info@sidlab.se</a></li>
                    <li><i class="fas fa-caret-right me-1"></i> <strong class="text-color-dark">Request a quotation NOW! :</strong> <a href="mailto:info@sidlab.se" target="_blank">info@sidlab.se</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection