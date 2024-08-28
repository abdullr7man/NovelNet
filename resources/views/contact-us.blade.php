<!-- resources/views/contact.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4 animated-title">Contact Us</h1>

    <!-- Contact Section -->
    <div class="contact-section p-4 animated-title" style="background-color: #f2f2f2; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
        <p style="font-size: 1.2rem; line-height: 1.6;">
            We'd love to hear from you! If you have any questions, feedback, or suggestions, please reach out to us through the following contact methods:
        </p>
        <ul style="font-size: 1.2rem; line-height: 1.6; list-style-type: none; padding: 0;">
            <li><strong>Email:</strong> <a href="mailto:support@novelnet.com" style="color: #007bff;">support@novelnet.com</a></li>
            <li><strong>Whatssap:</strong> <a href="https://wa.me/(123)456-7890" style="color: #78addf; text-decoration:none;">(123) 456-7890</a></li>
            <li><strong>Address:</strong> 123 Book Lane, Reading City, RC 12345</li>
        </ul>
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
