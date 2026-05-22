@include('includes.header')

<style>

    body{
        background: linear-gradient(
            135deg,
            #fff7ed 0%,
            #fdf4ff 100%
        );
    }

    .login-page-wrapper{

        min-height: 80vh;

        display: flex;
        align-items: center;
        justify-content: center;

        padding: 60px 20px;
    }

    .login-card{

        width: 100%;
        max-width: 430px;

        background: #fff;

        border-radius: 22px;

      padding: 55px 40px;

        box-shadow:
            0 10px 35px rgba(0,0,0,0.08);

        border: 1px solid #f3e8ff;

        position: relative;
    }

    .login-logo{

        text-align: center;
        margin-bottom: 5px;
    }

    .login-logo img{

        width: 180px;
        max-width: 100%;
    }

    .login-title{

        text-align: center;

        font-size: 28px;
        font-weight: 700;

        color: #5b2b90;

        margin-bottom: 8px;
    }

    .login-subtitle{

        text-align: center;

        color: #777;

        font-size: 14px;

        margin-bottom: 30px;
    }

    .login-card label{

        font-size: 14px;
        font-weight: 600;
        color: #444;
          display: inline-block;
    margin-bottom: 8px;
    }
    

    .login-card input{

        width: 100%;

        height: 54px;

        border-radius: 10px;

        border: 1px solid #ddd;

        padding: 0 14px;

        font-size: 14px;

        background: #fafafa;

        transition: 0.3s ease;
    }

    .login-card input:focus{

        border-color: #a855f7;

        box-shadow:
            0 0 0 4px rgba(168,85,247,0.12);

        background: #fff;

        outline: none;
    }

    .remember-row{

        display: flex;
        align-items: center;
        justify-content: space-between;

        margin-top: 18px;
    }

    .remember-left{

        display: flex;
        align-items: center;
        gap: 8px;
    }

    .remember-left input{

        width: 16px;
        height: 16px;
    }

    .remember-left span{

        font-size: 14px;
        color: #555;
    }

    .forgot-link{

        font-size: 13px;
        color: #6c35b3;
        text-decoration: none;
        font-weight: 600;
    }

    .forgot-link:hover{

        text-decoration: underline;
    }

    .login-btn{

        width: 100%;

        height: 52px;

        border: none;

        border-radius: 12px;

        margin-top: 28px;

        background: linear-gradient(
            90deg,
            #6c35b3,
            #9f67e8
        );

        color: white;

        font-size: 16px;
        font-weight: 700;

        cursor: pointer;

        transition: 0.3s ease;
    }

    .login-btn:hover{

        transform: translateY(-1px);

        box-shadow:
            0 10px 20px rgba(108,53,179,0.25);
    }

    .auth-error{

        margin-top: 8px;
        font-size: 13px;
        color: #dc2626;
    }

    .status-message{

        margin-bottom: 18px;

        padding: 12px 14px;

        border-radius: 10px;

        background: #ecfdf5;

        color: #047857;

        font-size: 14px;
    }
    .form-group{
    margin-bottom: 22px;
}

    /* MOBILE */

    @media(max-width:480px){

        .login-card{

            padding: 30px 22px;
        }

        .login-title{

            font-size: 24px;
        }

        .login-logo img{

            width: 150px;
        }
    }

</style>

<div class="login-page-wrapper">

    <div class="login-card">

        <!-- LOGO -->
        <div class="login-logo">

            <img src="{{ asset('assets/logo.png') }}"
                 alt="Neuberg Logo">

        </div>

        <!-- TITLE -->
        <h2 class="login-title">
            Welcome Back
        </h2>

        <p class="login-subtitle">
            Login to continue to your dashboard
        </p>

        <!-- SESSION STATUS -->
        @if (session('status'))

            <div class="status-message">
                {{ session('status') }}
            </div>

        @endif

        <!-- FORM -->
        <form method="POST"
              action="{{ route('login') }}">

            @csrf

            <!-- EMAIL -->
            <div  class="form-group">

                <x-input-label for="email"
                    :value="__('Email Address')" />

                <x-text-input
                    id="email"
                    class="block mt-2 w-full"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username" />

                <x-input-error
                    :messages="$errors->get('email')"
                    class="auth-error" />

            </div>

            <!-- PASSWORD -->
            <div class="mt-4">

                <x-input-label
                    for="password"
                    :value="__('Password')" />

                <x-text-input
                    id="password"
                    class="block mt-2 w-full"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password" />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="auth-error" />

            </div>

            <!-- REMEMBER + FORGOT -->
            <div class="remember-row">

                <label for="remember_me"
                       class="remember-left">

                    <input id="remember_me"
                           type="checkbox"
                           name="remember">

                    <span>
                        Remember me
                    </span>

                </label>

                @if (Route::has('password.request'))

                    <a class="forgot-link"
                       href="{{ route('password.request') }}">

                        Forgot Password?

                    </a>

                @endif

            </div>

            <!-- BUTTON -->
            <button type="submit"
                    class="login-btn">

                Log In

            </button>

        </form>

    </div>

</div>

@include('includes.footer')