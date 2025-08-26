@extends('layouts.main')

@section('title', 'Sawtic | Contact Submissions - Admin Management')

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
                        <span class="ml-1 text-sm font-medium text-white md:ml-2">Contact Requests</span>
                    </div>
                </li>
            </ol>
        </nav>
        
        <!-- Header -->
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-bold text-white">Contact Submissions</h1>
                <p class="text-slate-300">Manage customer inquiries and contact form submissions</p>
            </div>
            <div class="flex gap-2">
                @if($unreadCount > 0)
                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">{{ $unreadCount }} unread</span>
                @endif
                <a href="{{ route('admin.dashboard') }}" 
                   class="px-4 py-2 rounded-lg border border-[var(--voip-link)] text-[var(--voip-link)] font-medium hover:bg-[var(--voip-link)] hover:text-white transition-all duration-300">
                    <i class="uil uil-arrow-left mr-2"></i>
                    Back to Dashboard
                </a>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-xl p-6 shadow-lg mb-8">
            <h2 class="text-xl font-bold mb-4 text-gray-800">
                <i class="uil uil-filter mr-2 text-green-600"></i>
                Filter Contact Submissions
            </h2>
            
            <form method="GET" action="{{ route('admin.contacts.index') }}" class="space-y-4 lg:space-y-0 lg:grid lg:grid-cols-4 lg:gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                    <input type="text" name="search" value="{{ request('search') }}" 
                           placeholder="Name, email, subject..."
                           class="w-full px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                </div>
                
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                    <select name="status" class="w-full px-3 py-3 border border-gray-300 rounded-xl bg-white text-gray-700 focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-300 text-sm">
                        <option value="">All Submissions</option>
                        <option value="unread" {{ request('status') === 'unread' ? 'selected' : '' }}>Unread</option>
                        <option value="read" {{ request('status') === 'read' ? 'selected' : '' }}>Read</option>
                    </select>
                </div>
                
                <div class="lg:col-span-1">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Actions</label>
                    <div class="flex gap-2 min-w-0">
                        <button type="submit" 
                                class="px-4 py-3 rounded-xl text-white font-semibold hover:scale-105 transform transition-all duration-300 flex-shrink-0"
                                style="background: var(--voip-primary);">
                            <i class="uil uil-search text-sm"></i>
                        </button>
                        @if(request()->hasAny(['search', 'status']))
                        <a href="{{ route('admin.contacts.index') }}" 
                           class="px-4 py-3 rounded-xl border border-gray-300 text-gray-700 font-semibold hover:bg-gray-50 transition-all duration-300 flex-shrink-0">
                            <i class="uil uil-times text-sm"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </form>
        </div>

        <!-- Contact Submissions Table -->
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">
            <div class="p-4 sm:p-6 border-b border-gray-200">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-2">
                    <h2 class="text-lg sm:text-xl font-bold text-gray-800">Contact Submissions</h2>
                    <span class="text-sm text-gray-500">{{ $submissions->total() }} total submissions</span>
                </div>
            </div>

            @if($submissions->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full min-w-[800px]">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-10">
                                <input type="checkbox" id="selectAll" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                            </th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">Email</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Subject</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">Industry</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-3 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($submissions as $submission)
                        <tr class="hover:bg-gray-50 {{ !$submission->is_read ? 'bg-yellow-50' : '' }}">
                            <td class="px-3 sm:px-6 py-4">
                                <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500 submission-checkbox" value="{{ $submission->id }}">
                            </td>
                            <td class="px-3 sm:px-6 py-4">
                                <div class="flex items-center">
                                    @if(!$submission->is_read)
                                    <span class="inline-flex items-center px-2 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800 mr-2">New</span>
                                    @endif
                                    <div>
                                        <div class="text-sm font-medium text-gray-900">{{ $submission->name }}</div>
                                        @if($submission->company)
                                        <div class="text-sm text-gray-500">{{ $submission->company }}</div>
                                        @endif
                                        <div class="sm:hidden text-xs text-gray-500 mt-1">{{ $submission->email }}</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-3 sm:px-6 py-4 hidden sm:table-cell">
                                <a href="mailto:{{ $submission->email }}" class="text-green-600 hover:text-green-900">
                                    {{ $submission->email }}
                                </a>
                                @if($submission->phone)
                                <div class="text-sm text-gray-500">{{ $submission->phone }}</div>
                                @endif
                            </td>
                            <td class="px-3 sm:px-6 py-4 text-sm text-gray-900">
                                {{ Str::limit($submission->subject, 50) }}
                            </td>
                            <td class="px-3 sm:px-6 py-4 hidden md:table-cell">
                                @if($submission->industry)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">{{ $submission->industry }}</span>
                                @else
                                <span class="text-gray-400">-</span>
                                @endif
                            </td>
                            <td class="px-3 sm:px-6 py-4 text-sm text-gray-900">
                                <span title="{{ $submission->created_at->format('M d, Y - g:i A') }}">
                                    <div class="sm:hidden">{{ $submission->created_at->format('M j') }}</div>
                                    <div class="hidden sm:block">{{ $submission->created_at->diffForHumans() }}</div>
                                </span>
                            </td>
                            <td class="px-3 sm:px-6 py-4">
                                @if($submission->is_read)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Read</span>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Unread</span>
                                @endif
                            </td>
                            <td class="px-3 sm:px-6 py-4 text-xs sm:text-sm">
                                <div class="flex flex-col sm:flex-row gap-1 sm:gap-2">
                                    <a href="{{ route('admin.contacts.show', $submission->id) }}" 
                                       class="text-green-600 hover:text-green-900 font-medium">View</a>
                                    <button type="button" class="text-red-600 hover:text-red-900 font-medium text-left"
                                            onclick="deleteSubmission({{ $submission->id }})">Delete</button>
                                </div>
                            </td>
                                </tr>
                                @endforeach
                            </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <div class="px-4 sm:px-6 py-4 border-t border-gray-200 flex flex-col sm:flex-row justify-between items-center gap-4">
                <div class="text-sm text-gray-700">
                    Showing {{ $submissions->firstItem() }} to {{ $submissions->lastItem() }} of {{ $submissions->total() }} results
                </div>
                <div class="flex justify-center">
                    {{ $submissions->links() }}
                </div>
            </div>
            @else
            <div class="text-center py-12">
                <i class="uil uil-envelope text-gray-400 text-6xl mb-4"></i>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No submissions found</h3>
                <p class="text-gray-500">There are no contact form submissions to display.</p>
            </div>
            @endif
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