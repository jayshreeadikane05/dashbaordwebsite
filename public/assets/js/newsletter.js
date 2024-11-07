$(function() {

    function isValidEmail(email) {
        var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        return emailRegex.test(email);
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
    $('#subscribeForm').on('submit', function(e) {
        e.preventDefault();
        
        let emailValue = $('#email').val();
        
        $.ajax({
            url: '/subscribe',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                email: emailValue,
              
            },
            success: function(response) {
                $('#responseMessage').text(response.message).css('color', '#D3E9E2').show();
                $('#email').val(''); 

            },
            error: function(xhr) {
                let response = xhr.responseJSON;
                $('#responseMessage').text(response.message).css('color', 'red').show();
            }
        });
    });
});