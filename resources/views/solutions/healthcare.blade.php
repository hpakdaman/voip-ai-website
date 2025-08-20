@extends('layouts.main')

@section('title', 'Sawtic | AI Call Agents for Healthcare - Medical Practice Automation in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/healthcare.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('healthcare');
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
@include('solutions.sections.success-stories', ['data' => $industryService->getSuccessStoriesData()])

{{-- ROI Calculator Section --}}
@include('solutions.sections.roi-calculator-advanced', ['data' => $industryService->getRoiCalculatorData()])

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