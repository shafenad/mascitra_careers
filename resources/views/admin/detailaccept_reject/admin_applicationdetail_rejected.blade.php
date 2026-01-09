@extends('layouts.navadmin')

@section('title', 'Application Detail Rejected')

@section('content')
<div class="page-heading">
    <h3>Internship Application Details</h3>
</div>

<div class="card">
    <div class="card-body">
        <div class="alert d-flex justify-content-center align-items-center position-relative alert-danger alert-dismissible show fade" role="alert" >
            <strong>Rejected</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <div class="details-wrapper mt-4">

            <div class="detail-row">
                <div class="label">Name</div>
                <div class="value">Alfian Pratama</div>
            </div>

            <div class="detail-row">
                <div class="label">Institution</div>
                <div class="value">Universitas Gadjah Mada</div>
            </div>

            <div class="detail-row">
                <div class="label">Position</div>
                <div class="value">Frontend Developer Intern</div>
            </div>

            <div class="detail-row">
                <div class="label">Batch</div>
                <div class="value">1</div>
            </div>

            <div class="detail-row">
                <div class="label">Status</div>
                <div class="value">Rejected</div>
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

            <div class="detail-row">
                <div class="label">Interviewer Name</div>
                <div class="value">Septian</div>
            </div>

            <div class="detail-row">
                <div class="label">Interviewer Notes</div>
                <div class="value">Sudah memiliki basic pemahaman tentang front end seperti html, css, dan js. <br>
                     Namun belum memiliki pemahaman tentang laravel. dan tidak paham tentang templating</div>
            </div>

            <div class="detail-row">
                <div class="label">Rejection Reason</div>
                <div class="value">Portfolio kurang kuat dibagian front end dan tidak memiliki pemahaman mendalam tentang laravel.</div>
            </div>

            {{-- ACTION BUTTONS --}}
            <div class="action-buttons mt-4">
                <a href="{{ route('admin_applicationhistory') }}" class="btn-action btn-back fw-bold">
                    Back
                </a>
            </div>

        </div>

    </div>
</div>

@include('components.preview')

@push('scripts')

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
