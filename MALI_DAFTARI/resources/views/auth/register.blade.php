@extends('layouts.guest')

@section('mali_daftari', 'Sign Up - Mali Daftari')

@section('content')
<div class="auth-container">
    <div class="left-section">
        <img src="{{ asset('images/logo.png') }}" alt="Mali Daftari Logo" class="logo">
        <h2>KARIBU</h2>
        <p>Already have an account?</p>
        <a href="{{ route('login') }}" class="login-link">Login</a>
    </div>

    <div class="right-section">
        <h1>Sign Up</h1>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <h2>Personal Information</h2>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="form-group">
                <label for="phone_number">Phone Number</label>
                <input id="phone_number" type="number" name="phone_number" placeholder="07123456654" value="{{ old('phone_number') }}" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required>
            </div>

            <div class="form-group">
                <label for="terms_accepted">Accept Terms</label>
                <input id="terms_accepted" type="checkbox" name="terms_accepted" value="1" required>
            </div>
            
            <h2>Business Information</h2>
            
            <div class="form-group">
                <label for="business_name">Business Name</label>
                <input id="business_name" type="text" name="business_name" value="{{ old('business_name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="business_type">Business Type</label>
                <select id="business_type" name="business_type" required>
                    <option value="" disabled selected>Select your business type</option>
                    <option value="retail">Retail</option>
                    <option value="wholesale">Wholesale</option>
                    <option value="service">Service</option>
                    <option value="manufacturing">Manufacturing</option>
                    <option value="agriculture">Agriculture</option>
                    <!-- Add more options as needed -->
                </select>
            </div>

            <div class="form-group">
                <label for="business_location">Business Location</label>
                <input id="business_location" type="text" name="business_location" value="{{ old('business_location') }}" required>
            </div>

            <button type="submit" class="register-button">Register</button>
        </form>
    </div>
</div>
@endsection
