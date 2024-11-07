@extends('app.layouts')
@section('title', 'privacy')

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
            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">p</span><span style="animation-delay: 0.1s;">r</span><span style="animation-delay: 0.2s;">i</span><span style="animation-delay: 0.3s;">v</span><span style="animation-delay: 0.4s;">a</span><span style="animation-delay: 0.5s;">c</span><span style="animation-delay: 0.6s;">y</span><span style="animation-delay: 0.7s;">&nbsp;</span><span style="animation-delay: 0.8s;">p</span><span style="animation-delay: 0.9s;">o</span><span style="animation-delay: 1s;">l</span><span style="animation-delay: 1.1s;">i</span><span style="animation-delay: 1.2s;">c</span><span style="animation-delay: 1.3s;">y</span><span style="animation-delay: 1.4s;">&nbsp;</span><span style="animation-delay: 1.4s;">2</span><span style="animation-delay: 1.5s;">0</span><span style="animation-delay: 1.6s;">2</span><span style="animation-delay: 1.7s;">4</span></p>        
            </div>
        
    </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
    <div class="container">
        <div class="row pt-3 sectiontwocontainer">
            <div class="col-md-12">
                <div class="cookiesdiv">
                <h2 class="cookiesheading">1. Introduction</h2>
                <p class="cookiespargraph">Vgen Media is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website or use our services. By using our website, you agree to the collection and use of information in accordance with this policy.</p>
                <p>
                </div>
                
                <div class="cookiesdiv">
                <h2 class="cookiesheading">2. Information We Collect</h2>
                <p class="cookiespargraph">We may collect and process the following information:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Personal Identification Information:</b>  When you fill out forms on our website, subscribe to our newsletter, or contact us, you provide your name, email address, phone number, and company name.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Usage Data:</b>  We collect information about how you interact with our website, such as your IP address, browser type, pages visited, and the date and time of your visit.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Cookies and Tracking Technologies:</b>  We use cookies and similar tracking technologies to monitor website activity and store certain information. For more details, see our Cookie Policy.</li>
                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">3. How We Use Your Information</h2>
                <p class="cookiespargraph">We use the information we collect in the following ways:</p>

                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Provide and Maintain Our Services: </b> We use your information to deliver the services you have requested, including processing transactions and providing customer support.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Improve and Personalize Your Experience:</b> We use your information to understand how you use our services and make improvements. This includes customizing the content and layout of our website based on your preferences.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Communicate with You:</b> We use your contact information to send you updates, newsletters, marketing materials, and other information that may be of interest to you. You can opt out of receiving these communications at any time.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Conduct Research and Analysis:</b> We use your contact information to send you updates, newsletters, marketing materials, and other information that may be of interest to you. You can opt out of receiving these communications at any time.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Conduct Research and Analysis:</b> We use usage data to analyze trends and track user behavior to improve our services and develop new features.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> To Ensure Security and Compliance:</b> We use your information to prevent fraudulent activity, monitor for security breaches, and comply with legal obligations.</li>

                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">4. Information Sharing and Disclosure</h2>
                <p class="cookiespargraph">We do not sell your personal information. We may share your information with:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Service Providers:</b> We may share your information with third-party service providers who perform services on our behalf, such as payment processing, data analysis, email delivery, and marketing assistance. These service providers are required to protect your information and use it only for the purposes we specify.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Legal Authorities:</b> We may disclose your information if required by law or in response to valid requests by public authorities (e.g., a court or government agency).</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Business Transfers: </b> In the event of a merger, acquisition, or sale of all or a portion of our assets, your information may be transferred to the new owner.</li>
                 
                </ul>
                </div>
                
                <div class="cookiesdiv">
                <h2 class="cookiesheading">5.GDPR</h2>
                <p class="cookiespargraph">The General Data Protection Regulation 2016/679 is a regulation in EU law on data protection and privacy in the European Union and the European Economic Area. Please read our GDPR policy <a href="{{ route('gdpr-policy') }}" class="cookiespargraph"> click Here</a></p>
                    
            </div>

            <div class="cookiesdiv">
                <h2 class="cookiesheading">6. Data Security</h2>
                <p class="cookiespargraph">We implement appropriate technical and organizational measures to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the internet or method of electronic storage is 100% secure, and we cannot guarantee absolute security.</p>
              
            </div>

            <div class="cookiesdiv">
                <h2 class="cookiesheading">7. Your Rights</h2>
                <p class="cookiespargraph">Under applicable data protection laws, you have the following rights:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Access Your Information:</b> You have the right to request access to the personal information we hold about you.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Correct Your Information:</b> You have the right to request that we correct any inaccuracies in your personal information.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Delete Your Information:</b> You have the right to request that we delete your personal information.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Restrict Processing: </b>You have the right to request that we restrict the processing of your personal information.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Object to Processing:</b> You have the right to object to the processing of your personal information for certain purposes.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Withdraw Consent:</b> If we rely on your consent to process your personal information, you have the right to withdraw your consent at any time.</li>

                </ul>
                <p class="cookiespargraph">To exercise any of these rights, please contact us at info@vgenmedia.com :</p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">8. Data Retention</h2>
                <p class="cookiespargraph">We retain your personal information only as long as necessary to fulfill the purposes for which it was collected, including legal or regulatory requirements. When your information is no longer needed, we will securely delete or anonymize it.</p>
                    
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">9. Changes to This Policy</h2>
                <p class="cookiespargraph">We may update our Privacy Policy from time to time. Any changes will be posted on this page, and we will notify you by email or through a notice on our website. We encourage you to review this Privacy Policy periodically for any changes.</p>
                    
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">10. Contact Us</h2>
                <p class="cookiespargraph">If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
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