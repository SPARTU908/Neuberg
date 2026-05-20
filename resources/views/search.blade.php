@section('contain')
@include('includes.header')
@include('includes.searchbox')

<!-- frequently booked test -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@php
$tests = [
[
'name' => 'Haemogram (CBC)',
'includes' => 'Includes 26 Test',
'report' => '4 hours',
'price' => '160'
],

[
'name' => 'Glucose - Fasting',
'includes' => 'Includes 1 Test',
'report' => '3 hours',
'price' => '50'
],


[
'name' => 'Glucose - Post Prandial',
'includes' => 'Includes 1 Test',
'report' => '3 hours',
'price' => '50'
],


[
'name' => 'Glucose - Random',
'includes' => 'Includes 1 Test',
'report' => '3 hours',
'price' => '85'
],



[
'name' => 'Lipid Profile',
'includes' => 'Includes 8 Test',
'report' => '4 hours',
'price' => '350'
],


[
'name' => 'Liver Function Test',
'includes' => 'Includes 11 Test',
'report' => '4 hours',
'price' => '350'
],



[
'name' => 'Glyco Hemoglobin (HbA1c)',
'includes' => 'Includes 2 Test',
'report' => '5 hours',
'price' => '450'
],


[
'name' => 'Thyroid Function Test',
'includes' => 'Includes 3 Test',
'report' => '4 hours',
'price' => '250'
],


[
'name' => 'TSH',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => '180'
],



[
'name' => 'Urea',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => '180'
],



[
'name' => 'Creatinine',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => '110'
],



[
'name' => 'Uric Acid',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => '100'
],


[
'name' => 'Electrolytes',
'includes' => 'Includes 4 Test',
'report' => '3 hours',
'price' => '120'
],



[
'name' => 'Sodium',
'includes' => 'Includes 1 Test',
'report' => '3 hours',
'price' => '130'
],

[
'name' => 'Potassium',
'includes' => 'Includes 1 Test',
'report' => '6 hours',
'price' => '130'
],


[
'name' => 'Urine Examination',
'includes' => 'Includes 24 Test',
'report' => '6 hours',
'price' => 'xx'
],


[
'name' => 'Calcium',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => '130'
],

[
'name' => 'C- Reactive Protein',
'includes' => 'Includes 1 Test',
'report' => '5 hours',
'price' => '300'
],


[
'name' => 'Rheumatoid Factor by Nephelometry',
'includes' => 'Includes 1 Test',
'report' => '5 hours',
'price' => 'xx'
],

[
'name' => 'Blood Group & RH',
'includes' => 'Includes 2 Test',
'report' => '4 hours',
'price' => 'xx'
],

[
'name' => 'Bilirubin level Total',
'includes' => 'Includes 3 Test',
'report' => '4 hours',
'price' => 'xx'
],

[
'name' => 'SGOT (AST)',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => 'xx'
],

[
'name' => 'SGPT (ALT)',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => 'xx'
],

[
'name' => '25 OH Cholecalciferol (D2+D3)',
'includes' => 'Includes 1 Test',
'report' => '4 hours',
'price' => 'xx'
],

];
@endphp


<div class="test-section">

    <h2 class="section-title">Frequently Booked Tests</h2>

    <!-- Swiper -->
    <div class="swiper testSwiper">

        <div class="swiper-wrapper">

            @foreach($tests as $test)

            <!-- IMPORTANT -->
            <div class="swiper-slide">

                <div class="test-card search-item-box"
                    data-title="{{ $test['name'] }}"
                    data-type="test">

                    <div class="plus-icon">+</div>

                    <h3>{{ $test['name'] }}</h3>

                    <p class="includes">{{ $test['includes'] }}</p>

                    <p class="report">
                        Report will be sent within
                        <strong>{{ $test['report'] }}</strong>
                    </p>

                    <div class="footer-price">
                        <p class="price">Rs. {{ $test['price'] }}</p>

                    </div>

                    <img src="{{ asset('assets/test.png') }}" class="corner-icon">

                </div>

            </div>

            @endforeach

        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

    </div>

</div>

<style>
    .test-section {
        max-width: 969px;
        margin: 80px auto;
        padding: 0 20px;
        overflow: hidden;
    }

    .section-title {
        font-size: 22px;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
    }

    /* SWIPER */
    .testSwiper {
        width: 100%;
        padding-bottom: 40px;
    }

    .swiper-wrapper {
        align-items: stretch;
    }

    .swiper-slide {
        height: auto;
        display: flex;
    }

    /* CARD */
    .test-card {
        width: 100%;
        background: #fff;

        border-radius: 12px;
        padding: 20px;
        position: relative;
        min-height: 150px;
        background-color: #fffdfc;
        transition: 0.3s ease;
        margin-top: 10px;
        border: 1.196px solid #CFA8E9;
        box-shadow: 0 3.124px 3.124px #00000040;
    }

    .test-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 14px rgba(90, 45, 145, 0.15);
    }


    .plus-icon {
        position: absolute;
        top: -11px;
        right: 0px;
        width: 32px;
        height: 32px;
        background: #6c35b3;
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 35px;
        font-weight: 600;
        line-height: 1;
    }

    /* TITLE */
    .test-card h3 {
        font-size: 16px;
        font-weight: 600;
        color: #6c35b3;
        margin-bottom: 10px;
        line-height: 1.5;
        padding-right: 20px;
    }

    /* TEXT */
    .includes {
        color: #a965d6;
        font-size: 12px;
        font-weight: 500;
        cursor: pointer;
    }

    .report {
        color: #a965d6;
        font-family: 'Maven Pro ' Light;
        font-size: 12px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        margin-top: 6px;
    }

    .report strong {
        color: #444;
    }

    .footer-price {
        margin-top: 19px;
    }

    .price {
        color: #4c4b4b;
        font-size: 14.33px;
        font-weight: 600;
    }

    /* IMAGE */
    .corner-icon {
        position: absolute;
        bottom: 14px;
        right: 14px;
        width: 42px;
    }

    /* PAGINATION */
    .swiper-pagination {
        bottom: 0 !important;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #d4c2ea;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: #b26be3;
        width: 20px;
        border-radius: 20px;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {

        .test-section {
            padding: 0 15px;
        }

        .section-title {
            font-size: 20px;
        }

        .test-card {
            min-height: 145px;
            padding: 18px;
        }

        .test-card h3 {
            font-size: 15px;
        }

        .price {
            font-size: 16px;
        }

        .corner-icon {
            width: 36px;
        }
    }

    /* MOBILE VIEW EXACT LIKE IMAGE */
    @media (max-width: 576px) {

        .test-section {
            padding: 0 14px;
            margin: 40px auto;
        }

        .section-title {
            font-size: 16px;
            line-height: 1.3;
            width: 150px;
            margin-bottom: 18px;
        }

        .testSwiper {
            overflow: visible;
            padding-bottom: 30px;
        }

        .swiper-slide {
            width: 120px !important;
        }

        .test-card {
            min-height: 115px;
            padding: 10px;
            border-radius: 10px;
        }

        .test-card h3 {
            font-size: 10px;
            line-height: 1.4;
            margin-bottom: 6px;
            padding-right: 10px;
        }

        .includes {
            font-size: 9px;
            margin-bottom: 4px;
        }

        .report {
            font-size: 9px;
            margin-top: 2px;
            margin-bottom: 8px;
            line-height: 1.3;
        }

        .price {
            font-size: 11px;
        }

        .footer-price {
            margin-top: 10px;
        }

        .corner-icon {
            width: 22px;
            right: 8px;
            bottom: 8px;
        }

        .plus-icon {
            width: 20px;
            height: 20px;
            top: -8px;
            right: -6px;
            font-size: 18px;
        }

        .swiper-pagination-bullet {
            width: 6px;
            height: 6px;
        }

        .swiper-pagination-bullet-active {
            width: 16px;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".testSwiper", {

        slidesPerView: 3,
        slidesPerGroup: 6,
        spaceBetween: 28,
        loop: false,

        grid: {
            rows: 2,
            fill: 'row'
        },

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 2,
                slidesPerGroup: 4,
                spaceBetween: 12,
                grid: {
                    rows: 2,
                    fill: 'row'
                }
            },

            576: {
                slidesPerView: 2,
                slidesPerGroup: 4,
                spaceBetween: 16,
                grid: {
                    rows: 2,
                    fill: 'row'
                }
            },

            992: {
                slidesPerView: 3,
                slidesPerGroup: 6,
                spaceBetween: 28,
                grid: {
                    rows: 2,
                    fill: 'row'
                }
            }
        }
    });
</script>
<!-- frequently booked test section ends -->



<!-- popular section starts -->
@php
$packages = [
[
'title' => 'Basic Body Profile New',
'includes' => 'Includes 9 Tests',
'description' => 'Haemogram (CBC), ESR, Glucose - Fasting, Glyco Hemoglobin (HbA1c), Renal Function Test,Liver Function Test, Lipid Profile, Skeletal Profile
,Urine Examination',
'old_price' => 3550,
'new_price' => 1600,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],
[
'title' => 'Basic Body Profile P1',
'includes' => 'Includes 10 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,Glyco Hemoglobin (HbA1c),Skeletal Profile,Liver Function Test,Renal Function Test,Lipid Profile
,Prostate Specific Antigen level,Urine Examination,',
'old_price' => 5000,
'new_price' => 1760,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],
[
'title' => 'Basic Body Profile P2',
'includes' => 'Includes 10 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,Glyco Hemoglobin (HbA1c),Skeletal Profile,Renal Function Test,Liver Function Test,Lipid Profile
,Thyroid Function Test,Urine Examination',
'old_price' => 2000,
'new_price' => 1760,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],

[
'title' => 'Basic Body Profile P3',
'includes' => 'Includes 11 Tests',
'description' => 'Haemogram (CBC), ESR, Glucose - Fasting, Glyco Hemoglobin (HbA1c),Skeletal Profile, Renal Function Test,Liver Function Test,Lipid Profile
,Thyroid Function Test, Prostate Specific Antigen level,Urine Examination,',
'old_price' => 2000,
'new_price' => 1980,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],

[
'title' => 'Basic Body Profile P4',
'includes' => 'Includes 13 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,25 OH Cholecalciferol (D2+D3),Vitamin B - 12 Level,Glyco Hemoglobin (HbA1c),Renal Function Test
,Skeletal Profile,Liver Function Test,Thyroid Function Test,Lipid Profile,Prostate Specific Antigen level,Urine Examination,',
'old_price' => 3550,
'new_price' => 3520,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'Basic Body Profile P5',
'includes' => 'Includes 11 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,Glyco Hemoglobin (HbA1c),Renal Function Test,Liver Function Test,Skeletal ProfileLipid Profile
,Vitamin B - 12 Level,25 OH Cholecalciferol (D2+D3),Urine Examination',
'old_price' => 5000,
'new_price' => 2860,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'NEU NURTURER',
'includes' => 'Includes 12 Tests',
'description' => 'CBC,ESR,Liver Function Test,Renal Function Test,Lipid Profile,Thyroid Function Test,Glucose - Fasting,Iron Level
,Glyco Hemoglobin (HbA1c),25 OH Cholecalciferol (D2+D3),Vitamin B - 12 Level,Urine Examination,',
'old_price' => 2000,
'new_price' => 2800,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'NEU Health Check-Super',
'includes' => 'Includes 12 Tests',
'description' => 'CBC,ESR,Glucose - Fasting,Liver Function Test,Renal Function Test,Iron Level,Lipid Profile,Thyroid Function Test,Urine Examination
,Glyco Hemoglobin (HbA1c),25 OH Cholecalciferol (D2+D3),Vitamin B - 12 Level',
'old_price' => 2000,
'new_price' => 2499,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


];
@endphp

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<div class="package-section" id="popular-health-package">

    <h2 class="section-title">Popular Health Packages</h2>

    <div class="swiper packageSwiper">

        <div class="swiper-wrapper">

            @foreach($packages as $package)

            <div class="swiper-slide">

                <div class="package-card search-item-box"
                    data-title="{{ $package['title'] }}"
                    data-type="package">

                    <div class="discount">
                        <span>{{ $package['discount'] }}</span>
                    </div>

                    <h3>{{ $package['title'] }}</h3>

                    <p class="includes">{{ $package['includes'] }}</p>

                    <p class="desc">
                        {{ $package['description'] }}
                    </p>

                    <div class="price-row">

                        <div>
                            <div class="new-price">
                                Rs. {{ $package['new_price'] }}
                            </div>
                        </div>

                        <a href="{{ url('/appointment') }}" class="cart-btn">
                            Book Now
                        </a>

                    </div>

                    <img src="{{ asset($package['image']) }}" class="corner-icon1">

                </div>

            </div>

            @endforeach

        </div>
        <div class="swiper-pagination"></div>

    </div>

</div>


<!-- <div>
    <a href="{{ url('/appointment') }}">
        <picture>

            <source srcset="{{ asset('assets/book-now-mobile.png') }}" media="(max-width: 768px)">

            <img src="{{ asset('assets/book-now-1.png') }}" class="book-now-img">

        </picture>
    </a>
</div> -->

</div>


<style>
    .package-section {
        max-width: 969px;
        margin: 80px auto;
        padding: 0 10px;
        overflow: hidden;
    }

    .section-title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 25px;
    }

    .packageSwiper {
        width: 100%;
        padding-bottom: 40px;
    }

    .swiper-wrapper {
        align-items: stretch;
    }

    .swiper-slide {
        height: auto;
        display: flex;
    }

    .package-card {
        padding: 18px;
        position: relative;
        transition: 0.3s;
        width: 100%;
        height: 286px;
        border-radius: 8px;
        border: 1.2px solid #cfa8e9;
        background: #fef7f3;
        box-shadow: 0 4.8px 4.8px #00000040;
        margin-bottom: 20px;
    }

    .package-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 6px 16px rgba(90, 45, 145, 0.15);
    }

    .discount {
        position: absolute;
        top: 0px;
        left: -1px;
        background: #f7931e;
        color: #fff;
        padding: 4px 10px;
        border-radius: 7.976px;
        font-weight: 600;
        width: 83.848px;
        height: 24.525px;
    }

    .discount span {
        color: #fff;
        font-family: Maven Pro;
        font-size: 13.957px;
        font-weight: 700;
    }

    .package-card h3 {
        font-size: 17px;
        color: #5a2d91;
        font-weight: 550;
        margin-bottom: 6px;
        margin-top: 25px;
        padding-right: 40px;
    }

    .includes {
        font-size: 12px;
        color: #a066d3;
        margin-bottom: 8px;
        margin-top: 25px;
    }

    .desc {
        font-size: 12px;
        color: #666;
        margin-bottom: 2px;
        line-height: 1.4;
        margin-top: 2px;

        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 18px;
    }

    .new-price {
        font-size: 18px;
        font-weight: 700;
        color: #333;
    }

    .cart-btn {
        background: linear-gradient(90deg, #5a2d91, #9b63d1);
        color: #fff;
        border: none;
        padding: 8px 14px;
        border-radius: 8px;
        font-size: 13px;
        cursor: pointer;
        text-decoration: none !important;
    }

    .cart-btn:hover {
        opacity: 0.9;
    }

    .corner-icon1 {
        position: absolute;
        top: 41px;
        right: 15px;
        width: 40px;
    }

    .book-now-img {
        width: 971px;
        margin: 8px 185px;
    }

    .swiper-pagination {
        bottom: 0 !important;
    }

    .swiper-pagination-bullet {
        width: 8px;
        height: 8px;
        background: #d4c2ea;
        opacity: 1;
    }

    .swiper-pagination-bullet-active {
        background: #b26be3;
        width: 20px;
        border-radius: 20px;
    }



    @media (max-width: 1024px) {

        .package-section {
            max-width: 100%;
            padding: 0 16px;
            margin: 60px auto;
        }

        .packageSwiper {
            padding-bottom: 45px;
        }

        .package-card {
            height: 300px;
            padding: 18px;
        }

        .package-card h3 {
            font-size: 18px;
            line-height: 1.3;
        }

        .includes {
            font-size: 13px;
        }

        .desc {
            font-size: 13px;
            -webkit-line-clamp: 4;
        }

        .new-price {
            font-size: 24px;
        }

        .cart-btn {
            font-size: 14px;
            padding: 10px 16px;
        }

        .book-now-img {
            width: calc(100% - 30px);
            margin: 12px 15px;
            border-radius: 12px;
        }
    }

    @media (max-width: 992px) {

        .package-card {
            height: auto;
            min-height: 290px;
        }
    }


    @media (max-width: 768px) {

        .package-section {
            width: 100%;
            padding: 0 14px;
            margin: 45px auto;
            overflow: hidden;
        }

        .section-title {
            font-size: 20px;
            font-weight: 700;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #333;
        }

        .packageSwiper {
            width: 100%;
            overflow: hidden;
            padding-bottom: 42px;
        }

        .swiper-slide {
            height: auto;
            display: flex;
        }

        .package-card {
            width: 100%;
            min-height: 270px;
            height: auto;

            padding: 14px;
            border-radius: 14px;

            background: #fffdfc;
            border: 1px solid #d7b6ef;

            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.18);

            position: relative;
        }

        .discount {
            top: 0;
            left: 0;

            width: 78px;
            height: 24px;

            border-radius: 0 0 8px 0;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .discount span {
            font-size: 11px;
            font-weight: 700;
        }


        .package-card h3 {
            font-size: 15px;
            font-weight: 700;
            line-height: 1.3;
            color: #5a2d91;
            margin-top: 30px;
            margin-bottom: 10px;
            padding-right: 38px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .includes {
            font-size: 13px;
            font-weight: 600;
            color: #666;

            margin-top: 0;
            margin-bottom: 10px;
        }

        .desc {
            font-size: 12px;
            line-height: 1.4;
            color: #666;

            -webkit-line-clamp: 3;

            display: -webkit-box;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .price-row {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;

            margin-top: 14px;
        }

        .new-price {
            font-size: 18px;
            font-weight: 700;
            color: #333;
        }

        .cart-btn {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 14px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            text-decoration: none !important;
        }



        .corner-icon1 {
            width: 26px;

            position: absolute;
            top: 40px;
            right: 14px;
        }



        .book-now-img {
            width: calc(100% - 28px);
            margin: 12px 14px;
            border-radius: 12px;
            display: block;
        }



        .swiper-pagination {
            bottom: -2px !important;
        }

        .swiper-pagination-bullet {
            width: 8px;
            height: 8px;
            background: #c9c9c9;
            opacity: 1;
        }

        .swiper-pagination-bullet-active {
            background: #b26be3;
            width: 8px;
            border-radius: 50%;
        }
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    new Swiper(".packageSwiper", {

        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 28,
        loop: false,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 1.15,
                slidesPerGroup: 1,
                spaceBetween: 14
            },

            576: {
                slidesPerView: 1.4,
                slidesPerGroup: 1,
                spaceBetween: 16
            },

            768: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 18
            },

            992: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 28
            }
        }
    });
</script>


<!-- cuatomized section starts -->

<div class="custom-test-section">

    <h2 class="section-title" id="customized">Customized Health Tests</h2>

    <div class="custom-grid">

        <div class="custom-card search-item-box" data-title="MEN" data-type="custom">
            <img src="{{ asset('assets/men.png') }}">
            <p>MEN</p>
        </div>

        <div class="custom-card search-item-box" data-title="WOMAN" data-type="custom">
            <img src="{{ asset('assets/women.png') }}">
            <p>WOMAN</p>
        </div>

        <div class="custom-card search-item-box" data-title="PREVENTIVE HEALTH" data-type="custom">
            <img src="{{ asset('assets/women.png') }}">
            <p>PREVENTIVE HEALTH</p>
        </div>

        <div class="custom-card search-item-box" data-title="SENIOR CITIZENS" data-type="custom">
            <img src="{{ asset('assets/senior.png') }}">
            <p>SENIOR CITIZENS</p>
        </div>

        <div class="custom-card search-item-box" data-title="ALLTESTS" data-type="custom">
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

<div class="test-modal" id="testModal">

    <div class="modal-box">

        <button class="close-modal" id="closeModal">×</button>

        <div class="modal-top">

            <button class="nav-btn">‹</button>

            <div class="top-card">
                <img src="{{ asset('assets/men.png') }}">
                <h3 id="modalTitle">MEN</h3>
            </div>

            <button class="nav-btn">›</button>

        </div>
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modalHeading">Tests related to Men</h2>
            </div>
            <div class="test-list" id="testList"></div>
        </div>

    </div>

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
        bottom: 44px;
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

    .test-modal {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.35);
        z-index: 9999;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

    .modal-box {
        width: 100%;
        max-width: 1050px;
        background: #fff;
        border-radius: 35px;
        position: relative;
        overflow: hidden;
        border: 2px solid #7f49b7;
    }

    .close-modal {
        position: absolute;
        top: 5px;
        right: 48px;
        border: none;
        background: none;
        font-size: 54px;
        color: #f28b00;
        cursor: pointer;
        z-index: 10;
    }

    .modal-top {
        background: #e9daf4;
        height: 170px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 40px;
        border-bottom-left-radius: 45px;
        border-bottom-right-radius: 45px;
    }

    .nav-btn {
        width: 42px;
        height: 42px;
        border-radius: 50%;
        border: none;
        background: #fff;
        font-size: 34px;
        color: #6c35aa;
        cursor: pointer;
    }

    .top-card {
        background: #fff;
        width: 180px;
        height: 125px;
        border-radius: 25px;
        text-align: center;
        padding-top: 18px;
        border: 1px solid #c79be8;
    }

    .top-card img {
        width: 45px;
        margin-bottom: 10px;
    }

    .top-card h3 {
        color: #5f2d91;
        font-size: 15px;
        font-weight: 700;
    }

    .modal-content {
        padding: 8px 51px;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .modal-header h2 {
        padding: 0 78px 13px 0;
        color: #4c4b4b;
        font-family: "Maven Pro";
        font-size: 20.176px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
        width: 100%;
    }

    .tabs {
        display: flex;
        gap: 20px;
    }

    .tab-btn {
        border: none;
        padding: 3px 31px;
        border-radius: 10px;
        background: #fff;
        border: 1px solid #ccc;
        font-weight: 600;
        cursor: pointer;
    }

    .tab-btn.active {
        background: #a55bd8;
        color: #fff;
    }

    .test-list {
        max-height: 350px;
        overflow-y: auto;
        padding-right: 10px;
    }

    .test-list::-webkit-scrollbar {
        width: 8px;
    }

    .test-list::-webkit-scrollbar-thumb {
        background: #999;
        border-radius: 20px;
    }

    .test-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 40px;
    }

    .test-item h3 {
        margin: 0;
        color: #5c2d91;
        font-family: Maven Pro;
        font-size: 20.176px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .test-item p {
        margin: 0;
        color: #a965d6;
        font-family: Maven Pro;
        font-size: 16px;
        font-style: normal;
        font-weight: 600;
        line-height: normal;
    }

    .test-item small {
        font-size: 24px;
        color: #444;
    }

    .test-price {
        margin-top: 6px;
        font-size: 16px;
        font-weight: 600;

    }

    .add-btn {
        border: 1px solid #7c3db6;
        background: #fff;
        color: #7c3db6;
        height: 34px;
        width: 120px;
        border-radius: 6px;
        font-size: 18px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 0 0 13px;
        cursor: pointer;
    }

    .add-btn span a {
        width: 45px;
        height: 34px;
        background: #6f2dad;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 34px;
        border-radius: 0 7px 4px 0;
        text-decoration: none !important;
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
        .custom-grid {
            grid-template-columns: repeat(3, 1fr);
        }

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
        .book-btn {
            left: 20px;
            bottom: 15px;
            padding: 10px 18px;
            font-size: 14px;
        }

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

        .modal-box {
            border-radius: 20px;
            width: 100%;
            max-height: 100vh;
            height: auto;
            overflow: hidden;
        }

        .modal-top {
            height: auto;
            padding: 20px;
        }

        .top-card {
            width: 140px;
            height: 110px;
        }

        .top-card h3 {
            font-size: 13px;
        }

        .modal-content {
            padding: 20px;
        }

        .modal-header {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
            margin-bottom: 2px;
        }

        .modal-header h2 {
            font-size: 15px;
        }

        .tabs {
            width: 100%;
        }

        .tab-btn {
            width: 100%;
            padding: 12px;
        }

        .test-item {
            align-items: flex-start;
            gap: 4px;
            margin-bottom: 10px;
        }

        .test-item h3 {
            font-size: 12px;
        }

        .test-item p {
            font-size: 13px;
        }

        .test-item small {
            font-size: 14px;
        }

        .test-list {
            max-height: 55vh;
            overflow-y: auto;
            -webkit-overflow-scrolling: touch;
        }

        .add-btn {
            width: 88px;
            font-size: 17px;
            height: 24px;
            /* padding-left: 20px; */
        }

        .add-btn span {
            width: 38px;
            height: 40px;
            font-size: 24px;
        }

        .add-btn span a {
            width: 35px;
            height: 25px;
            background: #6f2dad;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 30px;
            border-radius: 0 7px 4px 0;
            text-decoration: none !important;
            margin-top: 7px;
        }

        .close-modal {
            position: absolute;
            top: 1px;
            right: 27px;
            border: none;
            background: none;
            font-size: 44px;
            color: #f28b00;
            cursor: pointer;
            z-index: 10;
        }
    }

    @media (max-width: 576px) {
        .custom-grid {
            grid-template-columns: repeat(2, 1fr);
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
            border-radius: 8px;
            margin: -1px 2px -7px -5px;
            padding: 2px 5px 2px 5px;
            font-size: 11px;
        }
    }
</style>

<script>
    const modal = document.getElementById('testModal');
    const closeModal = document.getElementById('closeModal');

    const cards = document.querySelectorAll('.custom-card');

    const modalTitle = document.getElementById('modalTitle');
    const modalHeading = document.getElementById('modalHeading');
    const testList = document.getElementById('testList');


    const testData = {

        "MEN": [{
                name: "Prostate Specific Antigen",
                price: "Starting from Rs."
              
            },
            {
                name: "SEMEN TEST",
                price: "Starting from Rs."
            },
            {
                name: "TESTOSTERONE",
                price: "Starting from Rs."
            },
            {
                name: " NEU- ENERGY & METABOLIS",
                price: "Starting from Rs.1000"
            },
            {
                name: "NEU- STAMINA & ENDURANCE",
                price: "Starting from Rs.1800"
            },
            {
                name: "NEU-VITAMINS & MINERALS",
                price: "Starting from Rs.3250"
            },
            {
                name: "NEU- INFLAMMATION & RECOVERY",
                price: "Starting from Rs.2500"

            }
        ],

        "WOMAN": [{
                name: "DUAL MARKER",
                price: "Starting from Rs.",
            },
            {
                name: "Quadraple marker",
                price: "Starting from Rs.",
            },
            {
                name: "NIPT",
                price: "Starting from Rs.",
            },
            {
                name: "PAP SMEAR",
                price: "Starting from Rs.",
            },
            {
                name: "NEU- ENERGY & METABOLISM",
                price: "Starting from Rs.1000"
            },
            {
                name: "NEU- STAMINA & ENDURANCE",
                price: "Starting from Rs.1800"
            },
            {
                name: "NEU-VITAMINS & MINERALS",
                price: "Staring from Rs.3250"
            },
            {
                name: "NEU- INFLAMMATION & RECOVERY",
                price: "Starting from Rs.2500"
            },

        ],

        "PREVENTIVE HEALTH": [{
                name: "Basic Body Profile New",
                price: "Starting from Rs.1600",
            },
            {
                name: "Basic Body Profile P1",
                price: "Starting from Rs.1760",
            },
            {
                name: "Basic Body Profile P2",
                price: "Starting from Rs.1760",
            },
            {
                name: "Basic Body Profile P3",
                price: "Starting from Rs.1980",
            },
            {
                name: "Basic Body Profile P4",
                price: "Starting from Rs.3520"
            }

        ],

        "SENIOR CITIZENS": [{
                name: "NEU NURTURER Package",
                price: "Starting from Rs.2800"
            }

        ],

        "ALLTESTS": [{
                name: "Complete Blood Count (CBC)",
                price: "Starting from Rs.160"
            },
            {
                name: "ESR (Erythrocyte Sedimentation Rate)",
                price: "Starting from Rs.120"
            },
            {
                name: "Fasting Blood Sugar (FBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "Post Prandial Blood Sugar (PPBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "Random Blood Sugar (RBS)",
                price: "Starting from Rs.50"
            },
            {
                name: "HbA1c (Glycated Hemoglobin)",
                price: "Starting from Rs.450"
            },
            {
                name: "Total Cholesterol",
                price: "Starting from Rs.130"
            },
            {
                name: "SGPT (ALT)",
                price: "Starting from Rs.100"
            },
            {
                name: "SGOT (AST)",
                price: "Starting from Rs.100"
            },
            {
                name: "Liver Function Test (LFT Panel)",
                price: "Starting from Rs.350"
            },
            {
                name: "Renal Function Test",
                price: "Starting from Rs.380"
            },
            {
                name: "Serum Creatinine",
                price: "Starting from Rs.110"
            },
            {
                name: "Blood Urea",
                price: "Starting from Rs.100"
            },
            {
                name: "Uric Acid",
                price: "Starting from Rs.100"
            },
            {
                name: "Thyroid Function test(TFT)",
                price: "Starting from Rs.250"
            },
            {
                name: "TSH",
                price: "Starting from Rs.180"
            },
            {
                name: "T3",
                price: "Starting from Rs.200"
            },
            {
                name: "T4",
                price: "Starting from Rs.200"
            },
            {
                name: "Sodium (Na⁺)",
                price: "Starting from Rs.130"
            },
            {
                name: "Potassium (K⁺)",
                price: "Starting from Rs.130"
            },
            {
                name: "Calcium",
                price: "Starting from Rs.130"
            },
            {
                name: "Vitamin D (25-OH)",
                price: "Starting from Rs.1400"
            },
            {
                name: "Vitamin B12",
                price: "Starting from Rs.1200"
            },
            {
                name: "Iron Studies",
                price: "Starting from Rs.500"
            },
            {
                name: "C-Reactive Protein (CRP)",
                price: "Starting from Rs.300"
            },
            {
                name: "Widal Test (Typhoid)",
                price: "Starting from Rs.120"
            },
            {
                name: "Malaria Parasite (MP)",
                price: "Starting from Rs.120"
            },
            {
                name: "HIV I & II",
                price: "Starting from Rs.600"
            },
            {
                name: "HBsAg (Hepatitis B)",
                price: "Starting from Rs.1000"
            },
            {
                name: "HCV MANUAL",
                price: "Starting from Rs.500"
            },
            {
                name: "Urine Routine & Microscopy",
                price: "Starting from Rs.100"
            },
            {
                name: "Urine Culture & Sensitivity",
                price: "Starting from Rs.385"
            },
            {
                name: "Stool Routine Examination",
                price: "Starting from Rs.110"
            },
            {
                name: "Stool Occult Blood",
                price: "Starting from Rs.90"
            },
            {
                name: "PSA",
                price: "Starting from Rs.900"
            },
            {
                name: "HSCRP",
                price: "Starting from Rs.800"
            },
            {
                name: "BLOOD GROUP",
                price: "Starting from Rs.100"
            },
            {
                name: "CEA",
                price: "Starting from Rs.740"
            },
            {
                name: "CA125",
                price: "Starting from Rs.1300"
            },
            {
                name: "CA 19.9",
                price: "Starting from Rs.1500"
            },
            {
                name: "PTINR",
                price: "Starting from Rs.270"
            },
            {
                name: "Rf factor",
                price: "Starting from Rs.300"
            },
            {
                name: "FSH",
                price: "Starting from Rs.600"
            },
            {
                name: "LH",
                price: "Starting from Rs.600"
            },
            {
                name: "PROLACTIN",
                price: "Starting from Rs.330"
            },
            {
                name: "ANTI MULERIN HORMONE",
                price: "Starting from Rs.2100"
            },
            {
                name: "Dengue NS1 / IgM / IgG",
                price: "Starting from Rs.600"
            },
            {
                name: "Amylase",
                price: "Starting from Rs.390"
            },
            {
                name: "Lipase",
                price: "Starting from Rs.390"
            },
            {
                name: "Lipid Profile",
                price: "Starting from Rs.350"
            }
        ]
    };


    cards.forEach(card => {

        card.addEventListener('click', () => {

            let title = card.querySelector('p').innerText.trim();

            modalTitle.innerText = title;
            modalHeading.innerText = "Tests related to " + title;

            let tests = testData[title] || [];

            let html = '';

            tests.forEach(test => {

                html += `
        <div class="test-item">

            <div>
                <h3>${test.name}</h3>
                <p class="test-price">${test.price}</p>
            </div>

            <button class="add-btn">
                Book <span><a href="{{ url('/appointment') }}">+</a></span>
            </button>

        </div>
    `;

            });
            testList.innerHTML = html;

            modal.style.display = 'flex';

        });

    });


    closeModal.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    window.addEventListener('click', (e) => {
        if (e.target == modal) {
            modal.style.display = 'none';
        }
    });
</script>

<!-- customized section ends -->


@include('includes.choose')
@include('includes.footer')