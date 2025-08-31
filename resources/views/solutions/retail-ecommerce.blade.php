@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center Solutions for Retail & E-commerce in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/retail-ecommerce.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('retail-ecommerce');
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

{{-- CTA Conversion Section - "Ready to Transform Your Online Sales?" --}}
@include('solutions.sections.cta-conversion', ['data' => $industryService->getCtaData()])

@endsection

@push('scripts')
<script>
// Retail E-commerce Solutions Page Analytics
document.addEventListener('DOMContentLoaded', function() {
    // Track voice demo interactions
    const audioDemos = document.querySelectorAll('.voice-demo-player audio');
    audioDemos.forEach(audio => {
        audio.addEventListener('play', function() {
            console.log('E-commerce voice demo played:', this.dataset.demoType);
        });
    });
    
    // Track ROI calculator usage
    const roiCalculator = document.getElementById('roi-calculator');
    if (roiCalculator) {
        roiCalculator.addEventListener('change', function() {
            console.log('E-commerce ROI calculator interaction');
        });
    }
    
    // Track CTA clicks
    const ctaButtons = document.querySelectorAll('[data-cta-track]');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('E-commerce CTA clicked:', this.dataset.ctaTrack);
        });
    });
});
</script>
@endpush