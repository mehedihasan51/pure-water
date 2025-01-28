@extends('backend.app')

@section('title', 'Profile Settings')

@section('content')
<div class="container">
  <div class="page-inner">
    <div class="page-header">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Settings</a></li>
        <li class="breadcrumb-item active" aria-current="page">Profile Settings</li>
      </ol>
    </nav>
  </div>

    <!-- Profile Section -->
    <div class="col-md-12">
      <div class="card">
          <div class="card-body">

            <div class="cover-photo-wrapper">
              <img src="{{ Auth::user()->cover_photo ? asset(Auth::user()->cover_photo) : asset('backend/assets/img/img-7.jpg') }}"
                  alt="Cover Photo" class="card-img-top profile-wid-img object-fit-cover"
                  style="height: 200px;">
              <div>
                  <input id="cover_photo_input" type="file"  class="cover_photo_input d-none">
                  <label for="cover_photo_input"
                      class="profile-photo-edit btn btn-light btn-sm position-absolute end-0 top-0 m-3">
                      <i class="ri-image-edit-line align-bottom me-1"></i> Edit Cover Photo
                  </label>
              </div>
          </div>
      
            <div class="card-body text-center">
              <!-- Profile Image -->
              <div class="profile-image mx-auto">
                {{-- <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('/backend/assets/img/default_images/image.png') }}">
                <span class="camera-icon">
                  <i class="fas fa-camera"></i>
                </span> --}}
                <div class="profile-picture-wrapper">
      
                <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('backend/assets/img/default_images/image.png') }}"
                alt="Profile Picture" name="profile_picture"
                class="avatar-lg rounded-circle object-fit-cover border-0 img-thumbnail user-profile-image">
      
              </div>
                <input id="profile_picture_input"  type="file"  name="profile_picture"
                class="profile_picture_input d-none">
                <label for="profile_picture_input" class="profile-photo-edit avatar-xs">
                  <span class="avatar-title rounded-circle bg-light text-body">
                    <i class="fas fa-camera"></i>
                </span>
               
              </div>
              {{-- style start --}}
      
      
              <style>
                .profile-cover {
                  background-image: url(''); 
                  background-size: cover;
                  background-position: center;
                  height: 200px;
                  position: relative;
                }
                .profile-cover button {
                  position: absolute;
                  top: 10px;
                  right: 10px;
                }
                .profile-image {
                  margin-top: -50px;
                  position: relative;
                }
                .profile-image img {
                  border: 3px solid #fff;
                  border-radius: 50%;
                  width: 100px;
                  height: 100px;
                  object-fit: cover;
                }
                .camera-icon {
                  position: absolute;
                  bottom: 0;
                  right: 5px;
                  background-color: #fff;
                  border-radius: 50%;
                  padding: 5px;
                }
                .verified-badge {
                  color: #00bfff;
                  font-size: 1.2rem;
                }
              </style>
      
              {{-- style end --}}
      
              <h3>{{ ucfirst(Auth::user()->firstName) . ' ' . ucfirst(Auth::user()->lastName) ?? '' }} <i class="fas fa-check-circle verified-badge"></i></h3>
              <h6 class="text-muted">{{ Auth::user()->email ?? '' }}</h6>
            </div>
       
      
          <!-- Tabs for Details -->
          <ul class="nav nav-tabs mt-4" id="profileTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="personal-details-tab" data-bs-toggle="tab" data-bs-target="#personal-details" type="button" role="tab" aria-controls="personal-details" aria-selected="true">
                Personal Details
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="change-password-tab" data-bs-toggle="tab" data-bs-target="#change-password" type="button" role="tab" aria-controls="change-password" aria-selected="false">
                Changes Password
              </button>
            </li>
          </ul>
      
          <!-- Tab Content -->
          <div class="tab-content mt-3">
            <!-- Personal Details Tab -->
            <div class="tab-pane fade show active" id="personal-details" role="tabpanel" aria-labelledby="personal-details-tab">
              <div class="card">
                <div class="card-body">
      
                  <form method="POST" action="{{ route('update.profile') }}">
                    @csrf
                    @method('PATCH')
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" value="{{ Auth::user()->firstName }}">
                        @error('firstName')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                      </div>
                      <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" name="lastName" id="lastName" value="{{ Auth::user()->lastName }}">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <div class="col-md-6">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" id="phone" name="phone_number" value="{{ Auth::user()->phone_number }}">
                      </div>
                      <div class="col-md-6">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>           
                  
                </div>
              </div>
            </div>
      
            <!-- Change Password Tab -->
            <div class="tab-pane fade" id="change-password" role="tabpanel" aria-labelledby="change-password-tab">
              <div class="card">
                <div class="card-body">
                  <form method="POST" action="{{ route('update.Password') }}">
                    @csrf
                    @method('PUT')
                
                    <!-- Current Password -->
                    <div class="mb-3">
                        <label for="old_password" class="form-label">Current Password*</label>
                        <div class="position-relative">
                            <input type="password" class="form-control password-input @error('old_password') is-invalid @enderror" 
                                   id="old_password" name="old_password" placeholder="Enter Current Password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted password-toggle">
                                <i class="fa-sharp fa-solid fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                
                    <!-- New Password -->
                    <div class="mb-3">
                        <label for="newPassword" class="form-label">New Password*</label>
                        <div class="position-relative">
                            <input type="password" class="form-control password-input @error('password') is-invalid @enderror" 
                                   id="newPassword" name="password" placeholder="Enter New Password" onpaste="return false">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted password-toggle">
                                <i class="fa-sharp fa-solid fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                
                    <!-- Confirm Password -->
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password*</label>
                        <div class="position-relative">
                            <input type="password" class="form-control password-input @error('password_confirmation') is-invalid @enderror" 
                                   id="password_confirmation" name="password_confirmation" placeholder="Confirm New Password">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <button type="button" class="btn btn-link position-absolute top-50 end-0 translate-middle-y text-muted password-toggle">
                                <i class="fa-sharp fa-solid fa-eye-slash"></i>
                            </button>
                        </div>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </form>
                
                </div>
              </div>
            </div>
          </div>
          </div>
          </div>
          </div>
       </div>
     </div>
@endsection


@push('scripts')

<script>
  document.querySelectorAll('.password-toggle').forEach(button => {
    button.addEventListener('click', function () {
        let input = this.previousElementSibling; // Selects the password input
        let icon = this.querySelector('i');

        if (input.type === "password") {
            input.type = "text";
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            input.type = "password";
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
});

</script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle file input change
            const profileInput = document.getElementById('profile_picture_input');
            profileInput.addEventListener('change', function() {
                const file = profileInput.files[0];
                if (!file) return;

                const formData = new FormData();
                formData.append('profile_picture', file);
                formData.append('_token', '{{ csrf_token() }}');

                axios.post('{{ route('update.profile.picture') }}', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        if (response.data.success) {
                            const newImageUrl = response.data.image_url;

                            document.querySelector('.profile-picture-wrapper img').src = newImageUrl;

                            document.querySelectorAll('.profile-img-change').forEach(img => {
                                img.src = newImageUrl;
                            });

                            toastr.success('Profile Picture Updated Successfully.');
                        } else {
                            toastr.error(response.data.message || 'An error occurred.');
                        }
                    })
                    .catch(error => {
                        toastr.error('Failed to Update Profile Picture.');
                    });

                const reader = new FileReader();
                reader.onload = function(e) {
                    // Preview image in the profile section
                    document.querySelector('.profile-picture-wrapper img').src = e.target.result;

                    const headerImage = document.querySelector('.header-profile-user');
                    if (headerImage) {
                        headerImage.src = e.target.result;
                    }
                };
                reader.readAsDataURL(file);
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Handle file input change
            const coverPhoto = document.getElementById('cover_photo_input');
            coverPhoto.addEventListener('change', function() {
                const file = coverPhoto.files[0];
                if (!file) return;

                const formData = new FormData();
                formData.append('cover_photo', file);
                formData.append('_token', '{{ csrf_token() }}');

                axios.post('{{ route('update.cover.photo') }}', formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }
                    })
                    .then(response => {
                        if (response.data.success) {
                            const newImageUrl = response.data.image_url;

                            document.querySelector('.cover-photo-wrapper img').src = newImageUrl;

                            document.querySelectorAll('.cover-photo-change').forEach(img => {
                                img.src = newImageUrl;
                            });

                            toastr.success('Cover Photo Updated Successfully.');
                        } else {
                            toastr.error(response.data.message || 'An error occurred.');
                        }
                    })
                    .catch(error => {
                        toastr.error('Failed to Updated Cover Photo.');
                    });

                const reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector('.cover-photo-wrapper img').src = e.target.result;
                };
                reader.readAsDataURL(file);
            });
        });
    </script>
@endpush