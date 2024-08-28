@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 animated-title">About Us</h1>

    <!-- Bio Section -->
    <div class="bio-section p-4 animated-title" style="background-color: #f2f2f2; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p style="font-size: 1.2rem; line-height: 1.6;">
            At NovelNet, we are passionate about the world of books. Our mission is to help readers discover new stories and help writers share their work with a broader audience. We believe that reading is a timeless activity that enriches the mind, and we want to encourage people to reconnect with the joy of reading.
        </p>
        <p style="font-size: 1.2rem; line-height: 1.6;">
            Whether you're an avid reader or a budding writer, NovelNet is here to support you. Our platform is designed to make it easier for you to explore, borrow, and enjoy books from a wide range of genres. We hope that NovelNet will be a place where you can find inspiration, knowledge, and entertainment.
        </p>
    </div>
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
