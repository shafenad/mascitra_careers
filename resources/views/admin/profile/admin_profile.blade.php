@extends('layouts.navadmin')

@section('title', 'My Profile')

@section('content')
<div class="page-heading">
    <h3>My Profile</h3>
</div>

<div class="card">
    <div class="card-body">
        <div class="details-wrapper mt-2">

            <div class="detail-row">
                <div class="label">Name</div>
                <div class="value">Septian</div>
            </div>

            <div class="detail-row">
                <div class="label">Username</div>
                <div class="value">septian_admin1</div>
            </div>

            <div class="detail-row">
                <div class="label">Email</div>
                <div class="value">septianadmin1@gmail.com</div>
            </div>

            <div class="detail-row">
                <div class="label">Position</div>
                <div class="value">CFO</div>
            </div>

            <div class="detail-row">
                <div class="label">Role</div>
                <div class="value">Admin</div>
            </div>

            <div class="action-buttons mt-4 d-flex">
                <a href="{{ route('admin_editprofile') }}" class="btn btn-primary me-1 mb-1" type="submit">
                        Edit Profile
                    </a>
            </div>

            </div>


        </div>

    </div>
</div>

@endsection
