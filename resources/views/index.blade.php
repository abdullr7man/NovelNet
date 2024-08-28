@extends('layouts.app')

@section('content')
<div class="container-fluid text-center" style="height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <!-- Animated Website Name -->
    <h1 class="animated-title" style="font-size: 3rem; font-weight: bold;">NovelNet</h1>
    <h5 class="animated-title">A world of stories, one click away</h5>

    <!-- Browse Books Button -->
    <a href="{{ route('home.books') }}" class="btn btn-outline-dark mt-4 animated-title-btn" style="font-size: 20px; padding: 5px 20px;">Browse Novels</a>
</div>

<!-- Footer -->
<footer class="text-center mt-auto py-5 animated-footer" style="background-color: #f8f9fa; opacity: 0;">
    <h2 style="font-weight: bold; margin-bottom: 20px;">NovelNet</h2>
    <div class="social-links">
        <a href="https://www.instagram.com" target="_blank" class="mx-2">
            <img src="{{ asset('Icons/instagram.png') }}" width="30" alt="Instagram">
        </a>
        <a href="https://www.twitter.com" target="_blank" class="mx-2">
            <img src="{{ asset('Icons/twitter.png') }}" width="30" alt="Twitter">
        </a>
        <a href="https://www.facebook.com" target="_blank" class="mx-2">
            <img src="{{ asset('Icons/facebook.png') }}" width="30" alt="Facebook">
        </a>
        <a href="https://www.linkedin.com" target="_blank" class="mx-2">
            <img src="{{ asset('Icons/linkedin.png') }}" width="30" alt="LinkedIn">
        </a>
    </div>
</footer>
@endsection
