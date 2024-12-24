<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>Elnady Engineering</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
    <link rel="shortcut icon" href="{{ asset('frontend_files/images/favicon.png') }}">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="{{ asset('frontend_files/css/vendors.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_files/css/icon.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_files/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_files/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_files/demos/business/business.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_files/css/custom.css') }}" />
</head>

<body data-mobile-nav-style="classic">

    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
            <div class="container-fluid">
                <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('frontend_files/images/logos/elnady-logo-lighten.png') }}"
                            data-at2x="{{ asset('frontend_files/images/logos/elnady-logo-lighten.png') }}"
                            alt="" class="default-logo">
                        <img src="{{ asset('frontend_files/images/logos/elnady-logo.png') }}"
                            data-at2x="{{ asset('frontend_files/images/logos/elnady-logo.png') }}" alt=""
                            class="alt-logo">
                        <img src="{{ asset('frontend_files/images/logos/elnady-logo.png') }}"
                            data-at2x="{{ asset('frontend_files/images/logos/elnady-logo.png') }}" alt=""
                            class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                            <li class="nav-item dropdown dropdown-with-icon-style02">
                                <a href="#" class="nav-link">About Us</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a href="{{ route('who-we-are') }}"><i class="bi bi-briefcase"></i>Who we
                                            are</a></li>
                                    <li><a href="{{ route('history') }}"><i
                                                class="bi bi-clipboard-data"></i>History</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{ route('Acoustics') }}" class="nav-link">Acoustics</a></li>
                            <li class="nav-item"><a href="{{ route('COMSOL') }}" class="nav-link">COMSOL</a></li>
                            <li class="nav-item"><a href="{{ route('SoundPlan') }}" class="nav-link">SoundPLAN</a></li>
                            <li class="nav-item"><a href="{{ route('Octopi') }}" class="nav-link">OCTOPI</a></li>
                            <li class="nav-item"><a href="{{ route('SidLab') }}" class="nav-link">SIDLAB</a></li>
                            <li class="nav-item"><a href="{{ route('BEATLAB') }}" class="nav-link">BEATLAB</a></li>
                            <li class="nav-item"><a href="https://www.finamagic.com/" class="nav-link">Finamagic</a>
                            </li>
                            <li class="nav-item"><a href="{{ route('Contact') }}" class="nav-link">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>

        @yield('content')

    <footer class="pt-5 pb-5 sm-pt-40px sm-pb-45px footer-dark bg-extra-medium-slate-blue">
        <div class="container">
            <div class="row justify-content-center">
                <!-- start footer column -->
                <div
                    class="col-lg-5 col-sm-6 last-paragraph-no-margin order-1 order-sm-1 order-lg-1 text-center text-sm-start mb-3">
                    <a href="demo-business.html" class="footer-logo mb-15px d-block d-lg-inline-block"><img
                            src="{{ asset('frontend_files/images/logos/elnady-logo-lighten.png') }}"
                            data-at2x="{{ asset('frontend_files/images/logos/elnady-logo-lighten.png') }}"
                            alt=""></a>
                    <p class="w-90 sm-w-100 d-inline-block mb-15px">
                        Elnady Engineering is an Egyptian engineering firm with expertise across multiple engineering
                        services, Acoustic and Vibration Design, software development, and software product agency.
                    </p>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-sm-6 md-mb-50px sm-mb-30px order-2 order-lg-2">
                    <span class="alt-font d-block text-white mb-5px">Our Products</span>
                    <ul>
                        <li><a href="{{ route('Acoustics') }}">Acoustics</a></li>
                        <li><a href="{{ route('COMSOL') }}">COMSOL</a></li>
                        <li><a href="{{ route('SoundPlan') }}">SoundPLAN</a></li>
                        <li><a href="{{ route('Octopi') }}">OCTOPI</a></li>
                        <li><a href="{{ route('SidLab') }}">SIDLAB</a></li>
                        <li><a href="{{ route('BEATLAB') }}">BEATLAB</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-2 col-sm-6 md-mb-50px sm-mb-30px order-3 order-lg-3">
                    <span class="alt-font d-block text-white mb-5px">Social connect</span>
                    <ul>
                        <li>
                            <i class="fa-brands fa-facebook-f me-5px"></i>
                            <a href="https://www.facebook.com/p/Elnady-Engineering-100071254027847/?paipv=0&eav=AfbMy40vBjF61p3tu5FKRKy302M9LqoJdYSvsXbzuUvjxHpbk4TKKwTOPjP-IvsSszo&_rdr" target="_blank" class="pl-2"> Facebook</a>
                        </li>
                        <li>
                            <i class="fa-brands fa-linkedin-in me-5px"></i>
                            <a href="https://www.linkedin.com/company/elnady-engineering/mycompany" target="_blank">Linkedin</a>
                        </li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-12 col-lg-3 col-sm-6 xs-mb-30px last-paragraph-no-margin order-4 order-sm-4 order-lg-4">
                    <span class="alt-font d-block text-white mb-5px">Contact Info</span>
                    <p class="w-80 lg-w-100 md-w-70 sm-w-100 mb-10px">
                        
                        <i class="feather icon-feather-map icon-very-small text-white me-10px"></i>
                        Address: 
                        <span href="#" class="text-white fs-15">
                            2 Elgabal Elakhdar Buildings Floor: 4, Nasr City,
                            11471 Cairo, Egypt
                        </span>
                    </p>
                    <div>
                        <i class="feather icon-feather-phone-call icon-very-small text-white me-10px"></i>
                        Mobile:
                        <a href="tel:+201222421483" class="text-white">
                            +20 122 2421483
                        </a>
                    </div>
                    <div>
                        <i class="feather icon-feather-phone-call icon-very-small text-white me-10px"></i>
                        Office: 
                        <a href="tel:+20 2 23425763" class="text-white">
                            +20 2 23425763
                        </a>
                    </div>
                    <div>
                        <i class="fa-solid fa-fax text-white me-10px"></i>
                        Fax: 
                        <a href="fax:+20 2 23425763" class="text-white">
                            +20 2 23425763
                        </a>
                    </div>
                    <div>
                        <i class="feather icon-feather-mail icon-very-small text-white me-10px"></i>
                        Email: 
                        <a href="mailto:info@elnadyeng.com" class="text-white text-decoration-line-bottom">
                            info@elnadyeng.com
                        </a>
                    </div>
                </div>
                <!-- end footer column -->
            </div>
        </div>
    </footer>

    <div class="sticky-wrap z-index-1 d-none d-xl-inline-block" data-animation-delay="100"
        data-shadow-animation="true">
        <span class="fs-15 fw-500"><i class="feather icon-feather-mail icon-small me-10px align-middle"></i>
            Effective business solutions ? — 
            <a href="demo-business-contact.html" class="text-decoration-line-bottom fw-600">
                Contact Us
            </a>
        </span>
    </div>
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span
                    class="scroll-point"></span></span>
        </a>
    </div>
    <script type="text/javascript" src="{{ asset('frontend_files/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_files/js/vendors.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontend_files/js/main.js') }}"></script>
    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

            var that = this;
            var delta = 100 - Math.random() * 100;

            if (this.isDeleting) { delta /= 5; }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i=0; i<elements.length; i++) {
                    var toRotate = elements[i].getAttribute('data-type');
                    var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
            document.body.appendChild(css);
        };
    </script>
</body>

</html>
