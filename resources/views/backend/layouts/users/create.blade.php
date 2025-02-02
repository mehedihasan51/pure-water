@extends('backend.app')

@section('title', 'Users Create')

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
            <a href="#">Clients Feedback</a>
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
              <div class="card-title">Clients Feedback Create</div>
            </div>
            <div class="card-body">

                <form action="" method="POST">

                    @csrf

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="email2">Name:</label>
                    <input
                    type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" name="name" placeholder="Please Enter Name"
                    value="{{ old('name') }}"/>
                      @error('name')
                       <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group ">
                    <label for="password">Email:</label>
                    <input
                    type="text" class="form-control @error('email') is-invalid @enderror"
                    id="email" name="email" placeholder="Please Enter Title"
                    value="{{ old('email') }}">
                       @error('email')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="number"> Phone Number:</label>
                    <input
                    type="number"
                    class="form-control @error('number') is-invalid @enderror"
                    placeholder="Please enter your Phone Number" name="number" id="number"
                    value="{{ old('number') }}">
                      @error('number')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror
                  </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('clients-feedback.index') }}" class="btn btn-danger">Cancel</a>
            </div>

        </form>
          </div>
        </div>
      </div>
    </div>
    </div>



@endsection