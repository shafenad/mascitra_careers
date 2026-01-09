@extends('layouts.navpengguna')

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
              <form class="form" action="{{ route('pengguna_editprofile_success') }}" data-parsley-validate> 
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="first-name-column" class="form-label"
                        >Name</label>
                      <input
                        type="text"
                        id="first-name-column"
                        class="form-control"
                        placeholder="Shavira"
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
                          placeholder="shavira_pengguna"
                          name="username"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="telephone" class="form-label">Telephone</label>
                      
                      <div class="input-group">
                        <input
                          type="number"
                          id="telephone"
                          class="form-control"
                          placeholder="08565652325623"
                          name="telephone"
                          data-parsley-required="true"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="institution" class="form-label">Institution</label>
                      
                      <div class="input-group">
                        <input
                          type="text"
                          id="institution"
                          class="form-control"
                          placeholder="Universitas Jember"
                          name="institution"
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
                          placeholder="shavirapengguna@gmail.com"
                          name="email"
                        />
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group ">
                      <label for="role" class="form-label">Role</label>
                      
                      <div class="input-group">
                        <input
                          type="role"
                          id="role"
                          class="form-control"
                          placeholder="Pengguna"
                          name="role"
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
                  </div>

                <div class="row">
                  <div class="col-12 d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary me-1 mb-1">
                        Save
                    </button>

                    <a href="{{ route('pengguna_profile') }}" class="btn btn-light-secondary me-1 mb-1">
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