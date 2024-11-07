<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-in-container">
            <form method="POST"  action="{{ route('admin.login') }}">
                @csrf
                <h1>Sign in</h1>
                <div class="form-group">

                    <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        required>
                </div>
                @if ($errors->any())
                <div>
                    <strong>{{ $errors->first() }}</strong>
                </div>
            @endif
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <img src="{{ asset('assets/images/about_us_who_we_are.png') }}" alt="who we are" class="img-fluid">

            </div>
        </div>
    </div>
    </div>


</body>

</html>