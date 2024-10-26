@extends('layouts.guest')

@section('content')
<div class="auth-container flex justify-center items-center h-screen">
    <div class="bg-white shadow-md rounded-lg overflow-hidden flex w-3/4">
        <!-- Left Panel -->
        <div class="left-section bg-black text-white p-8 flex flex-col justify-center w-1/3">
            <div class="text-center">
                <img src="{{ asset('images/logo.png') }}" alt="Mali Daftari Logo" class="logo mx-auto mb-4 w-12 h-12">
                <h2 class="text-3xl font-bold mb-4">KARIBU</h2>
            </div>
        </div>

        <!-- Right Panel -->
        <div class="right-section p-10 flex-1 overflow-y-auto">
            <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
                {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 dark:text-green-400">
                    {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                </div>
            @endif

            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}" class="mr-2">
                    @csrf
                    <button type="submit" class="register-button bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600">
                        {{ __('Resend Verification Email') }}
                    </button>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="login-link underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .auth-container {
        display: flex;
        height: 100vh;
    }

    .left-section {
        background: black;
        color: white;
        width: 30%;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .left-section .logo {
        width: 60px;
        height: 60px;
        margin-bottom: 1rem;
    }

    .left-section h2 {
        font-size: 2rem;
        margin-bottom: 0.5rem;
    }

    .right-section {
        background: white;
        width: 70%;
        padding: 3rem;
        overflow-y: auto;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .register-button {
        background: #4caf50;
        color: white;
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .register-button:hover {
        background-color: #388e3c;
    }

    .error-messages {
        margin-bottom: 1rem;
        color: red;
    }
</style>
@endsection
