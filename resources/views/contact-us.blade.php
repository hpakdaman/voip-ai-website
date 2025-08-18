@extends('layouts.main')

@section('title', 'Contact VoIP AI Experts - UAE\'s Leading Communication Solutions')

@section('content')

<style>
/* Navbar light text for dark hero sections */
#topnav .navigation-menu > li > a {
    color: white !important;
}
#topnav .navbar-toggle .lines span {
    background-color: white !important;
}
</style>

<!-- Hero Section -->
@include('components.contact-us.hero-section')

<!-- AI Calling Agent Section -->
@include('components.contact-us.ai-calling-agent')

<!-- Contact Methods Section -->
@include('components.contact-us.contact-methods')

<!-- Contact Form Section -->
@include('components.contact-us.contact-form')

@if (session('success') || session('error') || $errors->any())
<script>
document.addEventListener('DOMContentLoaded', function() {
    const messageElement = document.getElementById('contact-message');
    if (messageElement) {
        messageElement.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
});
</script>
@endif

@endsection