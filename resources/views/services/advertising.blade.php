@extends('app.layouts')
@section('title', 'advertising-operation')
@push('styles')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <!--Font Awesome Icons-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('css/style.css')}}">
   <!--jquery alert-->
   <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
@endpush
@section('content')
<section class="py-5 bg-light unservice2bannersecion text-white">
   <div class="container">
      <div class="mt-4">
         <div class="unservice2-subheadings">
            <p class="fade-in-letters"><span style="animation-delay: 0s;">B</span><span
                  style="animation-delay: 0.1s;">e</span><span style="animation-delay: 0.2s;">c</span><span
                  style="animation-delay: 0.3s;">o</span><span style="animation-delay: 0.4s;">m</span><span
                  style="animation-delay: 0.5s;">e</span><span style="animation-delay: 0.6s;">&nbsp;</span><span
                  style="animation-delay: 0.6s;">a</span><span style="animation-delay: 0.7s;">n</span></p>

         </div>
         <div class="unservice1-heading">

            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">I</span><span
                  style="animation-delay: 0.1s;">n</span><span style="animation-delay: 0.2s;">d</span><span
                  style="animation-delay: 0.3s;">u</span><span style="animation-delay: 0.4s;">s</span><span
                  style="animation-delay: 0.5s;">t</span><span style="animation-delay: 0.6s;">r</span><span
                  style="animation-delay: 0.7s;">y</span><span style="animation-delay: 0.8s;">&nbsp;</span><span
                  style="animation-delay: 0.9s;">v</span><span style="animation-delay: 1s;">o</span><span
                  style="animation-delay: 1.1s;">i</span><span style="animation-delay: 1.2s;">c</span><span
                  style="animation-delay: 1.3s;">e</span><br /><span style="animation-delay: 1.4s;">w</span><span
                  style="animation-delay: 1.4s;">i</span><span style="animation-delay: 1.5s;">t</span><span
                  style="animation-delay: 1.6s;">h</span><span style="animation-delay: 1.7s;">&nbsp;</span></span><span
                  style="animation-delay: 1.8s;">E</span><span style="animation-delay: 1.9s;">x</span><span
                  style="animation-delay: 2.0s;">p</span><span style="animation-delay: 2.1s;">e</span><span
                  style="animation-delay: 2.2s;">r</span><span style="animation-delay: 2.2s;">t</span><span
                  style="animation-delay: 2.2s;">i</span><span style="animation-delay: 2.2s;">s</span><span
                  style="animation-delay: 2.2s;">e</span></p>
         </div>
      </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
   <div class="container">
      <div class="row pt-3 sectiontwocontainer">
         <div class="col-md-6">
            <h2 class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0s;"><span
                  class="unservice-subheading">Service </span></br> <span class="unservice-headings">Preview</span></h2>
         </div>
         <div class="col-md-6">
            <div class="unservicesdiv">
               <p class="unservicestext slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;">At Vgen Media, we specialize in comprehensive advertising operations
                  services tailored to elevate your brand's digital presence. From strategizing and executing campaigns
                  to meticulous tracking and reporting, we ensure your message reaches the right audience at the right
                  time, maximizing your ROI</p>
            </div>
         </div>
      </div>
   </div>
   <div class="container p-5">
      <div class="row imagerow">
         <div class="col-md-3">
            <div class="unservicebanner1">
               <img src="../images/servicep1.webp" class="img-fluid servicepreview mobileservicenew" alt="service">
               <img src="../images/servicep4.webp" class="img-fluid servicepreviewrigth mt-3 mobileservicenew1"
                  alt="service">
            </div>
         </div>
         <div class="col-md-6">
            <div class="unservicebanner1">

               <img src="../images/servicep2.webp" class="img-fluid servicepreview mobileservicenew2" alt="service">
            </div>
         </div>
         <div class="col-md-3">
            <div class="unservicebanner1">

               <img src="../images/servicep3.webp" class="img-fluid servicepreview mobileservicenew3" alt="service">
               <img src="../images/servicep5.webp" class="img-fluid servicepreview mt-3 mobileservicenew4" alt="service">

            </div>
         </div>
      </div>
   </div>
</section>



<section class="bg-light dotbackgrounsectiontwo">
   <div class="container">
      <div class="col-md-12">
         <h2><span class="unservice-subheading">Access </span></br> <span class="unservice-headings">Benefits</span>
         </h2>
      </div>
      <div class="slide-container swiper  pt-3 pb-3">
         <div class="slide-content">
            <div class="card-wrapper swiper-wrapper">
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/targeted-reach.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Targeted Reach
                        </h2>
                        <p class="description">Pinpoint your audience with precision targeting strategies.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/enhanced-visibility.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Enhanced Visibility</h2>
                        <p class="description">Elevate brand awareness across various digital platforms.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/improved-engagement_.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Improved Engagement</h2>
                        <p class="description">Craft compelling ads that resonate with your audience.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/Data-Driven-Insights.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Data-Driven Insights</h2>
                        <p class="description">Utilize analytics to refine strategies and optimize performance.</p>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <div class="container pt-5">
         <h2><span class="unservice-subheading">Ads </span></br> <span class="unservice-headings">Operation</span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <img src="../images/ads-operation.webp" alt="" class="card-img">

            </div>

            <div class="col-md-6 markingdiv">
               <div class="marktingdiv">
                  <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                     style="animation-delay: 0s;">Precision in Every Pixel </h3>
                  <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                     style="animation-delay: 0.1s;">Embark on a journey of digital mastery, where every pixel counts and
                     every click packs a punch! We're here to tailor your ad campaigns with surgical precision, ensuring
                     your message hits the mark and resonates with your audience across every digital avenue. </p>
                  <ul class="serviceul">
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;">
                        <img src="../assets/images/arrow.svg" class="img-fluid"> Tailored ad campaigns crafted to
                        perfection for maximum impact. </li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;">
                        <img src="../assets/images/arrow.svg" class="img-fluid"> Strategic placement across digital
                        channels to capture audience attention. </li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;">
                        <img src="../assets/images/arrow.svg" class="img-fluid"> Continuous monitoring and optimization
                        to ensure optimal performance. </li>

                  </ul>
               </div>
            </div>
         </div>
      </div>



      <div class="container pt-5">
         <h2><span class="unservice-subheading">Managing </span></br> <span class="unservice-headings">Ads</span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0s;">Your Brand, Everywhere </h3>
               <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0.1s;">Imagine your brand seamlessly weaving through the digital tapestry,
                  engaging your audience effortlessly and leaving an indelible mark on every screen. From captivating
                  social media ads to dominating Google searches, we ensure your brand shines across every digital
                  avenue. </p>
               <ul class="serviceul">
                  <li class="slide-in-from-left" data-animate="slide-in-from-left"
                     style="animation-delay: 0.2s;margin-bottom:2%;"><img src="../assets/images/arrow.svg"
                        class="img-fluid"> Expert management of diverse ad formats across owned and operated channels.
                  </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left"
                     style="animation-delay: 0.3s;margin-bottom:2%;"><img src="../assets/images/arrow.svg"
                        class="img-fluid"> Implementation of programmatic advertising strategies for efficient ad
                     placement. </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left"
                     style="animation-delay: 0.4s;margin-bottom:2%;"><img src="../assets/images/arrow.svg"
                        class="img-fluid"> Strategic deployment of search, social media, and email ads to engage
                     audiences at every touchpoint. </li>

               </ul>

            </div>
            <div class="col-md-6 markingdiv">
               <img src="../images/managingads.webp" alt="" class="card-img">

            </div>
         </div>
      </div>
   </div>





   <div class="container pt-5">
      <h2><span class="unservice-subheading">Digital Display Ads </span></br> <span class="unservice-headings">Design &
            Versioning</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/digital-display-ads.webp" alt="" class="card-img">

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;">Captivate. Convert. Repeat. </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;">Say hello to digital ads that captivate hearts, convert minds, and keep
                  audiences coming back for more. With our 'Captivate. Convert. Repeat.' mantra, we craft experiences
                  that leave lasting impressions. Let's turn your brand's story into a digital masterpiece! </p>
               <ul class="serviceul">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Creative design and development of
                     captivating digital display ads. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Dynamic versioning to tailor ads for
                     different audience segments. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Seamless integration of brand messaging with
                     visually stunning designs. </li>

               </ul>
            </div>
         </div>
      </div>
   </div>




   <div class="container-fluid pt-5 pb-5">
      <div class="col-md-12">
         <div class="marquee">
            <div class="marquee-inner">
               <h2 class="unservice-marquee">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
               </h2>
            </div>
         </div>

         <div class="marquee1">
            <div class="marquee1-inner">
               <h2 class="unservice-marquee">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
                  <img src="../images/Union.webp" alt="Icon"> Let’s Work Together <img src="../images/Union.webp"
                     alt="Icon">
               </h2>
            </div>
         </div>
      </div>


</section>

<section class="backgroundsectionservice pb-5">
   <div class="container pt-5">
      <h2><span class="unservice-subheading">Programmatic Ads Audience </span></br> <span class="unservice-headings"
            style="color: var(--SB_Light_Green, #D3E9E2);">Targeted Display</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/programming-ads-display.webp" alt="" class="card-img">

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;color: var(--SB_Light_Green, #D3E9E2);">Precision Targeting, Maximum Impact
               </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;color: var(--SB_Light_Green, #D3E9E2);">Here, every click and impression
                  matters! Programmatic advertisements are the key to reaching the appropriate audience at the right
                  moment. With 'Precision Targeting, Maximum Impact,' every ad makes it. Let's transform your audience
                  into diehards with tailored displays!
               </p>
               <ul class="serviceul" style="color: var(--SB_Light_Green, #D3E9E2);">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Advanced audience targeting to reach the
                     right users at the right time. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Real-time optimization based on user
                     behavior and preferences. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/arrow.svg" class="img-fluid"> Enhanced efficiency and effectiveness
                     through programmatic ad placements. </li>

               </ul>
            </div>
         </div>
      </div>
   </div>
</section>



<section class="bg-light dotbackgrounsectiontwo">


   <div class="container pt-5">
      <h2><span class="unservice-subheading">Print </span></br> <span class="unservice-headings">Ads</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/printads.webp" alt="" class="card-img">



         </div>
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0s;">Tangible Impact, Timeless Appeal </h3>
            <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0.1s;"> Print ads are alive with tangible impact and timeless appeal! Our print
               advertising services make lasting impressions in the real world. With 'Tangible Impact, Timeless Appeal,'
               we craft works of art that ignite imaginations and leave unforgettable marks. </p>
            <ul class="serviceul">
               <li class="slide-in-from-right" data-animate="slide-in-from-right"
                  style="margin-bottom:3%; animation-delay: 0.2s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Crafting visually striking print ads that leave a lasting impression. </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right"
                  style="margin-bottom:3%; animation-delay: 0.3s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Strategic placement in print publications to reach target demographics. </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right"
                  style="margin-bottom:3%; animation-delay: 0.4s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Leveraging the power of print media to complement digital marketing efforts.
               </li>

            </ul>
         </div>
      </div>
   </div>


   <div class="container pt-5 pb-5 mb-5">
      <h2><span class="unservice-subheading">Full Campaign Reporting & </span></br> <span
            class="unservice-headings">Attribution Tracking</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Tangible Impact, Timeless Appeal </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.1s;">Dive into the world of digital data with us, where every click, view, and
               interaction paints a vivid picture of your campaign's success! With our full campaign reporting and
               attribution tracking, we uncover insights that guide your next move.</p>
            <ul class="serviceul">
               <li class="slide-in-from-left" data-animate="slide-in-from-left"
                  style="margin-bottom:3%; animation-delay: 0.2s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Comprehensive reporting on campaign performance and key metrics. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left"
                  style="margin-bottom:3%; animation-delay: 0.3s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Advanced attribution tracking to measure the impact of each marketing
                  touchpoint.</li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left"
                  style="margin-bottom:3%; animation-delay: 0.4s;"><img src="../assets/images/arrow.svg"
                     class="img-fluid"> Actionable insights to optimize future campaigns and maximize ROI.</li>

            </ul>



         </div>
         <div class="col-md-6 markingdiv">
            <img src="../images/fullcamping.webp" alt="" class="card-img">

         </div>
      </div>
   </div>

</section>



<section class="bg-light dotsection-service-calltoaction">
   <div class="container-fluid calltoaction">
      <div class="row">
         <div class="col-md-7">
            <div class="newsletter">
               <h2 class="call-heading"> Let's Build Your Digital Success Story Together. Contact Vgen Media Today </h2>
               <p class="call-subheading">Subscribe to our newsletter for exclusive insights, expert tips, and industry
                  updates delivered straight to your inbox. Stay ahead of the curve with VgenVision!</p>
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
   <script src="{{ asset('assets/js/animation.js') }}"></script>


   <script>
      var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        autoplay: {
          delay: 1000,
          disableOnInteraction: false,
        },
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          dynamicBullets: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },

        breakpoints: {
          0: {
            slidesPerView: 1,
          },
          520: {
            slidesPerView: 2,
          },
          950: {
            slidesPerView: 3,
          },
        },
      });


   </script>
@endpush