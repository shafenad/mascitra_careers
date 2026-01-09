@extends('layouts.navpengguna')

@section('title', 'Application Detail')

@section('content')

<div class="page-heading mb-4">
    <h3 class="fw-bold">System Analyst Intern</h3>
</div>

<!-- JOB INFORMATION -->
<div class="row mb-5">
    <div class="col-12">
        <div class="card job-main-card">
            <div class="card-body">

                <div class="row g-4">

                    <!-- JOB DESCRIPTION -->
                    <div class="col-lg-8 col-12 h-100">
                        <p class="text-muted mb-0">
                            As a System Analyst Intern, you will assist in analyzing existing business
                            processes and identifying opportunities for improvement. You will be involved
                            in gathering, documenting, and analyzing system requirements from stakeholders,
                            as well as translating business needs into clear functional and non-functional
                            requirements.
                        </p>
                        <ul class="text-muted mt-4">
                            <li>Analyze user and business requirements</li>
                            <li>Create system documentation and flow diagrams</li>
                            <li>Support development and testing process</li>
                            <li>Collaborate with developers and stakeholders</li>
                        </ul>

                    </div>

                    <!-- JOB INFO -->
                    <div class="col-lg-4 col-12">
                        <div class="job-info-box h-100">

                            <div class="job-info-grid-2">
                                <div class="info-item">
                                    <i class="bi bi-briefcase"></i> 3 Month
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-mortarboard"></i> Internship
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-geo-alt"></i> Work From Office
                                </div>
                                <div class="info-item">
                                    <i class="bi bi-clock"></i> 6 Months
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>

<!-- STEP INDICATOR -->
<div class="stepper mb-5">
    <div class="step-item">
        <div class="step-date"></div>
        <div class="step active" data-step="1"></div>
        <div class="step-label"></div>
    </div>

    <div class="line active"></div>

    <div class="step-item">
        <div class="step-date"></div>
        <div class="step" data-step="2"></div>
        <div class="step-label"></div>
    </div>

    <div class="line"></div>

    <div class="step-item">
        <div class="step-date"></div>
        <div class="step" data-step="3"></div>
        <div class="step-label"></div>
    </div>
</div>

<!-- FORM -->
<form id="registerForm" action="#">
    @csrf
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" id="name" class="form-control round" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" class="form-control round" required>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="phone">Telephone *</label>
                            <input type="number" id="phone" class="form-control round" required>
                        </div>
                    </div>

                    {{-- CV --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="cv">CV *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="cv" class="form-control round" accept=".pdf,.doc,.docx" required>
                                
                                <button type="button" class="btn btn-icon btn-del" data-clear="#cv" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                           <small class="text-danger d-none" id="cvError"></small>

                        </div>
                    </div>

                    {{-- Portfolio --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="porto">Portfolio *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="porto" class="form-control round" accept=".pdf,.doc,.docx" required>
                                
                                <button type="button" class="btn btn-icon btn-del" data-clear="#porto" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                            <small class="text-danger d-none" id="portoError"></small>
                        </div>
                    </div>

                    {{-- Academic Record --}}
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="transkip">Academic Record *</label>

                            <div class="input-group file-actions">
                                <input type="file" id="transkip" class="form-control round" accept=".pdf,.doc,.docx" required>
                                
                                <button type="button" class="btn btn-icon btn-del" data-clear="#transkip" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                    <i class="bi bi-trash"></i>
                                </button>

                                <button type="button" class="btn btn-icon btn-preview" title="Preview">
                                    <i class="bi bi-search"></i>
                                </button>
                            </div>
                            <small class="text-danger d-none" id="transkipError"></small>
                        </div>
                    </div>
                </div>
                <!-- BUTTON -->
                <div class="row mt-4">
                    <div class="col-12 d-flex justify-content-start gap-3">
                        <button type="submit" class="btn btn-primary px-4">
                            Submit
                        </button>

                        <a href="{{ route('pengguna_detailjob') }}" class="btn btn-danger px-4" type="cancel"> Cancel </a>        
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</form>

@include('components.preview')
@include('components.modalsubmit')
@include('components.modaldelete_doc')

@push('scripts')

<script>
document.querySelectorAll('.btn-preview').forEach(btn => {
    btn.addEventListener('click', function () {

        const inputFile = this.closest('.file-actions').querySelector('input[type="file"]');

        if (!inputFile || !inputFile.files.length) {
            alert('Silakan pilih file terlebih dahulu');
            return;
        }

        const file = inputFile.files[0];

        const fileURL = URL.createObjectURL(file);

        const frame = document.getElementById('previewFrame');
        frame.src = fileURL;

        const modal = new bootstrap.Modal(document.getElementById('previewModal'));
        modal.show();
    });
});
</script>



<script>
document.getElementById('registerForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const form = this;

    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    const modal = new bootstrap.Modal(document.getElementById('submitModal'));
    modal.show();
});
</script>


<script>
    document.getElementById("submitModal-confirm").addEventListener("click", function () {

    const id = this.getAttribute("data-id");
    console.log("offering CONFIRMED for ID:", id);

    bootstrap.Modal.getInstance(document.getElementById("submitModal")).hide();

    window.location.href = "{{ route('pengguna_applicationdetail_screening') }}";
});
</script>

<script>
    document.querySelectorAll('.btn-del').forEach(btn => {
        btn.addEventListener('click', function () {
            const id = this.getAttribute('data-id');

            document.getElementById("deleteModal-body").innerHTML =
                `Delete Document?`;

            document.getElementById("deleteModal-confirm").setAttribute("data-id", id);
        });
    });

    document.getElementById("deleteModal-confirm").addEventListener("click", function () {
        const id = this.getAttribute("data-id");
        console.log("DELETE CONFIRMED for ID:", id);

        bootstrap.Modal.getInstance(document.getElementById("deleteModal")).hide();
    });
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const MAX_SIZE = 2 * 1024 * 1024; // 2 MB
  const allowedExt = ['pdf', 'doc', 'docx'];

  function setError(inputId, message) {
    const el = document.getElementById(inputId + 'Error');
    if (!el) return;

    if (message) {
      el.textContent = message;
      el.classList.remove('d-none');
    } else {
      el.textContent = '';
      el.classList.add('d-none');
    }
  }

  function validateFile(input) {
    const file = input.files && input.files[0];
    setError(input.id, ''); 

    if (!file) return true; 

    const ext = (file.name.split('.').pop() || '').toLowerCase();

    if (!allowedExt.includes(ext)) {
      input.value = ''; 
      setError(input.id, 'Format tidak didukung. Gunakan PDF atau DOC/DOCX.');
      return false;
    }

    if (file.size > MAX_SIZE) {
      input.value = '';
      setError(input.id, 'Ukuran melebihi batas. Maksimal 2 MB.');
      return false;
    }

    return true;
  }

  ['cv', 'porto', 'transkip'].forEach(id => {
    const input = document.getElementById(id);
    if (!input) return;

    input.addEventListener('change', function () {
      validateFile(this);
    });
  });


  const form = document.getElementById('registerForm'); 
  if (form) {
    form.addEventListener('submit', function (e) {
      const ok =
        validateFile(document.getElementById('cv')) &&
        validateFile(document.getElementById('porto')) &&
        validateFile(document.getElementById('transkip'));

      if (!ok) {
        e.preventDefault();
        return;
      }
    });
  }
});
</script>

@endpush

@endsection
