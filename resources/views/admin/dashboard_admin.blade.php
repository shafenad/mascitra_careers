@extends('layouts.navadmin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="content-wrapper container">
    
<div class="page-heading">
<h3>Welcome to Mascitra Career, 
<p>{{ session('user.name') }}</p>
</div>
<div class="page-content">
<section class="row">
<div class="col-12">
<div class="row">
<div class="col-6 col-lg-3 col-md-6">
    <div class="card position-relative">

        <!-- action button -->
        <button class="btn action-btn" data-bs-toggle="dropdown">
            <span class="dot-menu">
                <span></span><span></span><span></span>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Download CSV</a></li>
            <li><a class="dropdown-item" href="#">Download Excel</a></li>
        </ul>

        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon green mb-2">
                        <i class="iconly-boldTick-Square"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Application Accepted</h6>
                    <h6 class="font-extrabold mb-0">20</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card position-relative">

        <button class="btn action-btn" data-bs-toggle="dropdown">
            <span class="dot-menu">
                <span></span><span></span><span></span>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Download CSV</a></li>
            <li><a class="dropdown-item" href="#">Download Excel</a></li>
        </ul>

        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon red mb-2">
                        <i class="iconly-boldClose-Square"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Application Rejected</h6>
                    <h6 class="font-extrabold mb-0">5</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card position-relative">

        <button class="btn action-btn" data-bs-toggle="dropdown">
            <span class="dot-menu">
                <span></span><span></span><span></span>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Download CSV</a></li>
            <li><a class="dropdown-item" href="#">Download Excel</a></li>
        </ul>

        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon purple mb-2">
                        <i class="iconly-boldDanger"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Application In Progress</h6>
                    <h6 class="font-extrabold mb-0">15</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-6 col-lg-3 col-md-6">
    <div class="card position-relative">

        <button class="btn action-btn" data-bs-toggle="dropdown">
            <span class="dot-menu">
                <span></span><span></span><span></span>
            </span>
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="#">Download CSV</a></li>
            <li><a class="dropdown-item" href="#">Download Excel</a></li>
        </ul>

        <div class="card-body px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                    <div class="stats-icon blue mb-2">
                        <i class="iconly-boldChart"></i>
                    </div>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">Annual Applicants</h6>
                    <h6 class="font-extrabold mb-0">60</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="row">
    <div class="col-12 col-lg-7">
        <div class="card">
            <div class="card-header">
                <h4>Monthly Applicants</h4>
            </div>
            <div class="card-body">
                <div id="chart-profile-visit"></div>
            </div>
        </div>
    </div>
     <div class="col-12 col-lg-5">
        <div class="card">
            <div class="card-header">
                <h4>Monthly Applicants (Position)</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="{{ asset('svg/bootstrap-icons.svg') }}#circle-fill"/>
                            </svg>
                            <h5 class="mb-0 ms-3">System Analyst</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="mb-0">7</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-europe"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="{{ asset('svg/bootstrap-icons.svg') }}#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Backend Developer</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="mb-0">10</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-america"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                style="width:10px">
                                <use
                                    xlink:href="{{ asset('svg/bootstrap-icons.svg') }}#circle-fill" />
                            </svg>
                            <h5 class="mb-0 ms-3">Mobile Developer</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <h5 class="mb-0">15</h5>
                    </div>
                    <div class="col-12">
                        <div id="chart-indonesia"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8">
    <div class="card">
        <div class="card-header">
            <h4>Calendar Events</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-lg">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Event</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('jpg/2.jpg') }}">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Arya</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">Interview Test  UI/UX Intern on December 10, 2025 - 10:00 AM </p>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-3">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md">
                                        <img src="{{ asset('jpg/5.jpg') }}">
                                    </div>
                                    <p class="font-bold ms-3 mb-0">Sinta</p>
                                </div>
                            </td>
                            <td class="col-auto">
                                <p class=" mb-0">Interview Test Backend Developer Intern on December 15, 2025 - 13:00 PM</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    </div>
<div class="col-12 col-xl-4">
    <div class="calendar-container">
        <div class="calendar">
            <div class="calendar-header">
                <span id="prev-month" class="nav-btn">&lt;</span>
                <h2 id="calendar-title"></h2>
                <span id="next-month" class="nav-btn">&gt;</span>
            </div>

            <div class="calendar-body">
                <div class="calendar-weekdays">
                    <div>Sun</div>
                    <div>Mon</div>
                    <div>Tue</div>
                    <div>Wed</div>
                    <div>Thu</div>
                    <div>Fri</div>
                    <div>Sat</div>
                </div>

                <div class="calendar-dates" id="calendar-dates"></div>
            </div>
        </div>
    </div>
</div>
    <div class="modal fade" id="eventModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                
                <div class="modal-header">
                    <h5 class="modal-title">Agenda</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body" id="eventModalBody">
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</section>
</div>

</div>

@endsection
