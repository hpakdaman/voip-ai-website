@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center Solutions for Home Service Businesses in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/home-services.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('home-services');
@endphp

{{-- Hero Section --}}
@include('solutions.sections.hero', ['data' => $industryService->getHeroData()])

{{-- Problem-Solution Section --}}
@include('solutions.sections.problem-solution', ['data' => $industryService->getProblemSolutionData()])

{{-- AI Capabilities Section --}}
@include('solutions.sections.ai-capabilities', ['data' => $industryService->getCapabilitiesData()])

{{-- Voice Samples Section --}}
@include('solutions.sections.voice-demos', ['data' => $industryService->getVoiceDemosData()])

{{-- Success Stories Section --}}
@include('solutions.sections.success-stories', ['data' => $industryService->getSuccessStoriesData()])

{{-- ROI Calculator Section --}}
@include('solutions.sections.roi-calculator-advanced', ['data' => $industryService->getRoiCalculatorData()])

{{-- Feature Showcase Section - "See Sawtic AI In Action" --}}
@include('solutions.sections.feature-showcase', ['data' => $industryService->getFeatureShowcaseData()])

{{-- CTA Conversion Section - "Ready to Transform Your Home Service Business?" --}}
@include('solutions.sections.cta-conversion', ['data' => $industryService->getCtaData()])

@endsection

@push('scripts')
<script>
// Home Services Solutions Page Analytics
document.addEventListener('DOMContentLoaded', function() {
    // Track voice demo interactions
    const audioDemos = document.querySelectorAll('.voice-demo-player audio');
    audioDemos.forEach(audio => {
        audio.addEventListener('play', function() {
            console.log('Home Services voice demo played:', this.dataset.demoType);
        });
    });
    
    // Track ROI calculator usage
    const roiCalculator = document.getElementById('roi-calculator');
    if (roiCalculator) {
        roiCalculator.addEventListener('change', function() {
            console.log('Home Services ROI calculator interaction');
        });
    }
    
    // Track CTA clicks
    const ctaButtons = document.querySelectorAll('[data-cta-track]');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('Home Services CTA clicked:', this.dataset.ctaTrack);
        });
    });
    
    // Track service category interactions
    const serviceCategories = document.querySelectorAll('.service-category-card');
    serviceCategories.forEach(card => {
        card.addEventListener('click', function() {
            console.log('Service category viewed:', this.dataset.service);
        });
    });
});
</script>
@endpush