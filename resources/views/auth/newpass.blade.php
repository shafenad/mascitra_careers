@extends('layouts.layoutguest')

@section('title', 'Update Password')

@section('content')
<div class="auth-wrapper">
    <div class="card login-card shadow-lg border-0">

        <div class="card-body p-4 p-md-5">

            <div class="d-flex justify-content-end mb-2">
                <button id="themeToggle" class="btn btn-sm">
                    <i id="themeIcon" class="bi bi-moon-fill"></i>
                </button>
            </div>

            <h3 class=" justify-content-start fw-bold mb-4">Create New Password</h3>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- NEW PASSWORD --}}
                <div class="mb-3">
                    <label class="form-label">New Password</label>

                    <div class="password-wrapper">
                        <input type="password" name="password" id="new_password"
                            class="form-control pe-5" minlength="6" required>

                        <button type="button" class="password-toggle"
                                onclick="togglePassword('new_password','newPasswordIcon')">
                            <i class="bi bi-eye-slash-fill" id="newPasswordIcon"></i>
                        </button>
                    </div>

                    <small class="text-muted mt-1 d-block">
                        Must contain at least 6 characters.
                    </small>
                </div>

                {{-- CONFIRM PASSWORD --}}
                <div class="mb-3">
                    <label class="form-label">Confirm Password</label>

                    <div class="password-wrapper">
                        <input type="password" name="confirm_password" id="confirm_password"
                            class="form-control pe-5" required>

                        <button type="button" class="password-toggle"
                                onclick="togglePassword('confirm_password','confirmPasswordIcon')">
                            <i class="bi bi-eye-slash-fill" id="confirmPasswordIcon"></i>
                        </button>
                    </div>
                </div>


                <a href="{{ route('login') }}" class="btn btn-orange w-100 py-2 fw-semibold mt-2">
                    Save New Password
                </a>

            </form>

        </div>
    </div>
</div>

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

    
    function togglePassword(inputId, iconId) {
    const input = document.getElementById(inputId);
    const icon = document.getElementById(iconId);

    if (!input || !icon) return;

    if (input.type === 'password') {
        input.type = 'text';
        icon.className = 'bi bi-eye-fill';
    } else {
        input.type = 'password';
        icon.className = 'bi bi-eye-slash-fill';
         }
    }
</script>

@endpush

@endsection


