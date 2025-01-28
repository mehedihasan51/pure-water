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
              <div class="card-title">Product Listing</div>
            </div>
            <div class="card-body">

                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
           
              <div class="">
                <div class="">
                  <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="title">Title:</label>
                            <input
                            type="text" class="form-control"
                            id="title" name="title" placeholder="Please Enter Title"
                            value="{{ old('title') }}">
                               @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                 @enderror
                        </div>
                    </div>
                  </div>

                    <div class="">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label for="category">Category:</label>
                                <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                                    <option value="">-- Select Category --</option>
                                    <option value="stationary" {{ old('category') == 'stationary' ? 'selected' : '' }}>Stationary</option>
                                    <option value="management" {{ old('category') == 'management' ? 'selected' : '' }}>Management</option>
                                    <option value="service" {{ old('category') == 'service' ? 'selected' : '' }}>Service</option>
                                </select>
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="feature_image">Future Image:</label>
                                    <div class="feature_image" style="width:px;">
                                        <input id="feature_image" name="feature_image" type="file" class="dropify" data-height="100" />
                                      </div>
  
                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <div class="card-action">
              <button type="submit" class="btn btn-success">Submit</button>
              <a href="{{ route('products.index') }}" class="btn btn-danger">Cancel</a>
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
