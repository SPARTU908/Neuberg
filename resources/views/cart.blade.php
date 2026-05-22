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
    margin-left:50px;
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
/* =========================
PREMIUM CART DESIGN
========================= */

.selected-tests-wrapper{
    margin-bottom: 25px;
}

.cart-title{
    font-size: 18px;
    color: #6c35b3;
    font-weight: 700;
    margin-bottom: 16px;
}

.premium-cart-item{
    display: flex;
    justify-content: space-between;
    align-items: center;

    background: #fff;
    border: 1px solid #ead7ff;
    border-radius: 14px;

    padding: 14px 16px;
    margin-bottom: 14px;

    box-shadow: 0 4px 10px rgba(0,0,0,0.06);

    transition: 0.25s ease;
}

.premium-cart-item:hover{
    transform: translateY(-2px);
    box-shadow: 0 8px 18px rgba(108,53,179,0.12);
}

.cart-left{
    flex: 1;
    padding-right: 12px;
}

.cart-test-name{
    font-size: 15px;
    font-weight: 700;
    color: #6c35b3;
    line-height: 1.4;
}

.cart-test-price{
    margin-top: 5px;
    font-size: 14px;
    font-weight: 600;
    color: #555;
}

.cart-right{
    display: flex;
    align-items: center;
    gap: 10px;
}

.qty-btn{
    width: 34px;
    height: 34px;
    border: none;
    border-radius: 50%;

    display: flex;
    align-items: center;
    justify-content: center;

    font-size: 22px;
    font-weight: 700;

    cursor: pointer;
    transition: 0.25s ease;
}

.minus-btn{
    background: #ffe4e6;
    color: #e11d48;
}

.minus-btn:hover{
    background: #fecdd3;
}

.plus-btn{
    background: #ede9fe;
    color: #6c35b3;
}

.plus-btn:hover{
    background: #ddd6fe;
}

.qty-count{
    min-width: 28px;
    text-align: center;

    font-size: 15px;
    font-weight: 700;
    color: #333;
}

/* MOBILE */

@media(max-width:480px){

    .premium-cart-item{
        padding: 12px;
        gap: 10px;
    }

    .cart-test-name{
        font-size: 14px;
    }

    .cart-test-price{
        font-size: 13px;
    }

    .qty-btn{
        width: 30px;
        height: 30px;
        font-size: 20px;
    }

    .cart-right{
        gap: 8px;
    }
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

        {{-- SELECTED TESTS --}}
        <div class="selected-tests-wrapper">

            <h3 class="cart-title">
                Selected tests
            </h3>

          @php
    $groupedCart = collect($cart)
        ->groupBy('name')
        ->map(function($items){
            return [
                'name' => $items->first()['name'],
                'price' => $items->first()['price'],
                'qty' => $items->count(),
            ];
        });
@endphp

@foreach($groupedCart as $item)
                <div class="premium-cart-item">

                    {{-- LEFT --}}
                    <div class="cart-left">

                        <div class="cart-test-name">
                            {{ $item['name'] }}
                        </div>

                        <div class="cart-test-price">
                            ₹{{ $item['price'] }}
                        </div>

                    </div>

                    {{-- RIGHT --}}
                  <div class="cart-right">

    <button type="button"
            class="qty-btn minus-btn qty-action"
            data-action="minus"
            data-name="{{ $item['name'] }}"
            data-price="{{ $item['price'] }}">
        −
    </button>

    <div class="qty-count">
        {{ $item['qty'] }}
    </div>

    <button type="button"
            class="qty-btn plus-btn qty-action"
            data-action="plus"
            data-name="{{ $item['name'] }}"
            data-price="{{ $item['price'] }}">
        +
    </button>

</div>

                </div>

            @endforeach

        </div>

        {{-- MAIN BOOKING FORM --}}
        <form action="{{ route('cart.submit') }}"
              method="POST"
              class="cart-form">

            @csrf

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


<script>

document.querySelectorAll('.qty-action').forEach(button => {

    button.addEventListener('click', function(){

        let action = this.dataset.action;
        let name = this.dataset.name;
        let price = this.dataset.price;

        fetch("{{ route('cart.update.qty') }}", {

            method: 'POST',

            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },

            body: JSON.stringify({
                action: action,
                name: name,
                price: price
            })

        })
        .then(res => res.json())
        .then(data => {

            if(data.success){

                location.reload();
            }

        });

    });

});

</script>
@include('includes.footer')

