@extends('layouts.main')
@section('title', 'AI Call Agents for Spa & Massage Salons | Sawtic Smart Call Center Solutions UAE')
@section('content')

{{-- Hero Section with Voice Demo --}}
@include('components.solutions.hero-demo')

{{-- Problem vs Solution Showcase --}}
@include('components.solutions.problem-solution', ['boxHeight' => '200px'])

{{-- AI Capabilities Section --}}
@include('components.solutions.ai-capabilities')

{{-- Voice Samples & Demos --}}
@include('components.solutions.voice-samples')

{{-- ROI Calculator --}}
@include('components.solutions.roi-calculator')

{{-- Success Stories & Testimonials --}}
@include('components.solutions.success-stories')

{{-- Feature Showcase --}}
@include('components.solutions.feature-showcase')

{{-- Final CTA Conversion --}}
@include('components.solutions.cta-conversion')

@endsection