@extends('backend.app')

@section('title', 'System Settings')

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

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                <div class="">
                    <h1 class="mb-4">System Settings</h1>
                    <form method="POST" action="{{ route('system.update') }}" enctype="multipart/form-data">
            
                        @csrf
                        @method('PATCH')
                        <div class="row g-3 bg-white p-2 box-show">
                            <!-- Title -->
                            <div class="col-md-6">
                                <label for="title" class="form-label">Title</label>
                                <input type="text"  name="title"  class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Please Enter Title" value="{{ old('title', $setting->title ?? '') }}"/>
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- System Name -->
                            <div class="col-md-6">
                                <label for="systemName" class="form-label">System Name</label>
                                <input type="text" class="form-control @error('system_name') is-invalid @enderror" name="system_name" id="system_name"
                                 placeholder="Please Enter System Name" value="{{ old('system_name', $setting->system_name ?? '') }}" />
                                 @error('system_name')
                                 <span class="text-danger">{{ $message }}</span>
                             @enderror
                            </div>
                            <!-- Email -->
                            <div class="col-md-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"  name="email" id="email"
                                value="{{ old('email', $setting->email ?? '') }}" placeholder="Please Enter Email" />
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- Phone Number -->
                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="phone" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" placeholder="Please Enter Phone Number"
                                id="phone_number" pattern="^\+?[0-9]{10,15}$"
                                value="{{ old('phone_number', $setting->phone_number ?? '') }}" />
            
                                @error('phone_number')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- Calendly Link -->
                            <div class="col-md-6">
                                <label for="calendly" class="form-label">Calendly Link</label>
                                <input type="url" class="form-control @error('calendly_link') is-invalid @enderror" name="calendly_link" placeholder="Please Enter Your Calendly Link"
                                id="calendly_link"
                                value="{{ old('calendly_link', $setting->calendly_link ?? '') }}"/>
            
                                @error('calendly_link')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <!-- Address -->
                            <div class="col-md-6">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" placeholder="Please Enter Copy Address" id="address"
                                value="{{ old('address', $setting->address ?? '') }}" />
            
                                @error('address')
                                  <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <!-- Copy Rights Text -->
                            <div class="col-md-6">
                                <label for="copyrights" class="form-label">Copy Rights Text</label>
                                <input type="text" class="form-control @error('copyright_text') is-invalid @enderror"  name="copyright_text" placeholder="Please Enter Copy Rights Text"
                                id="copyright_text"
                                value="{{ old('copyright_text', $setting->copyright_text ?? '') }}" />
                                @error('copyright_text')
                                    <span class="text-danger">{{ $message }}</span>
                                       @enderror
                            </div>
                            <!-- About System -->
                            <div class="col-12">
                                <label for="description" class="form-label">About System</label>
                                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"  placeholder="About System...">{{ old('description', $setting->description ?? '') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                            <!-- Logo Upload -->
                            <div class="col-md-6">
                                <div>
                                    <label for="logo" class="form-label">Logo:</label>
                                    <input type="hidden" name="remove_logo" value="0">
                                    <input class="form-control dropify @error('logo') is-invalid @enderror"
                                        type="file" name="logo" id="logo"
                                        data-default-file="@isset($setting){{ asset($setting->logo) }}@endisset">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
            
                            <div class="col-md-6">
                                <div>
                                    <label for="favicon" class="form-label">Favicon:</label>
                                    <input type="hidden" name="remove_favicon" value="0">
                                    <input class="form-control dropify @error('favicon') is-invalid @enderror"
                                        type="file" name="favicon" id="favicon"
                                        data-default-file="@isset($setting){{ asset($setting->favicon) }}@endisset">
                                    @error('favicon')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
             </div>
             </div>
             </div>
           </div>
        </div>

@endsection

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
        });
      </script>
@endpush
