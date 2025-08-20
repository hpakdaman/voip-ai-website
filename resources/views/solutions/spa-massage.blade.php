@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center Solutions for Spa & Massage Centers in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/spa-massage.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('spa-massage');
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
@include('solutions.sections.roi-calculator', ['data' => $industryService->getRoiCalculatorData()])

@endsection