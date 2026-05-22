@section('contain')

@php
    $heroImage = asset('assets/appoinment-banner.png');
     $heroClass = 'appointment-hero';
       $cart = session('cart', []);
@endphp

@include('includes.header')


 <style>

 body {
    /*background-image: url(/assets/bg.png);*/
            background-size: cover;
            background-repeat: no-repeat;
}

/* Card container */
.enquiry-card {
    width: 420px;
    margin: 80px auto;
    background: rgba(255, 239, 220, 0.3);
    box-shadow: rgba(0, 0, 0, 0.12) 0px 4px 4px;
    padding: 30px;
    border-radius: 12px;
    border: 2px solid #d8b4fe;
   
}

/* Heading */
.enquiry-card h2 {
    color: rgb(76, 75, 75);
    font-size: 14px;
    font-weight: 600;
    font-family: "Maven Pro";
    margin: 13px 0px;
}

/* Inputs */
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

/* Placeholder */
.enquiry-card input::placeholder,
.enquiry-card textarea::placeholder {
    color: #64748b;
}







/* Select styling */
.enquiry-card select {
    color: #6b21a8;
}

/* Textarea */
.enquiry-card textarea {
    resize: none;
    height: 80px;
}


.enquiry-card button {
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 8px;
    background: var(--Orange-Gradient, linear-gradient(91deg, #f7941d 58.96%, rgba(255, 173, 75, .86) 98.25%));
    color: #fff;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

.enquiry-card button:hover {
    opacity: 0.9;
}



@media (max-width: 480px) {
  .enquiry-card {
         width: 319px;
         margin: 20px auto;
    } 
}

.toast-success{
    background: #22c55e;
    color: #fff;
    padding: 12px 14px;
    border-radius: 8px;
    margin-bottom: 15px;
    font-size: 14px;
    font-weight: 600;
    animation: fadeIn 0.4s ease;
}

.error{
    color: red;
    font-size: 13px;
    margin-top: -10px;
    margin-bottom: 10px;
}

@keyframes fadeIn{
    from{
        opacity:0;
        transform:translateY(-5px);
    }
    to{
        opacity:1;
        transform:translateY(0);
    }
}

 </style>

<div class="enquiry-card">

    @if(count($cart) > 0)

        <h2>Book Appointment</h2>

        {{-- SUCCESS MESSAGE --}}
        @if(session('success'))
            <div class="toast-success">
                {{ session('success') }}
            </div>
        @endif

        {{-- WHATSAPP REDIRECT --}}
        @if(session('whatsapp_url'))
        <script>
            setTimeout(() => {
                window.location.href = "{{ session('whatsapp_url') }}";
            }, 1500);
        </script>
        @endif

        {{-- SELECTED TESTS --}}
        <div style="margin-bottom:20px;">

            <h3 style="
                font-size:15px;
                margin-bottom:12px;
                color:#6c35b3;
                font-weight:700;
            ">
                Selected Tests
            </h3>

            @foreach($cart as $item)

                <div style="
                    background:#fff;
                    border:1px solid #e9d5ff;
                    border-radius:8px;
                    padding:10px 12px;
                    margin-bottom:10px;
                ">

                    <div style="
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                    ">

                        <div>
                            <strong style="color:#6c35b3;">
                                {{ $item['name'] }}
                            </strong>

                            <div style="
                                font-size:13px;
                                color:#555;
                                margin-top:4px;
                            ">
                                ₹{{ $item['price'] }}
                            </div>
                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- FORM --}}
        <form method="POST" action="{{ route('cart.submit') }}">

            @csrf

            {{-- HIDDEN TEST NAMES --}}
            <input type="hidden"
                name="test_name"
                value="{{ implode(',', collect($cart)->pluck('name')->toArray()) }}">

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

            <button type="submit">
                Book Now Pay Later
            </button>

        </form>

    @else

        {{-- EMPTY CART MESSAGE --}}
        <div style="text-align:center; padding:20px 10px;">

            <h3 style="
                color:#6c35b3;
                margin-bottom:10px;
                font-size:20px;
            ">
                Your Cart is Empty
            </h3>

            <p style="
                color:#666;
                font-size:14px;
                line-height:1.6;
                margin-bottom:20px;
            ">
                Please add diagnostic tests to your cart
                before booking an appointment.
            </p>

            <a href="{{ url('/') }}"
               style="
                    display:inline-block;
                    padding:12px 20px;
                    border-radius:8px;
                    text-decoration:none;
                    color:#fff;
                    font-weight:600;
                    background:linear-gradient(
                        91deg,
                        #f7941d 58.96%,
                        rgba(255,173,75,.86) 98.25%
                    );
               ">
                Browse Tests
            </a>

        </div>

    @endif

</div>



@include('includes.footer')