@extends('app.layouts')
@section('title', 'Services')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!--Font Awesome Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/services-responsive.css')}}">
<link rel="stylesheet" href="{{ asset('css/animation.css')}}">

<!--jquery alert-->
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">

@endpush

@section('content')


<section class="py-5 bg-light serviceshero text-white">
    <div class="container services-hero-image-container">
        <div class="row">
            <div class="row">
                <div class="contactheading">
                    <div class="service-subheading">
                        <div class="fade-in-letters sup-heading"><span style="animation-delay: 0s;">C</span><span style="animation-delay: 0.1s;">r</span><span style="animation-delay: 0.2s;"></span><span style="animation-delay: 0.3s;">e</span><span style="animation-delay: 0.4s;">a</span><span style="animation-delay: 0.5s;">t</span><span style="animation-delay: 0.6s;">i</span><span style="animation-delay: 0.7s;">v</span><span style="animation-delay: 0.8s;">e</span><span style="animation-delay: 1.0s;">s</span> </div>
                        <div class="main-heading">
                             <p>
                                <span class="servicesbanner-heading fade-in-letters">
                                    <span style="animation-delay: 1.1s;">S</span><span style="animation-delay: 1.2s;">O</span><span style="animation-delay: 1.3s;">L</span><span style="animation-delay: 1.4s;">U</span><span style="animation-delay: 1.5s;">T</span><span style="animation-delay: 1.7s;">I</span><span style="animation-delay: 1.8s;">O</span><span style="animation-delay: 1.9s;">N</span><span style="animation-delay: 2.0s;">S</span><span style="animation-delay: 2.1s;">&nbsp;</span><span style="animation-delay: 2.2s;">F</span><span style="animation-delay: 2.3s;">O</span><span style="animation-delay: 2.4s;">R</span><br/> <span style="animation-delay: 2.5s;">T</span><span style="animation-delay: 2.6s;">A</span><span style="animation-delay: 2.7s;">N</span><span style="animation-delay: 2.8s;">G</span><span style="animation-delay: 2.9s;">I</span><span style="animation-delay: 3.0s;">B</span><span style="animation-delay: 3.1s;">L</span><span style="animation-delay: 3.2s;">E</span><span style="animation-delay: 2.1s;">&nbsp;</span><span style="animation-delay: 3.3s;">R</span><span style="animation-delay: 3.4s;">E</span><span style="animation-delay: 3.5s;">S</span><span style="animation-delay: 3.6s;">U</span><span style="animation-delay: 3.7s;">L</span><span style="animation-delay: 3.8s;">T</span><span style="animation-delay: 3.9s;">S</span>
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light servicessectiontwo">
    <div class="img-features-container">
        <div class="img-features">
            <img src="{{ asset('assets/images/main-feature-1.webp') }}" class="shake-item img-fluid" alt="main-feature-1">
        </div>
        <div class="img-features">
            <img src="{{ asset('assets/images/main-feature-2.webp') }}" class="shake-item img-fluid" alt="main-feature-2">
        </div>
    </div>

    <div class="row main-feature-container">
        <div class="text-new-feature col-xl-6">
            <div class="main-feature-sup ">
                <p class="goldentext">Main</p>
            </div>
            <div class="main-feature-heading">
                <p class="green-heading">Feature</p>
            </div>
        </div>
        <div class="desc-new-feature col-xl-6">
            <p class="greentext">Our Digital Marketing Suite encompasses services designed to enhance your brand visibility, engage your target audience, and boost conversions across various digital platforms. With expertise in social media marketing, search engine marketing, website design, and more, we deliver customized solutions to meet your specific needs.</p>
        </div>
    </div>

    <div class="img-features-container-2 margintop50px">
        <div class="img-features">
            <img src="{{ asset('assets/images/main-feature-3.webp') }}" class="shake-item img-fluid" alt="main-feature-3">
        </div>
        <div class="img-features">
            <img src="{{ asset('assets/images/main-feature-4.webp') }}" class="shake-item img-fluid" alt="main-feature-4">
        </div>
    </div>

    <div class="row text-get-benefits margintop50px">
        <div class="get-benefits-sup ">
            <p class="goldentext">Get</p>
        </div>
        <div class="get-benefits-heading">
            <p class="green-heading">Benefits</p>
        </div>
    </div>

    <div class="benefits-card-group margintop50px">
        <div class="benefits-card-col1 benefits-col">
            <div class="card benefits-card shake-item">
                <div class="card-body">
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/logos/Benifits1.svg') }}" alt="benefits1">
                    </div>
                    <div class="card-caption">
                        Increased Brand Awareness
                    </div>
                    <div class="card-description">
                        Expand your reach and establish a strong presence on social media platforms, search engines, and beyond.
                    </div>
                </div>
            </div>
            <div class="card benefits-card marginTop30 shake-item">
                <div class="card-body">
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/logos/Benifits2.svg') }}" alt="benefits1">
                    </div>
                    <div class="card-caption">
                        Measurable Results
                    </div>
                    <div class="card-description">
                        Track the performance of your campaigns in real time and make data-driven decisions for continuous improvement.
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits-card-col2 benefits-col">
            <div class="card benefits-card shake-item">
                <div class="card-body">
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/logos/Benifits3.svg') }}" alt="benefits1">
                    </div>
                    <div class="card-caption">
                        Targeted Advertising
                    </div>
                    <div class="card-description">
                        Reach your ideal audience with precision targeting and tailored messaging.
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits-card-col3 benefits-col">
            <div class="card benefits-card shake-item">
                <div class="card-body">
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/logos/Benifits4.svg') }}" alt="benefits1">
                    </div>
                    <div class="card-caption">
                        Enhanced Engagement
                    </div>
                    <div class="card-description">
                        Captivate your audience with compelling visual content and engaging copywriting.
                    </div>
                </div>
            </div>
            <div class="card benefits-card marginTop30 shake-item">
                <div class="card-body">
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/logos/Benifits5.svg') }}" alt="benefits1">
                    </div>
                    <div class="card-caption">
                        Customized Solutions
                    </div>
                    <div class="card-description">
                        Receive personalized strategies and solutions crafted to align with your unique business goals and objectives.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="processsection marginTop100">
        <div class="processheading">
            <div class="textprocesshead">
                <p>process</p>
            </div>
            <div class="descprocesshead">
                <p>We start with a strategy, roll it out across all channels, monitor performance, and provide transparent reports to ensure optimum results.</p>
            </div>
        </div>
    </div>
</section>


<div class="bg-light servicescardssection">
    <div class="row">
    <div class="col-xl-3 col-md-6 text-sm-center mt-5 position-relative">
    <div class="number-box">1</div>

    <div class="card process-card">
                <div class="card-body">
                    <div class="card-title">
                        Consultation & Strategy
                    </div>
                    <div class="card-description">
                        We begin by understanding your business objectives and target audience to devise a comprehensive digital marketing strategy.
                    </div>
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/images/process-1.webp') }}" class="img-fluid" alt="benefits1">
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xl-3 col-md-6 mt-5 text-sm-center position-relative">
        <div class="number-box">2</div>

            <div class="card process-card">
                <div class="card-body">
                    <div class="card-title">
                        Implementation & Execution
                    </div>
                    <div class="card-description">
                        Our expert team implements the strategy across various channels, ensuring seamless integration and optimal performance.
                    </div>
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/images/process-2.webp') }}" class="img-fluid" alt="benefits1">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mt-5 text-sm-center position-relative">
        <div class="number-box">3</div>

            <div class="card process-card ">
                <div class="card-body">
                    <div class="card-title">
                        Monitoring & Optimization
                    </div>
                    <div class="card-description">
                        We continuously monitor your campaigns' performance and make data-driven optimizations to maximize results and ROI.
                    </div>
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/images/process-3.webp') }}" class="img-fluid" alt="benefits1">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mt-5 text-sm-center position-relative">
        <div class="number-box">4</div>
            <div class="card process-card">
                <div class="card-body">
                    <div class="card-title">
                        Reporting & Analysis
                    </div>
                    <div class="card-description">
                        Transparent reporting and in-depth analysis provide insights into +campaign performance and opportunities for further optimization.
                    </div>
                    <div class="card-thumbnail">
                        <img src="{{ asset('assets/images/process-4.webp') }}" class="img-fluid" alt="benefits1">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="bg-light servicessectiontwo">
    <div class="team-expertise paddingTop100">
        <div class="row text-get-benefits margintxop50px">
            <div class="get-benefits-sup ">
                <p class="goldentext">Team</p>
            </div>
            <div class="get-benefits-heading">
                <p class="green-heading">Expertise</p>
            </div>
        </div>
    </div>
    <div class="expertisecontent row">
        <div class="expertisethumbnail col-md-6">
            <img src="{{ asset('assets/images/Team-Expertise.webp') }}" class="expertisethumbnail img-fluid" alt="Expertise-thumbnail">
        </div>
        <div class="desc-expertisecontent col-md-6">
            <p>
                Our team consists of seasoned professionals with extensive experience in digital marketing, including social media strategists, search engine specialists, creative designers, content developers, and more. Together, we leverage our collective expertise to deliver impactful results for your business. 
            </p>
            <ul class="marginTop40">
                <li><img src="../assets/images/arrow.svg" class="img-fluid"> Our team members have a proven track record of successful campaigns, having worked with top-tier brands across various industries.</li>
                <li><img src="../assets/images/arrow.svg" class="img-fluid"> We continuously update our skills and knowledge through ongoing training and participation in industry conferences.</li>
                <li><img src="../assets/images/arrow.svg" class="img-fluid"> Each team member brings a unique perspective and set of skills, allowing us to approach challenges creatively and strategically. </li>
            </ul>
        </div>
    </div>
</section>

<section class="bg-light technologytools">
    <div class="row">
        <div class="col-md-6 desctechnologytools-container">
            <div class="row">
                <div class="technologytools-sup ">
                    <p class="goldentext">Technology</p>
                </div>
                <div class="technologytools-heading">
                    <p class="green-heading">& Tools</p>
                </div>
            </div>
            <div class="desctechnologytools">
                <p>We utilize cutting-edge technologies and industry-leading tools to streamline our processes, enhance efficiency, and deliver exceptional results. From analytics platforms to creative design software, we leverage the latest advancements to stay ahead of the curve and drive success for our clients.</p>
                <ul>
                    <li><img src="../assets/images/arrow.svg" class="img-fluid"> We employ advanced data analytics to monitor and optimize campaign performance in real time.</li>
                    <li><img src="../assets/images/arrow.svg" class="img-fluid"> Our design tools include the latest in AI-driven creative software, ensuring our visuals are both innovative and effective.</li>
                    <li><img src="../assets/images/arrow.svg" class="img-fluid"> We integrate cutting-edge CRM systems to enhance customer engagement and retention, providing a seamless experience for our clients.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-6 circle-animation-container">
            <div class="circle-container">
                <div class="circle circle1">
                    <img src="{{ asset('assets/logos/figma.webp') }}" alt="Figma">
                    <img src="{{ asset('assets/logos/primerpro.webp') }}" alt="primerpro">
                    <img src="{{ asset('assets/logos/wordpress.webp') }}" alt="Wordpress">
                    <img src="{{ asset('assets/logos/blender.webp') }}" alt="blender">
                </div>
                <div class="circle circle2">
                    <img src="{{ asset('assets/logos/google-analytics.webp') }}" alt="google-analytics">
                    <img src="{{ asset('assets/logos/adobe-illustrator.webp') }}" alt="adobe-illustrator">
                    <img src="{{ asset('assets/logos/Adobe_Photoshop.webp') }}" alt="Adobe_Photoshop">
                    <img src="{{ asset('assets/logos/semrush.webp') }}" alt="semrush">
                </div>
                <div class="circle circle3">
                    <img src="{{ asset('assets/logos/mailchimp.webp') }}" alt="mailchimp">
                    <img src="{{ asset('assets/logos/hubspot.webp') }}" alt="hubspot">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light customsolutions">
    <div class="team-expertise paddingTop100">
        <div class="row text-get-benefits">
            <div class="customsolutions-sup ">
                <p class="goldentext">Custom</p>
            </div>
            <div class="customsolutions-heading">
                <p class="green-heading">Solution</p>
            </div>
        </div>
    </div>

    <div class="row-customsolutions row margintop50px">
        <div class="customsolutionsthumb col-md-6">
            <img src="{{ asset('assets/images/Custom-Solution.webp') }}" class="customsolutionstthumbnail img-fluid" alt="Expertise-thumbnail">
        </div>
        <div class="customsolutions-content col-md-6">
            <p>
                We understand that every business is unique, which is why we offer customized solutions tailored to your specific requirements. Whether you need to increase brand visibility, generate leads, or drive sales, we work closely with you to develop a strategy that aligns with your goals and delivers measurable results.  
            </p>
            <p>
                Our goal at Vgen Media is to build lasting relationships with each of our clients. Our commitment to continuous assistance and optimization extends beyond the provision of customized solutions. 
            </p>
        </div>
    </div>

    <div class="paddingTop100">
        <div class="row text-get-benefits">
            <div class="customsolutions-sup ">
                <p class="goldentext">frequently asked</p>
            </div>
            <div class="customsolutions-heading">
                <p class="green-heading">questions</p>
            </div>
        </div>
        <div class="row">
            <div class="faq-group accordian" id="faqAccordian">
                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <div class="accordian-button-elements">
                                <p>How long does it take to see results from digital marketing campaigns?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    The timeline for seeing results can vary depending on various factors such as your industry, target audience, and campaign objectives. However, we strive to deliver tangible results within a reasonable timeframe and continuously optimize campaigns for ongoing success.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <div class="accordian-button-elements">
                                <p>How do I know which digital marketing services are right for my business?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Our team conducts a thorough consultation to understand your goals and recommend the most suitable services tailored to your needs.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            <div class="accordian-button-elements">
                                <p>Can I track the performance of my digital marketing campaigns?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Yes, we provide comprehensive reporting and analytics to track the performance of your campaigns in real-time. Our team also conducts regular reviews and analysis to provide insights into campaign effectiveness and areas for improvement.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            <div class="accordian-button-elements">
                                <p>Do I need to have an existing online presence to benefit from your services?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Not at all! Whether you're just starting out or looking to enhance your current presence, we have solutions tailored to meet you where you are on your digital journey.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            <div class="accordian-button-elements">
                                <p>Are your services suitable for businesses of all sizes?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Absolutely! We work with businesses of all sizes, from startups to established enterprises, crafting customized strategies to suit your unique needs and budget.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            <div class="accordian-button-elements">
                                <p>Can you help with both short-term and long-term marketing goals?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    Yes, we offer flexible solutions designed to address both immediate needs and long-term objectives, adapting our strategies to align with your evolving goals.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item accordion-faq-section slideleft">
                    <div class="faq-section rotate-section" type="button">
                        <div class="faq  accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            <div class="accordian-button-elements">
                                <p>What kind of results can I expect from your digital marketing services?</p> <img src="{{ asset('assets/logos/arrow-up.svg') }}" class="rotate-180" alt="Arrow up">
                            </div>
                        </div>
                        <div class="faq-icon">
                            <img src="" class="img-fluid" alt="frq icon">
                        </div>
                    </div>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordian">
                        <div class="accordion-body">
                            <ul>
                                <li>
                                    While results can vary depending on various factors, our goal is to deliver measurable outcomes such as increased brand awareness, engagement, and conversions.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light dotsection-service-calltoaction">
    <div class="container calltoaction">
        <div class="row">
            <div class="col-md-7">
                <div class="newsletter">
                    <h2 class="call-heading"> Let's Build Your Digital Success Story Together. Contact Vgen Media Today </h2>
                    <p class="call-subheading">Subscribe to our newsletter for exclusive insights, expert tips, and industry updates delivered straight to your inbox. Stay ahead of the curve with VgenVision!</p>
                    <form class="form-subscribe" action="#" id="subscribeForm">
                        <div class="input-group">
                            <input type="email" class="form-control input-lg  @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address">

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
    function checkVisibility() {
        const cards = document.querySelectorAll('.card');
        const windowHeight = window.innerHeight;

        cards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top <= windowHeight && rect.bottom >= 0) {
                if (!card.classList.contains('visible')) {
                    card.classList.add('visible');
                }
            }
        });
    }



    // Check visibility on page load
    document.addEventListener('DOMContentLoaded', checkVisibility);

    // Check visibility on scroll
    document.addEventListener('scroll', checkVisibility);


    // script.js
    // script.js
    document.addEventListener('DOMContentLoaded', () => {
        const elements = document.querySelectorAll('.faq-group .slideleft');

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1
        });

        elements.forEach(element => {
            observer.observe(element);
        });
    });
</script>
@endpush