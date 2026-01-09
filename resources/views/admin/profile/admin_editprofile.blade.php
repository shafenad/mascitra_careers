@extends('layouts.navadmin')

@section('title', 'Edit Profile')

@section('content')

  <div class="page-heading">
  <h3>Edit Profile</h3>
  </div>

  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <form class="form" action="{{ route('admin_editprofile_success') }}" data-parsley-validate> 
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="first-name-column" class="form-label"
                        >Name</label>
                      <input
                        type="text"
                        id="first-name-column"
                        class="form-control"
                        placeholder="Septian"
                        name="fname-column"
                        data-parsley-required="true"/>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="username" class="form-label">Username</label>
                      
                      <div class="input-group">
                        <input
                          type="text"
                          id="username"
                          class="form-control"
                          placeholder="septian_admin1"
                          name="username"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                      
                      <div class="input-group">
                        <input
                          type="email"
                          id="email"
                          class="form-control"
                          placeholder="septianadmin1@gmail.com"
                          name="email"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="position" class="form-label">Position</label>
                      
                      <div class="input-group">
                        <input
                          type="text"
                          id="position"
                          class="form-control"
                          placeholder="CTO"
                          name="position"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="position" class="form-label">Role</label>
                      
                      <div class="input-group">
                        <input
                          type="text"
                          id="position"
                          class="form-control"
                          placeholder="Admin"
                          name="position"
                          readonly
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="password" class="form-label">Password</label>
                      <div class="input-group">
                        <input
                          type="password"
                          id="password"
                          class="form-control"
                          placeholder="Password"
                          name="password"
                        />
                      </div>
                      <p class="mt-2">Fill in to change password</p> 
                  </div>

                <div class="row">
                  <div class="col-12 d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary me-1 mb-1">
                        Save
                    </button>
                    <a href="{{ route('admin_profile') }}" class="btn btn-light-secondary me-1 mb-1">
                        Cancel
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


@endsection