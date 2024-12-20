<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Sidebar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Custom Sidebar Styles */
        .custom-sidebar {
            background-color: #f8f9fc; /* Sidebar background color */
            color:rgb(194, 206, 218); /* Sidebar text color */
            min-height: 100vh;
        }

        .custom-sidebar a {
            color: #6c757d; /* Link color */
            text-decoration: none;
        }

        .custom-sidebar a:hover {
            color:rgb(121, 187, 253); /* Link hover color */
        }

        .custom-sidebar .active {
            background-color:rgb(164, 179, 196); /* Active link background color */
            color: #ffffff; /* Active link text color */
            border-radius: 5px;
        }

        .custom-sidebar .sidebar-divider {
            border-color: #dee2e6; /* Divider color */
        }
    </style>
</head>
<body>
    <ul class="navbar-nav sidebar accordion custom-sidebar" id="accordionSidebar">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon">
                <img src="{{ asset((setting('logo')) ? '/storage/'.setting('logo') : 'dist/img/logo/logo2.png') }}" alt="Logo">
            </div>
            <div class="mx-3 sidebar-brand-text">SIDAKA</div>
        </a>
        <hr class="my-0 sidebar-divider">

        @can('dashboard')
        <x-nav-link 
            text="Dashboard" 
            icon="th" 
            url="{{ route('admin.dashboard') }}"
            active="{{ request()->routeIs('admin.dashboard') ? ' active' : '' }}"
        />

        <hr class="mt-3 mb-0 sidebar-divider">
        @endcan
        
        @can('diagnosa')    
        <x-nav-link 
            text="Diagnosa" 
            icon="stethoscope" 
            url="{{ route('admin.diagnosa') }}"
            active="{{ request()->routeIs('admin.diagnosa') ? ' active' : '' }}"
        />
        @endcan
        
        @can('riwayat-list')
        <x-nav-link 
            text="Riwayat Diagnosa" 
            icon="notes-medical" 
            url="{{ route('admin.riwayat.daftar') }}"
            active="{{ request()->routeIs('admin.riwayat.daftar') ? ' active' : '' }}"
        />
        @endcan

        @can('member-list')
        <hr class="mt-3 mb-0 sidebar-divider">
        
        <x-nav-link 
            text="Daftar User" 
            icon="users" 
            url="{{ route('admin.member') }}"
            active="{{ request()->routeIs('admin.member') ? ' active' : '' }}"
        />
        @endcan

        @can('penyakit-list')
        <x-nav-link 
            text="Daftar Penyakit" 
            icon="th-list" 
            url="{{ route('admin.penyakit') }}"
            active="{{ request()->routeIs('admin.penyakit') ? ' active' : '' }}"
        />
        @endcan

        @can('gejala-list')
        <x-nav-link 
            text="Daftar Gejala" 
            icon="th-list" 
            url="{{ route('admin.gejala') }}"
            active="{{ request()->routeIs('admin.gejala') ? ' active' : '' }}"
        />
        @endcan

        @can('rules-list')
        <x-nav-link 
            text="Basis Rules" 
            icon="briefcase-medical" 
            url="{{ route('admin.rules', 1) }}"
            active="{{ request()->routeIs('admin.rules') ? ' active' : '' }}"
        />
        @endcan
        
        <hr class="mb-0 sidebar-divider">
    </ul>
</body>
</html>
