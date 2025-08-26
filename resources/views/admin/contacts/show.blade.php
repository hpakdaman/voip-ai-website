@extends('layouts.main')

@section('title', 'Sawtic | Contact Request Details - Admin Management')

@section('content')
<div class="min-h-screen" style="background: var(--voip-bg);">
    <div class="container mx-auto px-4 sm:px-6 pt-24 pb-8">
        <!-- Breadcrumbs -->
        <nav class="flex mb-6 mt-4" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-3">
                <li class="inline-flex items-center">
                    <a href="{{ url('/') }}" class="inline-flex items-center text-sm font-medium text-slate-300 hover:text-white">
                        <i class="uil uil-estate mr-1"></i>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <a href="{{ route('admin.dashboard') }}" class="ml-1 text-sm font-medium text-slate-300 hover:text-white md:ml-2">Admin Dashboard</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <a href="{{ route('admin.contacts.index') }}" class="ml-1 text-sm font-medium text-slate-300 hover:text-white md:ml-2">Contact Requests</a>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <i class="uil uil-angle-right text-slate-400"></i>
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">{{ $submission->name }}</span>
                    </div>
                </li>
            </ol>
        </nav>
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary btn-sm mb-2">
                        <i class="fas fa-arrow-left me-1"></i> Back to Submissions
                    </a>
                    <h1 class="h3 mb-0">Contact Submission Details</h1>
                    <p class="text-muted">Submitted {{ $submission->created_at->format('M d, Y - g:i A') }} ({{ $submission->created_at->diffForHumans() }})</p>
                </div>
                <div class="d-flex gap-2">
                    @if(!$submission->is_read)
                    <span class="badge bg-primary">Unread</span>
                    @else
                    <span class="badge bg-success">Read</span>
                    @endif
                    <button type="button" class="btn btn-outline-danger btn-sm" 
                            onclick="deleteSubmission({{ $submission->id }})">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Contact Details -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="fas fa-envelope me-2"></i>
                        {{ $submission->subject }}
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Message -->
                    <div class="mb-4">
                        <h6 class="text-muted">Message:</h6>
                        <div class="bg-light p-3 rounded">
                            {!! nl2br(e($submission->comments)) !!}
                        </div>
                    </div>

                    <!-- Quick Actions -->
                    <div class="d-flex gap-2 flex-wrap">
                        <a href="mailto:{{ $submission->email }}?subject=Re: {{ $submission->subject }}" 
                           class="btn btn-primary">
                            <i class="fas fa-reply me-1"></i> Reply via Email
                        </a>
                        
                        @if($submission->phone)
                        <a href="tel:{{ $submission->phone }}" class="btn btn-outline-success">
                            <i class="fas fa-phone me-1"></i> Call {{ $submission->phone }}
                        </a>
                        @endif

                        <button type="button" class="btn btn-outline-secondary" onclick="copyToClipboard()">
                            <i class="fas fa-copy me-1"></i> Copy Details
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Info Sidebar -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h6 class="card-title mb-0">
                        <i class="fas fa-user me-2"></i>
                        Contact Information
                    </h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong class="text-muted d-block">Name:</strong>
                        {{ $submission->name }}
                    </div>

                    <div class="mb-3">
                        <strong class="text-muted d-block">Email:</strong>
                        <a href="mailto:{{ $submission->email }}" class="text-decoration-none">
                            {{ $submission->email }}
                        </a>
                    </div>

                    @if($submission->phone)
                    <div class="mb-3">
                        <strong class="text-muted d-block">Phone:</strong>
                        <a href="tel:{{ $submission->phone }}" class="text-decoration-none">
                            {{ $submission->phone }}
                        </a>
                    </div>
                    @endif

                    @if($submission->company)
                    <div class="mb-3">
                        <strong class="text-muted d-block">Company:</strong>
                        {{ $submission->company }}
                    </div>
                    @endif

                    @if($submission->industry)
                    <div class="mb-3">
                        <strong class="text-muted d-block">Industry:</strong>
                        <span class="badge bg-secondary">{{ $submission->industry }}</span>
                    </div>
                    @endif

                    @if($submission->business_size)
                    <div class="mb-3">
                        <strong class="text-muted d-block">Business Size:</strong>
                        {{ $submission->business_size }}
                    </div>
                    @endif
                </div>
            </div>

            <!-- Technical Details -->
            <div class="card mt-4">
                <div class="card-header">
                    <h6 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>
                        Technical Details
                    </h6>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <strong class="text-muted d-block">Submission ID:</strong>
                        <code>#{{ $submission->id }}</code>
                    </div>

                    <div class="mb-3">
                        <strong class="text-muted d-block">IP Address:</strong>
                        <code>{{ $submission->ip_address ?? 'N/A' }}</code>
                    </div>

                    <div class="mb-3">
                        <strong class="text-muted d-block">Submitted:</strong>
                        {{ $submission->created_at->format('M d, Y - g:i A') }}
                    </div>

                    @if($submission->is_read && $submission->updated_at > $submission->created_at)
                    <div class="mb-3">
                        <strong class="text-muted d-block">Last Viewed:</strong>
                        {{ $submission->updated_at->format('M d, Y - g:i A') }}
                    </div>
                    @endif

                    @if($submission->user_agent)
                    <div class="mb-0">
                        <strong class="text-muted d-block">Browser:</strong>
                        <small class="text-muted">{{ Str::limit($submission->user_agent, 60) }}</small>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Hidden content for copying -->
<div id="copyContent" style="position: absolute; left: -9999px;">
Name: {{ $submission->name }}
Email: {{ $submission->email }}
@if($submission->phone)Phone: {{ $submission->phone }}@endif
@if($submission->company)Company: {{ $submission->company }}@endif
@if($submission->industry)Industry: {{ $submission->industry }}@endif
Subject: {{ $submission->subject }}
@if($submission->business_size)Business Size: {{ $submission->business_size }}@endif

Message:
{{ $submission->comments }}

Submitted: {{ $submission->created_at->format('M d, Y - g:i A') }}
IP: {{ $submission->ip_address ?? 'N/A' }}
</div>

<script>
function copyToClipboard() {
    const copyText = document.getElementById('copyContent').innerText;
    navigator.clipboard.writeText(copyText).then(function() {
        // Show success feedback
        const btn = event.target.closest('button');
        const originalText = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check me-1"></i> Copied!';
        btn.classList.remove('btn-outline-secondary');
        btn.classList.add('btn-success');
        
        setTimeout(function() {
            btn.innerHTML = originalText;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-secondary');
        }, 2000);
    }).catch(function(err) {
        alert('Failed to copy to clipboard');
    });
}

function deleteSubmission(id) {
    if (confirm('Delete this submission? This action cannot be undone.')) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/contacts/${id}`;
        form.innerHTML = `
            @csrf
            @method('DELETE')
        `;
        document.body.appendChild(form);
        form.submit();
    }
}
</script>
@endsection