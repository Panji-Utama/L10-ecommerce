<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/home_user.css')}}">
</head>

<body>
    @vite('resources/js/app.js', 'resources/css/app.css')

    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <div class="brand-logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </div>
            <div class="navbar-links">
                <ul>
                    <li>
                        <a href="">Nav1</a>
                        <a href="">Nav2</a>
                        <a href="">Nav3</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <h2>Yow brother</h2>
</body>

</html>