@extends('layouts.navsuperadmin')

@section('title', 'Edit Position Fulltime')

@section('content')

  <div class="page-heading">
  <h3>Edit Fulltime Position</h3>
  </div>

  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <form class="form" action="{{ route('superadmin_position_fulltime') }}" data-parsley-validate>
                <div class="row">
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="first-name-column" class="form-label"
                        >Position</label>
                      <input
                        type="text"
                        id="first-name-column"
                        class="form-control"
                        placeholder="Position Name"
                        name="fname-column"
                        data-parsley-required="true"/>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                      <div class="form-group">
                          <label for="skills-column" class="form-label"
                          >Skills</label>
                         <select name="skills[]" class="choices form-select multiple-remove" multiple data-parsley-required="true">
                          <optgroup label="Figures">
                              <option value="ct">Criticial Thinking</option>
                              <option value="tw" selected>Team Work</option>
                              <option value="sql">SQL</option>
                              <option value="php">PHP</option>
                          </optgroup>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="category" class="form-label">Category</label>
                      <select
                        id="category"
                        name="category"
                        class="form-select"
                        data-parsley-required="true"
                      >
                        <option value="" selected disabled>Select Category</option>
                        <option value="fulltime">Fulltime</option>
                        <option value="intern">Intern</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="work-experience" class="form-label">Work Experience</label>
                      
                      <div class="input-group">
                        <input
                          type="number"
                          id="work-experience"
                          class="form-control"
                          placeholder="0"
                          name="work_experience"
                          data-parsley-required="true"
                        />
                        <span class="input-group-text">Years</span>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="category" class="form-label">Work System</label>
                      <select
                        id="work_system"
                        name="work_system"
                        class="form-select"
                        data-parsley-required="true"
                      >
                        <option value="" selected disabled>Select Work System</option>
                        <option value="wfh">Work Form Home</option>
                        <option value="wfo">Work From Office</option>
                        <option value="hybrid">Hybrid</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="monthly_income" class="form-label">Monthly Income</label>
                      
                      <div class="input-group">
                        <input
                          type="number"
                          id="duration"
                          class="form-control"
                          placeholder="0"
                          name="duration"
                          data-parsley-required="true"
                        />
                        <span class="input-group-text">IDR</span>
                      </div>

                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="opening-date" class="form-label"
                        >Opening date</label
                      >
                      <input
                        type="date"
                        id="opening-date"
                        class="form-control"
                        name="opening-date"
                        placeholder="Opeing Date"
                        data-parsley-required="true"
                      />
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="company-column" class="form-label"
                        >Closing date</label
                      >
                      <input
                        type="date"
                        id="closing-date"
                        class="form-control"
                        name="closing-date"
                        placeholder="Closing Date"
                        data-parsley-required="true"
                      />
                    </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <label for="qualification-column" class="form-label"
                          >Qualifications</label>
                          <div class="summernote" data-placeholder="Write Qualification"></div>
                          <input type="hidden" name="qualification" id="qualification">
                    </div>
                  </div>
                  <div class="col-12">
                      <div class="form-group">
                          <label for="jobdesc-column" class="form-label"
                          >Job Description</label>
                          <div class="summernote" data-placeholder="Write Job Description"></div>
                          <input type="hidden" name="jobdesc" id="jobdesc">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-12 d-flex justify-content-end mt-4">
                    <button type="submit" class="btn btn-primary me-1 mb-1">
                        Save
                    </button>
                    <a href="{{ route('superadmin_position_fulltime') }}" class="btn btn-light-secondary me-1 mb-1">
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