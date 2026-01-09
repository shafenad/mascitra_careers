<div class="modal fade modal-borderless" id="linkInterviewModal" tabindex="-1" 
     aria-labelledby="linkInterviewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="linkInterviewModalLabel">Notes !</h5>
                <button type="button" class="btn-close" 
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>Please enter the interview link below before sending.</p>

                <div class="form-group mt-4">
                    <label for="interview_link" class="form-label">Interview Link</label>
                    <input type="url" id="interview_link" class="form-control">
                </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button" id="linkInterviewModal-confirm" class="btn btn-primary">
                    Send
                </button>
            </div>

        </div>
    </div>
</div>
