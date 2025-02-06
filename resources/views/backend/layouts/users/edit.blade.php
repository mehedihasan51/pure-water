@extends('backend.app')

@section('title', 'Users Edit')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Clients</h3>
        <ul class="breadcrumbs mb-3">
          <li class="nav-home">
            <a href="#">
              <i class="icon-home"></i>
            </a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">User</a>
          </li>
          <li class="separator">
            <i class="icon-arrow-right"></i>
          </li>
          <li class="nav-item">
            <a href="#">Create</a>
          </li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="card-title">Create User</div>
            </div>
            <div class="card-body">

                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                 <div class="row">
                <!-- First Row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fullName">Full Name *</label>
                        <input type="text" class="form-control @error('fullName') is-invalid @enderror"
                               id="fullName" name="fullName" placeholder="Please Enter fullName"
                               value="{{ old('fullName', $user->fullName) }}"/>
                        @error('fullName')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="userName">User Name *</label>
                        <input type="text" class="form-control @error('userName') is-invalid @enderror"
                               id="userName" name="userName" placeholder="Please Enter User Name"
                               value="{{ old('userName',$user->userName) }}">
                        @error('userName')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Second Row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control @error('number') is-invalid @enderror"
                               placeholder="Please enter your Email" name="email" id="email"
                               value="{{ old('email',$user->email) }}">
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="number" class="form-control @error('phone') is-invalid @enderror"
                               id="phone" name="phone_number" placeholder="Please Enter Phone Number"
                               value="{{ old('phone_number',$user->phone_number) }}">
                        @error('phone_number')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Third Row -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password">Password *</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                               id="password" name="password" placeholder="Please Enter Password"
                               value="{{ old('password') }}">
                        @error('password')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">Confirm Password *</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror"
                               id="password_confirmation"  placeholder="Please Enter Password Confirmation"
                               value="{{ old('password_confirmation') }}">
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
            </div>

        </form>
          </div>
        </div>
      </div>
    </div>
    </div>


@endsection