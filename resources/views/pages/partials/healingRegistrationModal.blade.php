{{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#healingRegistrationModal">
  Launch demo modal
</button> --}}
<div class="modal fade" id="healingRegistrationModal" tabindex="-1" aria-labelledby="healingRegistrationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content healing-modal">
            <!-- Header with Healing Theme -->
            <div class="modal-header healing-header">
                <h5 class="modal-title" id="healingRegistrationModalLabel">
                    <i class="fas fa-hands-praying me-2"></i>Join Healing Streams
                </h5>
                <button type="button" class="btn-close healing-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <!-- Tab Navigation -->
                <ul class="nav nav-tabs healing-tabs mb-4" id="registrationTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="email-tab" data-bs-toggle="tab" data-bs-target="#email-tab-pane" type="button">
                            <i class="fas fa-envelope me-2"></i>Email Registration
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="phone-tab" data-bs-toggle="tab" data-bs-target="#phone-tab-pane" type="button">
                            <i class="fas fa-phone-alt me-2"></i>Phone Registration
                        </button>
                    </li>
                </ul>

                <!-- Form Content -->
                <form id="healingRegistrationForm" action="{{ route('healing-streams.register') }}" method="POST">
                    @csrf

                    <!-- Progress Bar -->
                    <div class="healing-progress mb-4">
                        <div class="healing-progress-bar" role="progressbar" style="width: 0%"></div>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="registrationTabContent">
                        <!-- Email Tab -->
                        <div class="tab-pane fade show active" id="email-tab-pane" role="tabpanel">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control healing-input" id="email" name="email" placeholder="your@email.com">
                                <div class="invalid-feedback" id="email-error"></div>
                            </div>
                        </div>

                        <!-- Phone Tab -->
                        <div class="tab-pane fade" id="phone-tab-pane" role="tabpanel">
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <div class="input-group">
                                    <select class="form-select healing-country-code" id="phone_code" name="phone_code" style="max-width: 120px;">
                                        <option value="+1">+1 (US)</option>
                                        <option value="+44">+44 (UK)</option>
                                        <option value="+234">+234 (NG)</option>
                                    </select>
                                    <input type="tel" class="form-control healing-input" id="phone" name="phone" placeholder="Phone number">
                                </div>
                                <div class="invalid-feedback" id="phone-error"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Common Fields -->
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text" class="form-control healing-input" id="fullname" name="fullname" placeholder="Your full name" required>
                    </div>

                    <div class="mb-3">
                        <label for="zone_id" class="form-label">Zone </label>
                        <select class="form-select healing-input" id="zone_id" name="zone_id" required style="display:inline;">
                            {{-- <option value="" disabled selected>Select your zone</option> --}}
                            @foreach($zones as $zone)
                                <option value="{{ $zone['zone_id'] }}">{{ $zone['zone_name'] }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="age" class="form-label">Age</label>
                        <input type="number" class="form-control healing-input" id="age" name="age" min="1" max="120" required>
                    </div>

                    <!-- Location Fields -->
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="country_id" class="form-label">Country</label>
                            <select class="form-select healing-input" id="country_id" name="country_id" required>
                                <option value="" disabled selected>Select country</option>
                                @foreach($countries as $country)
                                    <option value="{{ $country['country_id'] }}"> {{ $country['country_name'] }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="state_id" class="form-label">State</label>
                            <select class="form-select healing-input" id="state_id" name="state_id" disabled required>
                                <option value="" disabled selected>Select state</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control healing-input" id="city" name="city" required>
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn healing-submit-btn">
                            <i class="fas fa-user-plus me-2"></i>Complete Registration
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<style>
.healing-modal {
    border-radius: 15px;
    overflow: hidden;
    border: none;
    box-shadow: 0 5px 20px rgba(0, 100, 150, 0.2);
}

.healing-header {
    background: linear-gradient(135deg, #4a89dc, #3bafda);
    color: white;
    border-bottom: none;
    padding: 1.2rem;
}

.healing-close {
    filter: brightness(0) invert(1);
    opacity: 0.8;
}

.healing-tabs .nav-link {
    color: #6c757d;
    font-weight: 500;
    border: none;
    padding: 0.8rem 1.2rem;
}

.healing-tabs .nav-link.active {
    color: #4a89dc;
    background: transparent;
    border-bottom: 3px solid #4a89dc;
}

.healing-progress {
    height: 6px;
    background: #e9ecef;
    border-radius: 3px;
    overflow: hidden;
}

.healing-progress-bar {
    height: 100%;
    background: linear-gradient(90deg, #4a89dc, #3bafda);
    transition: width 0.4s ease;
}

.healing-input {
    border-radius: 8px;
    padding: 0.75rem 1rem;
    border: 1px solid #ced4da;
    transition: all 0.3s;
}

.healing-input:focus {
    border-color: #4a89dc;
    box-shadow: 0 0 0 0.2rem rgba(74, 137, 220, 0.25);
}

.healing-country-code {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}

.healing-submit-btn {
    background: linear-gradient(135deg, #4a89dc, #3bafda);
    color: white;
    border: none;
    padding: 0.8rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s;
}

.healing-submit-btn:hover {
    background: linear-gradient(135deg, #3b7bc8, #2a9ac8);
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('healingRegistrationForm');
  const emailTab = document.getElementById('email-tab');
  const phoneTab = document.getElementById('phone-tab');
  const emailInput = document.getElementById('email');
  const phoneInput = document.getElementById('phone');
  const countrySelect = document.getElementById('country_id');

  // Initialize TomSelect
  const zoneSelect = new TomSelect('#zone_id', {});
  const countryTomSelect = new TomSelect('#country_id', {});
  const stateTomSelect = new TomSelect('#state_id', {
    valueField: 'state_id',
    labelField: 'state_name',
    searchField: 'state_name',
    options: [],
    create: false
  });

  // Load states when country changes
  countrySelect.addEventListener('change', function () {
    const countryId = this.value;

    stateTomSelect.clear();       // clear existing selection
    stateTomSelect.clearOptions(); // clear previous options

    if (!countryId) return;

    stateTomSelect.lock(); // disable while loading
    stateTomSelect.addOption({ value: '', text: 'Loading states...' }); // show loading

    fetch(`/api/states?country_id=${countryId}`)
      .then(response => response.json())
      .then(data => {
        stateTomSelect.clearOptions();
        stateTomSelect.addOption(data); // Add all states at once
        stateTomSelect.enable();
        stateTomSelect.refreshOptions(false);
        updateProgress();
      });
  });

  // Clear the other field when switching tabs
  emailTab.addEventListener('click', () => {
    phoneInput.value = '';
    updateProgress();
  });

  phoneTab.addEventListener('click', () => {
    emailInput.value = '';
    updateProgress();
  });

  // Progress bar update
  function updateProgress() {
    const inputs = form.querySelectorAll('input, select');
    let filled = 0;
    inputs.forEach(input => {
      if (input.value && !input.disabled) filled++;
    });
    const progress = (filled / inputs.length) * 100;
    document.querySelector('.healing-progress-bar').style.width = `${progress}%`;
  }

  // Listen to form inputs
  form.querySelectorAll('input, select').forEach(input => {
    input.addEventListener('input', updateProgress);
  });

  // Submit handling
  form.addEventListener('submit', function (e) {
    e.preventDefault();

    form.querySelectorAll('.is-invalid').forEach(el => el.classList.remove('is-invalid'));
    const emailTabActive = emailTab.classList.contains('active');

    if (emailTabActive && !emailInput.value) {
      emailInput.classList.add('is-invalid');
      document.getElementById('email-error').textContent = 'Please enter your email address';
      return;
    }

    if (!emailTabActive && !phoneInput.value) {
      phoneInput.classList.add('is-invalid');
      document.getElementById('phone-error').textContent = 'Please enter your phone number';
      return;
    }

    Swal.fire({
      icon: 'success',
      title: 'Registration Complete!',
      html: `
        Thank you for registering.<br>
        <a href="{{asset('assets/magazine/Jun2025_HTTN_Magazine_For_Kids_June_2025.pdf')}}" download="Jun2025_HTTN_Magazine_For_Kids_June_2025.pdf">
          📘 Download Your Free Magazine for Kids Here
        </a>
      `,
      showConfirmButton: true,
      confirmButtonText: 'Close'
    }).then(() => {
      form.submit();
    });
  });

  // Auto-open modal from hash
  if (window.location.hash === '#healingRegistrationModal') {
    const modal = new bootstrap.Modal(document.getElementById('healingRegistrationModal'));
    modal.show();
  }
});
</script>