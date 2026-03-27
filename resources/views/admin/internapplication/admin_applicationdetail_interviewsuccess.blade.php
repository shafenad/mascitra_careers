@extends('layouts.navadmin')

@section('title', 'Application Detail Interview')

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
                <div class="label">Phone Number</div>
                <div class="value">08789656532</div>
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

            <div class="detail-row">
                <div class="label">Interview Link</div>
                <div class="value">https://linkzoom.example</div>
            </div>

            {{-- ACTION BUTTONS --}}
            <div class="action-buttons mt-4">
                <a href="{{ route('admin_applicationdetail') }}" class="btn-action btn-back fw-bold">
                    Back
                </a>

                <div class="d-flex gap-2">
                    <button class="btn-action btn-interview" data-bs-toggle="modal" data-bs-target="#linkInterviewSuccessModal">Interview Success</button>
                    <button class="btn-action btn-reject" data-bs-toggle="modal" data-bs-target="#rejectModal">Rejected</button>
                </div>
            </div>

        </div>

    </div>
</div>

@include('components.modalinterview_success')
@include('components.modalreject')
@include('components.preview')

@push('scripts')

<script>
    document.getElementById("linkInterviewSuccessModal-confirm").addEventListener("click", function () {

        const id = this.getAttribute("data-id");
        const name = document.getElementById("interviewer_name").value.trim();
        const notes = document.getElementById("interviewer_notes").value.trim();

        if (name === "" || notes === "") {
            alert("Please fill in all fields!");
            return;
        }

        console.log("SUBMIT SUCCESS for ID:", id);
        console.log("Interviewer Name:", name);
        console.log("Interview Notes:", notes);

        bootstrap.Modal.getInstance(document.getElementById("linkInterviewSuccessModal")).hide();

        window.location.href = "{{ route('admin_applicationdetail_interviewdisable') }}";
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
