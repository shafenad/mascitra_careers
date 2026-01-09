@extends('layouts.navadmin')

@section('title', 'Application Detail')

@section('content')
<div class="page-heading">
    <h3>Internship Application Details</h3>
</div>

<div class="card">
    <div class="card-body">
        <div class="alert d-flex justify-content-center align-items-center position-relative alert-warning alert-dismissible fade show" role="alert" >
            <strong>In Progress</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        
        <div class="details-wrapper mt-4">

            <div class="detail-row">
                <div class="label">Name</div>
                <div class="value">Shavira</div>
            </div>

            <div class="detail-row">
                <div class="label">Institution</div>
                <div class="value">Universitas Jember</div>
            </div>

            <div class="detail-row">
                <div class="label">Position</div>
                <div class="value">System Analyst Intern</div>
            </div>

            <div class="detail-row">
                <div class="label">Batch</div>
                <div class="value">1</div>
            </div>

            <div class="detail-row">
                <div class="label">Status</div>
                <div class="value">In Progress</div>
            </div>

            {{-- DOCUMENTS --}}
            @php 
                $docs = ['CV', 'Portfolio', 'Academic Record']; 
            @endphp

            @foreach ($docs as $doc)
            <div class="detail-row doc-row">
                <div class="label">{{ $doc }}</div>
                <div class="value d-flex gap-2">
                <button class="btn-doc btn-download" data-doc="{{ strtolower($doc) }}"><i class="bi bi-download"></i></button>
                <button class="btn-doc btn-preview"><i class="bi bi-search"></i></button>

                </div>
            </div>
            @endforeach

            {{-- ACTION BUTTONS --}}
            <div class="action-buttons mt-4">
                <a href="{{ route('admin_internapplication') }}" class="btn-action btn-back fw-bold">
                    Back
                </a>

                <div class="d-flex gap-2">
                    <button class="btn-action btn-interview save-btn" data-bs-toggle="modal" data-bs-target="#saveModal">Interview test</button>
                    <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal">Rejected</button>
                </div>
            </div>

        </div>

    </div>
</div>

@include('components.modalsave')
@include('components.modallink_interview')
@include('components.modalreject')
@include('components.preview')

@push('scripts')
<script>
    
    document.querySelectorAll('.save-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            document.getElementById("saveModal-body").innerHTML =
                `Save changes?`;

            document.getElementById("saveModal-confirm").setAttribute("data-id", id);
        });
    });

    document.getElementById("saveModal-confirm").addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        console.log("SAVE CONFIRMED for ID:", id);
    });

    document.getElementById("saveModal-confirm").addEventListener("click", function () {
    const id = this.getAttribute("data-id");
    console.log("SAVE CONFIRMED for ID:", id);

    const saveModalEl = document.getElementById("saveModal");
    const saveModal = bootstrap.Modal.getInstance(saveModalEl);
    saveModal.hide();

    document.getElementById("linkInterviewModal-confirm").setAttribute("data-id", id);

    const interviewModal = new bootstrap.Modal(document.getElementById("linkInterviewModal"));
    interviewModal.show();
});
</script>

<script>
document.getElementById("linkInterviewModal-confirm").addEventListener("click", function () {
    const id = this.getAttribute("data-id");
    const link = document.getElementById("interview_link").value.trim();

    if (link === "") {
        alert("Please enter the interview link!");
        return;
    }

    console.log("SEND LINK for ID:", id);
    console.log("Interview Link:", link);

    bootstrap.Modal.getInstance(document.getElementById("linkInterviewModal")).hide();

    window.location.href = "{{ route('admin_applicationdetail_interviewsuccess') }}";
});
</script>

<script>
    document.getElementById('rejectModal-confirm').addEventListener('click', function () {
    const reason = document.getElementById('rejection_reason').value.trim();

    if (reason === "") {
        alert("Please provide a rejection reason!");
        return;
    }

    const modal = bootstrap.Modal.getInstance(document.getElementById('rejectModal'));
    modal.hide();

    setTimeout(() => {
        window.location.href = "{{ route('admin_applicationdetail_rejected') }}"; 
    }, 300); 
});
</script>

<script>
    document.querySelectorAll('.btn-preview').forEach(btn => {
        btn.addEventListener('click', function () {

            const label = this.closest('.doc-row')
                            .querySelector('.label')
                            .innerText
                            .toLowerCase();

            let fileUrl = '';

            switch (label) {
                case 'cv':
                    fileUrl = 'https://drive.google.com/file/d/15eXMFhdG0hZlQGnT7nm2aoUgLSYlcujI/preview';
                    break;
                case 'portfolio':
                    fileUrl = 'https://drive.google.com/file/d/19yJ_EBuitRMFuwoRW269t5k7kM_sLtqK/preview';
                    break;
                case 'academic record':
                    fileUrl = 'https://drive.google.com/file/d/1X_MqGJqiAUBx_muQet_8VXR4Bh2gKerH/preview';
                    break;
                default:
                    alert('Dokumen tidak ditemukan');
                    return;
            }

            document.getElementById('previewFrame').src = fileUrl;

            const modal = new bootstrap.Modal(document.getElementById('previewModal'));
            modal.show();
        });
    });
</script>


<script>
    document.querySelectorAll('.btn-download').forEach(btn => {
        btn.addEventListener('click', function () {

            const docType = this.getAttribute('data-doc');
            let fileUrl = '';

            switch (docType) {
                case 'cv':
                    fileUrl = 'https://drive.google.com/file/d/15eXMFhdG0hZlQGnT7nm2aoUgLSYlcujI/view';
                    break;
                case 'portfolio':
                    fileUrl = 'https://drive.google.com/file/d/19yJ_EBuitRMFuwoRW269t5k7kM_sLtqK/view';
                    break;
                case 'academic record':
                    fileUrl = 'https://drive.google.com/file/d/1X_MqGJqiAUBx_muQet_8VXR4Bh2gKerH/view';
                    break;
            }

            window.open(fileUrl, '_blank');
        });
    });
</script>

@endpush

@endsection
