@extends('layouts.main')
@section('title', 'Features | Sawtic AI Call Agents & Call Center Solutions in UAE')
@section('content')

{{-- Hero Section --}}
@include('components.features.hero-section')

{{-- Intelligent Automation Section --}}
@include('components.features.intelligent-automation')

{{-- Advanced Analytics Section --}}
@include('components.features.advanced-analytics')

{{-- Customer Experience Section --}}
{{-- @include('components.features.customer-experience') --}}

{{-- Enterprise Security Section --}}
{{-- @include('components.features.enterprise-security') --}}

{{-- Integration Ecosystem Section --}}
@include('components.features.integration-ecosystem')

{{-- Global Readiness Section --}}
{{-- @include('components.features.global-readiness') --}}

{{-- Call to Action Section --}}
@include('components.features.cta-section')

@endsection