<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacor | Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <script src="https://kit.fontawesome.com/8ce2e63a8c.js" crossorigin="anonymous"></script>
</head>

<body>
    @vite('resources/js/app.js')
    <div class="login-separator">
        <div class="left-content">
            <img src="{{ asset('images/logo.png') }}" alt="" id="logo">
            <h2>The best most aesthetic e-commerce <br>website you'll ever use</h2>
        </div>
        <div class="right-content" style="background-image: url('{{ asset('images/background-dark.png') }}');">
            <div class="login-container">
                <h2>Welcome to Gacor</h2>
                <form method="POST" action="{{ route('mock_login') }}" id="loginForm">
                    @csrf

                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}" autofocus>
                    </div>
                    <div class="input-icon">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                    </div>
                    <div class="login">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="alertBox" class="alert-box">
        <p id="alertMessage"></p>
    </div>

</body>

@if($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function() {
        showAlert('{{ $errors->first() }}');
    });
</script>
@endif

<script src="{{ asset('js/login.js') }}"></script>



</html>