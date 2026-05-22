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
'title' => 'NEU Health Check-Super ',
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

    <!-- SWIPER -->
    <div class="swiper packageSwiper">

        <div class="swiper-wrapper">

            @foreach($packages as $package)

            <div class="swiper-slide">

                <div class="package-card search-item-box"
                    data-title="{{ strtolower($package['title']) }}"
                    data-type="package">
                    <div class="discount">
                        <span>{{ $package['discount'] }}</span>
                    </div>

                    <h3>{{ $package['title'] }}</h3>

                    <p class="includes">{{ $package['includes'] }}</p>

                    <p class="desc">
                        {{ $package['description'] }}
                    </p>

                    <!-- <div class="price-row">

                        <div>
                            <div class="new-price">
                                Rs. {{ $package['new_price'] }}
                            </div>
                        </div>

                          <form class="cart-form"
                            action="{{ route('cart.add') }}"
                            method="POST">

                            @csrf

                            <input type="hidden"
                                name="name"
                                value="{{ $package['title'] }}">

                            <input type="hidden"
                                name="price"
                                value="{{ $package['new_price'] }}">

                            <button type="submit" class="cart-btn">
                                Add to Cart
                            </button>

                        </form>



                    </div> -->

                    <div class="price-row">

    <div class="price-box">

        <div class="old-price">
            Rs. {{ $package['old_price'] }}
        </div>

        <div class="new-price">
            Rs. {{ $package['new_price'] }}
        </div>

    </div>

    <form class="cart-form"
        action="{{ route('cart.add') }}"
        method="POST">

        @csrf

        <input type="hidden"
            name="name"
            value="{{ $package['title'] }}">

        <input type="hidden"
            name="price"
            value="{{ $package['new_price'] }}">

        <button type="submit" class="cart-btn">
            Add to Cart
        </button>

    </form>

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
        margin-top: 40px;
    }

    .price-box{
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.old-price{
    font-size: 15px;
    color: #8c8c8c;
    text-decoration: line-through;
    font-weight: 500;
    line-height: 1;
}

.new-price{
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
    /* ======================================
   RESPONSIVE FIX
   DESKTOP DESIGN SAME RAHEGA
====================================== */

    /* TABLET */

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


    /* ======================================
   MOBILE EXACT LOOK
====================================== */

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

        /* DISCOUNT */

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

        /* TITLE */

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

        /* TEXT */

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

        /* PRICE */

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

        /* BUTTON */

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

        /* ICON */

        .corner-icon1 {
            width: 26px;

            position: absolute;
            top: 40px;
            right: 14px;
        }

        /* BANNER */

        .book-now-img {
            width: calc(100% - 28px);
            margin: 12px 14px;
            border-radius: 12px;
            display: block;
        }

        /* PAGINATION */

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
        .old-price{
    font-size: 13px;
}

.new-price{
    font-size: 18px;
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


<script>
document.addEventListener('submit', function(e) {

    // ONLY CART FORM
    if (!e.target.classList.contains('cart-form')) {
        return;
    }

    e.preventDefault();

    let form = e.target;

    let formData = new FormData(form);

    fetch(form.action, {

        method: 'POST',

        headers: {
            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value,
            'Accept': 'application/json',
            'X-Requested-With': 'XMLHttpRequest'
        },

        body: formData
    })

    .then(response => response.json())

    .then(data => {

        console.log(data);

        // TOAST
        let toast = document.getElementById('cartToast');

        if(toast){

            toast.classList.add('show');

            setTimeout(() => {
                toast.classList.remove('show');
            }, 2500);

        }

        // CART COUNT UPDATE
        let cartCount = document.querySelector('.cart-count');

        if(cartCount && data.cart_count !== undefined){

            cartCount.innerText = data.cart_count;

        }

    })

    .catch(error => {

        console.log('Cart Error:', error);

    });

});
</script>