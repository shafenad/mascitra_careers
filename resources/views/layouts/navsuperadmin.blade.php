<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="layout-horizontal">
    
    {{-- Nav --}}
            <header class="mb-4">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <a href="{{ route('dashboard_superadmin') }}"><img src="{{ asset('svg/logo_fix.svg') }}" class="logo-mascitra" alt="Logo"></a>
                        </div>
                        <div class="header-top-right">

                            <div class="dropdown">
                                <a href="#" id="topbarUserDropdown" class="user-dropdown d-flex align-items-center dropend dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2" >
                                        <img src="{{ asset('jpg/1.jpg') }}" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">Citra</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Superadmin</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg" aria-labelledby="topbarUserDropdown">
                                <li class="dropdown-item">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span>Dark Mode</span>
                                        <div class="form-check form-switch m-0">
                                            <input class="form-check-input" type="checkbox" id="toggle-dark">
                                        </div>
                                    </div>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('superadmin_addadmin') }}">Add Admin</a></li>
                                <li><a class="dropdown-item" href="{{ route('superadmin_profile') }}">My Account</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="{{ route('landingpage') }}">Logout</a></li>
                            </ul>
                            </div>
                               
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            
                            
                            
                            <li
                                class="menu-item  ">
                                <a href="{{ route('dashboard_superadmin') }}" class='menu-link'>
                                    <span><i class="bi bi-grid-fill"></i> Dashboard</span>
                                </a>
                            </li>
                            
                            
                            
                            <li
                                class="menu-item  has-sub">
                                <a href="#" class='menu-link'>
                                    <span><i class="bi bi-stack"></i> Position</span>
                                </a>
                                <div
                                    class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        
                                        
                                        <ul class="submenu-group">
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="{{ route('superadmin_position_fulltime') }}"
                                                    class='submenu-link'>Fulltime</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="{{ route('superadmin_position_intern') }}"
                                                    class='submenu-link'>Internship</a>

                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            
                            
                            
                            <li
                                class="menu-item">
                                <a href="{{ route('superadmin_internapplication') }}" class='menu-link'>
                                    <span><i class="bi bi-grid-1x2-fill"></i>Internship Application</span>
                                </a>

                                <!-- Pengembangan bisa pake dropdown list -->
                                
                                <!--
                                <div
                                    class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        
                                        
                                        <ul class="submenu-group">
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="#"
                                                    class='submenu-link'>Fulltime</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="#"
                                                    class='submenu-link'>Internship</a>

                                                
                                            </li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                                -->

                            </li>
                            
                            
                            
                            <li
                                class="menu-item">
                                <a href="{{ route('superadmin_applicationhistory') }}" class='menu-link'>
                                    <span><i class="bi bi-file-earmark-medical-fill"></i> Application History</span>
                                </a>

                                <!-- Pengembangan bisa pake dropdown list -->
                                <!--
                                <div
                                    class="submenu ">
                                    <div class="submenu-group-wrapper">
                                        
                                        
                                        <ul class="submenu-group">
                                            
                                            <li
                                                class="submenu-item  ">
                                                <a href="#"
                                                    class='submenu-link'>Fulltime</a>

                                                
                                            </li>
                                            
                                        
                                        
                                            <li
                                                class="submenu-item  ">
                                                <a href="#"
                                                    class='submenu-link'>Internship</a>

                                                
                                            </li>
                                        </ul>
                                        
                                        
                                    </div>
                                </div>
                                -->

                            </li>                          
                            
                        </ul>
                    </div>
                </nav>

            </header>

    {{-- Content --}}
    <div class="flex-grow-1 p-4">
        @yield('content')
    </div>

    @stack('scripts')

</body>
</html>
