@extends('layouts.navpengguna')

@section('title', 'Application Detail Reject Sreening')

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
        <div class="step status-fail" data-step="1"></div>
        <div class="step-label">Screening</div>
    </div>
    </a>

    <div class="line"></div>

    <a href="#" class="step-link">
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


<!-- KETERANGAN -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5>Administrative Test Result</h5>
                <p class="mt-3">
                    Unfortunately, you <strong>did not pass the administrative screening</strong> stage at this time.
                    After careful review, your application could not be progressed further because the submitted
                    <strong>portfolio did not sufficiently demonstrate the required breadth and depth of relevant experience</strong>
                    for this position. We sincerely appreciate your interest and the effort you put into submitting your application.
                    Thank you for your participation, and we wish you every success in your future opportunities.
                </p>
            </div>
        </div>
    </div>
</div>

@endsection
