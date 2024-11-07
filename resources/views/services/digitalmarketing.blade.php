@extends('app.layouts')
@section('title', 'digital-marking')
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
<section class="py-5 bg-light unservicebannersecion text-white">
   <div class="container">
      <div class="mt-4">
         <div class="unservice-heading">
            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">E</span><span
                  style="animation-delay: 0.1s;">x</span><span style="animation-delay: 0.2s;">p</span><span
                  style="animation-delay: 0.3s;">a</span><span style="animation-delay: 0.4s;">n</span><span
                  style="animation-delay: 0.5s;">d</span><span style="animation-delay: 0.6s;">&nbsp;</span><span
                  style="animation-delay: 0.7s;">y</span><span style="animation-delay: 0.8s;">o</span><span
                  style="animation-delay: 0.9s;">u</span><span style="animation-delay: 1s;">r</span><br /><span
                  style="animation-delay: 1.1s;">d</span><span style="animation-delay: 1.2s;">i</span><span
                  style="animation-delay: 1.3s;">g</span><span style="animation-delay: 1.4s;">i</span><span
                  style="animation-delay: 1.4s;">t</span><span style="animation-delay: 1.5s;">a</span><span
                  style="animation-delay: 1.6s;">l</span><span style="animation-delay: 1.7s;">&nbsp;</span></span><span
                  style="animation-delay: 1.8s;">r</span><span style="animation-delay: 1.9s;">e</span><span
                  style="animation-delay: 2.0s;">a</span><span style="animation-delay: 2.1s;">c</span><span
                  style="animation-delay: 2.2s;">h</span></p>
         </div>
      </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
   <div class="container">
      <div class="row pt-3 sectiontwocontainer">
         <div class="col-md-6">
            <h2 class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0s;"><span
                  class="unservice-subheading">Digital </span><br> <span class="unservice-headings">Success</span></h2>
         </div>
         <div class="col-md-6">
            <div class="unservicesdiv">
               <p class="unservicestext slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.2s;">In today's digital age, establishing a robust online presence is
                  imperative for businesses to thrive. Vgen Media offers a comprehensive Digital Marketing Suite
                  tailored to elevate your brand's visibility, engagement, and conversion rates across various digital
                  platforms.</p>
            </div>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row">
         <div class="col-md-12 ">
            <img src="../images/digitalscuccesss.webp" class="img-fluid digitalsuccss" alt="digital success">
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
                           <img src="../images/eye.webp" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Enhanced Brand Visibility
                        </h2>
                        <p class="description">Reach your target audience effectively through strategic online
                           campaigns.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/increase-engage.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Increased Engagement</h2>
                        <p class="description">Foster meaningful connections with your audience through compelling
                           content and interactive engagement strategies.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/improved-rate.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Improved Conversion Rates</h2>
                        <p class="description">Drive measurable results and achieve your business objectives with our
                           data-driven approach.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/cost-effective.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Cost-Effective Solutions</h2>
                        <p class="description">Maximize your ROI with targeted digital marketing campaigns that align
                           with your budget.</p>
                     </div>
                  </div>
               </div>
               <div class="card swiper-slide">
                  <div class="all-content">
                     <div class="image-content">
                        <span class="overlay"></span>
                        <div class="card-image">
                           <img src="../images/action-insight.svg" alt="" class="card-img">
                        </div>
                     </div>
                     <div class="card-content">
                        <h2 class="name">Actionable Insights</h2>
                        <p class="description">Gain valuable insights into your audience's behavior and preferences
                           through advanced analytics.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container pt-5">
         <h2><span class="unservice-subheading">Social Media </span></br> <span
               class="unservice-headings">Marketing</span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <img src="../images/digital-social-media.webp" alt="" class="card-img">

            </div>

            <div class="col-md-6 markingdiv">
               <div class="marktingdiv">
                  <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                     style="animation-delay: 0s;">Engage, Connect, Convert </h3>
                  <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                     style="animation-delay: 0.1s;"> Our Social Media Marketing services encompass every aspect of
                     building and managing your brand's presence on social platforms. From content development and
                     community management to paid advertising and analytics, we tailor our strategies to align with your
                     brand's unique goals and objectives. </p>
                  <ul class="serviceul">
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;">
                        <img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Content Development:</b>
                        Tailored content strategies to captivate your audience and drive engagement.</li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;">
                        <img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Social Media Graphics:</b>
                        Eye-catching visuals that resonate with your brand identity and attract attention.</li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;">
                        <img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Community Management:</b>
                        Proactive management of your social media channels to foster meaningful interactions.</li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.5s;">
                        <img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Paid Social Advertising:</b>
                        Targeted ad campaigns to expand your reach and maximize ROI.</li>
                     <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.6s;">
                        <img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Social Media Analytics:</b>
                        In-depth analysis of campaign performance to optimize strategies and achieve measurable results.
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>



      <div class="container pt-5">
         <h2><span class="unservice-subheading">Search Engine </span></br> <span
               class="unservice-headings">Marketing</span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0s;">Be Visible, Be Found </h3>
               <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0.1s;"> With our Search Engine Marketing solutions, we ensure that your brand
                  remains visible and accessible to potential customers across search engine results pages. From SEM and
                  PPC campaigns to SEO optimization and display advertising, we employ proven tactics to enhance your
                  online visibility and drive targeted traffic to your website. </p>
               <ul class="serviceul">
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>SEM:</b> Strategic management of
                     search engine marketing campaigns to increase visibility and drive traffic.</li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>PPC:</b> Pay-per-click advertising
                     strategies to generate immediate results and maximize conversions. </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>SEO:</b> Comprehensive
                     optimization techniques to improve your website's organic search rankings. </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Display Advertising:</b> Engaging
                     visual ads placed strategically across relevant online platforms. </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.6s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Shopping Ads:</b> Product-focused
                     advertising campaigns to promote your offerings and drive sales. </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.7s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Local Search Advertising:</b>
                     Targeted advertising to capture local customers searching for your products or services. </li>

               </ul>

            </div>
            <div class="col-md-6 markingdiv">
               <img src="../images/searchenging.webp" alt="" class="card-img">

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



      <div class="container pt-5">
         <h2><span class="unservice-subheading">Website </span></br> <span class="unservice-headings">& Landing
               page</span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <img src="../images/weblandingpage.webp" alt="" class="card-img">



            </div>
            <div class="col-md-6 markingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;">Your Digital Gateway </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;"> Your website is often the first point of contact between your brand and
                  your audience. With our Website & Landing Page services, we create visually stunning, user-friendly
                  websites and landing pages that captivate visitors and drive conversions. From responsive design to
                  compelling copywriting, we ensure that every aspect of your digital presence reflects the essence of
                  your brand. </p>
               <ul class="serviceul">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Responsive Website
                        Design:</b>Sleek and user-friendly website designs optimized for seamless performance across
                     devices.</li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Responsive Landing Page
                        Design:</b>Custom landing pages designed to convert visitors into customers with compelling
                     visuals and persuasive copy. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Website Content & Copywriting:</b>
                     Professionally crafted content that communicates your brand's message effectively and drives
                     action. </li>

               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="container pt-5">
      <h2 c><span class="unservice-subheading">Custom </span></br> <span class="unservice-headings">Solutions</span>
      </h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Tailored to Your Needs </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.1s;">We understand that every business is unique, which is why we offer Custom
               Solutions designed to address your specific requirements and challenges. Whether you need specialized
               digital marketing strategies, bespoke website development, or innovative campaign ideas, our team of
               experts is here to turn your vision into reality. </p>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.2s;">Our goal at Vgen Media is to build lasting relationships with each of our
               clients. Our commitment to continuous assistance and optimization extends beyond the provision of
               customized solutions. </p>




         </div>
         <div class="col-md-6 markingdiv">
            <img src="../images/customsolution.webp" alt="" class="card-img">

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
      //   autoplay: {
      //     delay: 2000,
      //     disableOnInteraction: false,
      //   },
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