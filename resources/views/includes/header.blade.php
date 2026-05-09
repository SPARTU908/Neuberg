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
            max-width: 1152px;
            margin: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 10px;

        }

        .logo-wrap {
            width: 170px;
            height: 67px;
        }


        .logo {
            height: 67px;
            width: 170px;
        }

        .top-info {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-left: 130px;
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

        /* .navbar {
            background: #5a2d91;
            padding: 15px 160px;
            border-radius: 12px;
            margin: 10px 123px;
            display: flex;
            gap: 130px;
            color: #fff;
            width: 1080px;
        }

        .navbar a {
            color: #fff;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
        } */

        .navbar {
            background: #5a2d91;
            padding: 13px 129px;
            border-radius: 15px 15px 0px 0px;
            margin: 10px 123px;
            display: flex;
            gap: 115px;
            color: #fff;
            width: 1080px;
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
            margin: 0 123px;
            background: linear-gradient(135deg, #cbb4e3, #e5d8f3);
            border-radius: 12px;
            padding: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 1080px;
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

            .top-bar {
                flex-direction: row;
                justify-content: space-between;
                padding: 10px 15px;
            }

            .top-info {
                display: none;
            }

            .icon {
                display: flex;
                align-items: center;
                gap: 18px;
                margin-right: 44px;
            }

            .icons {
                gap: 15px;
                margin-right: 0;
            }

            .hamburger {
                display: block;
            }

            .navbar {
                position: absolute;
                top: 90px;
                left: 0;
                width: 100%;
                flex-direction: column;
                gap: 15px;
                padding: 20px;
                margin: 0;
                border-radius: 0;
                display: none;
                z-index: 999;
            }

            .navbar.active {
                display: flex;
            }

            .hero {
                flex-direction: column;
                margin: 10px;
                width: auto;
                padding: 20px;
                text-align: center;
            }

            .hero-left img {
                width: 120px;
                margin-bottom: 20px;
            }

            .search-box {
                width: 100%;
            }

            .upload-btn {
                margin-left: 0;
                margin-top: 10px;
            }
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
                <div class="info-item">
                    <div>
                        <img src="{{ asset('assets/call.png') }}">
                    </div>
                    <div class="customer">
                        <span>Customer Care</span>
                        <strong>9700 36 9700</strong>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="info-item">
                    <div>
                        <img src="{{ asset('assets/home.png') }}">
                    </div>
                    <div class="book">
                        <span>Book a Home Visit</span>
                        <strong>8939 06 6655</strong>
                    </div>
                </div>
            </div>
            <div class="icon">

                <img src="{{ asset('assets/india.png') }} " class="icons-1">
                <img src="{{ asset('assets/user.png') }}" class="icons-2">
                <img src="{{ asset('assets/cart.png') }}" class="icons-3">
            </div>
        </div>
    </div>


    <div class="navbar">

        <a href="/">
            <img src="{{ asset('assets/menu-home.png') }}" alt="">
            Home
        </a>

        <a href="/doctors-profile">
            <img src="{{ asset('assets/menu-dr.png') }}" alt="">
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


    <div class="hero">
        <div class="hero-left">
            <img src="doctor.png" alt="Banner Image">
        </div>
    </div>
</body>


<script>
    function toggleMenu() {
        document.querySelector('.navbar').classList.toggle('active');
    }
</script>

</html>