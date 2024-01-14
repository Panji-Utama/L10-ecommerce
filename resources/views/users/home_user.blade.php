<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacor | User Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/home_user.css')}}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico')}}" type="image/x-icon">
    <script src="https://kit.fontawesome.com/8ce2e63a8c.js" crossorigin="anonymous"></script>
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
                        <a href="">HOME</a>
                        <a href="">BEDROOM</a>
                        <a href="">LIVING ROOM</a>
                        <a href="">DINING ROOM</a>
                        <a href="">SPECIALS</a>
                    </li>
                    <button id="cartBtn"><i class="fa fa-shopping-bag"></i></button>
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-home">
        <div class="left__hero-home">
            <h2 style="font-weight: 300;">TERDAPAT BANYAK</h2>
            <h2 style="font-weight: 700;">PRODUK BARU</h2>
            <p>Kursi dan meja yang mewah nan elegan</p>
            <button class="button-black">SHOP NOW</button>
        </div>
        <div class="right__hero-home">
            <img src="{{ asset('images/man-sit-on-sofa.png') }}" alt="">
        </div>
    </div>
</body>

</html>