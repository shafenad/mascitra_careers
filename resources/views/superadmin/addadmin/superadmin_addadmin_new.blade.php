@extends('layouts.navsuperadmin')

@section('title', 'Admin Accounts')

@section('content')

<div class="page-heading">
<h3>Account List</h3>
</div>
<section class="section">
    <div class="card">
        <div class="card-header d-flex justify-content-end">
            <a href="{{ route('superadmin_newadmin') }}" class="btn btn-light-primary">
                <i class="bi bi-plus-circle me-1"></i> Create New Admin
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="table1">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th class="no-sort text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Septian</td>
                            <td>septian_admin1</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editadmin') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Septian" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>Younki</td>
                            <td>younki_admin2</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editadmin') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Younki" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>Caca</td>
                            <td>caca_admin2</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editadmin') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Caca" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>Abdul</td>
                            <td>abdul_admin4</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editadmin') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Abdul" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                            </td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>Iqbal</td>
                            <td>iqbal_admin5</td>
                            <td class="text-center">
                                <a href="{{ route('superadmin_editadmin') }}" 
                                    class="action-icon" 
                                    title="Edit">
                                        <i class="bi bi-pencil-fill text-success"></i>
                                </a>
                                <button class="action-icon deactive-btn" data-id="Septian" data-bs-toggle="modal" data-bs-target="#deactiveModal">
                                    <i class="bi bi-x-circle-fill text-warning"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

@include('components.modaldeactive')

@push('scripts')

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