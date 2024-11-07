@extends('app.layouts')
@section('title', 'GDPR policy')

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


<section class="py-5 bg-light cookeisbannersecion text-white">
    <div class="">
        <div class="mt-4">
           <div class="cookies-heading">
            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">G</span><span style="animation-delay: 0.1s;">D</span><span style="animation-delay: 0.2s;">p</span><span style="animation-delay: 0.3s;">r</span><span style="animation-delay: 0.4s;">&nbsp;</span><span style="animation-delay: 0.5s;">p</span><span style="animation-delay: 0.6s;">o</span><span style="animation-delay: 0.7s;">l</span><span style="animation-delay: 0.8s;">i</span><span style="animation-delay: 0.9s;">c</span><span style="animation-delay: 1.0s;">y</span><span style="animation-delay: 1.1s;">&nbsp;</span><span style="animation-delay: 1.2s;">2</span><span style="animation-delay: 1.3s;">0</span><span style="animation-delay: 1.4s;">2</span><span style="animation-delay: 1.5s;">4</span></p>        
            </div>
        
    </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
    <div class="container">
        <div class="row pt-3 sectiontwocontainer">
            <div class="col-md-12">
                <div class="cookiesdiv">
                <h2 class="cookiesheading">1. Introduction</h2>
                <p class="cookiespargraph">Our Digital Marketing Suite encompasses services designed to enhance your brand visibility, engage your target audience, and boost conversions across various digital platforms. With expertise in social media marketing, search engine marketing, website design, and more, we deliver customized solutions to meet your specific needs.</p>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">2. Data Controller</h2>
                <p class="cookiespargraph">Vgen Media, located at ALMEHAIRI, OFF12-026, Ras Al Khor Industrial Third, Dubai, is the data controller responsible for your personal data. This means we determine the purposes and means of processing your personal data.</p>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">3. Personal Data We Collect</h2>
                <p class="cookiespargraph">We may collect and process the following personal data:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Identification Details:</b> Name, email address, phone number, company name, job title.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Usage Data:</b> Information about how you interact with our website, such as IP address, browser type, pages visited, and the date and time of your visit.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Cookies and Tracking Technologies:</b> We use cookies and similar tracking technologies to track the activity on our website and store certain information. For more details, see our Cookie Policy.</li>
                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">4. Legal Basis for Processing</h2>
                <p class="cookiespargraph">We process your personal data based on one or more of the following legal bases:</p>

                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Your Consent:</b> You have given clear consent for us to process your personal data for a specific purpose.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Contractual Necessity:</b> The processing is necessary for the performance of a contract to which you are a party.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Compliance with Legal Obligations:</b> The processing is necessary for compliance with a legal obligation to which we are subject.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b>Legitimate Interests:</b> The processing is necessary for our legitimate interests or the legitimate interests of a third party, provided these interests are not overridden by your rights and interests.</li>

                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">5. Your Rights Under GDPR</h2>
                <p class="cookiespargraph">Under GDPR, you have the following rights:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Access Your Personal Data:</b> You have the right to request access to the personal data we hold about you.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Rectify Inaccurate Data:</b> You have the right to request that we correct any inaccuracies in your personal data.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Erase Your Personal Data:</b> You have the right to request that we delete your personal data under certain conditions.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Restrict Processing:</b> You have the right to request that we restrict the processing of your personal data under certain conditions.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Data Portability:</b> You have the right to receive your personal data in a structured, commonly used, and machine-readable format and to transmit that data to another controller.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Object to Processing:</b> You have the right to object to the processing of your personal data under certain conditions.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"> <b> Withdraw Consent:</b> If we rely on your consent to process your personal data, you have the right to withdraw your consent at any time without affecting the lawfulness of processing based on consent before its withdrawal.</li>

                </ul>
                <p class="cookiespargraph">To exercise any of these rights, please contact us at <a href="mailto: info@vgenmedia.com" class="cookiespargraph" target="_blank">info@vgenmedia.com </a></p>

                </div>
                
                <div class="cookiesdiv">
                <h2 class="cookiesheading">6. Data Transfers</h2>
                <p class="cookiespargraph">We may transfer your personal data outside the European Economic Area (EEA) to ensure the performance of our services. When we transfer your data outside the EEA, we ensure that adequate safeguards are in place to protect your data, such as standard contractual clauses approved by the European Commission.</p>
                 
            </div>

            <div class="cookiesdiv">
                <h2 class="cookiesheading">7. Data Security</h2>
                <p class="cookiespargraph">We implement appropriate technical and organizational measures to protect your personal data from unauthorized access, disclosure, alteration, or destruction. These measures include encryption, access controls, and secure servers.</p>
              
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">8. Data Retention</h2>
                <p class="cookiespargraph">We retain your personal data for as long as necessary to fulfill the purposes for which it was collected, including legal and regulatory requirements. When your information is no longer needed, we will securely delete or anonymize it.</p>
              
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">9. Changes to This Policy</h2>
                <p class="cookiespargraph">We may update our GDPR Policy from time to time. Any changes will be posted on this page, and we will notify you by email or through a notice on our website. We encourage you to review this GDPR Policy periodically for any changes.</p>
              
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">10. Contact Us</h2>
                <p class="cookiespargraph">For any questions or concerns regarding this GDPR Policy, please contact us at:</p>
                <p class="cookiespargraph">Email:  <a href="mailto: info@vgenmedia.com" class="cookiespargraph" target="_blank">info@vgenmedia.com </a> </p>
                <p class="cookiespargraph"><b>Address: </b> ALMEHAIRI, OFF12-026, Ras Al Khor Industrial Third, Dubai. </p>

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

@endpush