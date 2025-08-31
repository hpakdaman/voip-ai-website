@extends('layouts.main')

@section('title', $pageTitle)

@section('content')

{{-- Load Industry Data --}}
@php
$industryData = new \App\Services\IndustryDataService($industry);
@endphp

{{-- Dynamic Sections Based on Configuration --}}
@if($config['sections_enabled']['hero'])
    @include('solutions.sections.hero', [
        'industry' => $industry, 
        'theme' => $config['hero_theme'],
        'data' => $industryData->getHeroData()
    ])
@endif

@if($config['sections_enabled']['problem_solution'])
    @include('solutions.sections.problem-solution', [
        'industry' => $industry,
        'data' => $industryData->getProblemSolutionData()
    ])
@endif

@if($config['sections_enabled']['ai_capabilities'])
    @include('solutions.sections.ai-capabilities', [
        'industry' => $industry,
        'data' => $industryData->getCapabilitiesData()
    ])
@endif

@if($config['sections_enabled']['voice_samples'])
    @include('solutions.sections.voice-demos', [
        'industry' => $industry,
        'data' => $industryData->getVoiceSamplesData()
    ])
@endif

@if($config['sections_enabled']['success_stories'])
    @include('solutions.sections.success-stories', [
        'industry' => $industry,
        'data' => $industryData->getSuccessStoriesData()
    ])
@endif

@if($config['sections_enabled']['roi_calculator'])
    @include('solutions.sections.roi-calculator-advanced', [
        'industry' => $industry,
        'data' => $industryData->getRoiCalculatorData()
    ])
@endif

@if($config['sections_enabled']['feature_showcase'])
    @include('solutions.sections.feature-showcase', [
        'industry' => $industry,
        'data' => $industryData->getFeatureShowcaseData()
    ])
@endif

@if($config['sections_enabled']['cta_conversion'])
    @include('solutions.sections.cta-conversion', [
        'industry' => $industry,
        'theme' => $config['hero_theme'],
        'data' => $industryData->getCtaData()
    ])
@endif

@endsection

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/industry-landing.css') }}">
@if(file_exists(public_path("/assets/css/solutions/{$industry}.css")))
<link rel="stylesheet" href="{{ asset("/assets/css/solutions/{$industry}.css") }}">
@endif
@endpush

@push('scripts')
<script src="{{ asset('assets/js/solutions/industry-landing.js') }}"></script>
@if(file_exists(public_path("/assets/js/solutions/{$industry}.js")))
<script src="{{ asset("/assets/js/solutions/{$industry}.js") }}"></script>
@endif
@endpush