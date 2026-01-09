@extends('layouts.layoutguest')

@section('title', 'OTP')

@section('content')
<div class="auth-wrapper">
    <div class="card login-card shadow-lg border-0">

        <div class="card-body p-4 p-md-5">

            <div class="d-flex justify-content-end mb-2">
                <button id="themeToggle" class="btn btn-sm">
                    <i id="themeIcon" class="bi bi-moon-fill"></i>
                </button>
            </div>

            <h3 class=" text-center fw-bold mb-3">Enter Code</h3>
            <p class="text-center text-body-secondary mb-4">
                Enter a 6 digit code we have send to your email.
            </p>

            {{-- OTP SECTION --}}
            <div class="otp-section text-center mt-4">

                <p class="otp-title mb-3">The OTP code</p>
                
                <form action="#" method="POST" id="otpForm">
                    @csrf

                    <div class="otp-inputs mb-4">
                        @for ($i = 1; $i <= 6; $i++)
                            <input type="text"
                                name="otp[]"
                                maxlength="1"
                                inputmode="numeric"
                                pattern="[0-9]*"
                                class="otp-input"
                                autocomplete="one-time-code"
                                {{ $i == 1 ? 'autofocus' : '' }}>
                        @endfor
                    </div>
                </form>

                <p class="mt-4 text-muted">
                    Didn’t receive the email?
                    <a href="#" class="fw-semibold link-orange">
                        Click to resend
                    </a>
                </p>

            </div>


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
</script>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const inputs = document.querySelectorAll('.otp-input');

    inputs.forEach((input, index) => {

        input.addEventListener('input', () => {
            input.value = input.value.replace(/[^0-9]/g, '');

            if (input.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', (e) => {
            if (e.key === 'Backspace' && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });

        input.addEventListener('paste', (e) => {
            const paste = e.clipboardData.getData('text').replace(/\D/g, '');
            if (paste.length === inputs.length) {
                inputs.forEach((inp, i) => inp.value = paste[i]);
                inputs[inputs.length - 1].focus();
            }
            e.preventDefault();
        });
    });
});
</script>


@endpush

@endsection


