<div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exportModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <form action="{{ route('superadmin_export_report') }}" method="GET" class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title" id="exportModalLabel">Export Report</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body">
                <label class="form-label fw-bold">Select Batch</label>
                <select name="batch" class="form-select" required>
                    <option value="">-- Choose Batch --</option>
                    <option value="1">Batch 1</option>
                    <option value="2">Batch 2</option>
                    <option value="3">Batch 3</option>
                    <option value="all">All Batches</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Export</button>
            </div>

        </form>
    </div>
</div>
