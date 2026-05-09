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



<div class="package-section">

    <h2 class="section-title">Popular Health Packages</h2>

    <div class="package-grid">

        @foreach($packages as $package)
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
                    <!-- <span class="old-price">Rs. {{ $package['old_price'] }}</span> -->
                    <div class="new-price">Rs. {{ $package['new_price'] }}</div>
                </div>

                <button class="cart-btn">Add to Cart</button>
            </div>

            <img src="{{ asset($package['image']) }}" class="corner-icon1">

        </div>
        @endforeach

    </div>

</div>

</div>


<div>
    <a href="{{ url('/appointment') }}">
        <picture>
            <!-- Mobile Image -->
            <source srcset="{{ asset('assets/book-now-mobile.png') }}" media="(max-width: 768px)">

            <!-- Default/Desktop Image -->
            <img src="{{ asset('assets/book-now-1.png') }}" class="book-now-img">
        </picture>

    </a>

</div>


<style>
    .package-section {
       max-width: 1007px;
        margin: 80px auto;
        padding: 0 10px;
    }

    .section-title {
        font-size: 22px;
        font-weight: 600;
        margin-bottom: 25px;
    }


    .package-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }


    .package-card {
        padding: 18px;
        position: relative;
        transition: 0.3s;
        width: 100%;
        height: auto;
        border-radius: 8px;
        border: 1.2px solid #cfa8e9;
        background: #fef7f3;
        box-shadow: 0 4.8px 4.8px #00000040;
        width: 305px;
        height: 286px;

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
        font-size: 12px;
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
        font-style: normal;
        font-weight: 700;
        line-height: normal;
    }


    .package-card h3 {
        font-size: 17px;
        color: #5a2d91;
        font-weight: 550;
        margin-bottom: 6px;
        margin-top: 25px;
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
    }


    .price-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
    }


    .old-price {
        font-size: 12px;
        color: #999;
        text-decoration: line-through;
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
        margin-top: 11px;
    }

    .cart-btn:hover {
        opacity: 0.9;
    }

    /* Corner icon */
    .corner-icon1 {
        position: absolute;
        top: 41px;
        right: 15px;
        width: 40px;
    }

    .book-now-wrapper {
        width: 100%;
        display: flex;
        justify-content: center;
        /* center by default */
        margin: 20px 10px;
    }



    /* Hover effect */
    .book-now:hover {
        transform: scale(1.03);
    }

    /* ========================= */
    /* 📱 TABLET */
    @media (max-width: 992px) {
        .book-now {
            max-width: 400px;
        }
    }

    /* 📱 MOBILE */
    @media (max-width: 768px) {
        .book-now {
            max-width: 300px;
        }
    }

    /* 📱 SMALL MOBILE */
    @media (max-width: 480px) {
        .book-now {
            max-width: 90%;
        }
    }

    .book-now-wrapper {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 999;
    }

    .book-now {
        width: 971px;
        margin: 8px 185px;
    }

    /* ========================= */
    /* 💻 LARGE TABLETS (<= 1200px) */
    @media (max-width: 1200px) {
        .package-section {
            max-width: 95%;
        }

        .package-card {
            width: 100%;
        }
    }


    /* ========================= */
    /* 📱 TABLETS (<= 992px) */
    @media (max-width: 992px) {

        .package-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .package-card {
            width: 100%;
            height: auto;
        }

        .price-row {
            margin-top: 25px;
        }
    }


    /* ========================= */
    /* 📱 MOBILE (<= 768px) */
    @media (max-width: 768px) {

        .package-grid {
            grid-template-columns: 1fr;
        }

        .package-section {
            margin: 40px 10px;
        }

        .package-card {
            padding: 15px;
        }

        .package-card h3 {
            font-size: 15px;
        }

        .desc {
            font-size: 11px;
        }

        .new-price {
            font-size: 16px;
        }

        .cart-btn {
            padding: 6px 10px;
            font-size: 12px;
        }

        .corner-icon1 {
            width: 30px;
        }
    }


    /* ========================= */
    /* 📱 SMALL MOBILE (<= 480px) */
    @media (max-width: 480px) {

        .package-card {
            border-radius: 10px;
        }

        .price-row {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .cart-btn {
            width: 100%;
            text-align: center;
        }

        .discount {
            font-size: 10px;
            padding: 3px 8px;
        }
    }
</style>