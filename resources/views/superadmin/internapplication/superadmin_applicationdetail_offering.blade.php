@extends('layouts.navsuperadmin')

@section('title', 'Application Detail Offering')

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
                <div class="value">Bagian analisis kasus pada sistem aplikasi layanan publik sudah disusun dengan cukup baik. <br>
                    Penjelasan alur proses, kebutuhan pengguna, serta identifikasi permasalahan yang muncul di lapangan telah <br> 
                    menggambarkan kondisi sebenarnya secara jelas. Namun, analisis tersebut masih berpotensi untuk diperdalam, <br>
                    terutama dalam aspek pemetaan aktor, skenario penggunaan, serta hubungan antarproses agar gambaran sistem <br>
                    yang dihasilkan menjadi lebih komprehensif dan mudah dipahami oleh seluruh pemangku kepentingan.</div>
            </div>

            {{-- ACTION BUTTONS --}}
            <div class="action-buttons mt-4">
                <a href="{{ route('superadmin_applicationdetail_interviewsuccess') }}" class="btn-action btn-back fw-bold">
                    Back
                </a>

                <div class="d-flex gap-2">
                    <button class="btn-action btn-interview" data-bs-toggle="modal" data-bs-target="#offeringModal">Offering</button>
                    <button class="btn-action btn-reject" disabled>Rejected</button>
                </div>
            </div>

        </div>

    </div>
</div>

@include('components.modaloffering')
@include('components.preview')

@push('scripts')

<script>
    // Ketika tombol offering YES diklik
document.getElementById("offeringModal-confirm").addEventListener("click", function () {

    const id = this.getAttribute("data-id");
    console.log("offering CONFIRMED for ID:", id);

    // Tutup modal offering
    bootstrap.Modal.getInstance(document.getElementById("offeringModal")).hide();
    // Redirect ke halaman lain
    window.location.href = "{{ route('superadmin_applicationdetail_accepted') }}";
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
