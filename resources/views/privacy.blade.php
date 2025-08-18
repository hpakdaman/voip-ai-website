@extends('layouts.main')

@section('title', 'Privacy Policy - Sawtic | AI Call Center Data Protection & Security')

@section('content')

{{-- Hero Section --}}
@include('components.privacy.hero-section')

{{-- Privacy Content Section --}}
@include('components.privacy.privacy-content')

@endsection