@extends('layouts.main')
@section('title', 'About VoIP AI Solutions - Leading AI Call Center Innovation in Dubai')
@section('content')

{{-- Hero Section - Left Content, Right Image --}}
@include('components.about.hero-section')

{{-- Dubai Overview Section - Left PNG Image, Right Content --}}
@include('components.about.dubai-overview')

{{-- Dubai Features Section - Feature Boxes Grid --}}
@include('components.about.dubai-features')

{{-- Team & Values Section - Hexagonal Grid Design --}}
@include('components.about.team-values')

{{-- Call to Action Section --}}
@include('components.about.cta-section')

@endsection