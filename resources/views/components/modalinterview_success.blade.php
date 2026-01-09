<div class="modal fade modal-borderless" id="linkInterviewSuccessModal" tabindex="-1"
     aria-labelledby="linkInterviewSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="linkInterviewSuccessModalLabel">Notes!</h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <p>Please enter the interviewer notes below.</p>

                <div class="form-group mt-3">
                    <label for="interviewer_name" class="form-label">Interviewer Name</label>
                    <input type="text" id="interviewer_name" class="form-control">
                </div>

                <div class="form-group mt-3">
                    <label for="interviewer_notes" class="form-label">Interview Notes</label>
                    <textarea id="interviewer_notes" class="form-control" rows="4"></textarea>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cancel
                </button>

                <button type="button" id="linkInterviewSuccessModal-confirm" class="btn btn-primary">
                    Send
                </button>
            </div>

        </div>
    </div>
</div>
