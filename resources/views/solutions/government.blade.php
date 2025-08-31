@extends('layouts.main')
@section('title', 'Sawtic | AI Call Center Solutions for Government Agencies in UAE')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/solutions/government.css') }}">
@endpush

@section('content')

@php
$industryService = new \App\Services\IndustryDataService('government');
@endphp

{{-- Hero Section --}}
@include('solutions.sections.modern-hero', ['data' => $industryService->getHeroData()])

{{-- Problem-Solution Section --}}
@include('solutions.sections.problem-solution', ['data' => $industryService->getProblemSolutionData()])

{{-- Digital Dashboard Section (UNIQUE) --}}
@include('solutions.sections.digital-dashboard', ['data' => $industryService->getDigitalDashboardData()])

{{-- AI Capabilities Section --}}
@include('solutions.sections.ai-capabilities', ['data' => $industryService->getCapabilitiesData()])

{{-- Service Matrix Section (UNIQUE) --}}
@include('solutions.sections.service-matrix', ['data' => $industryService->getServiceMatrixData()])

{{-- Voice Samples Section --}}
@include('solutions.sections.voice-demos', ['data' => $industryService->getVoiceDemosData()])

{{-- Success Stories Section --}}
@include('solutions.sections.success-stories', ['data' => $industryService->getSuccessStoriesData()])

{{-- ROI Calculator Section --}}
@include('solutions.sections.roi-calculator-advanced', ['data' => $industryService->getRoiCalculatorData()])

{{-- Feature Showcase Section --}}
@include('solutions.sections.feature-showcase', ['data' => $industryService->getFeatureShowcaseData()])

{{-- CTA Conversion Section --}}
@include('solutions.sections.cta-conversion', ['data' => $industryService->getCtaData()])

@endsection