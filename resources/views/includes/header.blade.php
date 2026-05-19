<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Neuberg Diagnostics | Lab tests Anywhere, Anytime</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Maven Pro', sans-serif;
        }

        body {
            background-image: url(/assets/bg.png);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .top-header {

            border-bottom: 1px solid #eee;
        }

        .top-bar {
            max-width: 1140px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 24px;

        }

        .logo-wrap {
            width: 170px;
            height: 67px;
        }


        .logo {
            height: 75px;
            width: 170px;
        }

        .top-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 30px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 15px;
            color: #555;
        }

        .info-item img {
            width: 35px;

        }

        .info-item strong {
            font-size: 17px;
            font-weight: 600;
            color: #4b2a7b;

        }

        .divider {
            width: 1px;
            height: 20px;
            background: #ddd;
        }

        .icon {
            display: flex;
            align-items: center;
            gap: 39px;
            margin-right: 44px;
        }

        .icons-1 {
            width: 24px;
            cursor: pointer;
            border-radius: 50%;
        }

        .icons-2 {
            width: 24px;
            cursor: pointer;
            border-radius: 50%;
        }

        .icons-3 {
            width: 24px;
            cursor: pointer;

        }

        .icon {
            font-size: 10px;
        }

        .social-icons-1 {
            display: flex;
            gap: 15px;
            align-items: center;
            margin-right: 14px;
        }


        .social-icons-1 a {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            /* background: #5a2d91; */
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border: 2px solid #5A2D92;
            color: #5a2d91;
        }

        .customer {
            display: flex;
            flex-direction: column;
        }

        .customer span {
            font-family: 'Maven Pro', sans-serif;
            font-weight: 600;
            font-size: 14px;
            line-height: 150%;
            letter-spacing: 0%;
            vertical-align: middle;
            color: #5f5f5f;
            margin-bottom: 0;
        }

        .customer strong {
            font-size: 17px;
            font-weight: 600;
            color: #4b2a7b;
        }

        .book {
            display: flex;
            flex-direction: column;
        }

        .book span {
            font-family: 'Maven Pro', sans-serif;
            font-weight: 600;
            font-size: 14px;
            line-height: 150%;
            letter-spacing: 0%;
            vertical-align: middle;
            color: #5f5f5f;
            margin-bottom: 0;
        }

        .book strong {
            font-size: 17px;
            font-weight: 600;
            color: #4b2a7b;
        }


        .navbar {
            background: #5a2d91;
            padding: 19px 135px;
            border-radius: 15px 15px 0px 0px;
            /*margin: 1px 135px;*/
            display: flex;
            gap: 83px;
            color: #fff;
            width: 1081px;
            margin: 1px auto;
        }

        .navbar a {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
        }

        .navbar a img {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .hero {
            flex-direction: column;
            width: auto;
            text-align: center;
            background-image: url('{{ $heroImage ?? asset("assets/ecg-2.jpeg") }}');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 314px;

        }

        .appointment-hero {
            flex-direction: column;
            width: auto;
            text-align: center;
            background-image: url('{{ $heroImage ?? asset("assets/ecg-2.jpeg") }}');
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            height: 279px;
        }





        .hero-left img {
            width: 150px;
        }

        .search-box {
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            width: 500px;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
        }

        .location {
            background: #f7931e;
            color: #fff;
            padding: 12px 20px;
            font-size: 14px;
        }

        .search-box input {
            border: none;
            padding: 12px;
            width: 100%;
            outline: none;
        }

        .upload-btn {
            background: #f3e7d7;
            padding: 12px 20px;
            border-radius: 8px;
            margin-left: 20px;
            cursor: pointer;
        }

        .upload-btn:hover {
            background: #ead9c3;
        }

        .hamburger {
            display: none;
            font-size: 26px;
            cursor: pointer;
            color: #5a2d91;
        }

        @media (max-width: 768px) {

            body {
                overflow-x: hidden;
            }

            .top-bar {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 12px 15px;
                position: relative;
            }

            .top-info {
                display: none;
            }

            .logo-wrap {
                width: auto;
                height: auto;
            }

            .logo {
                width: 140px;
                height: auto;
            }

            .icon {
                display: flex;
                align-items: center;
                gap: 14px;
                margin-right: 0;
            }

            .icons-1,
            .icons-2,
            .icons-3 {
                width: 22px;
                height: 22px;
            }

            .hamburger {
                display: block;
                font-size: 28px;
                cursor: pointer;
                color: #5a2d91;
            }

            /* MOBILE MENU */

            .navbar {
                position: absolute;
                top: 78px;
                left: 0;
                width: 100%;
                background: #5a2d91;
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
                padding: 20px;
                margin: 0;
                border-radius: 0;
                display: none;
                z-index: 999;
            }

            .navbar.active {
                display: flex;
            }

            .navbar a {
                width: 100%;
                font-size: 15px;
            }

            /* HERO SECTION */

            .hero {
                width: 100%;
                height: 180px;
                margin: 0;
                padding: 0;
                background-size: cover;
                background-position: center;
            }

            .appointment-hero {
                width: 100%;
                height: 88px;
                margin: 0;
                padding: 0;
                background-size: cover;
                background-position: center;
            }



            .hero-left img {
                width: 100%;
                max-width: 140px;
                height: auto;
            }

            /* SEARCH */

            .search-box {
                width: 100%;
                flex-direction: row;
            }

            .search-box input {
                width: 100%;
                font-size: 14px;
            }

            .location {
                padding: 12px 10px;
                font-size: 13px;
                white-space: nowrap;
            }

            .upload-btn {
                width: 100%;
                margin-left: 0;
                margin-top: 10px;
                text-align: center;
            }
        }


        .cart-icon-wrapper {
            position: relative;
            display: inline-block;
        }

        .cart-count {
            position: absolute;
            top: -8px;
            right: -10px;

            width: 22px;
            height: 22px;

            background: #6c35b3;
            color: #fff;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 12px;
            font-weight: 700;

            line-height: 1;
        }
    </style>
</head>

<body>
    <div class="top-header">
        <div class="top-bar">
            <span class="hamburger" onclick="toggleMenu()">☰</span>
            <div class="logo-wrap">

                <img src="{{ asset('assets/logo.png') }}" class="logo">
            </div>
            <div class="top-info">
                <!-- <div class="info-item">
                    <div>
                        <img src="{{ asset('assets/call.png') }}">
                    </div>
                    <div class="customer">
                        <span>Customer Care</span>
                        <strong>9055449055</strong>
                    </div>
                </div> -->
                <!-- <div class="divider"></div> -->
                <div class="info-item">
                    <div>
                        <img src="{{ asset('assets/home.png') }}">
                    </div>
                    <div class="book">
                        <span>Book a Home Visit</span>
                        <strong>9055449055</strong>
                    </div>
                </div>
            </div>
            <div class="social-icons-1">
                <a href="https://www.facebook.com/neuberg.varanasi" target="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>

                <a href="https://www.instagram.com/neuberglab.varanasi/?hl=en" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="https://www.linkedin.com/company/neuberg-diagnostics-varanasi" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>



            </div>

            <div class="icon cart-icon-wrapper">

              <a href="{{ route('cart.view') }}" class="cart-link">
                    <div class="icon cart-icon-wrapper">

                        <img src="{{ asset('assets/cart.png') }}" class="icons-3">

                        <span class="cart-count">
                            {{ count(session('cart', [])) }}
                        </span>

                    </div>

                </a>


            </div>
        </div>
    </div>


    <div class="navbar">

        <a href="/">
            <img src="{{ asset('assets/menu-home.png') }}" alt="">
            Home
        </a>

        <a href="/doctors-profile">
            <img src="{{ asset('assets/menu-dr-3.png') }}" alt="">
            Doctor's Profile
        </a>

        <a href="/appointment">
            <img src="{{ asset('assets/menu-book.png') }}" alt="">
            Book An Appointment
        </a>

        <a href="/contact">
            <img src="{{ asset('assets/menu-call.png') }}" alt="">
            Contact Us
        </a>

    </div>


    <div class="hero {{ $heroClass ?? '' }}">
        <div class="hero-left">

        </div>
    </div>
</body>


<script>
    function toggleMenu() {
        document.querySelector('.navbar').classList.toggle('active');
    }
</script>

</html>