@extends('layouts.app')

@section('title', 'Welcome to QBUY')

@section('content')
<div class="home-container">
    <div class="welcome-card">
        <h1>Welcome to QBuy</h1>
        <p>Your one-stop shop for all your needs!</p>
        <a href="{{ url('/collections') }}" class="btn-view-more">Shop Now</a>
    </div>
</div>
@endsection