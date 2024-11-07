@extends('app.layouts')
@section('title', 'visual-content')
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

            <div class="unservice-heading">

                <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">B</span><span
                        style="animation-delay: 0.1s;">r</span><span style="animation-delay: 0.2s;">i</span><span
                        style="animation-delay: 0.3s;">n</span><span style="animation-delay: 0.4s;">g</span><span
                        style="animation-delay: 0.5s;">i</span><span style="animation-delay: 0.6s;">n</span><span
                        style="animation-delay: 0.7s;">g</span><span style="animation-delay: 0.8s;">&nbsp;</span><span
                        style="animation-delay: 0.9s;">y</span><span style="animation-delay: 1s;">o</span><span
                        style="animation-delay: 1.1s;">u</span><span style="animation-delay: 1.2s;">r</span><br /><span
                        style="animation-delay: 1.3s;">v</span><span style="animation-delay: 1.4s;">i</span><span
                        style="animation-delay: 1.4s;">s</span><span style="animation-delay: 1.5s;">i</span><span
                        style="animation-delay: 1.6s;">o</span><span style="animation-delay: 1.7s;">n</span></span><span
                        style="animation-delay: 1.8s;">&nbsp;</span><span style="animation-delay: 1.9s;">t</span><span
                        style="animation-delay: 2.0s;">o</span><span style="animation-delay: 2.1s;">&nbsp;</span><span
                        style="animation-delay: 2.2s;">l</span><span style="animation-delay: 2.2s;">i</span><span
                        style="animation-delay: 2.2s;">f</span><span style="animation-delay: 2.2s;">e</span></p>
            </div>
        </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
    <div class="container">
        <div class="tabview d-flex flex-column flex-md-row justify-content-between">

            <h2><a href="#" class="tab-link active-tab" id="exploreAllTab"><span>Explore All <sub
                            class="subscripti">22</sub></span></a></h2>

            <h2><a href="#" class="tab-link" id="creativeDesignTab"><span>Creative Design <sub
                            class="subscript2">14</sub></span></a></h2>

            <h2><a href="#" class="tab-link" id="contentDevelopmentTab"><span>Content Development <sub
                            class="subscript2">8</sub></span></a></h2>

        </div>
    </div>
</section>
<div class="parent-container">
    <div class="slide-section" id="creativeDesignSection">

        <section class="bg-light dotbackgrounsectiontwo">
            <div class="container">


                <div class="slide-section" id="creativeDesignSection">

                    <div class="row">
                        <div class="col-md-6">
                            <h2><span class="unservice-subheading">Our </span></br> <span
                                    class="unservice-headings">Approach  </span></h2>
                        </div>
                        <div class="col-md-6">
                            <div class="unservicesdiv">
                                <p class="unservicestext">At Vgen Media, we specialize in crafting visually stunning
                                    designs that
                                    captivate your audience and elevate your brand presence. From business cards to
                                    website designs,
                                    our creative solutions are tailored to meet your unique needs and leave a lasting
                                    impression.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-5 pb-5">
                    <div class="row">
                        <div class="col-md-9">

                            <div class="row">
                                <div class="mobilevisual">
                                    <div class="col-md-4 mb-3">
                                        <img src="../images/approach1.webp" alt=""
                                            class="img-fluid mobileservivissual serviceimags">
                                    </div>
                                    <div class="col-md-8 mb-3">
                                        <img src="../images/approach2.webp" alt=""
                                            class="img-fluid mobileservivissual serviceimags">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="mobilevisual">
                                    <div class="col-md-8 mb-3">
                                        <img src="../images/approach4.webp" alt=""
                                            class="img-fluid mobileservivissual serviceimags">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <img src="../images/approach5.webp" alt=""
                                            class="img-fluid mobileservivissual serviceimags">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <img src="../images/approach3.webp" alt=""
                                class="img-fluid mobileservivissualimg serviceimags">

                        </div>

                    </div>
                </div>
        </section>
        <section class="bg-light dotbackgrounsectiontwo">
            <div class="container">
                <div class="col-md-12">
                    <h2><span class="unservice-subheading">Real </span></br> <span
                            class="unservice-headings">Impact</span></h2>
                </div>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/prfessionalisum.webp" class="img-fluid" alt="Image 1">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Professionalism</h2>
                                            <p class="unserviceimpact-text">Impress your clients and customers with
                                                professionally designed materials that reflect the quality of your
                                                brand.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/consistency.svg" class="img-fluid" alt="Image 2">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Consistency</h2>
                                            <p class="unserviceimpact-text">Maintain a cohesive brand identity across
                                                all
                                                platforms with our custom-designed visuals.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/enagaged.webp" class="img-fluid" alt="Image 1">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Engagement</h2>
                                            <p class="unserviceimpact-text">Grab your audience's attention and keep them
                                                engaged
                                                with visually appealing content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/brands.webp" class="img-fluid" alt="Image 2">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Brand Recognition</h2>
                                            <p class="unserviceimpact-text">Stand out from the competition and build
                                                brand
                                                recognition with memorable designs that leave a lasting impact.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container pt-5">

                    <div class="row pt-5">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/business-cards.webp" alt="" class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">Business </span></br> <span
                                        class="unservice-headings">Cards</span></h2>
                                <p class="unservice-texts">Your business card is often the first impression you make on
                                    potential clients or partners. Our expertly designed business cards are sure to
                                    leave a
                                    lasting impression and make you stand out from the crowd. </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row mobilediv">
                        <div class="col-md-6 markingdiv">
                            <h2 class="rightunservicetext"><span class="unservice-subheading">Business </span></br>
                                <span class="unservice-headings">Docs</span></h2>
                            <p class="unservice-texts-2">From letterheads to invoices, our business document designs
                                exude
                                professionalism and enhance your brand image in every interaction.</p>

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <img src="../images/businessdocs.webp" alt="" class="cardvisualcontent img-fluid">


                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/digital-ut-of-home.webp" alt=""
                                class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">Digital Out-of-Home </span></br> <span
                                        class="unservice-headings">Ads</span></h2>
                                <p class="unservice-texts">With our digital out-of-home ad designs, you can captivate
                                    audiences
                                    wherever they go, ensuring maximum exposure for your brand. </p>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="container">

                    <div class="row">
                        <div class="col-md-6 markingdiv">
                            <h2 class="rightunservicetext"><span class="unservice-subheading"> Email </span></br> <span
                                    class="unservice-headings">Design</span></h2>
                            <p class="unservice-texts-2">Our custom email designs are crafted to engage recipients and
                                drive
                                action, whether it's a newsletter, promotional offer, or transactional email.</p>

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <img src="../images/emaildesign.webp" alt="" class="cardvisualcontent img-fluid">


                            </div>
                        </div>
                    </div>
                </div>



                <div class="container">

                    <div class="row mobilediv">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/banneradsdesign.webp" alt="" class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">HTML5 Banner Ads </span></br> <span
                                        class="unservice-headings">Design</span></h2>
                                <p class="unservice-texts">Harness the power of HTML5 with dynamic banner ads that grab
                                    attention and drive clicks, ensuring maximum impact for your advertising campaigns.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">

                    <div class="row">
                        <div class="col-md-6 markingdiv">
                            <h2 class="rightunservicetext"><span class="unservice-subheading">Image </span></br> <span
                                    class="unservice-headings">Editing</span></h2>
                            <p class="unservice-texts-2">From basic retouching to complex photo manipulations, our image
                                editing services help you tell your visual story with clarity and impact.</p>

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <img src="../images/imageediting.webp" alt="" class="cardvisualcontent img-fluid">


                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">

                    <div class="row mobilediv">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/logodesigining.webp" alt="" class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">Logo</span></br> <span
                                        class="unservice-headings">Design</span></h2>
                                <p class="unservice-texts">Your logo is the cornerstone of your brand's visual identity.
                                    Let us create a logo that encapsulates your brand's essence and leaves a lasting
                                    impression. </p>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="backgroundsectionservice-new">
            <div class="container">

                <div class="row pt-5">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice2-subheading-box">Marketing </span></br>
                            <span class="unservice2-headings-boxs">Collaterals</span></h2>
                        <p class="unservice2-texts-box-right">From brochures to flyers, our marketing collateral designs
                            help
                            you elevate your marketing efforts and leave a lasting impression on your audience.
                        </p>


                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/marketingcoll.webp" alt="" class="visualcontent img-fluid">

                        </div>
                    </div>
                </div>
            </div>

        </section>


        <section class="backgroundsectionservice-new">


            <div class="container">

                <div class="row mobilediv">
                    <div class="col-md-6 markingdiv">
                        <img src="../images/printadss.webp" alt="" class="visualcontentleft img-fluid">
                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <h2><span class="unservice2-subheading-box">Print </span></br> <span
                                    class="unservice2-headings-boxs">Ads</span></h2>
                            <p class="unservice2-texts-box">Our print ad designs combine traditional print excellence
                                with
                                modern digital sensibilities, ensuring maximum impact and reach for your advertising
                                campaigns.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="backgroundsectionservice-new">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice2-subheading-box">Social Media </span></br>
                            <span class="unservice2-headings-boxs">Graphics</span></h2>
                        <p class="unservice2-texts-box-right">Stand out in the social media feed with scroll-stopping
                            visuals
                            that grab attention and drive engagement, helping you grow your audience and increase brand
                            awareness.
                        </p>


                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/socialmediagraphics.webp" alt="" class="visualcontent img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="backgroundsectionservice-new">


            <div class="container">

                <div class="row mobilediv">
                    <div class="col-md-6 markingdiv">
                        <img src="../images/signswindow.webp" alt="" class="visualcontentleft img-fluid">
                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <h2><span class="unservice2-subheading-box">Signs & Window </span></br> <span
                                    class="unservice2-headings-boxs">Display</span></h2>
                            <p class="unservice2-texts-box">Make a statement with eye-catching signs and window displays
                                that
                                draw customers in and enhance your storefront's appeal.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="backgroundsectionservice-new">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice2-subheading-box">Video</span></br> <span
                                class="unservice2-headings-boxs">Editing</span></h2>
                        <p class="unservice2-texts-box-right">From promotional videos to animations, our video
                            production services help bring your brand to life and connect with your audience on a deeper
                            level.
                        </p>


                    </div>
                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/videoediting.webp" alt="" class="visualcontent img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="backgroundsectionservice-new">
            <div class="container">

                <div class="row mobilediv">
                    <div class="col-md-6 markingdiv">
                        <img src="../images/3danimation.webp" alt="" class="visualcontentleft img-fluid">
                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <h2><span class="unservice2-subheading-box">3D </span></br> <span
                                    class="unservice2-headings-boxs">Animation</span></h2>
                            <p class="unservice2-texts-box">Our 3D animation services transform complex ideas into
                                visually stunning, engaging animations, bringing your imagination to life and
                                captivating your audience with every frame.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">

                <div class="row">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice2-subheading-box">Website & Landing
                                Page</span></br>
                            <span class="unservice2-headings-boxs">Design</span>
                        </h2>
                        <p class="unservice2-texts-box-right">Your website is your digital storefront. Let us design a
                            website and landing pages that not only look great but also drive conversions and meet your
                            business goals.
                        </p>


                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/webdesigning.webp" alt="" class="visualcontent img-fluid">

                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>


    <div class="slide-section" id="contentDevelopmentSection">
        <section class="bg-light dotbackgrounsectiontwo">
            <div class="container">
                <div class="row">

                </div>
                <div class="row sectiontwo">
                    <div class="col-md-6">
                        <h2><span class="unservice-subheading">Content </span></br> <span
                                class="unservice-headings">Development </span></h2>
                    </div>
                    <div class="col-md-6">
                        <div class="unservicesdiv">
                            <p class="unservicestext">Compelling content is the cornerstone of any successful marketing
                                strategy. At Vgen Media, we specialize in crafting engaging content that resonates with
                                your
                                audience and drives results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-section" id="contentDevelopmentSection">
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="mobilevisual">
                                    <div class="col-md-7 mb-3">
                                        <img src="../images/visualservice1.webp" alt="" class="img-fluid serviceimags">
                                    </div>
                                    <div class="col-md-5 mb-3">
                                        <img src="../images/visualservice2.webp" alt="" class="img-fluid serviceimags">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="mobilevisual">
                                    <div class="col-md-3 mb-4">
                                        <img src="../images/visualservice3.webp" alt="" class="img-fluid serviceimags">
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <img src="../images/visualcontentupdated.webp" alt=""
                                            class="img-fluid serviceimags">

                                    </div>

                                    <div class="col-md-3 mb-4">
                                        <img src="../images/visualservice5.webp" alt=""
                                            class="mobileservivissualimg img-fluid serviceimags">
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>


        </section>
        <section class="bg-light dotbackgrounsectiontwo">
            <div class="container">
                <div class="col-md-12">
                    <h2> <span class="unservice-headings">Benefits</span></h2>
                </div>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/servicelogo1.webp" class="img-fluid" alt="Image 1">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Engagement</h2>
                                            <p class="unserviceimpact-text">Keep your audience engaged and coming back
                                                for more
                                                with captivating content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/servicelogo2.webp" class="img-fluid" alt="Image 2">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Authority</h2>
                                            <p class="unserviceimpact-text">Establish your brand as an industry
                                                authority with
                                                informative and insightful content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pt-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/servicelogo3.webp" class="img-fluid" alt="Image 1">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">Conversion</h2>
                                            <p class="unserviceimpact-text">Drive action and conversion with persuasive
                                                and
                                                compelling copywriting.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="unservicebox1">
                                <div class="unboxservice2 d-flex flex-column flex-md-row">
                                    <div class="unimage-content text-center mb-3 mb-md-0">
                                        <img src="../images/servicelogo4.webp" class="img-fluid" alt="Image 2">
                                    </div>
                                    <div
                                        class="flex-grow-1 ms-md-3 d-flex align-items-center text-center text-md-start">
                                        <div>
                                            <h2 class="unserviceimpact-heading">SEO</h2>
                                            <p class="unserviceimpact-text">Improve your search engine rankings and
                                                increase
                                                organic traffic with optimized content.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container pt-5">

                    <div class="row pt-5">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/Ad-Copies.webp" alt="" class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">Ad </span></br> <span
                                        class="unservice-headings">Copies</span></h2>
                                <p class="unservice-texts">Craft persuasive ad copies that grab attention and drive
                                    action,
                                    whether it's for online advertising campaigns or print media. </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row mobilediv   ">
                        <div class="col-md-6 markingdiv">
                            <h2 class="rightunservicetext"><span class="unservice-subheading">Website & Landing
                                </span></br>
                                <span class="unservice-headings">Pages Copies</span>
                            </h2>
                            <p class="unservice-texts-2">Create engaging website and landing page copies that not only
                                inform
                                but also compel visitors to take action, whether it's making a purchase or filling out a
                                form.
                            </p>

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <img src="../images/webistelandingpage.webp" alt="" class="cardvisualcontent img-fluid">


                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <div class="row">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/Social-Media-Copies.webp" alt=""
                                class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2><span class="unservice-subheading">Social Media </span></br> <span
                                        class="unservice-headings">Copies</span></h2>
                                <p class="unservice-texts">Develop engaging social media copies that resonate with your
                                    audience
                                    and spark conversation, driving engagement and brand loyalty.</p>

                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="backgroundsectionservice-new">
            <div class="container">

                <div class="row pt-5">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice2-subheading-box">Email </span></br> <span
                                class="unservice2-headings-boxs">Copies</span></h2>
                        <p class="unservice2-texts-box-right">Create engaging website and landing page copies that not
                            only
                            inform but also compel visitors to take action, whether it's making a purchase or filling
                            out a
                            form.
                        </p>


                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/Email-Copies.webp" alt="" class="visualcontent img-fluid">

                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section class="backgroundsectionservice-new">


            <div class="container">

                <div class="row mobilediv">
                    <div class="col-md-6 markingdiv">
                        <img src="../images/Blogs-_1_.webp" alt="" class="visualcontentleft img-fluid">
                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <h2></br> <span class="unservice2-headings-boxs">Blogs</span></h2>
                            <p class="unservice2-texts-box">Produce informative and engaging blog posts that showcase
                                your
                                expertise, attract organic traffic, and establish your brand as an industry thought
                                leader.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="bg-light dotbackgrounsectiontwo">
            <div class="container">



            <div class="container  pt-5">

                <div class="row">
                    <div class="col-md-6 markingdiv">
                        <h2 class="rightunservicetext"><span class="unservice-subheading"> </span></br> <span
                                class="unservice-headings">Articles</span></h2>
                        <p class="unservice-texts-2">create well-researched and thought-provoking articles that provide value to your audience and reinforce your brand's authority in your industry.</p>

                    </div>

                    <div class="col-md-6 markingdiv">
                        <div class="marktingdiv">
                            <img src="../images/Articles.webp" alt="" class="cardvisualcontent img-fluid">


                        </div>
                    </div>
                </div>
            </div>


                <div class="container">

                    <div class="row">
                        <div class="col-md-6 markingdiv">
                            <img src="../images/Press-Release.webp" alt="" class="cardvisualcontentright img-fluid">

                        </div>

                        <div class="col-md-6 markingdiv">
                            <div class="marktingdiv">
                                <h2></br> <span class="unservice-subheading">Press </span></br> <span
                                class="unservice-headings">Release</span></h2>
                                <p class="unservice-texts">Craft attention-grabbing press releases that garner media attention and generate buzz around your brand's latest news and announcements. </p>

                            </div>
                        </div>
                    </div>
                </div>


           

                <div class="container  pt-5">

                        <div class="row">
                            <div class="col-md-6 markingdiv">
                                <h2 class="rightunservicetext"><span class="unservice-subheading"> SEO  </span></br> <span
                                        class="unservice-headings">Copies</span></h2>
                                <p class="unservice-texts-2">Optimize your website and content for search engines with SEO-friendly copies that improve your rankings and drive organic traffic to your site.</p>

                            </div>

                            <div class="col-md-6 markingdiv">
                                <div class="marktingdiv">
                                    <img src="../images/SEO-Copies.webp" alt="" class="cardvisualcontent img-fluid">


                                </div>
                            </div>
                        </div>
                        </div>
        </section>
    </div>
</div>


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

@endsection
@push('pageScript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js"></script>
<script src="{{ asset('assets/js/newsletter.js') }}"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const exploreAllTab = document.getElementById('exploreAllTab');
    const creativeDesignTab = document.getElementById('creativeDesignTab');
    const contentDevelopmentTab = document.getElementById('contentDevelopmentTab');

    const creativeDesignSection = document.getElementById('creativeDesignSection');
    const contentDevelopmentSection = document.getElementById('contentDevelopmentSection');

    // Hide all sections first and then show the selected one
    function showSection(sectionToShow) {
        creativeDesignSection.classList.add('hidden');
        contentDevelopmentSection.classList.add('hidden');
        creativeDesignSection.classList.remove('show');
        contentDevelopmentSection.classList.remove('show');

        // Use a timeout to ensure a proper transition
        setTimeout(() => {
            sectionToShow.classList.remove('hidden');
            sectionToShow.classList.add('show');
        }, 200);
    }

    // Handle active tab styling
    function setActiveTab(activeTab) {
        exploreAllTab.classList.remove('active-tab');
        creativeDesignTab.classList.remove('active-tab');
        contentDevelopmentTab.classList.remove('active-tab');
        activeTab.classList.add('active-tab');
    }

    // Explore All tab event
    exploreAllTab.addEventListener('click', function(event) {
        event.preventDefault();
        creativeDesignSection.classList.remove('hidden');
        contentDevelopmentSection.classList.remove('hidden');
        creativeDesignSection.classList.add('show');
        contentDevelopmentSection.classList.add('show');
        setActiveTab(exploreAllTab);
    });

    // Creative Design tab event
    creativeDesignTab.addEventListener('click', function(event) {
        event.preventDefault();
        showSection(creativeDesignSection);
        setActiveTab(creativeDesignTab);
    });

    // Content Development tab event
    contentDevelopmentTab.addEventListener('click', function(event) {
        event.preventDefault();
        showSection(contentDevelopmentSection);
        setActiveTab(contentDevelopmentTab);
    });
});
</script>
@endpush