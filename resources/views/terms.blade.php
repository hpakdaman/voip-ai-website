@extends('layouts.main')

@section('title', 'Terms of Service - Sawtic | AI Call Center Legal Agreement')

@section('content')

{{-- Hero Section --}}
@include('components.terms.hero-section')

{{-- Terms Content Section --}}
@include('components.terms.terms-content')

@endsection