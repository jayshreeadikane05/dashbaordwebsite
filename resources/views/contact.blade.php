@extends('app.layouts')
@section('title', 'Contact Us')

@push('styles')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<!--Font Awesome Icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ asset('css/style.css')}}">
<link rel="stylesheet" href="{{ asset('css/contact-responsive.css')}}">

<!--jquery alert-->
<link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css">
@endpush

@section('content')


<section class="py-5 bg-light contactsection text-white">
<div class ="container contact-container ">
    <div class="row">
        <div class="col-md-9">
            <div class="contactheading">
        <div class="contact-subheading"><sup class="fade-in-letters"><span style="animation-delay: 0s;">W</span><span style="animation-delay: 0.1s;">e</span><span style="animation-delay: 0.2s;">&nbsp;</span> <span style="animation-delay: 0.3s;">A</span><span style="animation-delay: 0.4s;">r</span><span style="animation-delay: 0.5s;">e</span> </sup><span class="contactbanner-heading fade-in-letters"><span style="animation-delay: 0.6s;">H</span><span style="animation-delay: 0.7s;">e</span><span style="animation-delay: 0.8s;">r</span><span style="animation-delay: 0.9s;">e</span><span style="animation-delay: 1.0s;">&nbsp;</span> <span style="animation-delay: 1.1s;">t</span><span style="animation-delay: 1.2s;">o</span> <br> <span style="animation-delay: 1.3s;">A</span><span style="animation-delay: 1.4s;">n</span><span style="animation-delay: 1.5s;">s</span><span style="animation-delay: 1.6s;">w</span><span style="animation-delay: 1.7s;">e</span><span style="animation-delay: 1.8s;">r</span><span style="animation-delay: 1.9s;">&nbsp;</span> <span style="animation-delay: 2.0s;">Y</span><span style="animation-delay: 2.1s;">o</span><span style="animation-delay: 2.2s;">u</span></p></div>
        </div>
        </div>
         <div class="col-md-3">
            <div class="contact-right">
            <img src="../images/contact-hero.webp" class="img-fluid contactimage">
            <img src="../images/flower.webp" class="img-fluid flowerimage">

            </div>
            
        </div>
    </div>
</div>
</section>

<section class="bg-light contactsectiontwo">
    <div class="container">
    <div class="row pt-5 sectiontwocontainer">
        <div class="getintouch col-md-4">
            <p class="getintouchtext"> Have questions or need more information? Fill out the form and connect with us for general inquiries. </p>
            <p class="getintouchtext"> If you already have a project, Click the below button and connect with our Project Planner.</p>
            <div class="contact-btn">
                     <button class="contact-text btn-lg" type="button" >Contact Us</button>
                    </div>
                    <p class="email-text">Hate contact forms? <span class="emailid"><a href="mailto:info@vgenmedia.com" class="emailid"> info@vgenmedia.com</a></span></p>
        </div>
        <div class="col-md-8">
                    <div class="form-container">
                    <form id="contact-form" method="post" action="{{ route('submitForm') }}">
        @csrf
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <input type="text" class="form-control transparent-input @error('name') is-invalid @enderror" name="name" placeholder="Name *" value="{{ old('name') }}" required>
              
                    <div class="text-danger" id="name-error">@error('name'){{ $message }} @enderror</div>
                
            </div>
            <div class="form-group col-md-6 mb-3">
                <input type="email" class="form-control transparent-input @error('email') is-invalid @enderror" name="email" placeholder="Email Address *" value="{{ old('email') }}" required>
                <div class="invalid-feedback" id="email-error">@error('email') {{ $message }} @enderror</div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6 mb-3">
                <input type="text" class="form-control transparent-input @error('phone') is-invalid @enderror" name="phone" placeholder="Phone *" value="{{ old('phone') }}">
                <div class="text-danger" id="phone-error">@error('phone') {{ $message }} @enderror</div>
            
            </div>
            <div class="form-group col-md-6 mb-3">
                <div class="select-wrapper">
                    <select id="inputState" class="form-control transparent-input custom-select" name="hereabout" required>
                        <option value="" selected disabled hidden>How did you hear about VGEN MEDIA? </option>
                        <option>Facebook</option>
                        <option>Google</option>
                        <option>LinkedIn</option>
                        <option>Instagram</option>
                    </select>
                    @error('hereabout')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="form-group col-md-12 mb-3">
            <textarea class="form-control transparent-input" rows="5" cols="20" placeholder="Tell us about your project" name="message" required>{{ old('message') }}</textarea>
            @error('message')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group form-check mb-3">
            <input type="checkbox" class="form-check-input" id="privacyPolicy" name="privacyPolicy" required />
            <label class="form-check-label" for="privacyPolicy">Subscribe to our newsletter for all the latest updates!</label></br>
            <label class="form-check-label mt-3">By submitting this form I accept the <a href="#" class="form-check-label"> Privacy Policy </a> of this site.</label>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="6LfD_CUqAAAAAFKm904jHzWNjLbjJI-sCZeFhSb9"></div>
        </div>
        <div class="form-contact">
            <button id="submit-btn" class="form-sub btn-lg btn-primary" type="button">Send Message</button>
        </div>
        <div class="messages">
            <span id="success-message"></span>
            <span id="error-messages"></span>

        </div>
    </form>
            </div>


        </div>
    </div>
    <div class="row whowearecontainer">
        <p class="goldentext">Our</p>
        <p class="green-heading">Dubai office</p>

        <div class="row address mt-5">
            <div class="col-md-6 contactdiv">
                <h2 class="contact-heading">Our Ethos </h2>
                <p class="address-subheading"> Located in Dubai, our office is a hub of creativity and innovation. Our space facilities access to technology that helps creative brains to deliver the right. </p>
                    <div class="row addressinfo">
                    <div class="col-md-6">
                    <div class="officeaddress">
                    <p class="contact-subtext">Email</p>
                    <a href="mailto:info@vgenmedia.com" class="address-deatils"><img src="/assets/logos/mail.svg" alt="email" class="img-fluid">&nbsp;&nbsp;info@vgenmedia.com</a>
                    </div>    
                </div>
                    <div class="col-md-6">
                        <div class="officeaddress">
                    <p class="contact-subtext">Office Address</p>
                    <p class="address-deatils"><img src="/assets/logos/location.webp" alt="address" class="img-fluid" style="height: 24px;"> ALMEHAIRI , OFF12-026 , Ras Al Khor Industrial Third , Dubai.</p>
                        </div>  
                </div>
                    <div class="col-md-6 contactdiv">
                    <p class="contact-subtext">Phone</p>
                    <a href="tel:+971 585003485" class="address-deatils"><img src="/assets/logos/telephone.svg" alt="phone" class="img-fluid">&nbsp; +971 585003485</a>
                    <div class="socialmediacontact">
                            <p class="contact-subtext">Follow us</p>
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
            <div class="col-md-6 contactdiv">
            <img src="{{ asset('assets/images/our-ethos.webp') }}" alt="vgnmedia" class="img-fluid">

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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
 $(document).ready(function() {
   
    function isValidEmail(email) {
            var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            return emailRegex.test(email);
        }
        function isValidName(name) {
        var nameRegex = /^[a-zA-Z\s]+$/;
        return nameRegex.test(name);
        }
        function isValidPhoneNumber(phone) {
        var phoneRegex = /^[0-9]+$/;
        return phoneRegex.test(phone);
    }

        $('input[name="email"]').blur(function() {
            var email = $(this).val();
            if (email !== '' && !isValidEmail(email)) {
                $(this).addClass('is-invalid'); 
                $('#email-error').text('Please enter a valid email address.').show(); 
            } else {
                $(this).removeClass('is-invalid'); 
                $('#email-error').hide(); 
            }
        });
        $('input[name="name"]').blur(function() {
        var name = $(this).val();
        if (name !== '' && !isValidName(name)) {
            $(this).addClass('is-invalid');
            $('#name-error').text('Please enter a valid name.').show();
        } else {
            $(this).removeClass('is-invalid');
            $('#name-error').hide();
        }
    });
    $('input[name="phone"]').blur(function() {
        var phone = $(this).val();
        if (phone !== '' && !isValidPhoneNumber(phone)) {
            $(this).addClass('is-invalid');
            $('#phone-error').text('Please enter a valid phone number.').show();
        } else {
            $(this).removeClass('is-invalid');
            $('#phone-error').hide();
        }
    });



    $('#submit-btn').click(function(event) {
        event.preventDefault();

        let isValid = true;
        let firstInvalidField = null;

        $('#contact-form .form-control').each(function() {
            if ($(this).is('input') || $(this).is('textarea')) {
                if ($(this).val().trim() === '' && $(this).prop('required')) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $(this);
                    }
                } else if ($(this).attr('name') === 'name' && !isValidName($(this).val())) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $(this);
                    }
                } else if ($(this).attr('name') === 'email' && !isValidEmail($(this).val())) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $(this);
                    }
                }else if ($(this).attr('name') === 'phone' && !isValidPhoneNumber($(this).val())) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $(this);
                    }
                } else {
                    $(this).removeClass('is-invalid');
                }
            } else if ($(this).is('select')) {
                if ($(this).val() === '' && $(this).prop('required')) {
                    $(this).addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $(this);
                    }
                } else {
                    $(this).removeClass('is-invalid');
                }
            }
        });
        if(!$('#privacyPolicy').is(':checked')) {
                $('#privacyPolicy').addClass('is-invalid');
                isValid = false;
                if (firstInvalidField === null) {
                    firstInvalidField = $('#privacyPolicy');
                }
            } else {
                $('#privacyPolicy').removeClass('is-invalid');
            }
            var recaptcha = $("#g-recaptcha-response").val();
                if (recaptcha === "") {
                    $("#g-recaptcha-response").addClass('is-invalid');
                    isValid = false;
                    if (firstInvalidField === null) {
                        firstInvalidField = $("#g-recaptcha-response");
                        alert("Please check the recaptcha");
                    }
                } else {
                    $('#g-recaptcha-response').removeClass('is-invalid');
                }
            if (grecaptcha.getResponse() == "") {
                $("#g-recaptcha-response").addClass('is-invalid');
           
            } else {
                $('#g-recaptcha-response').removeClass('is-invalid');
            }

        

        if (!isValid) {
            firstInvalidField.focus();
            $('#error-messages').text('Please fill out the required fields.').addClass('text-danger').show();
        } else {
            $('#error-messages').hide();

            $.ajax({
                url: $('#contact-form').attr('action'),
                method: 'POST',
                data: $('#contact-form').serialize(),
                success: function(response) {
                    $('#success-message').text(response.message).addClass('text-success').show();
                    $('#contact-form')[0].reset();
                    setTimeout(function() {
                        $('#success-message').hide();
                    }, 5000);
                },
                error: function(xhr) {
                    $('#error-messages').text('An error occurred. Please try again.').addClass('text-danger').show();
                }
            });
        }
    });

        
    });
   
</script>
@endpush