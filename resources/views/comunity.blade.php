<!-- resources/views/community.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 animated-title">Community</h1>
    <p class="text-center mb-4 animated-title text-warning">🏗️ the page is still under constracting 🏗️</p>
    <!-- Community Section -->
    <div class="bio-section p-4 animated-title" style="background-color: #f2f2f2; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p style="font-size: 1.2rem; line-height: 1.6;">
            Welcome to the NovelNet community page. Our community is dedicated to bringing together readers and writers from all walks of life. We aim to create a space where book lovers can connect, share their passion for literature, and engage in meaningful discussions.
        </p>
        <p style="font-size: 1.2rem; line-height: 1.6;">
            Here, you can participate in conversations about your favorite books, get updates on upcoming literary events, and find new friends who share your interests. Join us in celebrating the joy of reading and writing!
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
