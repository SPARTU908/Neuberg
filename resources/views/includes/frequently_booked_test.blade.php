@php
$tests = [
    [
        'name' => 'Glucose - Fasting',
        'includes' => 'Includes 1 Test',
        'report' => '4 hours',
        'price' => '50'
    ],
    [
        'name' => 'Complete Blood Count',
        'includes' => 'Includes 20 Tests',
        'report' => '6 hours',
        'price' => '250'
    ],
    [
        'name' => 'Thyroid Profile',
        'includes' => 'Includes 3 Tests',
        'report' => '8 hours',
        'price' => '400'
    ],
    [
        'name' => 'Glucose - Fasting',
        'includes' => 'Includes 1 Test',
        'report' => '4 hours',
        'price' => '50'
    ],
    [
        'name' => 'Complete Blood Count',
        'includes' => 'Includes 20 Tests',
        'report' => '6 hours',
        'price' => '250'
    ],
    [
        'name' => 'Thyroid Profile',
        'includes' => 'Includes 3 Tests',
        'report' => '8 hours',
        'price' => '400'
    ],
    [
        'name' => 'Glucose - Fasting',
        'includes' => 'Includes 1 Test',
        'report' => '4 hours',
        'price' => '50'
    ],
    [
        'name' => 'Complete Blood Count',
        'includes' => 'Includes 20 Tests',
        'report' => '6 hours',
        'price' => '250'
    ],
    [
        'name' => 'Thyroid Profile',
        'includes' => 'Includes 3 Tests',
        'report' => '8 hours',
        'price' => '400'
    ],
    [
        'name' => 'Glucose - Fasting',
        'includes' => 'Includes 1 Test',
        'report' => '4 hours',
        'price' => '50'
    ],
    [
        'name' => 'Complete Blood Count',
        'includes' => 'Includes 20 Tests',
        'report' => '6 hours',
        'price' => '250'
    ],
    [
        'name' => 'Thyroid Profile',
        'includes' => 'Includes 3 Tests',
        'report' => '8 hours',
        'price' => '400'
    ]
];
@endphp




<div class="test-section">

    <h2 class="section-title">Frequently Booked Tests</h2>

 <div class="test-grid">

@foreach($tests as $test)
    <div class="test-card">
        <div class="plus-icon">+</div>

        <h3>{{ $test['name'] }}</h3>
        <p class="includes">{{ $test['includes'] }}</p>
        <p class="report">Report within <strong>{{ $test['report'] }}</strong></p>
        <p class="price">Rs. {{ $test['price'] }}</p>

        <img src="{{ asset('assets/test.png') }}" class="corner-icon">
    </div>
@endforeach

</div>

</div>

<style>

.test-section {
    max-width: 1060px;
    margin: 80px auto;  
    padding: 0 20px;     
}
.section-title {
    font-size: 22px;
    font-weight: 600;
    color: #333;
    margin-bottom: 25px;
}
   .test-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
}

@media (max-width: 992px) {
    .test-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}


@media (max-width: 768px) {
    .test-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}


@media (max-width: 480px) {
    .test-grid {
        grid-template-columns: 1fr;
    }
}


.test-card {
    background: #fff;
    border: 1px solid #e3d7f2;
    border-radius: 12px;
    padding: 18px;
    position: relative;
    box-shadow: 0 4px 10px rgba(90, 45, 145, 0.08);
    transition: 0.3s;
}


.test-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 14px rgba(90, 45, 145, 0.15);
}


.plus-icon {
    position: absolute;
    top: -12px;
    right: 12px;
    width: 28px;
    height: 28px;
    background: #5a2d91;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 18px;
}
 .test-card h3 {
    font-size: 14px;
    font-weight: 600;
    color: #5a2d91;
    margin-bottom: 6px;
    line-height: 1.4;
}

@media (max-width: 480px) {
    .test-card {
        padding: 15px;
    }

    .price {
        font-size: 13px;
    }
}


.includes {
    font-size: 12px;
    color: #a066d3;
    margin-bottom: 6px;
}

.report {
    font-size: 12px;
    color: #666;
    margin-bottom: 12px;
}

.price {
    font-size: 14px;
    font-weight: 600;
    color: #333;
}

.corner-icon {
    position: absolute;
    bottom: 12px;
    right: 12px;
    width: 28px;
}

</style>