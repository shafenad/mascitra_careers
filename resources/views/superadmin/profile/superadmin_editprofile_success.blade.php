@extends('layouts.navsuperadmin')

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
                <div class="value">Citra </div>
            </div>

            <div class="detail-row">
                <div class="label">Username</div>
                <div class="value">superadmin_citra</div>
            </div>

            <div class="detail-row">
                <div class="label">Email</div>
                <div class="value">citrasuper@mail.com</div>
            </div>

            <div class="detail-row">
                <div class="label">Position</div>
                <div class="value">CEO</div>
            </div>

            <div class="detail-row">
                <div class="label">Role</div>
                <div class="value">Superadmin</div>
            </div>

            <div class="action-buttons mt-4 d-flex">
                <a href="{{ route('superadmin_editprofile') }}" class="btn btn-primary me-1 mb-1" type="submit">
                        Edit Profile
                    </a>
            </div>

            </div>


        </div>

    </div>
</div>

@endsection
