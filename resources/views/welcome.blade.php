@extends('app.layouts')
@section('title', 'VGEN MEDIA')

@push('styles')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <!--Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/home-responsive.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--jquery alert-->
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
@endpush

@section('content')
<div class="preload-overlay" id="preloadOverlay">
        <div class="preload-text" id="preloadText">Making</div>
    </div>

<section class="py-5 bg-light homesection text-white">
    <div class="container-fluid home-container ">
        <div class="row">
            <div class="col-md-9">
                <div class="homeheading">
                    <h2 class="banner-subheading">your</h2><br />
                    <div class="text-container">
                        <h2 class="banner-heading banner-heading-text">Gateway to</h2>
                    </div>
                    <div class="text-container">
                        <h2 class="banner2-heading banner-heading-text"> Digital Success</h2>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="banner-right">
                    <div class="text-container">
                        <p class="banner-text"> Strategizing your growth, Visibility and awareness through impack brand
                            messaging and marketing campaigns</p>
                    </div>
                    <div class="text-container">
                        <div class="buton-container"> <a href="{{ route('contact') }}" class="banner-link">Start Project
                                <i class="bi bi-chevron-right"></i> </a> </div>
                    </div>
                    <div class="socialDiv">
                        <ul class="social-list">
                            <li> <a href="https://www.facebook.com/p/Vgen-Media-61551215171608/" class="social-links">
                                    Facebook <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                    </svg></a></li>
                            <li> <a href="https://www.instagram.com/vgenmedia/" class="social-links"> Instagram <svg
                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                    </svg></a></li>
                            <li> <a href="https://www.youtube.com/channel/UCXMt9vYdWplKKUrcnkPvb-w/videos"
                                    class="social-links"> Youtube &emsp;<svg xmlns="http://www.w3.org/2000/svg"
                                        width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                    </svg></a></li>
                            <li> <a href="https://www.linkedin.com/company/vgen-media" class="social-links"> LinkedIn
                                    &emsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0v-6z" />
                                    </svg></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="field" id="scroll-link">
                        <div class="mouse" id="scroll-mouse">
                            <a href="#videosection"><span></span></a>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>





<section id="videosection" class="videosection dotsection">

    <video autoplay muted loop class="bg-video">
        <source src="../videos/videovgnmedia.mp4" type="video/mp4">
    </video>

</section>

<section class="bg-light dotsection">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-6">

                <h2><span class="text-subheading">Value </span></br> <span class="text-headings">Proposition</span></h2>

            </div>
            <div class="col-md-6">
                <p class="text-para">At Vgen Media, we are more than just a digital marketing agency. We are your
                    partners in navigating the dynamic landscape of online marketing in the UAE region. Our
                    comprehensive suite of services is designed to elevate your brand, drive engagement, and deliver
                    measurable results. From strategic social media campaigns to captivating visual content and
                    cutting-edge advertising operations, we have the expertise to propel your business forward</p>
            </div>
        </div>
    </div>
</section>


<section class="bg-light dotsection">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-md-12">

                <h2><span class="text-subheading">Portfolio </span> </br><span class="text-headings">Collection</span>
                </h2>

            </div>
            <div class="col-md-12 mt-5">
                <div class="carousel" aria-live="polite" aria-label="Image Carousel">
                    <div class="carousel-track"></div>
                </div>
            </div>
        </div>
</section>

<section class="bg-light dotsection-service pb-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="servicedivHeading">
                    <h2><span class="text-subheading">Offered </span> </br><span class="text-headings">service</span>
                    </h2>
                </div>
            </div>
        </div>
    </div>

    <div class="container servicesection mt-5">
        <div class="row">
            <div class="col-md-6 servicecolumn">
                <img src="../images/service1.webp" class="service1 img-fluid" />
            </div>
            <div class="col-md-6 servicecolumn">
                <div class="serviceContetent">
                    <h2 class="service-heading">Digital Marketing Suite</h2>
                    <p class="service-text">Elevate your brand's online presence with expertly crafted social media
                        strategies, targeted search engine campaigns, and captivating website designs tailored to your
                        audience</p>
                    <ul class="servicelist">
                        <li><img src="../images/social-media-marketing.webp" class="img-fluid serviceimg">
                            <p class="li-text"> Social Media Marketing </p>
                        </li>
                        <li><img src="../images/search-engine-marketing.webp" class="img-fluid serviceimg">
                            <p class="li-text">Search Engine Marketing </p>
                        </li>
                        <li><img src="../images/website-and-landing-page.webp" class="img-fluid serviceimg">
                            <p class="li-text">Website & Landing Page </p>
                        </li>
                        <li><img src="../images/custom-solutions.webp" class="img-fluid serviceimg">
                            <p class="li-text"> Custom Solutions </p>
                        </li>
                    </ul>
                    <div class="button-service">
                        <a href="{{ route('services.digital-marketing') }}" class="more-button">Explore More <i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container servicesection mt-5">
        <div class="row">
            <div class="col-md-6 servicecolumn">
                <img src="../images/advertising-operations.webp" class="service1 img-fluid" />
            </div>
            <div class="col-md-6 servicecolumn">
                <div class="serviceContetent">
                    <h2 class="service-heading">Advertising Operations </h2>
                    <p class="service-text">Streamline your advertising efforts with precise audience targeting,
                        compelling visual design, and comprehensive campaign reporting for maximum impact and ROI.</p>
                    <ul class="servicelist">
                        <li><img src="../images/digital-display-ads-design-and-versioning.webp"
                                class="img-fluid serviceimg">
                            <p class="li-text"> Digital Display Ads Design & Versioning </p>
                        </li>
                        <li><img src="../images/programmatic-ads-audience-targeted-display-1.webp"
                                class="img-fluid serviceimg">
                            <p class="li-text">Programmatic Ads Audience Targeted Display </p>
                        </li>
                        <li><img src="../images/ads-operation-1.webp" class="img-fluid serviceimg">
                            <p class="li-text">Ads Operation</p>
                        </li>
                        <li><img src="../images/managing-ads.webp" class="img-fluid serviceimg">
                            <p class="li-text"> Managing Ads </p>
                        </li>
                    </ul>
                    <div class="button-service">
                        <a href="{{ route('services.advertising-operation') }}" class="more-button">Explore More <i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container servicesection mt-5">
        <div class="row">
            <div class="col-md-6 servicecolumn">
                <img src="../images/visual-content.webp" class="service1 img-fluid" />
            </div>
            <div class="col-md-6 servicecolumn">
                <div class="serviceContetent">
                    <h2 class="service-heading">Visual Content</h2>
                    <p class="service-text">From eye-catching business collateral to dynamic digital ads and engaging
                        website designs, our creative experts bring your brand to life with stunning visuals that
                        resonate with your audience.</p>
                    <ul class="servicelist">
                        <li><img src="../images/creative.webp" class="img-fluid serviceimg">
                            <p class="li-text"> Creative Design Solutions</p>
                        </li>
                        <li><img src="../images/content.webp" class="img-fluid serviceimg">
                            <p class="li-text">Content Development Services </p>
                        </li>

                    </ul>
                    <div class="button-service">
                        <a href="#" class="more-button">Explore More <i class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container servicesection mt-5">
        <div class="row">
            <div class="col-md-6 servicecolumn">
                <img src="../images/enhanced-marketing.webp" class="service1 img-fluid" />
            </div>
            <div class="col-md-6 servicecolumn">
                <div class="serviceContetent">
                    <h2 class="service-heading">Enhanced Marketing </h2>
                    <p class="service-text">Drive measurable results and outshine the competition with our comprehensive
                        suite of marketing solutions, including SEO, social media management, paid advertising, and
                        mobile marketing strategies designed to propel your business forward.</p>
                    <ul class="servicelist">
                        <li><img src="../images/search-engine-optimization.webp" class="img-fluid serviceimg">
                            <p class="li-text">Search Engine Optimization</p>
                        </li>
                        <li><img src="../images/influencer-marketing-1.webp" class="img-fluid serviceimg">
                            <p class="li-text">Influencer Marketing </p>
                        </li>
                        <li><img src="../images/email-marketing.webp" class="img-fluid serviceimg">
                            <p class="li-text">Email Marketing</p>
                        </li>
                        <li><img src="../images/paid-advertising.webp" class="img-fluid serviceimg">
                            <p class="li-text">Paid Advertising</p>
                        </li>

                    </ul>
                    <div class="button-service">
                        <a href="{{ route('services.enhanced-marketing') }}" class="more-button">Explore More <i
                                class="bi bi-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid testimonials  mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="servicedivHeading">

                    <h2><span class="text-subheading">Client </span> <br /><span
                            class="text-headings">Testimonial</span></h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testtimonial-div">
                    <div class="testimonial-inner">
                        <div class="author-section">
                            <img src="../images/test1.webp" class="img-fluid testimg">
                            <div class="author-details">

                                <p class="author-name">Talan Dokidis</p>
                                <p class="authore-hash">@talandokic</p>
                            </div>
                        </div>

                        <div class="testimonial-body">
                            <p class="testimonial-text"> Working with VGEN MEDIA has been a game-changer for our
                                business. Their expertise and dedication have exceeded our expectations at every turn 👏
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 testmonials">
                <div class="testtimonial-div">
                    <div class="testimonial-inner">
                        <div class="author-section">
                            <img src="../images/test2.webp" class="img-fluid testimg">
                            <div class="author-details">

                                <p class="author-name">Gokul</p>
                                <p class="authore-hash">@gokul</p>
                            </div>
                        </div>

                        <div class="testimonial-body">
                            <p class="testimonial-text"> Vgen Media transformed our digital presence and helped us
                                achieve unprecedented growth. Their strategic approach and attention to detail are
                                unmatched</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light dotsection-service-calltoaction">


    <div class="container-fluid calltoaction">
        <div class="row">
            <div class="col-md-7">
                <div class="newsletter">
                    <h2 class="call-heading"> Let's Build Your Digital Success Story Together. Contact Vgen Media Today
                    </h2>
                    <p class="call-subheading">Subscribe to our newsletter for exclusive insights, expert tips, and
                        industry updates delivered straight to your inbox. Stay ahead of the curve with VgenVision!</p>
                    <form class="form-subscribe" action="#" id="subscribeForm">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg  @error('email') is-invalid @enderror"
                                name="email" id="email" placeholder="Email Address">

                            <span class="input-group-btn">
                                <div class="form-btn">
                                    <button class="form-sub btn-lg" type="submit">Sign-up</button>
                                </div>
                            </span>
                        </div>
                        <span class="invalid-feedback" id="email-error">@error('email') {{ $message }} @enderror</span>
                        <p id="responseMessage" style="display:none;"></p>

                    </form>
                </div>
            </div>

            <div class="col-md-5">
                <div class="scroll-container">
                    <div id="image-container">
                        <div class="image-scroll">
                            <img src="../images/Newsletter.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter2.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter3.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter2.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter3.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter2.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter3.webp" alt="" class="picture">
                        </div>
                    </div>

                    <div id="image-container">
                        <div class="image-scroll">
                            <img src="../images/Newsletter4.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter5.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter6.webp" alt="" class="picture">
                        </div>

                        <div class="image-scroll">
                            <img src="../images/Newsletter4.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter5.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter6.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter4.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter5.webp" alt="" class="picture">
                        </div>
                        <div class="image-scroll">
                            <img src="../images/Newsletter6.webp" alt="" class="picture">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>

<div id="overlay">
    <div class="cv-spinner">
        <span class="spinner"></span>
    </div>
</div>
@endsection

@push('pageScript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
    <script src="{{ asset('assets/js/newsletter.js') }}"></script>


    <script>
        
document.addEventListener('DOMContentLoaded', function() {
    const preloadOverlay = document.getElementById('preloadOverlay');
    const preloadText = document.getElementById('preloadText');
    const pageContent = document.querySelector('.page-content');

    const messages = [
        'Brands',
        'Resonate',
        'More'
    ];

    let currentMessageIndex = 0;

    function updatePreloadText() {
        preloadText.textContent = messages[currentMessageIndex];
        currentMessageIndex = (currentMessageIndex + 1) % messages.length;
    }

    function hidePreloadOverlay() {
        preloadOverlay.style.opacity = 0;
        setTimeout(function() {
            preloadOverlay.style.display = 'none';
            pageContent.style.display = 'block';
        }, 500); 
    }

    const messageInterval = setInterval(updatePreloadText, 1000);

    setTimeout(function() {
        clearInterval(messageInterval); 
        hidePreloadOverlay();
    }, 3000); 
});

        document.addEventListener('DOMContentLoaded', () => {
            const slidesData = [
                { src: '../videos/advertising-operations-vgen-media.webm'},
                { src: '../videos/digital-marketing-suite-video-vgen-media.webm' },
                { src: '../videos/enhanced-marketing-video-vgen-media.webm'},
                { src: '../videos/visual-content-video-vgen-media.webm' },
            ];

            const carouselTrack = document.querySelector('.carousel-track');

            const createSlide = ({ src, topText, bottomText, bottomheading, link }) => {
                const slideElement = document.createElement('div');
                slideElement.className = 'slide';

                const topTextElement = document.createElement('div');
                topTextElement.className = 'top-text';
                topTextElement.textContent = topText;

                const videoElement = document.createElement('video');
                videoElement.src = src;
                videoElement.autoplay = true;
                videoElement.loop = true;
                videoElement.muted = true;

                const bottomHeading = document.createElement('div');
                bottomHeading.className = 'bottom-heading';
                bottomHeading.textContent = bottomheading;



                const bottomTextElement = document.createElement('div');
                bottomTextElement.className = 'bottom-text';

                const bottomTextSpan = document.createElement('span');
                bottomTextSpan.className = 'bottom-text-content';
                bottomTextSpan.textContent = bottomText;
                bottomTextElement.appendChild(bottomTextSpan);
          
                slideElement.append(topTextElement, videoElement, bottomHeading, bottomTextElement);

                return slideElement;
            };

            const populateCarouselTrack = (slides) => {
                const fragment = document.createDocumentFragment();
                slides.forEach(slide => fragment.appendChild(createSlide(slide)));

                slides.forEach(slide => fragment.appendChild(createSlide(slide)));

                carouselTrack.appendChild(fragment);

                const slideWidth = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--slide-width'));
                const gapWidth = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--gap-width'));
                const totalWidth = (slideWidth + gapWidth) * slides.length;
                const duplicatedTotalWidth = totalWidth * 2;
                const halfTotalWidth = duplicatedTotalWidth / 2;

                carouselTrack.style.setProperty('--total-width', `${halfTotalWidth}px`);

                const baseDuration = 40;
                const baseWidth = 5000;
                const scrollDuration = (halfTotalWidth / baseWidth) * baseDuration;

                carouselTrack.style.setProperty('--scroll-duration', `${scrollDuration}s`);
            };

            populateCarouselTrack(slidesData);
        });

        $(function () {
            $('#scroll-link').on('click', function (e) {
                e.preventDefault();
                var target = $('#videosection');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500, 'linear', function () {
                        target.find('video')[0].play();
                    });
                } else {
                    console.log('Target element not found: #videosection');
                }
            });

            $('.scroll-link').on('click', function (e) {
                e.preventDefault();
                var target = $('#videosection');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 500, 'linear', function () {
                        target.find('video')[0].play();
                    });
                } else {
                    console.log('Target element not found: #videosection');
                }
            });
        });

    </script>
@endpush