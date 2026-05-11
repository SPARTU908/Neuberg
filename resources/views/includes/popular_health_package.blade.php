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
'title' => 'Basic Body Profile P1 ',
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
'title' => 'Basic Body Profile P4 ',
'includes' => 'Includes 13 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,25 OH Cholecalciferol (D2+D3),Vitamin B - 12 Level,Glyco Hemoglobin (HbA1c),Renal Function Test
,Skeletal Profile,Liver Function Test,Thyroid Function Test,Lipid Profile,Prostate Specific Antigen level,Urine Examination,',
'old_price' => 3550,
'new_price' => 3520,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'Basic Body Profile P5 ',
'includes' => 'Includes 11 Tests',
'description' => 'Haemogram (CBC),ESR,Glucose - Fasting,Glyco Hemoglobin (HbA1c),Renal Function Test,Liver Function Test,Skeletal ProfileLipid Profile
,Vitamin B - 12 Level,25 OH Cholecalciferol (D2+D3),Urine Examination',
'old_price' => 5000,
'new_price' => 2860,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'NEU NURTURER ',
'includes' => 'Includes 12 Tests',
'description' => 'CBC,ESR,Liver Function Test,Renal Function Test,Lipid Profile,Thyroid Function Test,Glucose - Fasting,Iron Level
,Glyco Hemoglobin (HbA1c),25 OH Cholecalciferol (D2+D3),Vitamin B - 12 Level,Urine Examination,',
'old_price' => 2000,
'new_price' => 2800,
'discount' => '50% OFF',
'image' => 'assets/test.png'
],


[
'title' => 'NEU Health Check-Super  ',
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

<div class="package-section">

    <h2 class="section-title">Popular Health Packages</h2>

    <!-- SWIPER -->
    <div class="swiper packageSwiper">

        <div class="swiper-wrapper">

            @foreach($packages as $package)

            <div class="swiper-slide">

                <div class="package-card">

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

        <!-- PAGINATION -->
        <div class="swiper-pagination"></div>

    </div>

</div>


<div>
    <a href="{{ url('/appointment') }}">
        <picture>

            <source srcset="{{ asset('assets/book-now-mobile.png') }}" media="(max-width: 768px)">

            <img src="{{ asset('assets/book-now-1.png') }}" class="book-now-img">

        </picture>
    </a>
</div>

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

    /* SWIPER */
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

    /* CARD */
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

    /* TABLET */
    @media (max-width: 992px) {

        .package-card {
            height: auto;
            min-height: 290px;
        }
    }

    /* MOBILE */
    @media (max-width: 768px) {

        .package-section {
            margin: 40px auto;
            padding: 0 14px;
        }

        .section-title {
            font-size: 18px;
            margin-bottom: 18px;
        }

        .package-card {
            padding: 14px;
            min-height: 250px;
        }

        .package-card h3 {
            font-size: 14px;
        }

        .includes {
            font-size: 10px;
        }

        .desc {
            font-size: 10px;
            -webkit-line-clamp: 4;
        }

        .new-price {
            font-size: 15px;
        }

        .cart-btn {
            padding: 6px 10px;
            font-size: 11px;
        }

        .corner-icon1 {
            width: 28px;
            top: 35px;
        }

        .book-now-img {
            width: 100%;
            margin: 10px 0;
        }
    }

    /* SMALL MOBILE */
    @media (max-width: 576px) {

        .swiper-slide {
            width: auto !important;
        }

        .package-card {
            min-height: 235px;
            border-radius: 10px;
        }

        .package-card h3 {
            font-size: 12px;
        }

        .desc {
            font-size: 9px;
        }

        .new-price {
            font-size: 13px;
        }

        .cart-btn {
            width: 100%;
            margin-top: 8px;
        }

        .price-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 8px;
        }

        .discount {
            width: 70px;
            height: 20px;
        }

        .discount span {
            font-size: 10px;
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

        /* REMOVE GRID */
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },

        breakpoints: {

            0: {
                slidesPerView: 1.2,
                slidesPerGroup: 1,
                spaceBetween: 12
            },

            576: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 16
            },

            992: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 28
            }
        }
    });
</script>