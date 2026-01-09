@extends('layouts.layoutguest')

@section('title', 'Sign Up')

@section('content')
<div class="auth-wrapper">
    <div class="card login-card shadow-lg border-0">

        <div class="card-body p-4 p-md-5">

            <div class="d-flex justify-content-end mb-2">
                <button id="themeToggle" class="btn btn-sm">
                    <i id="themeIcon" class="bi bi-moon-fill"></i>
                </button>
            </div>

            <h1 class="text-center fw-bold mb-1">Sign Up</h1>
            <p class="text-center text-body-secondary mb-4">
                Enter your personal data to create your account.
            </p>

            <a href="#" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2 mb-3">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="20">
                Sign Up with Google
            </a>

            <div class="text-center text-body-secondary my-3">
                <small>OR</small>
            </div>

            <form method="POST" action="{{ route('otp') }}">
             @csrf

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>

                    <div class="password-wrapper">
                        <input type="password" name="password" id="password"
                            class="form-control pe-5" minlength="6" title="Password must contain at least 6 characters" required>

                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="bi bi-eye-slash-fill" id="passwordIcon"></i>
                        </button>
                    </div>
                <small class="text-muted mt-1 d-block">
                    Must contain at least 6 characters.
                </small>
                </div>


            <button type="submit" class="btn btn-orange w-100 py-2 fw-semibold">
                Sign Up
            </button>


            </form>

            <p class="text-center mt-4 mb-0">
                Alredy have an account?
                <a href="{{ route('login') }}" class="link-orange fw-semibold">
                    Login
                </a>
            </p>

        </div>
    </div>
</div>
@endsection

@push('scripts')

<script>
    const toggleBtn = document.getElementById('themeToggle');
    const iconTheme = document.getElementById('themeIcon');
    const html = document.documentElement;
    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        html.setAttribute('data-bs-theme', savedTheme);
        iconTheme.className = savedTheme === 'dark'
            ? 'bi bi-sun-fill'
            : 'bi bi-moon-fill';
    }

    toggleBtn.addEventListener('click', () => {
        const current = html.getAttribute('data-bs-theme') || 'light';
        const next = current === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-bs-theme', next);
        localStorage.setItem('theme', next);

        iconTheme.className = next === 'dark'
            ? 'bi bi-sun-fill'
            : 'bi bi-moon-fill';
    });
    
    function togglePassword() {
        const input = document.getElementById('password');
        const iconPass = document.getElementById('passwordIcon');

        if (!input || !iconPass) return;

        if (input.type === 'password') {
            input.type = 'text';
            iconPass.className = 'bi bi-eye-fill';
        } else {
            input.type = 'password';
            iconPass.className = 'bi bi-eye-slash-fill';
        }
    }
</script>

<script>
    function goOtp(e) {
    e.preventDefault();
    const form = document.getElementById('registerForm');

    if (!form.checkValidity()) {
        form.reportValidity();
        return false;
    }

    window.location.href = "{{ route('otp') }}";
    return false;
    }
</script>

@endpush
