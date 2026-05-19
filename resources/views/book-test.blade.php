@section('contain')

@php
    $heroImage = asset('assets/appoinment-banner.png');
    $heroClass = 'appointment-hero';
@endphp


@php
    $heroImage = asset('assets/appoinment-banner.png');
    $heroClass = 'appointment-hero';

    $cart = session('cart', []);
@endphp

@include('includes.header')

<style>

body {
    /* background-image: url(/assets/bg.png); */
    background-size: cover;
    background-repeat: no-repeat;
}

/* CARD CONTAINER */
.enquiry-card {
    width: 420px;
    margin: 80px auto;
    background: rgba(255, 239, 220, 0.3);
    box-shadow: rgba(0, 0, 0, 0.12) 0px 4px 4px;
    padding: 30px;
    border-radius: 12px;
    border: 2px solid #d8b4fe;
}

/* HEADING */
.enquiry-card h2 {
    color: rgb(76, 75, 75);
    font-size: 14px;
    font-weight: 600;
    font-family: "Maven Pro";
    margin: 13px 0px;
}

/* INPUTS */
.enquiry-card input,
.enquiry-card select,
.enquiry-card textarea {
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #cbd5e1;
    background: #f1f5f9;
    font-size: 14px;
    outline: none;
}

/* PLACEHOLDER */
.enquiry-card input::placeholder,
.enquiry-card textarea::placeholder {
    color: #64748b;
}

/* SELECT */
.enquiry-card select {
    color: #6b21a8;
}

/* TEXTAREA */
.enquiry-card textarea {
    resize: none;
    height: 80px;
}

/* BUTTON */
.enquiry-card button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 8px;
    background: var(
        --Orange-Gradient,
        linear-gradient(
            91deg,
            #f7941d 58.96%,
            rgba(255, 173, 75, .86) 98.25%
        )
    );

    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

.enquiry-card button:hover {
    opacity: 0.9;
}

/* MOBILE */
@media (max-width: 480px) {

    .enquiry-card {
        width: 319px;
        margin: 20px auto;
    }
}

/* SUCCESS MESSAGE */
.toast-success {
    background: #22c55e;
    color: #fff;
    padding: 12px 14px;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 14px;
    font-weight: 600;
    animation: fadeIn 0.4s ease;
}

/* ERROR */
.error {
    color: red;
    font-size: 13px;
    margin-top: -10px;
    margin-bottom: 10px;
}

@keyframes fadeIn {

    from {
        opacity: 0;
        transform: translateY(-5px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

</style>

<div class="enquiry-card">

    <h2>Book Test</h2>

    {{-- SUCCESS MESSAGE --}}
    @if(session('success'))
        <div class="toast-success">
            {{ session('success') }}
        </div>
    @endif


    @if(count($cart) > 0)

    <div style="margin-bottom:15px;">
        <h4>Selected Tests:</h4>

        <ul>
            @foreach($cart as $item)
                <li>{{ $item['name'] }} - ₹{{ $item['price'] }}</li>
            @endforeach
        </ul>
    </div>

@endif

    <form action="{{ route('book.test.submit') }}" method="POST">

        @csrf

        {{-- TEST NAME --}}
        {{-- Uncomment if needed --}}
    
        <!-- <input type="text"
               name="test_name"
               value="{{ $test }}"
               readonly>
     -->

     <input type="hidden" name="test_name" value="{{ implode(',', collect($cart)->pluck('name')->toArray()) }}">

        {{-- NAME --}}
        <input type="text"
               name="name"
               placeholder="Full Name"
               value="{{ old('name') }}">

        @error('name')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- PHONE --}}
        <input type="text"
               name="phone"
               placeholder="Phone Number"
               value="{{ old('phone') }}">

        @error('phone')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- EMAIL --}}
        <input type="email"
               name="email"
               placeholder="Email Address"
               value="{{ old('email') }}">

        @error('email')
            <div class="error">{{ $message }}</div>
        @enderror

        {{-- BUTTON --}}
        <button type="submit">
            Book Now Pay Later
        </button>

    </form>

</div>

@include('includes.footer')