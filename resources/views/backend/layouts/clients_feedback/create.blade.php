@extends('backend.app')

@section('title', 'Clients Feedback Create')

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

                <form action="{{ route('clients-feedback.store') }}" method="POST">

                    @csrf

               

              <div class="row">
                <div class="col-md-6 col-lg-12">
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
                  <div class="form-group">
                    <label for="password">Title:</label>
                    <input
                    type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" name="title" placeholder="Please Enter Title"
                    value="{{ old('title') }}">
                       @error('title')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                  </div>
                  <di
                  v class="form-group">
                    <label for="password"> Rating:</label>
                    <input
                    type="number" step="1" min="0" max="5"
                    class="form-control @error('rating') is-invalid @enderror"
                    placeholder="Please enter your rating" name="rating" id="rating"
                    value="{{ old('rating') }}">
                      @error('rating')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror
                  </div>
                  <div>
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description"
                        placeholder="Type here...">{{ old('description') }}
                    
                    </textarea>
                    @error('description')
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

@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
