@extends('layouts.admin')

@section('title', 'Contact Submissions - Admin')

@section('content')
<div class="container-fluid py-4">
    <!-- Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-0">Contact Submissions</h1>
                    <p class="text-muted">Manage customer inquiries and contact form submissions</p>
                </div>
                <div class="d-flex gap-2">
                    @if($unreadCount > 0)
                    <span class="badge bg-primary">{{ $unreadCount }} unread</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-4">
                            <input type="text" name="search" class="form-control" placeholder="Search by name, email, or subject..." value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <select name="status" class="form-select">
                                <option value="">All Submissions</option>
                                <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>Unread</option>
                                <option value="read" {{ request('status') === 'read' ? 'selected' : '' }}>Read</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="btn btn-primary">Filter</button>
                            <a href="{{ route('admin.contacts.index') }}" class="btn btn-outline-secondary">Clear</a>
                        </div>
                        <div class="col-md-2">
                            <div class="dropdown">
                                <button class="btn btn-outline-primary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    Bulk Actions
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" onclick="markSelectedAsRead()">Mark as Read</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="deleteSelected()">Delete Selected</a></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Submissions Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    @if($submissions->count() > 0)
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th width="40">
                                        <input type="checkbox" id="selectAll" class="form-check-input">
                                    </th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Industry</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                    <th width="100">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($submissions as $submission)
                                <tr class="{{ !$submission->is_read ? 'table-warning' : '' }}">
                                    <td>
                                        <input type="checkbox" class="form-check-input submission-checkbox" value="{{ $submission->id }}">
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            @if(!$submission->is_read)
                                            <span class="badge bg-primary me-2">New</span>
                                            @endif
                                            <strong>{{ $submission->name }}</strong>
                                        </div>
                                        @if($submission->company)
                                        <small class="text-muted">{{ $submission->company }}</small>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="mailto:{{ $submission->email }}" class="text-decoration-none">
                                            {{ $submission->email }}
                                        </a>
                                        @if($submission->phone)
                                        <br><small class="text-muted">{{ $submission->phone }}</small>
                                        @endif
                                    </td>
                                    <td>{{ Str::limit($submission->subject, 50) }}</td>
                                    <td>
                                        @if($submission->industry)
                                        <span class="badge bg-secondary">{{ $submission->industry }}</span>
                                        @else
                                        <span class="text-muted">-</span>
                                        @endif
                                    </td>
                                    <td>
                                        <span title="{{ $submission->created_at->format('M d, Y - g:i A') }}">
                                            {{ $submission->created_at->diffForHumans() }}
                                        </span>
                                    </td>
                                    <td>
                                        @if($submission->is_read)
                                        <span class="badge bg-success">Read</span>
                                        @else
                                        <span class="badge bg-primary">Unread</span>
                                        @endif
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('admin.contacts.show', $submission->id) }}" 
                                               class="btn btn-outline-primary" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <button type="button" class="btn btn-outline-danger" 
                                                    onclick="deleteSubmission({{ $submission->id }})" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    
                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center p-3">
                        <div>
                            Showing {{ $submissions->firstItem() }} to {{ $submissions->lastItem() }} of {{ $submissions->total() }} results
                        </div>
                        {{ $submissions->links() }}
                    </div>
                    @else
                    <div class="text-center py-5">
                        <i class="fas fa-inbox text-muted" style="font-size: 3rem;"></i>
                        <h4 class="mt-3">No submissions found</h4>
                        <p class="text-muted">There are no contact form submissions to display.</p>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Select all functionality
document.getElementById('selectAll').addEventListener('change', function() {
    const checkboxes = document.querySelectorAll('.submission-checkbox');
    checkboxes.forEach(checkbox => checkbox.checked = this.checked);
});

// Mark selected as read
function markSelectedAsRead() {
    const selected = Array.from(document.querySelectorAll('.submission-checkbox:checked')).map(cb => cb.value);
    
    if (selected.length === 0) {
        alert('Please select at least one submission.');
        return;
    }

    if (confirm(`Mark ${selected.length} submission(s) as read?`)) {
        fetch('{{ route("admin.contacts.mark-read") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ ids: selected })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error: ' + data.message);
            }
        });
    }
}

// Delete selected
function deleteSelected() {
    const selected = Array.from(document.querySelectorAll('.submission-checkbox:checked')).map(cb => cb.value);
    
    if (selected.length === 0) {
        alert('Please select at least one submission.');
        return;
    }

    if (confirm(`Delete ${selected.length} submission(s)? This action cannot be undone.`)) {
        fetch('{{ route("admin.contacts.bulk-delete") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({ ids: selected })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                location.reload();
            } else {
                alert('Error: ' + data.message);
            }
        });
    }
}

// Delete single submission
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