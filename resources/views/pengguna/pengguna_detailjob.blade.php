@extends('layouts.navpengguna')

@section('title', 'Detail Job Pengguna')

@section('content')

<div class="container py-5">

    {{-- HERO --}}
    <div class="mb-4">
        <h1 class="job-hero-title display-6 mb-2">System Analyst</h1>
        <div class="job-muted fw-semibold">
            Batch 1 | 22 August - 22 November 2025 | 20 Applicants
        </div>

        <p class="mt-3 job-muted">
            As a System Analyst Intern, you will assist in analyzing existing business
            processes and identifying opportunities for improvement. You will be involved
            in gathering, documenting, and analyzing system requirements from stakeholders,
            as well as translating business needs into clear functional and non-functional
            requirements.
        </p>
    </div>

    {{-- INFO CARD --}}
    <div class="card job-card mb-5">
        <div class="card-body p-4">
            <div class="row g-3 align-items-center">
                <div class="col-12 col-lg-8">
                    <div class="row g-3">
                        <div class="col-12 col-md-6">
                            <div class="info-item">
                                <i class="bi bi-briefcase"></i> 0 - 1 years
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="info-item">
                                <i class="bi bi-mortarboard"></i> Internship
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="info-item"><i class="bi bi-geo-alt"></i> Work From Office</div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="info-item"><i class="bi bi-clock"></i> 6 months</div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4 text-lg-end">
                    <a href="{{ route('pengguna_applicationdetail') }}" class="btn btn-orange px-4 fw-bold">APPLY NOW</a>
                </div>
            </div>
        </div>
    </div>

    {{-- QUALIFICATIONS --}}
    <div class="mb-5">
        <h3 class="fw-bold mb-3">Qualifications</h3>

        <div class="num-list">
            <div class="num-row">
                <div class="num-badge">1</div>
                <div class="job-muted">Bachelor’s degree in Information Systems, Computer Science, or a related field</div>
            </div>
            <div class="num-row">
                <div class="num-badge">2</div>
                <div class="job-muted">Strong understanding of software development life cycle (SDLC)</div>
            </div>
            <div class="num-row">
                <div class="num-badge">3</div>
                <div class="job-muted">Proven experience as a System Analyst or in a similar role</div>
            </div>
            <div class="num-row">
                <div class="num-badge">4</div>
                <div class="job-muted">Attention to detail and ability to work collaboratively in a team</div>
            </div>
        </div>
    </div>

    {{-- JOB DESCRIPTION --}}
    <div class="mb-5">
        <h3 class="fw-bold mb-3">Job Description</h3>

        <div class="num-list">
            <div class="num-row">
                <div class="num-badge">1</div>
                <div class="job-muted">Analyze and understand business processes and system requirements.</div>
            </div>
            <div class="num-row">
                <div class="num-badge">2</div>
                <div class="job-muted">Design effective and efficient system workflows and data structures.</div>
            </div>
            <div class="num-row">
                <div class="num-badge">3</div>
                <div class="job-muted">Conduct system testing and validation to ensure functionality meets requirements.</div>
            </div>
            <div class="num-row">
                <div class="num-badge">4</div>
                <div class="job-muted">Identify potential improvements and provide recommendations for system optimization.</div>
            </div>
        </div>
    </div>

    {{-- SKILLS --}}
    <div class="mb-5">
        <h3 class="fw-bold mb-3">Skills</h3>

        <div class="d-flex flex-wrap gap-3">
            <span class="skill-chip">Logical thinking</span>
            <span class="skill-chip">Figma</span>
            <span class="skill-chip">UML</span>
        </div>
    </div>

        {{-- CTA --}}
    <div class="mb-4">
        <div class="cta-title mb-4">
            Join Our Team and Turn<br>
            Your Dreams Into Reality
        </div>

        <div class="cta-actions">
            <a href="{{ route('pengguna_landingpage') }}" class="btn btn-lightbox px-4">Back</a>
        </div>
    </div>

</div>

<button id="themeToggle" class="theme-fab" type="button" aria-label="Toggle theme">
  <i id="themeIcon" class="bi bi-moon-fill"></i>
</button>



 @include('layouts.footer')


@push('scripts')
<script>
    const html = document.documentElement;
    const toggleBtn = document.getElementById('themeToggle');
    const icon = document.getElementById('themeIcon');

    const savedTheme = localStorage.getItem('theme') || 'light';
    html.setAttribute('data-bs-theme', savedTheme);
    icon.className = savedTheme === 'dark'
        ? 'bi bi-sun-fill'
        : 'bi bi-moon-fill';

    toggleBtn.addEventListener('click', () => {
        const current = html.getAttribute('data-bs-theme');
        const next = current === 'dark' ? 'light' : 'dark';

        html.setAttribute('data-bs-theme', next);
        localStorage.setItem('theme', next);

        icon.className = next === 'dark'
            ? 'bi bi-sun-fill'
            : 'bi bi-moon-fill';
    });
</script>

@endpush


@endsection