@extends('layouts.main')

@section('title', 'Sawtic | AI Call Agents for Healthcare - Medical Practice Automation in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/healthcare.css') }}">
@endpush

@section('content')

<!-- Hero Demo Section -->
@include('components.solutions.hero-demo', [
    'industry' => 'healthcare',
    'heroImage' => 'assets/images/hospital/about-2.png',
    'demoTitle' => 'AI Call Agent for Healthcare',
    'demoSubtitle' => 'Listen to how our AI agent handles patient appointments, medical inquiries, and emergency calls'
])

<!-- Problem vs Solution -->
@include('components.solutions.problem-solution', [
    'industry' => 'healthcare'
])

<!-- AI Capabilities -->
@include('components.solutions.ai-capabilities', [
    'industry' => 'healthcare',
    'capabilityImage' => 'assets/images/hospital/bg.jpg'
])

<!-- Voice Samples -->
@include('components.solutions.voice-samples', [
    'industry' => 'healthcare'
])

<!-- ROI Calculator -->
@include('components.solutions.roi-calculator', [
    'industry' => 'healthcare'
])

<!-- Success Stories -->
@include('components.solutions.success-stories', [
    'industry' => 'healthcare'
])

<!-- Feature Showcase -->
@include('components.solutions.feature-showcase', [
    'industry' => 'healthcare',
    'showcaseImage1' => 'assets/images/hospital/about-2.png',
    'showcaseImage2' => 'assets/images/hospital/bg.jpg'
])

<!-- CTA Conversion -->
@include('components.solutions.cta-conversion', [
    'industry' => 'healthcare',
    'ctaBackground' => 'assets/images/hospital/bg.jpg'
])

@endsection

@push('scripts')
<script src="{{ asset('assets/js/voip-home.js') }}"></script>
<script>
// Healthcare-specific analytics tracking
document.addEventListener('DOMContentLoaded', function() {
    // Track voice demo plays
    document.querySelectorAll('audio').forEach(audio => {
        audio.addEventListener('play', function() {
            // Analytics: Healthcare voice demo played
            console.log('Healthcare voice demo played:', this.src);
        });
    });

    // Track CTA clicks
    document.querySelectorAll('[data-cta-track]').forEach(element => {
        element.addEventListener('click', function() {
            // Analytics: Healthcare CTA clicked
            console.log('Healthcare CTA clicked:', this.dataset.ctaTrack);
        });
    });

    // Track ROI calculator usage
    const roiCalculator = document.querySelector('#roi-calculator');
    if (roiCalculator) {
        roiCalculator.addEventListener('input', function() {
            // Analytics: Healthcare ROI calculator used
            console.log('Healthcare ROI calculator used');
        });
    }
});
</script>
@endpush