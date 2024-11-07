<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<title>@yield('title')</title>-->
    <title>VGEN MEDIA|Top Marketing & Advertising Agency In UAE</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('assets/logos/vgen-media-logo.webp') }}">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description"
        content="Transform your digital presence with VGEN MEDIA's all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!" />
    <link rel="canonical" href="https://vgenmedia.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="VGEN MEDIA | Top Marketing & Advertising Agency In UAE" />
    <meta property="og:description"
        content="Transform your digital presence with VGEN MEDIA's all-in-one Digital Marketing Suite, Advertising Operations, Visual Content and Enhanced Marketing solutions!" />
    <meta property="og:url" content="https://vgenmedia.com/" />
    <meta property="og:site_name" content="VGEN MEDIA Solutions" />
    <meta property="article:modified_time" content="2024-07-05T15:40:18+00:00" />
    <meta property="og:image" content="https://vgenmedia.com/assets/logos/vgen-media-logo.webp" />
    <meta property="og:image:width" content="520" />
    <meta property="og:image:height" content="520" />
    <meta property="og:image:alt" content="VGEN MEDIA Home" />
    <meta property="og:image:type" content="image/png" />

    <script type='application/ld+json'>
    {
    	"@context": "http://schema.org",
    	"@type": "Organization",
    	"legalName": "VGEN MEDIA",
    	"url": "https://vgenmedia.com/",
    	"logo": "https://vgenmedia.com/assets/logos/vgen-media-logo.webp",
    	"contactPoint": {
    		"@type": "ContactPoint",
    		"telephone": "+971-585003485",
    		"contactType": "Business"
    	},
    	"address": {
    		"@type": "PostalAddress",
    		"streetAddress": "ALMEHAIRI , OFF12-026 , Ras Al Khor Industrial Third , Dubai.",
    		"addressLocality": "Dubai",
    		"addressRegion": "Dubai",
    		"postalCode": "50819",
    		"addressCountry": "United Arab Emirates"
    	},
    	"sameAs": [
    		"https://www.instagram.com/vgenmedia/",
    		"https://www.facebook.com/p/Vgen-Media-61551215171608/",
    		"https://www.facebook.com/p/Vgen-Media-61551215171608/",
    		"https://www.linkedin.com/company/vgen-media"
    	]
    }
    </script>
    @stack('styles')
</head>

<body>

<nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="nav-link active {{ (request()->is('home')) ? 'active' : '' }}" aria-current="page"
                href="{{ route('home') }}">VGEN MEDIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mobile-nav-header d-lg-none">
                    <a class="navbar-brand" href="{{ route('home') }}">VGEN MEDIA</a>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <ul class="navbar-nav ms-auto">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">PORTFOLIO</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ (request()->is('services')) ? 'active' : '' }}"
                            href="{{ route('services') }}" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            SERVICES
                          
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                            <li><a class="dropdown-item" href="{{ route('services.digital-marketing') }}">Digital Marketing Suite<span class="dropdown-description">Grow your online presence</span></a></li>
                            <li><a class="dropdown-item" href="{{ route('services.advertising-operation') }}">Advertising Operations <span class="dropdown-description">Optimize advertising</span></a></li>
                            <li><a class="dropdown-item" href="{{ route('services.visual-content') }}">Visual Content <span class="dropdown-description">Achieve marketing success</span></a></li>

                            <li><a class="dropdown-item" href="{{ route('services.enhanced-marketing') }}">Enhanced Marketing Suite<span class="dropdown-description">Create stunning visuals</span></a></li>
                            <li><a class="dropdown-item" href="{{ route('subscription') }}">Subscription Package<span class="dropdown-description">Add Value to Your Effort</span></a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}" href="{{ route('about-us') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ (request()->is('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <a class="nav-link active {{ (request()->is('home')) ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}" style="width: 50%">VGEN MEDIA</a>
        <a class="nav-link" href="#" style="width: 12%" >PORTFOLIO</a>
        <a class="nav-link" href="#" style="width: 12%">SERVICES</a>
        <a style="width: 12%" class="nav-link {{ (request()->is('about-us')) ? 'active' : '' }}" href="{{ route('about-us') }}">ABOUT US</a>
        <a class="nav-link" href="#" style="width: 14%">CONTACT US</a> -->

    <!-- </nav> -->
    <div id="wrapper">
        <div id="page-content-wrapper">
            @yield('content')
        </div>
    </div>
    <section class="bg-light footersection">
        <div class="footer">
            <div class="footer1">
                <div class="footer1-section1">
                    <img src="{{ asset('assets/logos/vgen-media-logo.webp') }}" class="img-fluid vgen-logo"
                        alt="VGen Media Logo">
                    <div class="footer1-section1-caption">
                        <p class="footer1-section1-text">A cross-functional marketing partner, putting brands at the
                            forefront on every platform</p>
                    </div>
                </div>
                <div class="footer1-section2">
                    <ul>
                        <li class="footer-headings-desk">Quick Links</li>

                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about-us') }}">About</a></li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <!-- <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Service</a></li> -->
                    </ul>
                </div>
                <div class="footer1-section3">
                    <ul>
                        <li class="footer-headings-desk">Our Services</li>

                        <li><a href="{{ route('services.digital-marketing') }}">Digital Marketing Suite</a></li>
                        <li><a href="{{ route('services.advertising-operation') }}">Advertising Operations Services</a>
                        </li>
                        <li><a href="{{ route('services.enhanced-marketing') }}">Enhanced Marketing Solutions</a></li>
                        <li><a href="{{ route('services.visual-content') }}">Visual Content Solutions<sup class="trending">Trending</sup></a></li>
                    </ul>
                </div>
                <div class="footer1-section4">
                    <ul>
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('cookies') }}">Cookies</a></li>
                    </ul>
                </div>
                <div class="footer1-section5">
                    <ul class="footer1-section5-ul">
                        <li class="contact-us-li">Contact</li>
                        <li><a href="mailto:info@vgenmedia.com"><img src="/assets/logos/mail.svg" alt="email"> &nbsp;
                                <span> info@vgenmedia.com</span> </a></li>
                        <li><a href="tel:+971 585003485"><img src="/assets/logos/telephone.svg" alt="phone"> &nbsp;
                                <span>+971 585003485</span> </a></li>
                        <li class="li-address"><img src="/assets/logos/location.webp" alt="address"> ALMEHAIRI ,
                            OFF12-026 , Ras Al Khor Industrial Third , Dubai.</li>
                        <div class="socailmediaicons-desk">
                            <ul>
                                <li><a href="https://www.instagram.com/vgenmedia/" target="_blank"><img
                                            src="/assets/logos/insta.webp" alt="instagram"></a></li>
                                <li><a href="https://www.facebook.com/p/Vgen-Media-61551215171608/" target="_blank"><img
                                            src="/assets/logos/Facebook.webp" alt="facebook"></a></li>
                                <li><a href="https://x.com/vgen_media"><img src="/assets/logos/x.webp" alt="x"></a></li>
                                <li><a href="https://www.linkedin.com/company/vgen-media" target="_blank"><img
                                            src="/assets/logos/linkedind.webp" alt="linkedin"></a></li>
                            </ul>
                        </div>
                    </ul>
                </div>
            </div>

            <div class="footer2">
                <div class="footer-followus">
                    <div class="whitebold">FOLLOW US</div>
                    <ul>
                        <li><a href="https://www.instagram.com/vgenmedia/" target="_blank">INSTAGRAM</a></li>
                        <li><a href="https://www.facebook.com/p/Vgen-Media-61551215171608/" target="_blank">FACEBOOK</a>
                        </li>
                        <li><a href="https://www.youtube.com/channel/UCXMt9vYdWplKKUrcnkPvb-w/videos"
                                target="_blank">YOUTUBE</a></li>
                        <li><a href="https://www.linkedin.com/company/vgen-media" target="_blank">LINKEDIN</a></li>
                    </ul>
                </div>
                <div class="all-rights-reserved">
                    <div class="vcopyright">
                        <img src="{{ asset('assets/logos/vgen-media-logo.webp') }}" class="img-fluid footerlogosvgn"
                            alt="VGen Media Logo">
                        <p>© 2024. All Rights Reserved.</p>
                    </div>

                    <ul class="privacy-stored">
                        <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('cookies') }}">Cookies</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <button type="button" class="btn btn-gotop d-inline-flex align-items-center justify-content-center"
            data-action="gotop">
            <i class="bi bi-chevron-up"></i>
        </button>
    </section>
   
</div>

    <script src="{{ asset('js/jquery-3.7.1.js') }}"></script>
    <script src="{{ asset('bootstrap-5.3.3/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    @stack('pageScript')
    <script>
       // scripts.js
// scripts.js


        $(document).ready(function () {
            let requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;


            const goTopButton = document.querySelector('[data-action="gotop"]');
            const windowViewPortHeight = window.innerHeight;
            let isRequestingAnimationFrame = false;

            if (!goTopButton) {
                return;
            }

            goTopButton.addEventListener('click', function () {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            window.addEventListener('scroll', function () {
                if (!isRequestingAnimationFrame) {
                    requestAnimationFrame(filterGoTopButtonVisibility);
                    isRequestingAnimationFrame = true;
                }
            });

            function filterGoTopButtonVisibility(timestamp) {
                let windowPageYOffset = window.pageYOffset || document.documentElement.scrollTop;
                if (windowPageYOffset > windowViewPortHeight) {
                    goTopButton.classList.add('show');
                    isRequestingAnimationFrame = false;
                } else {
                    goTopButton.classList.remove('show');
                    requestAnimationFrame(filterGoTopButtonVisibility);
                }
            }

            document.addEventListener('DOMContentLoaded', function() {
            function toggleNavbar() {
                if (window.innerWidth <= 992) {
                    const navbar = document.getElementById('navbarNav');
                    if (navbar.classList.contains('show')) {
                        navbar.classList.add('hiding');
                        navbar.classList.remove('show');
                        setTimeout(function() {
                            navbar.classList.remove('hiding');
                        }, 300);
                    } else {
                        navbar.classList.add('show');
                    }
                }
            }

            // Toggle navbar visibility on button click
            document.querySelector('.navbar-toggler').addEventListener('click', function() {
                toggleNavbar();
            });

            // Close navbar when a link is clicked on mobile
            document.querySelectorAll('.navbar-nav .nav-link').forEach(function(link) {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 992) {
                        const navbar = document.getElementById('navbarNav');
                        navbar.classList.add('hiding');
                        navbar.classList.remove('show');
                        setTimeout(function() {
                            navbar.classList.remove('hiding');
                        }, 300);
                    }
                });
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    const navbar = document.getElementById('navbarNav');
                    navbar.classList.remove('show', 'hiding');
                }
            });
        });
    })


    </script>
</body>

</html>