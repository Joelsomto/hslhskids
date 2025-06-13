<!doctype html>
<html class=no-js lang=zxx>

<head>
    <meta charset=utf-8>
    <meta http-equiv=x-ua-compatible content="ie=edge">
    <title>@yield('title') - Healing Stream for Kids, Children, School & Kindergarten </title>
    <meta name=description content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo/hs-logo.png">
    <link rel=stylesheet href="assets/css/bootstrap.min.css">
    <link rel=stylesheet href="assets/css/animate.css">
    <link rel=stylesheet href="assets/css/custom-animation.css">
    <link rel=stylesheet href="assets/css/slick.css">
    <link rel=stylesheet href="assets/css/nice-select.css">
    <link rel=stylesheet href="assets/css/flaticon_mycollection.css">
    <link rel=stylesheet href="assets/css/swiper-bundle.css">
    <link rel=stylesheet href="assets/css/meanmenu.css">
    <link rel=stylesheet href="assets/css/font-awesome-pro.css">
    <link rel=stylesheet href="assets/css/magnific-popup.css">
    <link rel=stylesheet href="assets/css/spacing.css">
    <link rel=stylesheet href="assets/css/main.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Tom Select -->
    <link href="https://cdn.jsdelivr.net/npm/tom-select/dist/css/tom-select.bootstrap5.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select/dist/js/tom-select.complete.min.js"></script>

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/magnific-popup.css">


    <style>
        a {
  text-decoration: none;
}

        ul.custom-bullets {
  list-style: none;
}
ul.custom-bullets li::before {
  content: "•";
  color: #ff9f00;
  display: inline-block; 
  width: 1em;
  margin-left: -1em;
}
    </style>
</head>

<body>
    {{-- <div id=preloader>
        <div class=preloader>
            <span></span>
            <span></span>
        </div>
    </div> --}}
    <button class="scroll-top scroll-to-target" data-target=html>
        <i class="far fa-angle-double-up"></i>
    </button>
    <div class=search__popup>
        <div class=container>
            <div class=row>
                <div class=col-xxl-12>
                    <div class=search__wrapper>
                        <div class="search__top d-flex justify-content-between align-items-center">
                            <div class=search__logo>
                                <a href=index.html>
                                    <img src="assets/img/logo/logo-white.png" alt="">
                                </a>
                            </div>
                            <div class=search__close>
                                <button type=button class="search__close-btn search-close-btn">
                                    <svg width=18 height=18 viewBox="0 0 18 18" fill=none
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1L1 17" stroke=currentColor stroke-width=1.5 stroke-linecap=round
                                            stroke-linejoin=round />
                                        <path d="M1 1L17 17" stroke=currentColor stroke-width=1.5 stroke-linecap=round
                                            stroke-linejoin=round />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class=search__form>
                            <form action="#">
                                <div class=search__input>
                                    <input class=search-input-field type=text placeholder="Type here to search...">
                                    <span class=search-focus-border></span>
                                    <button type=submit>
                                        <svg width=20 height=20 viewBox="0 0 20 20" fill=none
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.55 18.1C14.272 18.1 18.1 14.272 18.1 9.55C18.1 4.82797 14.272 1 9.55 1C4.82797 1 1 4.82797 1 9.55C1 14.272 4.82797 18.1 9.55 18.1Z"
                                                stroke=currentColor stroke-width=1.5 stroke-linecap=round
                                                stroke-linejoin=round />
                                            <path d="M19.0002 19.0002L17.2002 17.2002" stroke=currentColor
                                                stroke-width=1.5 stroke-linecap=round stroke-linejoin=round />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=it-offcanvas-area>
        <div class=itoffcanvas>
            <div class="it-offcanva-bottom-shape d-none d-xxl-block">
            </div>
            <div class=itoffcanvas__close-btn>
                <button class=close-btn><i class="fal fa-times"></i></button>
            </div>
            <div class=itoffcanvas__logo>
                <a href=index.html>
                    <img src="assets/img/logo/logo-white.png" alt="">
                </a>
            </div>
            <div class=itoffcanvas__text>
                <p>Suspendisse interdum consectetur libero id. Fermentum leo vel orci porta non. Euismod viverra nibh
                    cras pulvinar suspen.</p>
            </div>
            <div class=it-menu-mobile></div>
            <div class=itoffcanvas__info>
                <h3 class=offcanva-title>Get In Touch</h3>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class=itoffcanvas__info-icon>
                        <a href="#"><i class="fal fa-envelope"></i></a>
                    </div>
                    <div class=itoffcanvas__info-address>
                        <span>Email</span>
                        <a href="maito:hello@yourmail.com">hello@yourmail.com</a>
                    </div>
                </div>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class=itoffcanvas__info-icon>
                        <a href="#"><i class="fal fa-phone-alt"></i></a>
                    </div>
                    <div class=itoffcanvas__info-address>
                        <span>Phone</span>
                        <a href="tel:(00)45611227890">(00) 456 1122 7890</a>
                    </div>
                </div>
                <div class="it-info-wrapper mb-20 d-flex align-items-center">
                    <div class=itoffcanvas__info-icon>
                        <a href="#"><i class="fas fa-map-marker-alt"></i></a>
                    </div>
                    <div class=itoffcanvas__info-address>
                        <span>Location</span>
                        <a href="htits://www.google.com/maps/@37.4801311,22.8928877,3z" target=_blank>Riverside 255,
                            San Francisco, USA </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=body-overlay></div>
     <!-- Page Header Start-->
      @include('pages.partials.header')

      <!-- Page Header Ends  -->
    
       {{-- Page Body --}}
        @yield('main')
        {{-- page Body Ends --}}
        
        @include('pages.partials.healingRegistrationModal')

    <!-- footer start-->
        @include('pages.partials.footer')
        {{-- End Footer --}}

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/waypoints.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/magnific-popup.js"></script>
    <script src="assets/js/purecounter.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/swiper-bundle.js"></script>
    <script src="assets/js/isotope-pkgd.js"></script>
    <script src="assets/js/imagesloaded-pkgd.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/main.js"></script>
    <!-- Bootstrap JS + Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Magnific Popup JS -->
    <script src="https://cdn.jsdelivr.net/npm/magnific-popup@1.1.0/dist/jquery.magnific-popup.min.js"></script>
</body>

</html>