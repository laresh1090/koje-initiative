<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Admin' }} - Koje Admin</title>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --koje-primary: #EB5310;
            --koje-secondary: #FAA019;
            --koje-dark: #1E252F;
            --koje-text: #434343;
        }
        * { font-family: 'Manrope', sans-serif; }
        h1, h2, h3, h4, h5, h6 { font-family: 'Quicksand', sans-serif; font-weight: 700; }

        body { background: #f4f6f9; }

        .admin-sidebar {
            position: fixed; top: 0; left: 0; bottom: 0;
            width: 260px; background: var(--koje-dark);
            color: #fff; z-index: 1000; overflow-y: auto;
            transition: transform 0.3s;
        }
        .admin-sidebar .brand {
            padding: 24px 20px; font-family: 'Quicksand', sans-serif;
            font-weight: 700; font-size: 20px; color: #fff;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        .admin-sidebar .brand span { color: var(--koje-primary); }
        .admin-sidebar .nav-link {
            color: rgba(255,255,255,0.7); padding: 12px 20px;
            display: flex; align-items: center; gap: 12px;
            font-size: 14px; transition: all 0.2s; border-left: 3px solid transparent;
        }
        .admin-sidebar .nav-link:hover,
        .admin-sidebar .nav-link.active {
            color: #fff; background: rgba(255,255,255,0.05);
            border-left-color: var(--koje-primary);
        }
        .admin-sidebar .nav-link i { font-size: 18px; width: 24px; text-align: center; }

        .admin-content { margin-left: 260px; padding: 0; min-height: 100vh; }

        .admin-topbar {
            background: #fff; padding: 16px 30px;
            display: flex; align-items: center; justify-content: space-between;
            border-bottom: 1px solid #e9ecef; position: sticky; top: 0; z-index: 100;
        }
        .admin-topbar .page-title { font-size: 20px; font-weight: 700; color: var(--koje-dark); margin: 0; }

        .admin-main { padding: 30px; }

        .stat-card {
            background: #fff; border-radius: 12px; padding: 24px;
            border: 1px solid #e9ecef; transition: transform 0.2s;
        }
        .stat-card:hover { transform: translateY(-2px); box-shadow: 0 4px 12px rgba(0,0,0,0.08); }
        .stat-card .stat-icon {
            width: 48px; height: 48px; border-radius: 12px;
            display: flex; align-items: center; justify-content: center;
            font-size: 22px;
        }
        .stat-card .stat-value { font-size: 28px; font-weight: 700; color: var(--koje-dark); }
        .stat-card .stat-label { font-size: 13px; color: #6c757d; }

        .data-card {
            background: #fff; border-radius: 12px;
            border: 1px solid #e9ecef; overflow: hidden;
        }
        .data-card .card-header {
            padding: 20px 24px; border-bottom: 1px solid #e9ecef;
            display: flex; align-items: center; justify-content: space-between;
            background: #fff;
        }
        .data-card .card-header h5 { margin: 0; font-weight: 700; color: var(--koje-dark); }

        .table th {
            font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px;
            color: #6c757d; font-weight: 600; border-bottom-width: 1px;
        }
        .table td { vertical-align: middle; color: var(--koje-text); font-size: 14px; }

        .badge-koje { background: var(--koje-primary); color: #fff; }

        .btn-koje {
            background: var(--koje-primary); color: #fff; border: none;
            padding: 8px 20px; border-radius: 8px; font-weight: 600; font-size: 14px;
        }
        .btn-koje:hover { background: #d4490e; color: #fff; }

        .sidebar-toggle { display: none; background: none; border: none; font-size: 24px; color: var(--koje-dark); }

        @media (max-width: 991px) {
            .admin-sidebar { transform: translateX(-100%); }
            .admin-sidebar.show { transform: translateX(0); }
            .admin-content { margin-left: 0; }
            .sidebar-toggle { display: block; }
            .sidebar-overlay {
                position: fixed; inset: 0; background: rgba(0,0,0,0.5);
                z-index: 999; display: none;
            }
            .sidebar-overlay.show { display: block; }
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <aside class="admin-sidebar" id="adminSidebar">
        <div class="brand">
            <span>KOJE</span> ADMIN
        </div>
        <nav class="mt-3">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <i class="bi bi-grid-1x2-fill"></i> Dashboard
            </a>
            <a href="{{ route('admin.webinar-registrations') }}" class="nav-link {{ request()->routeIs('admin.webinar-registrations') ? 'active' : '' }}">
                <i class="bi bi-camera-video-fill"></i> Webinar Registrations
            </a>
            <a href="{{ route('admin.contact-messages') }}" class="nav-link {{ request()->routeIs('admin.contact-messages') ? 'active' : '' }}">
                <i class="bi bi-envelope-fill"></i> Contact Messages
            </a>
            <hr style="border-color: rgba(255,255,255,0.1); margin: 12px 20px;">
            <a href="{{ route('home') }}" class="nav-link" target="_blank">
                <i class="bi bi-box-arrow-up-right"></i> View Site
            </a>
            <a href="{{ route('admin.logout') }}" class="nav-link"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-left"></i> Logout
            </a>
            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">
                @csrf
            </form>
        </nav>
    </aside>

    {{-- Overlay for mobile --}}
    <div class="sidebar-overlay" id="sidebarOverlay" onclick="toggleSidebar()"></div>

    {{-- Content --}}
    <div class="admin-content">
        <div class="admin-topbar">
            <div class="d-flex align-items-center gap-3">
                <button class="sidebar-toggle" onclick="toggleSidebar()">
                    <i class="bi bi-list"></i>
                </button>
                <h1 class="page-title">{{ $title ?? 'Dashboard' }}</h1>
            </div>
            <div class="d-flex align-items-center gap-3">
                <span class="text-muted" style="font-size:14px;">
                    <i class="bi bi-person-circle me-1"></i> {{ auth()->user()->name ?? 'Admin' }}
                </span>
            </div>
        </div>

        <div class="admin-main">
            {{ $slot }}
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleSidebar() {
            document.getElementById('adminSidebar').classList.toggle('show');
            document.getElementById('sidebarOverlay').classList.toggle('show');
        }
    </script>
</body>
</html>
