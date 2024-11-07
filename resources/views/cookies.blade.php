@extends('app.layouts')
@section('title', 'cookies')

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
            <p class="fade-in-letters" id="animatedText"><span style="animation-delay: 0s;">c</span><span style="animation-delay: 0.1s;">o</span><span style="animation-delay: 0.2s;">o</span><span style="animation-delay: 0.3s;">k</span><span style="animation-delay: 0.4s;">i</span><span style="animation-delay: 0.5s;">e</span><span style="animation-delay: 0.6s;">s</span><span style="animation-delay: 0.7s;">&nbsp;</span><span style="animation-delay: 0.8s;">p</span><span style="animation-delay: 0.9s;">o</span><span style="animation-delay: 1s;">l</span><span style="animation-delay: 1.1s;">i</span><span style="animation-delay: 1.2s;">c</span><span style="animation-delay: 1.3s;">y</span><span style="animation-delay: 1.4s;">&nbsp;</span><span style="animation-delay: 1.4s;">2</span><span style="animation-delay: 1.5s;">0</span><span style="animation-delay: 1.6s;">2</span><span style="animation-delay: 1.7s;">4</span></p>        
            </div>
        
    </div>
</section>
<section class="bg-light dotbackgrounsectiontwo">
    <div class="container">
        <div class="row pt-3 sectiontwocontainer">
            <div class="col-md-12">
                <div class="cookiesdiv">
                <h2 class="cookiesheading">1. Introduction</h2>
                <p class="cookiespargraph">Welcome to Vgen Media. This Cookie Policy explains what cookies are, how we use them, and your choices regarding cookies. By using our website, you agree to the use of cookies in accordance with this policy.</p>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">2. What Are Cookies?</h2>
                <p class="cookiespargraph">Cookies are small text files stored on your device by your web browser when you visit a website. They help the website remember your preferences and actions (such as login details, language, and other display preferences) over a period of time, so you don’t have to keep re-entering them whenever you come back to the site or browse from one page to another.</p>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">3. How We Use Cookies</h2>
                <p class="cookiespargraph">Vgen Media uses cookies to:</p>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Enhance Your Browsing Experience:</b> Cookies help us remember your preferences, so you don’t have to re-enter them every time you visit.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Analyze Website Traffic and User Behavior:</b> We use cookies to understand how users interact with our site, which pages are visited most often, and which features are most popular.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Personalize Content and Advertisements: </b>Cookies enable us to tailor the content and ads you see based on your interests and browsing history.</li>
                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">4. Types of Cookies We Use</h2>
                <ul class="cookiesul">
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Essential Cookies:</b> These are necessary for the functioning of our website. Without these cookies, parts of our website would not work. For example, authentication cookies are essential for the website to know if you are logged in.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Performance Cookies: </b>These cookies collect information about how visitors use our website, such as which pages are most frequently visited. This helps us improve how our website works.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Functionality Cookies: </b> These cookies allow our website to remember choices you make (such as your username, language, or the region you are in) and provide enhanced, more personal features.</li>
                    <li><img src="../assets/images/serviceicons.webp" class="img-fluid"><b> Targeting Cookies:</b> These cookies are used to deliver advertisements that are relevant to you and your interests. They also help measure the effectiveness of advertising campaigns.</li>

                </ul>
                <p>
                </div>
                <div class="cookiesdiv">
                <h2 class="cookiesheading">5. Third-Party Cookies</h2>
                <p class="cookiespargraph">We may allow third-party service providers to place cookies on your device to provide their services. These third parties include analytics services and advertising networks that help us understand how users interact with our site and deliver relevant ads. For example, we use Google Analytics to help us analyze how our website is used. The information generated by the cookie about your use of our website will be transmitted to and stored by Google on servers in the United States.</p>
                <p>
                </div>
                
                <div class="cookiesdiv">
                <h2 class="cookiesheading">6. Your Choices</h2>
                <p class="cookiespargraph">Most web browsers automatically accept cookies, but you can usually modify your browser settings to decline cookies if you prefer. You can also delete cookies that have already been set. However, if you disable cookies, some parts of our website may not function properly.</p>
                <p class="cookiespargraph"> Managing Cookies in Your Browser: Most browsers allow you to control cookies through their settings preferences. For example, you can set your browser to block cookies or delete them once you close your browser. </p>
                <p class="cookiespargraph"> For more information on how to manage cookies in your browser, visit your browser’s help section.</p>       
            </div>

            <div class="cookiesdiv">
                <h2 class="cookiesheading">7. Changes to This Policy</h2>
                <p class="cookiespargraph">We may update our Cookie Policy from time to time to reflect changes in our practices or for other operational, legal, or regulatory reasons. We will notify you of any changes by posting the new policy on our website. You are advised to review this Cookie Policy periodically for any changes.</p>
              
            </div>
            <div class="cookiesdiv">
                <h2 class="cookiesheading">8. Contact Us</h2>
                <p class="cookiespargraph">If you have any questions about our use of cookies, please contact us at:</p>
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