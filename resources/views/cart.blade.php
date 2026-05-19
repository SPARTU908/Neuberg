@section('contain')

@php
    $heroImage = asset('assets/appoinment-banner.png');
    $heroClass = 'appointment-hero';
    $cart = session('cart', []);
@endphp

@include('includes.header')

@if(session('success'))

    <div class="toast-success" id="toastMessage">
        {{ session('success') }}
    </div>

@endif

<style>

.cart-wrapper{
    width: 420px;
    margin: 60px auto;
    padding: 30px;
    border-radius: 14px;
    border: 2px solid #d8b4fe;
    background: rgba(255,239,220,0.3);
    box-shadow: 0 4px 10px rgba(0,0,0,0.12);
}

.cart-wrapper h2{
    margin-bottom: 20px;
    font-size: 24px;
    color: #4c4b4b;
}

.cart-list{
    margin-bottom: 20px;
}

.cart-item{
    padding: 12px;
    border-radius: 10px;
    background: #fff;
    margin-bottom: 10px;
    border: 1px solid #e9d5ff;

    display: flex;
    justify-content: space-between;
    align-items: center;
}

.remove-btn{
    background: #ef4444;
    color: white;
    padding: 6px 10px;
    border-radius: 6px;
    text-decoration: none;
    font-size: 12px;
}

.clear-cart{
    display: inline-block;
    margin-bottom: 20px;
    color: #ef4444;
    text-decoration: none;
    font-weight: 600;
}

/* FORM */

.cart-form input{
    width: 100%;
    padding: 12px 14px;
    margin-bottom: 15px;
    border-radius: 8px;
    border: 1px solid #cbd5e1;
    background: #f1f5f9;
    outline: none;
}

.cart-form button{
    width: 100%;
    padding: 14px;
    border: none;
    border-radius: 8px;

    background: linear-gradient(
        91deg,
        #f7941d 58.96%,
        rgba(255,173,75,.86) 98.25%
    );

    color: white;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
}

.cart-form button:hover{
    opacity: 0.9;
}

.empty-cart{
    text-align: center;
    color: #666;
    margin-top: 20px;
}

/* MOBILE */

@media(max-width:480px){

    .cart-wrapper{
        width: 92%;
        padding: 20px;
        margin: 30px auto;
    }

    .cart-item{
        flex-direction: column;
        align-items: flex-start;
        gap: 10px;
    }
}

/* TOAST */

.toast-success{
    position: fixed;
    top: 20px;
    right: 20px;
    background: #16a34a;
    color: white;
    padding: 14px 20px;
    border-radius: 10px;
    font-size: 14px;
    font-weight: 600;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    z-index: 9999;

    animation: slideIn 0.4s ease;
}

@keyframes slideIn{
    from{
        transform: translateX(100%);
        opacity: 0;
    }
    to{
        transform: translateX(0);
        opacity: 1;
    }
}

@keyframes fadeOut{
    to{
        opacity: 0;
        transform: translateX(100%);
    }
}

</style>


<div class="cart-wrapper">

    <h2>Book an Appointment</h2>

    @if(count($cart) > 0)

        <!-- <div class="cart-list">

            @foreach($cart as $key => $item)

                <div class="cart-item">

                    <div>
                        <strong>{{ $item['name'] }}</strong><br>
                        ₹{{ $item['price'] }}
                    </div>

                    <a href="{{ route('cart.remove', $key) }}"
                       class="remove-btn">
                        Remove
                    </a>

                </div>

            @endforeach

        </div> -->

        <!-- <a href="{{ route('cart.clear') }}"
           class="clear-cart">
            Clear Cart
        </a> -->


        {{-- FORM --}}
       <form action="{{ route('book.test.submit') }}"
      method="POST"
      class="cart-form">

    @csrf

    {{-- SELECTED TESTS --}}
    <div style="margin-bottom:20px;">

        <h3 style="
            font-size:16px;
            margin-bottom:12px;
            color:#6c35b3;
            font-weight:700;
        ">
            Carts
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
                    gap:10px;
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


    {{-- HIDDEN TEST NAMES --}}
    <input type="hidden"
           name="test_name"
           value="{{ implode(',', collect($cart)->pluck('name')->toArray()) }}">


    {{-- FULL NAME --}}
    <input type="text"
           name="name"
           placeholder="Full Name"
           value="{{ old('name') }}">


    {{-- PHONE --}}
    <input type="text"
           name="phone"
           placeholder="Phone Number"
           value="{{ old('phone') }}">


    {{-- EMAIL --}}
    <input type="email"
           name="email"
           placeholder="Email Address"
           value="{{ old('email') }}">


    {{-- BUTTON --}}
    <button type="submit">
        Book Now Pay Later
    </button>

</form>

    @else

        <div class="empty-cart">
            No tests selected
        </div>

    @endif

</div>


<script>

    const toast = document.getElementById('toastMessage');

    if(toast){

        setTimeout(() => {
            toast.style.animation = 'fadeOut 0.5s ease forwards';
        }, 3000);

        setTimeout(() => {
            toast.remove();
        }, 3500);
    }

</script>

@include('includes.footer')

