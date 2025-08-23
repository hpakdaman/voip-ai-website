@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center for Travel Agencies - UAE Tourism & Hotel Booking Solutions')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/travel-services.css') }}">
@endpush

@section('content')

{{-- Hero Section with Voice Demo --}}
@include('components.solutions.hero-demo')

{{-- Problem vs Solution Showcase --}}
@include('components.solutions.problem-solution', ['boxHeight' => '250px'])

{{-- AI Capabilities for Travel Services --}}
@include('components.solutions.ai-capabilities')

{{-- Voice Samples Section --}}
@include('components.solutions.voice-samples')

{{-- ROI Calculator --}}
@include('components.solutions.roi-calculator')

{{-- Success Stories & Testimonials --}}
@include('components.solutions.success-stories')

{{-- Feature Showcase with Visuals --}}
@include('components.solutions.feature-showcase')

{{-- Strong Conversion CTA --}}
@include('components.solutions.cta-conversion')

@endsection

@push('scripts')
<script>
// Travel Services Solutions Page Analytics
document.addEventListener('DOMContentLoaded', function() {
    // Track voice demo interactions
    const audioDemos = document.querySelectorAll('.voice-demo-player audio');
    audioDemos.forEach(audio => {
        audio.addEventListener('play', function() {
            console.log('Travel demo played:', this.dataset.demoType);
        });
    });
    
    // Track ROI calculator usage
    const roiCalculator = document.getElementById('roi-calculator');
    if (roiCalculator) {
        roiCalculator.addEventListener('change', function() {
            console.log('Travel ROI calculator interaction');
        });
    }
    
    // Track CTA clicks
    const ctaButtons = document.querySelectorAll('[data-cta-track]');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('Travel CTA clicked:', this.dataset.ctaTrack);
        });
    });
    
    // Track booking-specific interactions
    const bookingButtons = document.querySelectorAll('[data-booking-track]');
    bookingButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('Travel booking interaction:', this.dataset.bookingTrack);
        });
    });
});
</script>
@endpush