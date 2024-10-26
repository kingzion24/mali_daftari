@extends('layouts.guest') 

@section('content')
<div class="auth-container">
    <div class="left-section">
        <img src="{{ asset('images/logo.png') }}" alt="Mali Daftari Logo" class="logo">
        <h2>KARIBU</h2>
        <p>Don't have an account?</p>
        <a href="{{ route('register') }}" class="login-link">Sign Up</a>
    </div>

    <div class="right-section">
        <h1>Login</h1>
        <form method="POST" action="{{ route('login') }}" id="login-form">
            @csrf

            @if ($errors->any())
                <div class="error-messages">
                    @foreach ($errors->all() as $error)
                        <div class="error">{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input id="phone_number" type="text" name="phone_number" placeholder="0712345678" value="{{ old('phone_number') }}" required autofocus aria-label="Phone Number">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required aria-label="Password">
            </div>

            <div class="form-group" style="display: flex; align-items: center;">
                <input type="checkbox" name="remember" id="remember" style="margin-right: 8px;">
                <label for="remember">Remember Me</label>
            </div>

            <button type="submit" class="register-button" id="login-button" disabled>Login</button>

            <div class="mt-4">
                <a href="{{ route('password.request') }}" class="forgot-password-link">Forgot Your Password?</a>
            </div>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const phoneInput = document.getElementById('phone_number');
        const passwordInput = document.getElementById('password');
        const loginButton = document.getElementById('login-button');

        // Function to check if both fields have values
        function validateForm() {
            if (phoneInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                loginButton.disabled = false;
            } else {
                loginButton.disabled = true;
            }
        }

        // Add event listeners to check fields on input
        phoneInput.addEventListener('input', validateForm);
        passwordInput.addEventListener('input', validateForm);
    });
</script>
@endsection
