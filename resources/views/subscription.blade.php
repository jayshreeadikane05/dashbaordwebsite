@extends('app.layouts')
@section('title', 'subscription')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!--Font Awesome Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<!--jquery alert-->
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
@endpush

@section('content')


<section class="py-5 bg-light unservicebannersecion text-white">
    <div class="">
        <div class="mt-4">
            <div class="unservice-heading">
                <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">s</span><span
                        style="animation-delay: 0.1s;">i</span><span style="animation-delay: 0.2s;">m</span><span
                        style="animation-delay: 0.3s;">p</span><span style="animation-delay: 0.4s;">l</span><span
                        style="animation-delay: 0.5s;">e</span><span style="animation-delay: 0.7s;">&nbsp;</span><span
                        style="animation-delay: 0.8s;">p</span><span style="animation-delay: 0.9s;">r</span><span
                        style="animation-delay: 1s;">i</span><span style="animation-delay: 1.1s;">c</span><span
                        style="animation-delay: 1.2s;">i</span><span style="animation-delay: 1.3s;">c</span><span
                        style="animation-delay: 1.4s;">n</span><span style="animation-delay: 1.4s;">g</span><span
                        style="animation-delay: 1.5s;">&nbsp;</span><span style="animation-delay: 1.6s;">f</span><span
                        style="animation-delay: 1.7s;">o</span><span style="animation-delay: 1.8s;">r</span><br/><span
                        style="animation-delay: 1.5s;">&nbsp;</span><span
                        style="animation-delay: 1.9s;">a</span><span style="animation-delay: 2.0s;">l</span><span
                        style="animation-delay: 2.1s;">l</span><span style="animation-delay: 2.2s;">&nbsp;</span><span
                        style="animation-delay: 2.3s;">y</span><span style="animation-delay: 2.4s;">o</span><span
                        style="animation-delay: 2.5s;">u</span><span style="animation-delay: 2.6s;">r</span><span
                        style="animation-delay: 2.7s;">&nbsp;</span><span style="animation-delay: 2.8s;">n</span><span
                        style="animation-delay: 3.0s;">e</span><span style="animation-delay: 3.1s;">e</span><span
                        style="animation-delay: 3.2s;">d</span><span style="animation-delay: 3.3s;">s</span></p>
            </div>

        </div>
</section>
<section class="pt-5 pb-3">
   <div class="container">
      <div class="row pt-3 sectiontwocontainer">
         <div class="col-md-6">
            <h2><span
                  class="unservice-subheading">Our </span></br> <span class="unservice-headings">OVERVIEW</span></h2>
         </div>
         <div class="col-md-6">
            <div class="unservicesdiv">
               <p class="unservicestext">At Vgen Media, we offer tailored subscription packages designed to elevate your brand's digital presence. Whether you're just starting out or looking to enhance your existing strategy, our packages are crafted to meet your unique needs.</p>
            </div>
         </div>
      </div>
   </div>
  
</section>
<section class="sectionsubscribe pb-5">
   <div class="container">
      <div class="row pt-3 sectiontwocontainer">
         <div class="col-md-12">
            <h2 class="text-center"><span class="unservice-headings">Features</span></h2>
            <p class="unservicestext text-center">Choose from Basic, Standard, or Premium plans to perfectly align with your business goals and market strategy.</p>
         </div>
        
      </div>
   </div>
    <div class="container">
    <div class="row pt-3 sectiontwocontainer">
   <div class="col-md-12">  
   <div class="table-responsive">                          
                            <table class="pricing-table table">
                                <tbody>
                                    <tr class="pricing-table-list">
                                    <td width="40%" style="padding: 45px;" class="pricing-table-text">
                                     
                                    </td>
                                    <td width="20%">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                                <p>Basic</p>
                                              
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td width="20%" class="standard-plan">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                                <p>Standard</p>
                                             
                                            </div>                                            
                                                                                    
                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                                <p>Premium</p>
                                            </div>                               
                                        </div>
                                    </td>
                                </tr>

                                <tr class="pricing-table-list">
                                    <td class="td-main-heading">Social Media Post</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Description</td>
                                    <td>Creation and scheduling of posts for LinkedIn, Facebook, and Instagram</td>
                                    <td class="standard-plan">Creation and scheduling of posts for LinkedIn, Facebook, and Instagram </td>
                                    <td>Creation and scheduling of posts for LinkedIn, Facebook, and Instagram </td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Basic Post Designs</td>
                                    <td class="standard-plan">Customized post Designs</td>
                                    <td>Premium Post Designs</td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>3 Posts/ Week</td>
                                    <td class="standard-plan">4 Posts/ Week</td>
                                    <td>6 Posts/ Week </td>
                                </tr>                                    
                                <tr class="pricing-table-list">
                                <td class="td-main-heading px-5">Content Marketing</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Description</td>
                                    <td>Basic content and distribution to encage target audience</td>
                                    <td class="standard-plan">Intermediate content and distribution with blog posts and videos</td>
                                    <td>Advanced content and distribution including interactive content</td>
                                </tr>                                    
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Standard formats</td>
                                    <td class="standard-plan">Intermediate formats</td>
                                    <td>Advanced formats</td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>1 blog, 2 videos/month</td>
                                    <td class="standard-plan">2 blogs, 2 videos/month</td>
                                    <td>3 blogs, 3 videos/month </td>
                                </tr>
                                <tr class="pricing-table-list">
                                <td class="td-main-heading px-5">Branding</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Description</td>
                                    <td>Basic Logo guidelines and color palette.</td>
                                    <td class="standard-plan">Comprehensive Logo, guidelines, visual assets.</td>
                                    <td>Premium Personalized design, brand strategy.</td>
                                </tr>    
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Basic branding package</td>
                                    <td class="standard-plan">Complete branding package.</td>
                                    <td>Tailored branding package</td>
                                </tr>       
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>Logo guidelines, color palette</td>
                                    <td class="standard-plan">Logo design, brand guidelines</td>
                                    <td>Customized branding solutions</td>
                                </tr>   
                                <tr class="pricing-table-list">
                                <td class="td-main-heading px-5">Website</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Description</td>
                                    <td>Simple website setup with essential pages and content</td>
                                    <td class="standard-plan">Customized website with Advanced features, design.</td>
                                    <td>Fully customized website with E-commerce, advanced SEO.</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Standard website setup, Maintenance</td>
                                    <td class="standard-plan">Advanced website design, Maintenance</td>
                                    <td>Bespoke website Custom design, maintenance.</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>Up to 3 pages</td>
                                    <td class="standard-plan">Up to 7 pages</td>
                                    <td>Unlimited pages</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                <td class="td-main-heading px-5">Keywords</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>Basic Keywords for visibility. </td>
                                    <td class="standard-plan">Intermediate Keywords for rankings. </td>
                                    <td>Advanced Keywords for maximum visibility.</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Basic keyword optimization </td>
                                    <td class="standard-plan">Intermediate keyword optimization</td>
                                    <td>Advanced keyword optimization</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>Up to 5 targeted keywords</td>
                                    <td class="standard-plan">Up to 7 targeted keywords </td>
                                    <td>Up to 15 targeted keywords</td>
                                </tr> 
                                <tr class="pricing-table-list">
                                <td class="td-main-heading px-5"> Animation</td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                    <td class="standard-plan"><span class="glyphicon glyphicon-ok"></span></td>
                                    <td><span class="glyphicon glyphicon-ok"></span></td>
                                </tr>
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Description</td>
                                    <td>2D Videos</td>
                                    <td class="standard-plan">2D or 3D Videos </td>
                                    <td>Advanced 2D and 3D animation  </td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Differentiation Point</td>
                                    <td>Standard animation styles </td>
                                    <td class="standard-plan">Enhanced animation styles</td>
                                    <td>Premium animation styles </td>
                                </tr> 
                                <tr class="pricing-table-list">
                                    <td class="text-start px-5">Quantity</td>
                                    <td>Up to 60 Secs per week  </td>
                                    <td class="standard-plan">Up to 120 Seconds per week </td>
                                    <td>Up to 240 Sec per week </td>
                                </tr> 
                                <td width="30%" class="pricing-table-text">
                                     
                                     </td>
                                <td width="20%">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                            <div class="text-container" style="    width: max-content;">
                                            <div class="subscribebutton-container">
                                                <a href="{{ route('contact') }}" class="subscribes-banner-link">
                                                    Get Started
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </div>

                                        </div>
                                              
                                            </div>
                                           
                                        </div>
                                    </td>
                                    <td width="20%" class="standard-plan">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                            <div class="text-container" style="    width: max-content;">
                                        <div class="subscribe-container"> <a href="{{ route('contact') }}" class="subscribe-banner-link">Get Started
                                                <i class="bi bi-chevron-right"></i> </a> 
                                            </div>
                                        </div>
                                            </div>                                            
                                                                                    
                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="pricing-table-item">
                                            <div class="pricing-table-item-head">
                                            <div class="text-container" style="    width: max-content;">
                                            <div class="subscribebutton-container">
                                                <a href="{{ route('contact') }}" class="subscribes-banner-link">
                                                    Get Started
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                            </div>                               
                                        </div>
                                    </td>
                                </tr>
                            </tbody></table>
</div>

                        </div>
</div>
</div>
</section>
<section>
<div class="container pt-5 pb-5">
         <h2><span class="unservice-subheading">The </span></br> <span class="unservice-headings">Custom Packages</span></h2>

         <div class="row pt-5 pb-5 gx-5">
            <div class="col-md-6 markingdiv">
            <img src="../images/custom-packages.webp" alt="" class="card-img">

              
            </div>
            <div class="col-md-6 markingdiv">
            <p class="greentext-subscribe">Vgen Media knows that there is no such thing as a "one size fits all" solution. Because every company has its own set of needs, we can provide customized packages. Our team of experts is prepared to create a customized solution that precisely matches your goals, whether you need a unique combination of services or advanced features that are not included in our normal packages.   </p>
              
              <p class="greentext-subscribe">Our goal at Vgen Media is to build lasting relationships with each of our clients. Our commitment to continuous assistance and optimization extends beyond the provision of customized solutions.  </p>
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