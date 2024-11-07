@extends('app.layouts')
@section('title', 'About Us')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!--Font Awesome Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/aboutus_resonsive.css')}}">
<!--jquery alert-->
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">

<style>
    .active {
        border-color: red;
    }
    /* Initially fixed heading */
.comm-experience-head {
    position: fixed;
    top: 0;
    height: 5vh;
 
}
section{
    z-index: 1;
}

/* Class to make heading static when the section ends */
.comm-experience-head.static {
    position: relative; /* Reverts to normal flow after section ends */
    top: -262px;
}


</style>
@endpush

@section('content')


<section class="py-5 bg-light aboutussecion text-white">
    <div class="">
        <div class="mt-4">
            <div class="hero-image-sup">
                <p class="fade-in-letters"><span style="animation-delay: 0s;">S</span><span style="animation-delay: 0.1s;">i</span><span style="animation-delay: 0.2s;">m</span><span style="animation-delay: 0.3s;">p</span><span style="animation-delay: 0.4s;">l</span><span style="animation-delay: 0.5s;">e</span></p>
            </div>
            <div class="hero-img-heading">
                <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">I</span><span style="animation-delay: 0.1s;">D</span><span style="animation-delay: 0.2s;">E</span><span style="animation-delay: 0.3s;">A</span><span style="animation-delay: 0.4s;"> </span><span style="animation-delay: 0.5s;">&nbsp;</span><span style="animation-delay: 0.6s;"> </span><span style="animation-delay: 0.7s;">S</span><span style="animation-delay: 0.8s;">I</span><span style="animation-delay: 0.9s;">G</span><span style="animation-delay: 1s;">N</span><span style="animation-delay: 1.1s;">I</span><span style="animation-delay: 1.2s;">F</span><span style="animation-delay: 1.3s;">I</span><span style="animation-delay: 1.4s;">C</span><span style="animation-delay: 1.5s;">A</span><span style="animation-delay: 1.6s;">N</span><span style="animation-delay: 1.7s;">T</span><span style="animation-delay: 1.8s;"><br /> </span><span style="animation-delay: 1.9s;">&nbsp;</span><span style="animation-delay: 2s;white-space: pre-wrap;"></span><br /><span style="animation-delay: 2.1s;">I</span><span style="animation-delay: 2.2s;">M</span><span style="animation-delay: 2.3s;">P</span><span style="animation-delay: 2.4s;">A</span><span style="animation-delay: 2.5s;">C</span><span style="animation-delay: 2.6s;">T</span></p>
            </div>
            <div class="transition-opacity">
                <div class="semi-circle">
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_1.webp') }}" class="img-fluid" alt="Image 1">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_2.webp') }}" class="img-fluid" alt="Image 2">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_3.webp') }}" class="img-fluid" alt="Image 3">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_4.webp') }}" class="img-fluid" alt="Image 4">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_5.webp') }}" class="img-fluid" alt="Image 5">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_6.webp') }}" class="img-fluid" alt="Image 6">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_7.webp') }}" class="img-fluid" alt="Image 7">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_8.webp') }}" class="img-fluid" alt="Image 8">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_1.webp') }}" class="img-fluid" alt="Image 9">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_2.webp') }}" class="img-fluid" alt="Image 10">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_3.webp') }}" class="img-fluid" alt="Image 11">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_4.webp') }}" class="img-fluid" alt="Image 12">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_5.webp') }}" class="img-fluid" alt="Image 13">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_6.webp') }}" class="img-fluid" alt="Image 14">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_7.webp') }}" class="img-fluid" alt="Image 15">
                    </div>
                    <div class="image-container">
                        <img src="{{ asset('assets/images/about_us_hero_8.webp') }}" class="img-fluid" alt="Image 16">
                    </div>
                </div>
            </div>
        </div>
</section>

<section class="bg-light aboutussectiontwo">
    <div class="container">
        <div class="row pt-5 sectiontwocontainer">
            <div class="missionvalues col-md-6">
                <p class="green-heading">MISSION &<span><img src="{{ asset('assets/images/path10.webp') }}" alt="path10" class="missiionvalue-icon"></span> VISION</p>
            </div>
            <div class="missionvaluestextcontainer col-md-6">
                <div class="missionvaluestextdesc">
                    <p class="greentext">Our mission is to change the way digital marketing space works in the UAE through the solutions which are not just contemporary but have a foresight for the future along this we have a vision of becoming the premier agency known for creativity, reliability, and fostering long-lasting and trusted partnerships</p>
                </div>

            </div>
        </div>
        <div class="row whowearecontainer">
            <p class="goldentext">Who</p>
            <p class="green-heading">WE ARE</p>

            <div class="row aboutuswhoweare gx-5  mt-5">
                <div class="col-md-6 whoweareimage">
                    <img src="{{ asset('assets/images/about_us_who_we_are.webp') }}" alt="who we are" class="img-fluid">
                </div>
                <div class="col-md-6 whowearedesctext">
                    <div class="whowearedesc">
                        <p class="greentext"> In 2022, Vgen Media has been established by Anuj Pakhare, the CEO & Founder and Ameya Pawar, the COO & Co-Founder. While one had a great foresight for digital media space, the other had a firm grip on operations. This differentiated Vgen Media from others and made it a trendsetter in UAE’s digital marketing industry. </p>
                        <p class="greentext">We establish long-term partnerships founded on trust, respect and continuous pursuit of excellence through cooperative engagement and open dialogue. </p>

                        <div class="socialmediacontainer">
                            <p class="followustitle">Follow us</p>
                            <div class="socailmediaicons">
                                <ul>
                                <li><a href="https://www.instagram.com/vgenmedia/" target="_blank"><img src="/assets/logos/insta.webp" alt="instagram"></a></li>
                                    <li><a href="https://www.facebook.com/p/Vgen-Media-61551215171608/"  target="_blank"><img src="/assets/logos/Facebook.webp" alt="facebook"></a></li>
                                    <li><a href="https://x.com/vgen_media"><img src="/assets/logos/x.webp" alt="x"></a></li>
                                    <li><a href="https://www.linkedin.com/company/vgen-media"  target="_blank"><img src="/assets/logos/linkedind.webp" alt="linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light ourcorevalues">
    <p class="goldentext">Our</p>
    <p class="lightgreen-heading">CORE VALUE</p>
    <div>
        <hr class="goldenhorizontal">
    </div>

    <div class="ourcorevaluespointsone container">
        <div class="row">
            <div class="col-md-6 border-right-golden">
                <div class="corevalues left-corevalues">
                    <img src="{{ asset('assets/logos/Innovation.webp') }}" alt="Innovation">
                    <p class="corevaluetitle">Innovation</p>
                    <p class="corevaluesdesc">At Vgen Media, we embrace creativity and forward thinking to redefine industry standards and drive innovation that captivates audiences and delivers measurable results.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="corevalues right-corevalues">
                    <img src="{{ asset('assets/logos/Integrity.webp') }}" alt="Innovation">
                    <p class="corevaluetitle">Integrity</p>
                    <p class="corevaluesdesc">Operate with honesty, accountability, and integrity in all interactions, fostering trust with clients, partners, and team members through transparent communication and ethical business practices.</p>
                </div>
            </div>
        </div>

        <hr class="hr-divider">

        <div class="row">
            <div class="col-md-6 border-right-golden">
                <div class="corevalues left-corevalues">
                    <img src="{{ asset('assets/logos/Collaboration.webp') }}" alt="Innovation">
                    <p class="corevaluetitle">Collaboration</p>
                    <p class="corevaluesdesc">We foster a culture of collaboration at Vgen Media, where diverse perspectives and talents converge to inspire synergy, creativity, and collective achievement, empowering our team and clients to reach new heights together</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="corevalues right-corevalues">
                    <img src="{{ asset('assets/logos/Excellence.webp') }}" alt="Innovation">
                    <p class="corevaluetitle">Excellence</p>
                    <p class="corevaluesdesc">Striving for excellence is ingrained in our DNA at Vgen Media. We set high standards and continuously push boundaries to deliver exceptional results that exceed expectations and drive sustainable growth for our clients and our agency</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light comm-experience" id="mySection">
    <div class="container container-comm-experience">
        <div class="text-center comm-experience-head container">
            <p class="goldentext">Commendable</p>
            <p class="green-heading">Experience</p>
            <div class="comm-experience-desc">
                <p class="greentext">Explore how our diverse industry specializations and years of collective expertise make us the ideal digital marketing partner for businesses across the UAE and beyond.</p>
            </div>
        </div>
        <div class="cards-group scrollable-content mt-5">
            <div class="row">
            <div class="col-md-4">
            <div class="card green-card-box firstcard">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/diverse_industry_specialization.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Our expertise spans industries such as e-commerce, hospitality, healthcare, real estate, and more.             
                            </p>
                          
                        </div>
                            <div class="card-title ">
                                <p>Diverse Industry Specializations</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
          
            </div>
            <div class="col-md-5">
            <div class="card green-card-box fithcard">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/years_of_collective_exp.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Vgen Media boasts a team with extensive experience in digital marketing across various industries.    
                            </p>
                            <p class="card-text">
                            This diverse experience allows us to understand the unique challenges and opportunities each industry presents in the digital realm.
                            </p>
                        
                        </div>
                            <div class="card-title ">
                                <p>Years of Collective Experience</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>

        </div>
        <div class="cards-group scrollable-content mt-5">
            <div class="row">
            <div class="col-md-5">
            <div class="card green-card-box secondcard">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/trusted_partner_status_new.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Over the years, Vgen Media has earned a reputation as a trusted partner for businesses seeking digital solutions.         
                            </p>
                         
                        </div>
                            <div class="card-title ">
                                <p>Trusted Partner Status</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
          
            </div>
            <div class="col-md-4">
            <div class="card green-card-box sixthcard">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/regional_market_understanding.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            With a deep understanding of the UAE's regional markets, we are well-equipped to navigate its nuances and intricacies.          
                            </p>
                          
                        </div>
                            <div class="card-title ">
                                <p>Regional Market Understanding</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>

        </div>


        <div class="cards-group scrollable-content mt-5">
            <div class="row">
            <div class="col-md-4">
            <div class="card green-card-box seventh">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/ideal_choice_for_growth.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Vgen Media is the go-to choice for companies seeking to elevate their online presence and achieve sustainable growth.        
                            </p>
                         
                        </div>
                            <div class="card-title ">
                                <p>Ideal Choice for Growth</p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-md-3">
          
            </div>
            <div class="col-md-5">
            <div class="card green-card-box thirdcard">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/Comprehensive_solutions.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Whether it's strategic planning, content creation, SEO optimization, or social media management, Vgen Media offers a comprehensive suite of services to address all aspects of digital marketing.             
                            </p>
                            <p class="card-text">
                            This holistic approach ensures our clients receive end-to-end solutions that drive results and maximize their digital presence.         
                            </p>
                        </div>
                            <div class="card-title ">
                                <p>Comprehensive Solutions</p>
                            </div>
                        </div>
                    </div>
            </div>
            </div>

        </div>





        <!-- <div class="cards-group scrollable-content mt-5">
            <div class="row">
                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/years_of_collective_exp.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Our expertise spans industries such as e-commerce, hospitality, <span class="card-text hidden-text">  healthcare, real estate, and more </span>               
                            </p>
                            <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i> </a>
                            <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>      
                        </div>
                            <div class="card-title ">
                                <p>Diverse Industry Specializations</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/Comprehensive_solutions.webp') }}" alt="Comprehensive Solutions" class="img-fluid">
                            </div>
                            <div class="card-description">
                                <p class="card-text">
                                    Whether it's strategic planning, content creation, SEO optimization, <span class="card-text hidden-text">or social media management, Vgen Media offers a comprehensive suite of services to address all aspects of digital marketing. </span>
                                </p>
                                <p class="card-text hidden-text">
                                This holistic approach ensures our clients receive end-to-end solutions that drive results and maximize their digital presence.
                                </p>
                                <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i></a>
                                <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>   
                            </div>
                            <div class="card-title">
                                <p>Comprehensive Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/trusted_partner_status_new.webp') }}" alt="Diverse Industry Specializations" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                               Over the years, Vgen Media has earned a reputation as a trusted partner <span class="card-text hidden-text"> for businesses seeking digital solutions. </span></p>
                               <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i></a>
                               <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>   
                            </div>
                            <div class="card-title ">
                                <p>Trusted Partner Status</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/regional_market_understanding.webp') }}" alt="Years of collective experience" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                                With a deep understanding of the UAE's regional markets, <span class="card-text hidden-text">we are well-equipped to navigate its nuances and intricacies.</span></p>
                                <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i></a>
                                <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>   
                            </div>
                            <div class="card-title ">
                                <p>Regional Market Understanding</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/ideal_choice_for_growth.webp') }}" alt="Ideal Choice For Growth" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                              Vgen Media is the go-to choice for companies seeking to  <span class="card-text hidden-text"> elevate their online presence and achieve sustainable growth.</span></p>
                              <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i></a>
                              <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>   
                            </div>
                            <div class="card-title ">
                                <p>Ideal Choice for Growth</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-3 experienceBox">
                    <div class="card green-card-box">
                        <div class="card-body">
                            <div class="card-thumbnail">
                                <img src="{{ asset('assets/images/diverse_industry_specialization.webp') }}" alt="Diverse Industry Specializations" class="img-fluid">
                            </div>
                            <div class="card-description">
                            <p class="card-text">
                            Vgen Media boasts a team with extensive experience in digital marketing <span class="card-text hidden-text"> across various industries. </span></p>
                            <p class="card-text hidden-text">
                            This diverse experience allows us to understand the unique challenges and opportunities each industry presents in the digital realm.
                            </p>  
                            <a href="javascript:void(0);" class="read-more">Read More <i class="bi bi-chevron-double-right"></i></a>
                            <a href="javascript:void(0);" class="read-less" style="display:none;">Read Less <i class="bi bi-chevron-double-right"></i></a>  
                        </div>
                            <div class="card-title ">
                                <p>Years of Collective Experience</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row rowcards">
                
            </div>
        </div> -->
    </div>
</section>



<section class="bg-light getInTouch">
    <div class="text-center">
        <p class="getInTouchTitle"><span class="goldentext">Get</span><span class="green-heading"> IN Touch</span></p>
        <p class="getInTouchSubTitle">Contact us and start a project!</p>
    </div>
    <div class="container">
        <div class="card contactus-form mt-5">
            <div class="card-body row">
                <div class="col-md-6 contactushalfdiv form-container">
                    <div class="card-title">
                        <h2>Ready to unlock your digital potential</h2>
                        <p>Shine On your Creative Side! Connect with us now and let’s discuss the creative </p>
                    </div>
                    <form id="form-getintouch" action="{{ route('getintouchentry') }}" method="post">
                        @csrf
                        <div class="row form-input-group">
                            <div class="col-md-6  form-group">
                                <input type="text" class="form-input-text clearval" placeholder="First Name" name="fname" required>
                                <div class="invalid-feedback">Please enter a valid first name.</div>

                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-input-text clearval" placeholder="Last Name" name="lname" required>
                                <div class="invalid-feedback">Please enter a valid last name.</div>

                            </div>
                        </div>
                        <div class="row form-input-group form-group">
                            <div class="col-12">
                                <input type="email" class="form-input-text clearval" placeholder="Email" name="email" required>
                                <div class="invalid-feedback">Please enter a valid email id.</div>

                            </div>
                        </div>
                        <div class="row form-input-group form-group">
                            <div class="col-12 select-wrap">
                                <select class="form-select-box clearval" name="services" id="services" name="services" required>
                                    <option value="" selected disabled hide>Choose Services</option>
                                    <option value="Digital Marketing Suite">Digital Marketing Suite</option>
                                    <option value="Advertising Operations Services">Advertising Operations Services</option>
                                    <option value="Enhanced Marketing Solutions">Enhanced Marketing Solutions</option>
                                    <option value="Visual Content Solutions">Visual Content Solutions</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-input-group form-group">
                            <div class="col-12">
                                <input type="text" class="form-input-text clearval" placeholder="Phone Number" name="phone" required>
                                <div class="invalid-feedback">Please enter a valid phone Number.</div>

                            </div>
                        </div>
                        <div class="row form-input-group form-group">
                            <div class="col-12">
                                <textarea class="form-textarea clearval" rows="5" cols="10" name="message" id="message" placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="row form-input-group form-group">
                        <div class="col-12">
                            <div class="g-recaptcha" data-sitekey="6LfD_CUqAAAAAFKm904jHzWNjLbjJI-sCZeFhSb9"></div>

                            </div>
                        </div>
                                        <div class="row form-input-group form-group">
                            <div class="col-12">
                                <div class="buton-container m-0 form-submit-button" id="btn-getintouch"> <button class="banner-link">SEND</button> </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 contactushalfdiv">
                    <div class="telephone-container">
                        <img src="{{ asset('assets/images/telephone_image.webp') }}" class="img-fluid" alt="">
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
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
function handleScroll() {
    const section = document.getElementById('mySection');
    const heading = document.querySelector('.comm-experience-head');
    
    const sectionTop = section.offsetTop;
    const sectionHeight = section.offsetHeight;
    const scrollPosition = window.scrollY + window.innerHeight;
    
    const headingHeight = heading.offsetHeight;

    // Check if we've scrolled past the top of the section but haven't reached its end
    if (window.scrollY >= sectionTop && scrollPosition <= sectionTop + sectionHeight + headingHeight) {
        heading.classList.remove('static');
        heading.classList.add('fixed');
    } else {
        heading.classList.remove('fixed');
        heading.classList.add('static');
    }
}
window.addEventListener('load', handleScroll);
// Run on both scroll and load events
window.addEventListener('scroll', handleScroll);



    $(document).ajaxSend(function() {
        $("#overlay").fadeIn(300);
    });

    $(document).ready(function() {
        
        var readMoreLinks = document.querySelectorAll('.read-more');
    var readLessLinks = document.querySelectorAll('.read-less');

    function collapseAll() {
        document.querySelectorAll('.card-description').forEach(function (cardDescription) {
            cardDescription.classList.remove('expanded');
            cardDescription.querySelector('.card-text').style.display = '-webkit-box';
            cardDescription.querySelector('.hidden-text').style.display = 'none';
            cardDescription.querySelector('.read-more').style.display = 'block';
            cardDescription.querySelector('.read-less').style.display = 'none';
        });
    }

    readMoreLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            collapseAll();
            var cardDescription = this.closest('.card-description');
            cardDescription.classList.add('expanded');
            cardDescription.querySelector('.card-text').style.display = 'block';
            cardDescription.querySelector('.hidden-text').style.display = 'inline';
            cardDescription.querySelector('.read-more').style.display = 'none';
            cardDescription.querySelector('.read-less').style.display = 'block';
        });
    });

    readLessLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            var cardDescription = this.closest('.card-description');
            cardDescription.classList.remove('expanded');
            cardDescription.querySelector('.card-text').style.display = '-webkit-box';
            cardDescription.querySelector('.hidden-text').style.display = 'none';
            cardDescription.querySelector('.read-more').style.display = 'block';
            cardDescription.querySelector('.read-less').style.display = 'none';
        });
    });





        $("#btn-getintouch").click(function(event) {
            event.preventDefault(); // Prevent form submission

            let isValid = true;
            $('.invalid-feedback').hide();
            $("#form-getintouch .clearval").each(function() {
                if ($(this).is('input') || $(this).is('textarea')) {
                    if ($(this).val().trim() === '' && $(this).prop('required')) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        $(this).next('.invalid-feedback').show();
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                } else if ($(this).is('select')) {
                    if ($(this).val() === '' && $(this).prop('required')) {
                        $(this).addClass('is-invalid');
                        isValid = false;
                        $(this).next('.invalid-feedback').show();
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                }
            });
            const emailInput = $('input[name="email"]');
            const emailPattern = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/i;
            if (!emailPattern.test(emailInput.val())) {
                emailInput.addClass('is-invalid');
                isValid = false;
                emailInput.next('.invalid-feedback').text('Please enter a valid email address.').show();


            } else {
                emailInput.removeClass('is-invalid');
            }

            const firstnameInput = $('input[name="fname"]');
            const firstnamePattern = /^[a-zA-Z\s]+$/;
            if (!firstnamePattern.test(firstnameInput.val())) {
                firstnameInput.addClass('is-invalid');
                isValid = false;
                firstnameInput.next('.invalid-feedback').text('Please enter a valid first name.').show();
            } else {
                firstnameInput.removeClass('is-invalid');
            }

            const lastnameInput = $('input[name="lname"]');
            const lnamenamePattern = /^[a-zA-Z\s]+$/;
            if (!lnamenamePattern.test(lastnameInput.val())) {
                lastnameInput.addClass('is-invalid');
                isValid = false;
                lastnameInput.next('.invalid-feedback').text('Please enter a valid last name.').show();


            } else {
                lastnameInput.removeClass('is-invalid');
            }

            const phonenameInput = $('input[name="phone"]');
            const phonenamePattern = /^[0-9]+$/;
            if (!phonenamePattern.test(phonenameInput.val())) {
                phonenameInput.addClass('is-invalid');
                isValid = false;
                phonenameInput.next('.invalid-feedback').text('Please enter a valid phone number.').show();

            } else {
                phonenameInput.removeClass('is-invalid');
            }
            if (isValid) {
            const recaptchaResponse = $("#g-recaptcha-response").val();
            if (recaptchaResponse === "" || grecaptcha.getResponse() === "") {
                $.alert({
                    title: 'Failed!',
                    content: 'Please complete the reCAPTCHA.',
                    type: 'red',
                });
                $("#g-recaptcha-response").addClass('is-invalid');
                isValid = false;
            } else {
                $('#g-recaptcha-response').removeClass('is-invalid');
            }
        }

            if (isValid) {
            var actionurl = $("#form-getintouch").attr('action');
            $.ajax({
                type: 'POST',
                url: actionurl,
                data: $("#form-getintouch").serialize(),
                success: function(response) {
                    if (response.status === '01') {
                        $('.clearval').val('');
                        $.alert({
                            title: 'Success!',
                            content: response.message,
                            type: 'green',
                        });
                    } else {
                        $.alert({
                            title: 'Failed!',
                            content: response.message,
                            type: 'red',
                        });
                    }
                },
                error: function(xhr, status, error) {
                    try {
                        var responseJson = JSON.parse(xhr.responseText);
                        $.alert({
                            title: 'Failed!',
                            content: responseJson.message,
                            type: 'red',
                        });
                    } catch (e) {
                        $.alert({
                            title: 'Failed!',
                            content: 'An unexpected error occurred.',
                            type: 'red',
                        });
                    }
                },
                complete: function() {
                    $("#overlay").fadeOut(300);
                }
            });
        }
        
        });
 

        $('#form-getintouch .clearval').on('focus', function() {
            $(this).removeClass('is-invalid');
        });
     


        // if ($('.comm-experience').offset().top > $('#footer-container').offset().top) {
        //     // hide the sticky
        // } else {
        //     // show sticky
        // }

        document.addEventListener('DOMContentLoaded', function() {

        });

        // const $window = $(window);
        // const commExperienceTop = $('.comm-experience').offset().top;
        // const section = document.querySelector('.scroll-section');
        // const windowHeight = window.innerHeight;

        // $window.scroll(function() {
        //     // Check if the top of comm-experience has been reached
        //     if ($window.scrollTop() >= commExperienceTop) {
        //         // document.body.style.overflow = 'hidden';
        //         console.log('Touched top');
        //     }

        //     // Check if the section has scrolled up by 75% from the bottom of the viewport
        //     const sectionRect = section.getBoundingClientRect();
        //     const sectionVisibleHeight = sectionRect.bottom - windowHeight;
        //     const threshold = windowHeight * 0.50; // 75% from the bottom

        //     if (sectionVisibleHeight <= threshold) {
        //         console.log('Section has scrolled up by 75% from the bottom of the viewport.');
        //     }
        // });


        //     var distance = $('.comm-experience').offset().top;
        //     $window = $(window);

        // //     var sectionTop = $section.offset().top;
        // var sectionHeight = distance.outerHeight();
        // var sectionBottom = sectionTop + sectionHeight;

        //     $window.scroll(function() {
        //         if ( $window.scrollTop()  >= distance ) {
        //             document.body.style.overflow = 'hidden';
        //         }
        //     });

        // let lastScrollTop = 0;

        // window.addEventListener('scroll', function() {
        //     let currentScrollTop = window.scrollY || document.documentElement.scrollTop;

        //     if (currentScrollTop > lastScrollTop) {
        //         console.log('Scrolling down');
        //     } else if (currentScrollTop < lastScrollTop) {
        //         console.log('Scrolling up');
        //     }

        //     lastScrollTop = currentScrollTop;
        // });

        // document.addEventListener('DOMContentLoaded', () => {
        //     const sections = document.querySelectorAll('section');

        //     const observerOptions = {
        //         root: null, // use the viewport as the root
        //         rootMargin: '0px',
        //         threshold: 0 // trigger when the top of the section touches the top of the viewport
        //     };

        //     const observerCallback = (entries, observer) => {
        //         entries.forEach(entry => {
        //             if (entry.isIntersecting) {
        //                 console.log(`${entry.target.id} is at the top of the viewport`);
        //                 entry.target.classList.add('active');
        //             } else {
        //                 entry.target.classList.remove('active');
        //             }
        //         });
        //     };

        //     const observer = new IntersectionObserver(observerCallback, observerOptions);

        //     sections.forEach(section => {
        //         observer.observe(section);
        //     });
        // });

    });
</script>

<script>
    // document.addEventListener('DOMContentLoaded', () => {
    //     const sections = document.querySelectorAll('.section');
    //     let activeSection = null;

    //     const observerOptions = {
    //         root: null, // use the viewport as the root
    //         rootMargin: '0px',
    //         threshold: 0 // trigger when the top of the section touches the top of the viewport
    //     };

    //     const observerCallback = (entries, observer) => {
    //         entries.forEach(entry => {
    //             if (entry.isIntersecting && entry.boundingClientRect.top === 0) {
    //                 if (activeSection && activeSection !== entry.target) {
    //                     activeSection.classList.remove('active');
    //                 }
    //                 activeSection = entry.target;
    //                 entry.target.classList.add('active');
    //                 console.log(`Section at the top of the viewport`);
    //             } else if (entry.target === activeSection) {
    //                 entry.target.classList.remove('active');
    //                 activeSection = null;
    //             }
    //         });
    //     };

    //     const observer = new IntersectionObserver(observerCallback, observerOptions);

    //     sections.forEach(section => {
    //         observer.observe(section);
    //     });


    // });
</script>
@endpush