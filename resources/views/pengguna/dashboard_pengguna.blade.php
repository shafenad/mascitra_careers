@extends('layouts.navpengguna')

@section('title', 'Dashboard Pengguna')

@section('content')

<div class="page-heading">
<h3>Welcome to Mascitra Career, 
<p>{{ session('user.name') }}</p>
</div>

    <div class="row">
     <div class="col-md-6 col-12 mb-4">

        <a href="{{ route('pengguna_applicationdetail_interviewfinal') }}"
        class="application-card-wrapper d-block h-100">

            <div class="card application-card reminder-card h-100">
                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <h5 class="fw-bold text-danger mb-1">
                                Interview Test Reminder!
                            </h5>
                            <p class="text-muted mb-2">
                                UI/UX Designer Intern
                            </p>
                        </div>

                        <span class="badge bg-danger">
                            Interview
                        </span>
                    </div>

                    <div class="mt-3">
                        <p class="mb-2 text-danger">
                            <i class="bi bi-exclamation-triangle-fill me-1"></i>
                            Interview for the <strong>UI/UX Designer</strong> position is scheduled on
                            <strong>Saturday, September 3, 2025</strong>.
                        </p>
                    </div>

                </div>
            </div>

        </a>

    </div>

    

    <div class="col-md-6 col-12 mb-4">
        <a href="{{ route('pengguna_applicationdetail_screening') }}">
        <div class="card application-card d-block h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="fw-bold mb-1">System Analyst Intern</h5>
                        <p class="text-muted mb-2">Mascitra Career</p>
                    </div>
                    <span class="badge bg-warning">
                        In Progress
                    </span>
                </div>

                <div class="mt-3">
                    <p class="mb-1">
                        <strong>Position:</strong> System Analyst Intern 
                    </p>
                    <p class="mb-0 text-muted">
                        Current Stage: Administrative Test
                    </p>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-md-6 col-12 mb-4">
        <a href="{{ route('pengguna_applicationdetail_offering') }}">
        <div class="card application-card d-block h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="fw-bold mb-1">Digital Marketing Intern</h5>
                        <p class="text-muted mb-2">Mascitra Career</p>
                    </div>
                    <span class="badge bg-success">
                        Accepted
                    </span>
                </div>

                <div class="mt-3">
                    <p class="mb-1">
                        <strong>Position:</strong> Digital Marketing Intern 
                    </p>
                    <p class="mb-0 text-muted">
                        Current Stage: Offering
                    </p>
                </div>
            </div>
        </div>
        </a>
    </div>

    <div class="col-md-6 col-12 mb-4">
        <a href="{{ route('pengguna_applicationdetail_rejectinterview') }}">
        <div class="card application-card d-block h-100">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-start">
                    <div>
                        <h5 class="fw-bold mb-1">Front End Developer Intern</h5>
                        <p class="text-muted mb-2">Mascitra Career</p>
                    </div>
                    <span class="badge bg-danger">
                        Rejected
                    </span>
                </div>

                <div class="mt-3">
                    <p class="mb-1">
                        <strong>Position:</strong> Front End Developer Intern 
                    </p>
                    <p class="mb-0 text-muted">
                        Current Stage: Interview
                    </p>
                </div>
            </div>
        </div>
        </a>
    </div>

    </div>


@include('components.modaldashboard')

@push('scripts')

<script>
document.addEventListener('DOMContentLoaded', function () {
    let reminderModal = new bootstrap.Modal(
        document.getElementById('reminderModal'),
        {
            backdrop: 'static', 
            keyboard: false     
        }
    );
    reminderModal.show();
});
</script>

@endpush

@endsection