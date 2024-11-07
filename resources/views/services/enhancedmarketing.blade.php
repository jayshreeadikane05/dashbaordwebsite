@extends('app.layouts')
@section('title', 'Enhanced-Marketing')
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
<section class="py-5 bg-light unservice4bannersecion text-white">
   <div class="container">
      <div class="mt-4">
         <div class="unservice2-subheadings">
            <p class="fade-in-letters"><span style="animation-delay: 0s;">D</span><span
                  style="animation-delay: 0.1s;">i</span><span style="animation-delay: 0.2s;">g</span><span
                  style="animation-delay: 0.3s;">i</span><span style="animation-delay: 0.4s;">t</span><span
                  style="animation-delay: 0.5s;">a</span><span style="animation-delay: 0.6s;">l</span><span
                  style="animation-delay: 0.6s;">i</span><span style="animation-delay: 0.7s;">z</span><span
                  style="animation-delay: 0.7s;">e</span></p>

         </div>
         <div class="unservice1-heading">

            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">y</span><span
                  style="animation-delay: 0.1s;">o</span><span style="animation-delay: 0.2s;">u</span><span
                  style="animation-delay: 0.3s;">r</span><span style="animation-delay: 0.4s;">&nbsp;</span><span
                  style="animation-delay: 0.5s;">b</span><span style="animation-delay: 0.6s;">r</span><span
                  style="animation-delay: 0.7s;">a</span><span style="animation-delay: 0.8s;">n</span><span
                  style="animation-delay: 0.9s;">d'</span><span style="animation-delay: 1s;">s</span><br /><span
                  style="animation-delay: 1.1s;">p</span><span style="animation-delay: 1.2s;">o</span><span
                  style="animation-delay: 1.3s;">t</span><span style="animation-delay: 1.4s;">e</span><span
                  style="animation-delay: 1.4s;">n</span><span style="animation-delay: 1.5s;">t</span><span
                  style="animation-delay: 1.6s;">i</span><span style="animation-delay: 1.7s;">a</span></span><span
                  style="animation-delay: 1.8s;">l</span><span style="animation-delay: 1.9s;">&nbsp;</span><span
                  style="animation-delay: 2.0s;">n</span><span style="animation-delay: 2.1s;">o</span><span
                  style="animation-delay: 2.2s;">w</span></p>
         </div>
      </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
   <div class="container">
      <div class="row pt-3 sectiontwocontainer">
         <div class="col-md-6">
            <h2 class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0s;"><span
                  class="unservice-subheading">Marketing </span></br> <span class="unservice-headings">Core </span></h2>
         </div>
         <div class="col-md-6">
            <div class="unservicesdiv">
               <p class="unservicestext slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.2s;">At Vgen Media, we specialize in delivering comprehensive digital
                  marketing solutions tailored to elevate your brand's online presence and drive tangible results. Our
                  suite of services is designed to encompass every facet of your digital strategy, ensuring maximum
                  visibility, engagement, and conversions. </p>
            </div>
         </div>
      </div>
   </div>
   <div class="container p-5">
      <div class="row imagerow">
         <div class="col-md-6">
            <div class="unservicebanner1">
               <img src="../images/enhnaedmarketing1.webp" class="img-fluid servicepreview" alt="service">
               <img src="../images/enhanced2.webp" class="img-fluid servicepreviewrigth mt-3" alt="service">
            </div>
         </div>
         <div class="col-md-6">
            <div class="unservicebanner1">
               <img src="../images/enhanced3.webp" class="img-fluid servicepreview mobileservice" alt="service">
               <img src="../images/enhnaedmarketing2.webp" class="img-fluid servicepreview mobileservice2 mt-3"
                  alt="service">
            </div>
         </div>

      </div>
   </div>
</section>



<section class="bg-light dotbackgrounsectiontwo">
   <div class="container">
      <div class="col-md-12">
         <h2 class="enhacemarketing"><span class="unservice-headings">Benefits</span></h2>
      </div>
      <!-- Second row with two centered icon boxes -->
      <div class="container my-5">
         <div class="row">
            <div class="col-md-4">
               <div class="icon-box">
                  <img src="../images/iconboxservice1.webp" class="icconboxservice img-fluid">
                  <h5 class="iconbox-unheading">Amplified online visibility</h5>
                  <p class="iconbox-untext">Make your brand prominent on the internet and attract more customers. </p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="icon-box">
                  <img src="../images/iconservicebox2.webp" class="icconboxservice img-fluid">
                  <h5 class="iconbox-unheading">Enhanced Brand Visibility</h5>
                  <p class="iconbox-untext">Strengthen your brand's recognition and reputation in the market.</p>
               </div>
            </div>
            <div class="col-md-4">
               <div class="icon-box">
                  <img src="../images/iconservicebox3.webp" class="icconboxservice img-fluid">
                  <h5 class="iconbox-unheading">Increased website traffic & lead generation </h5>
                  <p class="iconbox-untext">Get more people to visit your site and turn them into quality leads. </p>
               </div>
            </div>
         </div>

         <div class="row">
            <div class="col-md-6 d-flex justify-content-center">
               <div class="icon-box">
                  <img src="../images/iconservicebox4.webp" class="icconboxservice img-fluid">
                  <h5 class="iconbox-unheading">Improved customer<br /> engagement & loyalty </h5>
                  <p class="iconbox-untext">Better relationships with your audience can result in long-term loyalty,
                     which in turn improves consumer engagement.</p>
               </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
               <div class="icon-box">
                  <img src="../images/iconservicebox5.webp" class="icconboxservice img-fluid">
                  <h5 class="iconbox-unheading">Measurable ROI & <br /> performance tracking </h5>
                  <p class="iconbox-untext">Track the effectiveness of your campaigns with clear metrics and analytics
                     for continuous improvement. </p>
               </div>
            </div>
         </div>
      </div>



      <div class="container pt-5">
         <h2><span class="unservice-subheading">Search Engine </span></br> <span
               class="unservice-headings">Optimization<sub>(SEO)</sub></span></h2>

         <div class="row pt-5 gx-5">
            <div class="col-md-6 markingdiv">
               <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0s;">Maximizing Online Discoverability </h3>
               <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
                  style="animation-delay: 0.1s;">Elevate your website's ranking and visibility with our comprehensive SEO
                  strategies.
               </p>
               <ul class="serviceul">
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> On-Page SEO: </b> Optimize your
                     website's content and structure for improved search engine visibility.
                  </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> PPC: </b> Pay-per-click
                     advertising strategies to generate immediate results and maximize conversions.
                  </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Technical SEO: </b> Ensure
                     optimal website performance and indexing through technical enhancements.
                  </li>
                  <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Local SEO:</b> Dominate local
                     search results and connect with nearby customers through targeted optimization.</li>

               </ul>

            </div>

            <div class="col-md-6 markingdiv">
               <div class="marktingdiv">
                  <img src="../images/searchengingoptimized.webp" alt="" class="card-img">

               </div>
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

   </div>

   <div class="container pt-5">
      <h2><span class="unservice-subheading">Content </span></br> <span class="unservice-headings">& Marketing</span>
      </h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/contentmarketing.webp" alt="" class="card-img">

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;">Engage, Educate, Entice </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;">Craft compelling content that captivates and converts your audience.
               </p>
               <ul class="serviceul">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Blogging:</b> Establish thought
                     leadership and foster audience engagement through regular blog posts.
                  </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Video Marketing:</b> Harness the
                     power of visual storytelling to convey your brand message effectively.
                  </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.5s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Infographics:</b> Communicate
                     complex information in a visually appealing and digestible format.
                  </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.6s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Ebooks and Guides:</b> Provide
                     valuable resources to your audience while showcasing your expertise. </li>

               </ul>
            </div>
         </div>
      </div>
   </div>



   <div class="container pt-5">
      <h2><span class="unservice-subheading">Social Media </span></br> <span class="unservice-headings">Marketing
            <sub>(SMM)</sub></span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Forge Lasting Connections </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 1s;">Build meaningful relationships with your audience across social media
               platforms. </p>
            <ul class="serviceul">
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Content Development:</b>Create
                  captivating content tailored to each social media channel. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Community Management :</b> Foster
                  engagement and dialogue within your social media community. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Paid Social Advertising :</b>
                  Amplify your reach and engagement with targeted social media advertising. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Social Media Analytics:</b> Gain
                  valuable insights into audience behavior and campaign performance. </li>

            </ul>

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <img src="../images/smmm.webp" alt="" class="card-img">

            </div>
         </div>
      </div>
   </div>


</section>

<section class="backgroundsectionservice pb-5">
   <div class="container pt-5">
      <h2><span class="unservice-subheading">Paid </span></br> <span class="unservice-headings"
            style="color: var(--SB_Light_Green, #D3E9E2);">& advertising<sub>(PPC) </sub></span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/paidadvertising.webp" alt="" class="card-img">

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;color: var(--SB_Light_Green, #D3E9E2);">Precision Targeting, Maximum Impact
               </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;color: var(--SB_Light_Green, #D3E9E2);">Reach your target audience with
                  precision and efficiency through paid advertising. </p>
               <ul class="serviceul" style="color: var(--SB_Light_Green, #D3E9E2);">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"><b> Google Ads Management: </b>
                     Harness the power of Google's vast advertising network to reach potential customers. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Facebook Ads Management: </b>
                     Leverage Facebook's extensive user data to create highly targeted ad campaigns. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"><b> Instagram Ads Management: </b>
                     Engage visually-oriented audiences through compelling Instagram ad creatives.
                  </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.5s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"><b> Display Advertising: </b> Increase
                     brand visibility and drive conversions through strategic display ad placements.
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>



<section class="bg-light dotbackgrounsectiontwo">


   <div class="container pt-5">
      <h2><span class="unservice-subheading">Email </span></br> <span class="unservice-headings">marketing</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Personalize, Automate, Convert </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.1s;"> Nurture leads and drive conversions through targeted email campaigns. </p>
            <ul class="serviceul">
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Campaign Strategy: </b> Develop
                  tailored email marketing strategies aligned with your business objectives. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Email Design: </b> Create visually
                  appealing and responsive email templates that captivate your audience. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> List Management:</b> Segment and
                  manage your email lists for maximum relevance and engagement. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Automation:</b> Streamline your
                  email marketing efforts with automated workflows and triggers. </li>

            </ul>


         </div>
         <div class="col-md-6 markingdiv">
            <img src="../images/emailmarkeint.webp" alt="" class="card-img">

         </div>
      </div>
   </div>


   <div class="container pt-5 pb-5 mb-5">
      <h2><span class="unservice-subheading">Influencer </span></br> <span class="unservice-headings">Marketing</span>
      </h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">

            <img src="../images/infulencer.webp" alt="" class="card-img">



         </div>
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0s;">Harness the Power of Influence </h3>
            <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0.1s;">Amplify your brand's reach and credibility through strategic influencer
               partnerships. </p>
            <ul class="serviceul">
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Influencer Identification: </b>
                  Identify and collaborate with influencers who align with your brand values and target audience. </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Campaign Management: </b> Plan and
                  execute influencer marketing campaigns that drive tangible results. </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Performance Tracking: </b> Measure
                  the impact of your influencer partnerships and optimize future campaigns based on insights gained.
               </li>

            </ul>
         </div>
      </div>
   </div>



   <div class="container pt-5 pb-5 mb-5">
      <h2><span class="unservice-subheading">Website Design & </span></br> <span
            class="unservice-headings">development</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Your Digital Showcase </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.1s;">Create an immersive and user-centric online experience that reflects your
               brand identity. </p>
            <ul class="serviceul">
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Responsive Design:</b> Ensure
                  seamless browsing experiences across all devices with responsive website design. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> E-commerce Development: </b>
                  Establish a robust online storefront optimized for conversions and user experience. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> User Experience (UX) Design:</b>
                  Enhance user satisfaction and engagement through intuitive website navigation and design.</li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> CMS Integration:</b> Empower your
                  team with easy-to-use content management systems for seamless website updates.</li>

            </ul>



         </div>
         <div class="col-md-6 markingdiv">
            <img src="../images/designdevelopemnt.webp" alt="" class="card-img">

         </div>
      </div>
   </div>




</section>



<section class="backgroundsectionservice pb-5">
   <div class="container">
      <h2><span class="unservice-subheading">Analytics and </span></br> <span class="unservice-headings"
            style="color: var(--SB_Light_Green, #D3E9E2);">reporting</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <img src="../images/anaylysticandreposting.webp" alt="" class="card-img">

         </div>

         <div class="col-md-6 markingdiv">
            <div class="marktingdiv">
               <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0s;color: var(--SB_Light_Green, #D3E9E2);">Data-Driven Decisions </h3>
               <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
                  style="animation-delay: 0.1s;color: var(--SB_Light_Green, #D3E9E2);">Harness the power of data to
                  optimize your digital marketing efforts and drive growth. </p>
               <ul class="serviceul" style="color: var(--SB_Light_Green, #D3E9E2);">
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Data Analysis:</b> Gain
                     actionable insights into audience behavior, campaign performance, and market trends. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Performance Tracking:</b> Monitor
                     key performance indicators to gauge the effectiveness of your marketing initiatives. </li>
                  <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                        src="../assets/images/serviceicons.webp" class="img-fluid"><b> Custom Reporting:</b>
                     Comprehensive reports tailored to your business goals and objectives for informed decision-making.
                  </li>

               </ul>
            </div>
         </div>
      </div>
   </div>
</section>



<section class="bg-light dotbackgrounsectiontwo">


   <div class="container pt-5">
      <h2><span class="unservice-subheading">Conversion Rate </span></br> <span class="unservice-headings">optimization
            <sub>(CRO) </sub></span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0s;">Optimize, Iterate, Convert </h3>
            <p class="unservice-texts slide-in-from-left" data-animate="slide-in-from-left"
               style="animation-delay: 0.1s;"> Maximize the effectiveness of your digital assets and campaigns through
               continuous optimization.
            </p>
            <ul class="serviceul">
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> A/B Testing: </b> Experiment with
                  different elements to identify high- performing variations and enhance conversion rates.</li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Landing Page Optimization:</b>
                  Create landing pages that are tailored to your audience's needs and drive conversions. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Checkout Process Optimization: </b>
                  Streamline the checkout process to minimize friction and maximize conversions. </li>
               <li class="slide-in-from-left" data-animate="slide-in-from-left" style="animation-delay: 0.5s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Form Optimization:</b> Optimize
                  forms for simplicity and clarity to encourage completion and lead capture. </li>

            </ul>


         </div>
         <div class="col-md-6 markingdiv">
            <img src="../images/conversionrate.webp" alt="" class="card-img">

         </div>
      </div>
   </div>


   <div class="container pt-5 pb-5 mb-5">
      <h2><span class="unservice-subheading">Mobile </span></br> <span class="unservice-headings">Marketing</span></h2>

      <div class="row pt-5 gx-5">
         <div class="col-md-6 markingdiv">

            <img src="../images/mobilemarketingsss.webp" alt="" class="card-img">



         </div>
         <div class="col-md-6 markingdiv">
            <h3 class="unservice-sectheading slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0s;">Tap into Mobile Potential </h3>
            <p class="unservice-texts slide-in-from-right" data-animate="slide-in-from-right"
               style="animation-delay: 0.1s;">Engage with your audience on their preferred devices through targeted mobile
               marketing strategies.
            </p>
            <ul class="serviceul">
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.2s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"><b> Mobile App Development: </b> Create
                  intuitive and feature-rich
                  mobile applications to enhance user engagement and loyalty. </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.3s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"><b> SMS Marketing:</b> Reach customers
                  directly through personalized and timely text message campaigns.
               </li>
               <li class="slide-in-from-right" data-animate="slide-in-from-right" style="animation-delay: 0.4s;"><img
                     src="../assets/images/serviceicons.webp" class="img-fluid"><b> Mobile Advertising: </b> Target
                  mobile users with precision through mobile-specific ad formats and placements.</li>

            </ul>
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
          delay: 2000,
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