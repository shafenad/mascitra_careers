@extends('layouts.navsuperadmin')

@section('title', 'Application History')

@section('content')

<div class="page-heading">
<h3>Application History</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-end">
            <button class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#exportModal">
                Export Report
            </button>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Institution</th>
                            <th>Batch</th>
                            <th>Status</th>
                            <th class="no-sort text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Shavira</td>
                            <td>System Analyst Intern</td>
                            <td>Universitas Jember</td>
                            <td>1</td>
                            <td>Accepted</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_applicationdetail_accepted') }}" 
                                    class="action-icon" 
                                    title="action">
                                        <i class="bi bi-archive-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Ghina Qurrotu Aini</td>
                            <td>Backend Developer Intern</td>
                            <td>Universitas Brawijaya</td>
                            <td>1</td>
                            <td>Accepted</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="action">
                                    <i class="bi bi-archive-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Alfian Pratama</td>
                            <td>Frontend Developer Intern</td>
                            <td>Universitas Gadjah Mada</td>
                            <td>1</td>
                            <td>Rejected</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_applicationdetail_rejected') }}" class="action-icon" title="action">
                                    <i class="bi bi-archive-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Raka Dwi Saputra</td>
                            <td>UI/UX Designer Intern</td>
                            <td>Institut Teknologi Sepuluh Nopember</td>
                            <td>2</td>
                            <td>Accepted</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="action">
                                    <i class="bi bi-archive-fill"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Nabila Putri</td>
                            <td>QA Engineer Intern</td>
                            <td>Universitas Airlangga</td>
                            <td>2</td>
                            <td>Rejected</td>
                            <td class="text-center">
                                <a href="#" class="action-icon" title="action">
                                    <i class="bi bi-archive-fill"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

@include('components.modalexport')

@endsection