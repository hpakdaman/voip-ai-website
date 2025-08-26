<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Panel - Sawtic')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Unicons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <!-- VoIP Home CSS for theme variables -->
    <link rel="stylesheet" href="{{ asset('assets/css/voip-home.css') }}">

    <style>
        /* Use proper VoIP theme colors */
        :root {
            --voip-bg: #162f3a;
            --voip-dark-bg: #0c1b27;
            --voip-primary: #1d7861;
            --voip-dark-font: #085d44;
            --voip-link: #1ec08d;
            --primary-gradient: linear-gradient(135deg, #1d7861 0%, #1ec08d 100%);
            --voip-gradient: linear-gradient(135deg, #1d7861 0%, #1ec08d 50%, #162f3a 100%);
            --voip-accent: rgba(29, 120, 97, 0.1);
            --voip-hover: rgba(30, 192, 141, 0.2);
        }
        
        /* Tailwind compatibility fixes */
        .min-h-screen {
            min-height: 100vh;
        }
        
        .navbar-brand {
            color: var(--voip-link) !important;
            font-weight: bold;
        }
        
        .btn-primary {
            background-color: var(--voip-primary);
            border-color: var(--voip-primary);
        }
        
        .btn-primary:hover {
            background-color: var(--voip-dark-font);
            border-color: var(--voip-dark-font);
        }
        
        .sidebar {
            min-height: calc(100vh - 56px);
            background: linear-gradient(180deg, #f8f9fa 0%, #e9ecef 100%);
            border-right: 3px solid var(--voip-accent);
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
        }
        
        /* Mobile sidebar styling */
        @media (max-width: 767.98px) {
            .sidebar {
                position: fixed;
                top: 56px;
                left: 0;
                width: 100%;
                z-index: 1000;
                border-right: none;
                border-bottom: 3px solid var(--voip-accent);
                max-height: calc(100vh - 56px);
                overflow-y: auto;
            }
            
            .sidebar.show {
                display: block !important;
            }
        }
        
        .sidebar .nav-link {
            color: #495057;
            border-radius: 12px;
            margin-bottom: 8px;
            padding: 12px 16px;
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .sidebar .nav-link::before {
            content: '';
            position: absolute;
            left: -100%;
            top: 0;
            width: 100%;
            height: 100%;
            background: var(--primary-gradient);
            transition: left 0.3s ease;
            z-index: -1;
        }
        
        .sidebar .nav-link:hover::before {
            left: 0;
        }
        
        .sidebar .nav-link:hover,
        .sidebar .nav-link.active {
            background-color: var(--voip-primary);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 4px 12px var(--voip-hover);
        }
        
        .sidebar .nav-link.active::before {
            left: 0;
        }
        
        .sidebar .nav-link i {
            width: 20px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        
        .sidebar .nav-link:hover i {
            transform: scale(1.2);
        }

        .table-warning {
            --bs-table-bg: var(--voip-accent);
        }
        
        .badge.bg-primary {
            background-color: var(--voip-link) !important;
        }
        
        /* Menu section headers */
        .sidebar .nav-link span {
            font-size: 0.9rem;
        }
        
        /* Badge styling */
        .badge.bg-danger {
            background-color: #dc3545 !important;
        }
        
        .badge.bg-warning {
            background-color: #ffc107 !important;
            color: #000 !important;
        }
        
        /* Profile section */
        .sidebar .text-center h6 {
            font-size: 0.9rem;
        }
        
        .sidebar .text-center small {
            font-size: 0.75rem;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Mobile sidebar toggle -->
            <button class="navbar-toggler d-md-none me-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarNav" aria-controls="sidebarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <a class="navbar-brand" href="{{ url('/') }}">
                <i class="fas fa-robot me-2"></i>
                <span class="d-none d-sm-inline">Sawtic Admin</span>
                <span class="d-sm-none">Admin</span>
            </a>
            
            <div class="navbar-nav ms-auto">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        <i class="fas fa-user-circle me-1"></i>
                        <span class="d-none d-sm-inline">Admin</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/') }}" target="_blank">
                            <i class="fas fa-external-link-alt me-2"></i>View Site
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt me-2"></i>Logout
                        </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-md-block sidebar collapse d-md-block" id="sidebarNav">
                <div class="position-sticky pt-3">
                    <!-- Admin Profile Section -->
                    <div class="text-center mb-4 p-3">
                        <div class="d-inline-flex align-items-center justify-content-center rounded-circle mb-2" 
                             style="width: 60px; height: 60px; background: var(--primary-gradient);">
                            <i class="fas fa-user-shield text-white fs-4"></i>
                        </div>
                        <h6 class="mb-0 fw-bold" style="color: var(--voip-primary);">Admin Panel</h6>
                        <small class="text-muted">Sawtic Management</small>
                    </div>
                    
                    <!-- Main Menu -->
                    <div class="mb-3">
                        <small class="text-muted px-3 fw-bold">OVERVIEW</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ url('/admin') }}">
                                <i class="fas fa-tachometer-alt me-3"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Communications Menu -->
                    <div class="mb-3 mt-4">
                        <small class="text-muted px-3 fw-bold">COMMUNICATIONS</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.contacts.*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
                                <i class="fas fa-envelope me-3"></i>
                                <span>Contact Submissions</span>
                                @php
                                    $unreadCount = \App\Models\ContactSubmission::unread()->count();
                                @endphp
                                @if($unreadCount > 0)
                                <span class="badge bg-danger ms-2 rounded-pill">{{ $unreadCount }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.demos.*') ? 'active' : '' }}" href="{{ route('admin.demos.index') }}">
                                <i class="fas fa-calendar-alt me-3"></i>
                                <span>Demo Bookings</span>
                                @php
                                    $pendingDemos = \App\Models\DemoBooking::where('status', 'pending')->count();
                                @endphp
                                @if($pendingDemos > 0)
                                <span class="badge bg-warning text-dark ms-2 rounded-pill">{{ $pendingDemos }}</span>
                                @endif
                            </a>
                        </li>
                    </ul>
                    
                    <!-- System Menu -->
                    <div class="mb-3 mt-4">
                        <small class="text-muted px-3 fw-bold">SYSTEM</small>
                    </div>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/') }}" target="_blank">
                                <i class="fas fa-external-link-alt me-3"></i>
                                <span>View Website</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->routeIs('admin.availability.*') ? 'active' : '' }}" href="{{ route('admin.availability.index') }}">
                                <i class="fas fa-clock me-3"></i>
                                <span>Availability</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-10 ms-sm-auto col-lg-10 px-4">
                @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                    <i class="fas fa-check-circle me-2"></i>
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <i class="fas fa-exclamation-circle me-2"></i>
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @yield('scripts')
</body>
</html>