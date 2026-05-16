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

    <h2 class="section-title" id="frequently-booked-tests">Frequently Booked Tests</h2>

    <!-- Swiper -->



    <div class="swiper testSwiper">

        <div class="swiper-wrapper">

            @foreach($tests as $test)

            <!-- IMPORTANT -->
            <div class="swiper-slide">

                <div class="test-card">

                   <a href="{{ url('/appointment') }}" class="plus-icon">+</a>

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
        position: static !important;
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

    /* ==============================
   RESPONSIVE FIX
   DESKTOP DESIGN SAME RAHEGA
================================= */

@media (max-width: 1024px) {

    .test-section {
        max-width: 100%;
        padding: 0 16px;
        margin: 60px auto;
    }

    .section-title {
        font-size: 42px;
        line-height: 1.2;
        margin-bottom: 24px;
    }

    .test-card {
        min-height: 185px;
        padding: 18px;
    }

    .test-card h3 {
        font-size: 20px;
        line-height: 1.4;
        padding-right: 28px;
    }

    .includes,
    .report {
        font-size: 16px;
        line-height: 1.5;
    }

    .price {
        font-size: 18px;
    }

    .corner-icon {
        width: 55px;
    }

    .plus-icon {
        width: 44px;
        height: 44px;
        font-size: 34px;
    }
}


/* ==============================
   MOBILE VIEW
   ONLY 1 CARD IN A ROW
================================= */
@media (max-width: 768px) {

    .test-section {
        width: 100%;
        padding: 0 14px;
        margin: 40px auto;
        overflow: hidden;
    }

    .section-title {
        font-size: 20px;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 18px;
        color: #333;
    }

    .testSwiper {
        width: 100%;
        overflow: hidden;
        padding-bottom: 35px;
    }

    .swiper-slide {
        height: auto;
        display: flex;
    }

    .test-card {
        width: 100%;
        min-height: 118px;
        padding: 12px 12px 14px;
        border-radius: 12px;
        position: relative;

        background: #fffdfc;
        border: 1px solid #d7b6ef;
        box-shadow: 0 3px 8px rgba(0, 0, 0, 0.18);
        margin-bottom: 10px;
    }

    .test-card h3 {
        font-size: 13px;
        font-weight: 700;
        line-height: 1.15;
        color: #6c35b3;

        padding-right: 26px;
        margin-bottom: 6px;

        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .includes {
        font-size: 12px;
        font-weight: 600;
        line-height: 1.2;
        color: #b06be0;

        margin-bottom: 10px;
    }

    .report {
        display: none;
    }

    .footer-price {
        margin-top: 0;
    }

    .price {
        font-size: 14px;
        font-weight: 700;
        color: #4a4a4a;
    }

    .corner-icon {
        width: 24px;
        position: absolute;
        bottom: 12px;
        right: 12px;
    }

    .plus-icon {
        width: 26px;
        height: 26px;
        border-radius: 50%;

        position: absolute;
        top: -10px;
        right: -6px;

        background: #6c35b3;
        color: #fff;

        display: flex;
        align-items: center;
        justify-content: center;

        font-size: 22px;
        font-weight: 700;
        line-height: 1;

        text-decoration: none;
    }

    /* PAGINATION */

    .swiper-pagination {
        bottom: -8px !important;
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
<!-- 
<script>
    new Swiper(".testSwiper", {

        slidesPerView: 3,
        slidesPerGroup: 3,
        /* IMPORTANT */

        spaceBetween: 28,
        loop: false,

        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {

            0: {
                slidesPerView: 2.2,
                slidesPerGroup: 2,
                spaceBetween: 12
            },

            576: {
                slidesPerView: 2.5,
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
</script> -->


<script>
   new Swiper(".testSwiper", {

    slidesPerView: 2.2,
    slidesPerGroup: 2,
    spaceBetween: 12,
    loop: false,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },

    breakpoints: {

        0: {
            slidesPerView: 2.2,
            slidesPerGroup: 2,
            spaceBetween: 12,
            grid: {
                rows: 1
            }
        },

        576: {
            slidesPerView: 2.2,
            slidesPerGroup: 2,
            spaceBetween: 14,
            grid: {
                rows: 1
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