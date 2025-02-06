@extends('backend.app')

@section('title', 'About Us')

@section('content')


<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Abouts</h3>
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
            <a href="#">Clients About</a>
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
              <div class="card-title">Abouts Feedback Create</div>
            </div>

            <form action="{{ route('about.update') }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
                    <div class="card-body">
                <div class="row">
                <div class="col-md-6 col-lg-12">
                  <div class="form-group">
                    <label for="name">Name:</label>
                    <input
                    type="text" class="form-control @error('name') is-invalid @enderror"
                    id="name" name="name" placeholder="Please Enter Name"
                    value="{{ old('name',$about->name ?? '') }}"/>
                      @error('name')
                       <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <label for="companyName">Company Name:</label>
                    <input
                    type="text" class="form-control @error('companyName') is-invalid @enderror"
                    id="companyName" name="companyName" placeholder="Please Enter Title"
                    value="{{ old('companyName',$about->companyName ?? '') }}">
                       @error('companyName')
                        <span class="text-danger">{{ $message }}</span>
                         @enderror
                  </div>
                  <div class="form-group">
                    <label for="designation"> Designation::</label>
                    <input
                    type="text"
                    class="form-control @error('designation') is-invalid @enderror"
                    placeholder="Please enter your designation" name="designation" id="designation"
                    value="{{ old('designation',$about->designation ?? '') }}">
                      @error('designation')
                       <span class="text-danger">{{ $message }}</span>
                       @enderror
                  </div>
                  <div>
                    <label for="description" class="form-label">Description:</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" id="description" name="description"
                        placeholder="Type here...">{{ old('description',$about->description ?? '') }}
                    
                    </textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <div class="form-group">
                        <label for="image">Images:</label>
                        <div class="image" style="width:px;">
                            <input id="image" name="image" type="file" class="dropify" data-height="100" data-default-file="{{ isset($about->image) ? asset('uploads/about_images/' . $about->image) : '' }}"  />
                          </div>

                      </div>
                </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">{{ $about->id ? 'Update' : 'Save' }}</button>
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
    <script>
      $(document).ready(function() {
          $('.dropify').dropify();
      });
    </script>
@endpush
