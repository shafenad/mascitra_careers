@extends('layouts.navsuperadmin')

@section('title', 'Fulltime Position')

@section('content')

<div class="page-heading">
<h3>Fulltime Position List</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-end">
            <a href="{{ route('superadmin_newposition_fulltime') }}" class="btn btn-light-primary">
                <i class="bi bi-plus-circle me-1"></i> Create New Position
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Position</th>
                            <th>Opening Date</th>
                            <th>Closing Date</th>
                            <th>Batch</th>
                            <th class="no-sort text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>Back End Developer</td>
                            <td>01-01-2025</td>
                            <td>01-02-2025</td>
                            <td>1</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Back End Developer" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="Back End Developer" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Front End Developer</td>
                            <td>01-01-2025</td>
                            <td>01-02-2025</td>
                            <td>1</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Front End Developer" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="Front End Developer" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>UI/UX Designer</td>
                            <td>05-01-2025</td>
                            <td>05-02-2025</td>
                            <td>1</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="UI/UX Designer" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="UI/UX Designer" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Data Analyst</td>
                            <td>15-01-2025</td>
                            <td>15-02-2025</td>
                            <td>2</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon warning-btn" data-id="Data Analyst" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="Data Analyst" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>IT Support</td>
                            <td>20-01-2025</td>
                            <td>20-02-2025</td>
                            <td>3</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="IT Support" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="IT Support" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>6</td>
                            <td>Network Engineer</td>
                            <td>22-01-2025</td>
                            <td>22-02-2025</td>
                            <td>3</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Network Engineer" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="Network Engineer" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td>Cybersecurity</td>
                            <td>25-01-2025</td>
                            <td>25-02-2025</td>
                            <td>3</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Cybersecurity" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="Cybersecurity" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td>DevOps</td>
                            <td>28-01-2025</td>
                            <td>28-02-2025</td>
                            <td>4</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="DevOps" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="DevOps" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td>QA Tester</td>
                            <td>30-01-2025</td>
                            <td>02-03-2025</td>
                            <td>4</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editposition_fulltime') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="QA Tester" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                                <button class="action-icon delete-btn" data-id="QA Tester" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash-fill text-danger"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

@include('components.modaldelete')
@include('components.modaldeactive')


@push('scripts')
<script>
    document.querySelectorAll('.delete-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            document.getElementById("deleteModal-body").innerHTML =
                `Delete Position <b>${id}</b>?`;

            document.getElementById("deleteModal-confirm")
                .setAttribute("data-id", id);
        });
    });

    document.getElementById("deleteModal-confirm").addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        console.log("DELETE CONFIRMED for ID:", id);

        bootstrap.Modal.getInstance(
            document.getElementById("deleteModal")
        ).hide();
    });
</script>


<script>
    document.querySelectorAll('.deactive-btn').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            document.getElementById("deactiveModal-body").innerHTML =
                `Deactive Position <b>${id}</b>?`;

            document.getElementById("deactiveModal-confirm").setAttribute("data-id", id);
        });
    });

    document.getElementById("deactiveModal-confirm").addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        console.log("DEACTIVE CONFIRMED for ID:", id);

        bootstrap.Modal.getInstance(document.getElementById("deactiveModal")).hide();
    });
</script>

@endpush

@endsection