@extends('layouts.layoutguest')

@section('title', 'Login')

@section('content')
<div class="auth-wrapper">
    <div class="card login-card shadow-lg border-0">

        <div class="card-body p-4 p-md-5">

            <div class="d-flex justify-content-end mb-2">
                <button id="themeToggle" class="btn btn-sm">
                    <i id="themeIcon" class="bi bi-moon-fill"></i>
                </button>
            </div>

            <h1 class="text-center fw-bold mb-1">Login</h1>
            <p class="text-center text-body-secondary mb-4">
                Hi, Welcome Back 👋
            </p>

            <a href="#" class="btn btn-outline-secondary w-100 d-flex align-items-center justify-content-center gap-2 mb-3">
                <img src="https://www.svgrepo.com/show/475656/google-color.svg" width="20">
                Login with Google
            </a>

            <div class="text-center text-body-secondary my-3">
                <small>or Login with Email</small>
            </div>

            <form method="POST" action="{{ route('login.submit') }}">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{ $errors->first() }}
                    </div>
                @endif


                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>

                    <div class="password-wrapper">
                        <input type="password" name="password" id="password"
                            class="form-control pe-5" required>

                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="bi bi-eye-slash-fill" id="passwordIcon"></i>
                        </button>
                    </div>
                </div>



                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>

                    <a href="#" class="link-orange text-decoration-none" data-bs-toggle="modal" data-bs-target="#forgotPasswordModal">
                        Forgot Password?
                    </a>
                </div>

                <button type="submit" class="btn btn-orange w-100 py-2 fw-semibold">
                    Login
                </button>
            </form>

            <p class="text-center mt-4 mb-0">
                Not registered yet?
                <a href="{{ route('signup') }}" class="link-orange fw-semibold">
                    Create an account
                </a>
            </p>

        </div>
    </div>
</div>

@include('components.forgotpass')

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
    document.addEventListener('DOMContentLoaded', function () {
        const btn = document.getElementById('btnForgotPassword');

        btn.addEventListener('click', function (e) {
            e.preventDefault();

            const modal = new bootstrap.Modal(
                document.getElementById('forgotPasswordModal')
            );
            modal.show();
        });     
    });
</script>

@endpush

@endsection


