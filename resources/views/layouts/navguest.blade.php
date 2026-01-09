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

<body>

<nav class="navbar navbar-expand-lg nav-custom border-bottom">
    <div class="container">
        <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
            <img src="{{ asset('svg/logo_fix.svg') }}" alt="Mascitra" height="24" onerror="this.style.display='none'">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMain">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMain">
            <ul class="navbar-nav mx-auto gap-lg-3">
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="#">About Us</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="#">Service</a></li>
                <li class="nav-item"><a class="nav-link fw-semibold text-dark" href="#">Portfolio</a></li>
            </ul>

            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" class="btn btn-orange">Login</a>
                <a href="{{ route('signup') }}" class="btn btn-outline-secondary" style="border-radius:8px;">Sign Up</a>
            </div>
        </div>
    </div>
</nav>

    @yield('content')
    @stack('scripts')
    
</body>
</html>
