@extends('admin.layout')
@section('title', 'Create User')
@section('breadcrumb', 'Create User')
@push('styles')
<style>
    .createsubmit {
    background-color: #245D51;
    color: white;
    font-size: 21px;
}
.form-control {
    padding: 15px .75rem;
}
    </style>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endpush

@section('content')

<section>
    <div class="row">
        <div class="col-12 col-lg-12">

            <div class="card">
                <div class="card-body p-4">

                    <h5 class="mb-4">Create User</h5>
                    <form id="createUserForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                    
                                    <input type="text" name="first_name" class="form-control" placeholder="First Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                   
                                    <input type="text" name="last_name" class="form-control" placeholder="Last Name"
                                        required>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                  
                                    <input type="email" name="email" class="form-control" placeholder="Email Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="form-group">
                                   
                                    <input type="text" name="mobile_no" class="form-control" placeholder="Mobile Number"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
    <div class="form-group position-relative">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
        <span id="togglePassword" class="position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); cursor: pointer;">
            <i class="fas fa-eye" id="eyeIcon"></i>
        </span>
    </div>
</div>

                            <div class="col-md-6 mb-3">

                                <div class="form-group">
                                 
                                    <select name="role" class="form-control" required>
                                        <option value="admin">Admin</option>
                                        <option value="user">User</option>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn createsubmit">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#createUserForm').on('submit', function(e) {
        e.preventDefault();

        $.ajax({
            url: "{{ route('admin.storeUser') }}",
            method: 'POST',
            data: $(this).serialize(),
            success: function(response) {
                if (response.status) {
                    toastr.success(response.message);
                    $('#createUserForm')[0].reset();
                } else {
                    toastr.error(response.message);
                }
            },
            error: function(xhr) {
                toastr.error(xhr.responseJSON.message || 'Failed to create user!');
            }
        });
    });
    const togglePassword = document.querySelector('#togglePassword');
    const passwordInput = document.querySelector('#password');
    const eyeIcon = document.querySelector('#eyeIcon');

    togglePassword.addEventListener('click', () => {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        
        // Toggle the eye icon
        eyeIcon.classList.toggle('fa-eye');
        eyeIcon.classList.toggle('fa-eye-slash');
    });
  
});
</script>


@push('pageScript')
@endpush