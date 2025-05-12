@extends('layouts.app')

@section('title', 'Reset Password')

@section('content')
<div class="login-container">
    <div class="login-card">
        <h2 class="login-title">Reset Your Password</h2>
        <p class="login-subtitle">Enter your email to reset your password</p>
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" type="email" class="form-control 
                @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="btn-login">Send Password Reset Link</button>
            </div>
        </form>
    </div>
</div>
@endsection