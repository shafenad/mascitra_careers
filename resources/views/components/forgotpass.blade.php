<div class="modal fade" id="forgotPasswordModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg rounded-4">

            <div class="modal-header border-0 pb-0">
                <h5 class="modal-title fw-bold">Reset Password</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body pt-2">
                <p class="text-muted mb-4">
                    Enter your email address and we’ll send you a link to reset your password.
                </p>

                <form method="GET" action="{{ route('newpass') }}">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-orange w-100 fw-semibold">
                        Send Password Reset Link
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
