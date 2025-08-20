@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center Solutions for Real Estate Agencies in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/real-estate.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('real-estate');
@endphp

{{-- Hero Section --}}
@include('solutions.sections.hero', ['data' => $industryService->getHeroData()])

{{-- Problem-Solution Section --}}
@include('solutions.sections.problem-solution', ['data' => $industryService->getProblemSolutionData()])

{{-- AI Capabilities Section --}}
@include('solutions.sections.ai-capabilities', ['data' => $industryService->getCapabilitiesData()])

{{-- Voice Samples Section --}}
@include('solutions.sections.voice-samples', ['data' => $industryService->getVoiceSamplesData()])

{{-- Success Stories Section --}}
{{-- @include('solutions.sections.success-stories', ['data' => $industryService->getSuccessStoriesData()]) --}}

{{-- ROI Calculator Section --}}
@include('solutions.sections.roi-calculator', ['data' => $industryService->getRoiCalculatorData()])

@endsection

@push('scripts')
<script>
// Real Estate Solutions Page Analytics
document.addEventListener('DOMContentLoaded', function() {
    // Track voice demo interactions
    const audioDemos = document.querySelectorAll('.voice-demo-player audio');
    audioDemos.forEach(audio => {
        audio.addEventListener('play', function() {
            console.log('Voice demo played:', this.dataset.demoType);
        });
    });
    
    // Track ROI calculator usage
    const roiCalculator = document.getElementById('roi-calculator');
    if (roiCalculator) {
        roiCalculator.addEventListener('change', function() {
            console.log('ROI calculator interaction');
        });
    }
    
    // Track CTA clicks
    const ctaButtons = document.querySelectorAll('[data-cta-track]');
    ctaButtons.forEach(button => {
        button.addEventListener('click', function() {
            console.log('CTA clicked:', this.dataset.ctaTrack);
        });
    });
});
</script>
@endpush