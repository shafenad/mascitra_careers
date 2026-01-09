<div class="modal fade modal-borderless" id="rejectModal" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header bg-danger reject-header">
                <h5 class="modal-title" id="rejectModalLabel">Rejection Reason</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>Please enter the rejection reason below!</p>
                <div class="form-group mt-3">
                    <textarea id="rejection_reason" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button" id="rejectModal-confirm" class="btn btn-danger">
                    Send
                </button>
            </div>

        </div>
    </div>
</div>
