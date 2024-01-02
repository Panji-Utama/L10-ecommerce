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
    <div class="login-separator">
        <div class="left-content">
            <img src="{{ asset('images/logo.png') }}" alt="" id="logo">
            <h2>The best and most aesthetic e-commerce <br>website you'll ever use</h2>
        </div>
        <div class="right-content">
            <div class="login-container">
                <h2>Welcome to Gacor</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <!-- <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required autofocus>
                    </div> -->
                    <div class="input-icon">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-icon">
                        <i class="fa-solid fa-lock"></i>
                        <input type="text" id="email" placeholder="Email" required>
                    </div>
                    <div class="login">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>