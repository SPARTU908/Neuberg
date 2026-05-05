<div class="custom-test-section">

    <h2 class="section-title">Customized Health Tests</h2>

    <div class="custom-grid">

        <div class="custom-card">
            <img src="{{ asset('assets/men.png') }}">
            <p>MEN</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/women.png') }}">
            <p>WOMAN</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/women.png') }}">
            <p>PREVENTIVE HEALTH</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/senior.png') }}">
            <p>SENIOR CITIZENS</p>
        </div>

        <div class="custom-card">
            <img src="{{ asset('assets/all_test.png') }}">
            <p>ALLTESTS</p>
        </div>

    </div>

</div>

<div class="book-now-wrapper">
    <img src="{{ asset('assets/book-now.jpeg') }}" class="book-now-img">


     
    <a href="{{ url('/appointment') }}" class="book-btn">
        BOOK NOW
    </a>
</div>

<style>
    .custom-test-section {
        max-width: 990px;
        margin: 80px auto;
        padding: 0 10px;
    }

    .section-title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 25px;
    }


    .custom-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        gap: 25px;
    }


    .custom-card {
        background: #fff;
        border-radius: 14px;
        padding: 25px 10px;
        text-align: center;
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
        transition: 0.3s;
        cursor: pointer;
    }


    .custom-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 20px rgba(90, 45, 145, 0.15);
    }


    .custom-card img {
        width: 50px;
        margin-bottom: 12px;
    }


    .custom-card p {
        font-size: 13px;
        font-weight: 600;
        color: #5a2d91;
    }

    @media (max-width: 992px) {
        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    @media (max-width: 576px) {
        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }


    .book-now-wrapper {
        position: relative;
        width: 100%;
    }

    .book-now-img {
        width: 75%;
        display: block;
        border-radius: 12px;
        margin: 40px auto;
    }


    .book-btn {
        position: absolute;
        bottom: 87px;
        left: 596px;
        background: #ff7a00;
        color: #fff;
        padding: 12px 34px;
        border-radius: 10px;
        text-decoration: none;
        font-weight: 600;
        transition: 0.3s;
    }

    .book-btn:hover {
        background: #e56700;
    }


    @media (max-width: 768px) {
        .book-btn {
            left: 20px;
            bottom: 15px;
            padding: 10px 18px;
            font-size: 14px;
        }
    }


    @media (max-width: 1200px) {

        .custom-test-section {
            margin: 60px 40px;
        }

        .custom-grid {
            grid-template-columns: repeat(4, 1fr);
        }

        .book-now-img {
            width: 90%;
            margin: 40px auto;
        }

        .book-btn {
            left: 50%;
            transform: translateX(-50%);
            bottom: 30px;
        }
    }



    @media (max-width: 992px) {

        .custom-test-section {
            margin: 50px 20px;
        }

        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .custom-card {
            padding: 20px 10px;
        }

        .book-now-img {
            width: 95%;
        }

        .book-btn {
            left: 50%;
            transform: translateX(-50%);
            bottom: 25px;
        }
    }



    @media (max-width: 768px) {

        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .custom-card img {
            width: 40px;
        }

        .custom-card p {
            font-size: 12px;
        }

        .book-now-img {
            width: 100%;
            margin: 30px 0;
        }

        .book-btn {
            padding: 10px 20px;
            font-size: 13px;
            bottom: 20px;
        }
    }



    @media (max-width: 480px) {

        .custom-grid {
            grid-template-columns: 1fr;
        }

        .custom-card {
            padding: 18px;
        }

        .book-btn {
            width: 80%;
            text-align: center;
            border-radius: 8px;
        }
    }
</style>