@extends('layouts.navpengguna')

@section('title', 'Application Detail Offering')

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
        <div class="step status-pass" data-step="1"></div>
        <div class="step-label">Screening</div>
    </div>
    </a>

    <div class="line"></div>

    <a href="{{ route('pengguna_applicationdetail_interview') }}" class="step-link">
    <div class="step-item">
        <div class="step-date">03 September 2025</div>
        <div class="step status-pass" data-step="2"></div>
        <div class="step-label">Interview</div>
    </div>
    </a>

    <div class="line"></div>

    <a href="{{ route('pengguna_applicationdetail_offering') }}" class="step-link">
    <div class="step-item">
        <div class="step-date">05 September 2025</div>
        <div class="step status-pass" data-step="3"></div>
        <div class="step-label">Offering</div>
    </div>
    </a>
</div>


<!-- KETERANGAN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <h5>Congratulations, You Have Passed!</h5>
                    <p class="mt-3">
                        You have successfully completed all stages of the recruitment process and have been accepted as
                        an intern at <strong>Mascitra</strong>. We sincerely congratulate you on this achievement and
                        appreciate the effort and dedication you demonstrated throughout the selection process. To
                        proceed with the next steps, please click the button below to download your official
                        <strong>Internship Acceptance Letter</strong>, which contains important information regarding your
                        internship placement.
                    </p>


                </div>

                <!-- BUTTON -->
                @php 
                $docs = ['Internship Acceptance Letter']; 
                @endphp

                @foreach ($docs as $doc)
                <div class="row mt-2">
                    <div class="col-12 d-flex justify-content-start">
                        <a href="#" class="btn btn-primary px-4 btn-download" data-doc="{{ strtolower($doc) }}">Internship Acceptance Letter</a>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
</div>

@push('scripts')

<script>
    document.querySelectorAll('.btn-download').forEach(btn => {
        btn.addEventListener('click', function () {

            const docType = this.getAttribute('data-doc');
            let fileUrl = '';

            switch (docType) {
                case 'internship acceptance letter':
                    fileUrl = 'https://drive.google.com/file/d/1CVwRPT9HYz-WI6NW11T_vjz5oEOGSqdi/view';
                    break;
            }

            window.open(fileUrl, '_blank');
        });
    });
</script>

@endpush

@endsection
