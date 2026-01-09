@extends('layouts.navpengguna')

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
                <div class="value">Shavira</div>
            </div>

            <div class="detail-row">
                <div class="label">Username</div>
                <div class="value">shavira_pengguna</div>
            </div>

            <div class="detail-row">
                <div class="label">Telephone</div>
                <div class="value">08565652325623</div>
            </div>

            <div class="detail-row">
                <div class="label">Institution</div>
                <div class="value">Universitas Jember</div>
            </div>

            <div class="detail-row">
                <div class="label">Email</div>
                <div class="value">shavirapengguna@gmail.com</div>
            </div>

            <div class="detail-row">
                <div class="label">Role</div>
                <div class="value">Pengguna</div>
            </div>

            <div class="action-buttons mt-4 d-flex">
                <a href="{{ route('pengguna_editprofile') }}" class="btn btn-primary me-1 mb-1" type="submit">
                        Edit Profile
                    </a>
            </div>

            </div>


        </div>

    </div>
</div>

@endsection
