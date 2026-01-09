@extends('layouts.navpengguna')

@section('title', 'Application Detail Screening')

@section('content')

<div class="page-heading mb-4">
    <h3 class="fw-bold">System Analyst Intern</h3>
</div>

<!-- JOB INFORMATION -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card job-main-card">
            <div class="card-body">

                <div class="row g-4">

                    <!-- JOB DESCRIPTION -->
                    <div class="col-lg-8 col-12 h-100">
                        <p class="text-muted mb-0">
                            As a System Analyst Intern, you will assist in analyzing existing business
                            processes and identifying opportunities for improvement. You will be involved
                            in gathering, documenting, and analyzing system requirements from stakeholders,
                            as well as translating business needs into clear functional and non-functional
                            requirements.
                        </p>
                        <ul class="text-muted mt-4">
                            <li>Analyze user and business requirements</li>
                            <li>Create system documentation and flow diagrams</li>
                            <li>Support development and testing process</li>
                            <li>Collaborate with developers and stakeholders</li>
                        </ul>

                    </div>

                    <!-- JOB INFO -->
                    <div class="col-lg-4 col-12">
                        <div class="job-info-box h-100">

                            <div class="job-info-grid-2">
                                <div class="info-item">
                                    <i class="bi bi-briefcase"></i> 3 Month
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-mortarboard"></i> Internship
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-geo-alt"></i> Work From Office
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-clock"></i> 6 Months
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- STEP INDICATOR -->
<div class="stepper mb-5">
    <a href="{{ route('pengguna_applicationdetail_screening') }}" class="step-link">
    <div class="step-item">
        <div class="step-date">27 August 2025</div>
        <div class="step status-progress" data-step="1"></div>
        <div class="step-label">Screening</div>
    </div>
    </a>

    <div class="line"></div>

    <a href="{{ route('pengguna_applicationdetail_interview') }}" class="step-link">
    <div class="step-item">
        <div class="step-date"></div>
        <div class="step" data-step="2"></div>
        <div class="step-label"></div>
    </div>
    </a>

    <div class="line"></div>

    <a href="#" class="step-link">
    <div class="step-item">
        <div class="step-date"></div>
        <div class="step" data-step="3"></div>
        <div class="step-label"></div>
    </div>
    </a>
</div>


<!-- FORM -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" class="form-control round" placeholder="Shavira Feby" readonly>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" class="form-control round" placeholder="shavira@gmail.com" readonly>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Telephone *</label>
                            <input type="number" id="phone" class="form-control round" placeholder="0189238989938" readonly>
                        </div>
                    </div>

                    {{-- CV --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cv">CV *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="cv" class="form-control round" placeholder="CV Shavira.pdf" readonly>

                                <button type="button" class="btn btn-icon btn-del" data-clear="#cv" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    {{-- Portfolio --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="porto">Portfolio *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="porto" class="form-control round" placeholder="Shavira porto.pdf" readonly>

                                <button type="button" class="btn btn-icon btn-del" data-clear="#porto" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>

                        </div>
                    </div>

                    {{-- Academic Record --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="transkip">Academic Record *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="transkip" class="form-control round" placeholder="KHS Shavira.pdf" readonly>

                                <button type="button" class="btn btn-icon btn-del" data-clear="#transkip" title="Delete">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BUTTON -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start gap-3">
                        <a href="#" class="btn btn-primary px-4 disabled" type="submit"> Submit </a>
                        <a href="#" class="btn btn-danger px-4 disabled" type="cancel" disabled> Cancel </a> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@include('components.preview')

@push('scripts')

<script>
    document.querySelectorAll('.btn-preview').forEach(btn => {
    btn.addEventListener('click', function () {

        const input = this.closest('.file-actions')?.querySelector('input[type="file"]');
        if (!input) return;

        let fileUrl = '';
        switch (input.id) {
        case 'cv':
            fileUrl = 'https://drive.google.com/file/d/15eXMFhdG0hZlQGnT7nm2aoUgLSYlcujI/preview';
            break;
        case 'porto':
            fileUrl = 'https://drive.google.com/file/d/19yJ_EBuitRMFuwoRW269t5k7kM_sLtqK/preview';
            break;
        case 'transkip':
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


@endpush

@endsection
