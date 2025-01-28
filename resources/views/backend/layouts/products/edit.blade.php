@extends('backend.app')

@section('title', 'Clients Feedback Create')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Clients</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="#"><i class="icon-home"></i></a>
                </li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Clients Feedback</a></li>
                <li class="separator"><i class="icon-arrow-right"></i></li>
                <li class="nav-item"><a href="#">Create</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Product Listing</div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="">
                                <div class="">
                                    <!-- Title Field -->
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label for="title">Title:</label>
                                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                       id="title" name="title" placeholder="Please Enter Title"
                                                       value="{{ old('title', $product->title) }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Category Field -->
                                    <div class="">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="category">Category:</label>
                                                    <select class="form-control @error('category') is-invalid @enderror" id="category" name="category">
                                                        <option value="">-- Select Category --</option>
                                                        <option value="stationary" {{ (isset($product) && $product->category == 'stationary') ? 'selected' : '' }}>Stationary</option>
                                                        <option value="management" {{ (isset($product) && $product->category == 'management') ? 'selected' : '' }}>Management</option>
                                                        <option value="service" {{ (isset($product) && $product->category == 'service') ? 'selected' : '' }}>Service</option>
                                                    </select>
                                                    @error('category')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <!-- Feature Image Field -->
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="feature_image">Feature Image:</label>
                                                    <div class="feature_image">
                                                      <input id="feature_image" name="feature_image" type="file" class="dropify" data-height="100"
                                                      data-default-file="{{ isset($product->feature_image) ? asset( $product->feature_image) : '' }}" />
                                                      
                                                      <!-- Hidden field to track image removal -->
                                                       <input type="hidden" name="remove_feature_image" id="remove_feature_image" value="0">
                                                    </div>
                                                
                                      
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <!-- Buttons -->
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
  $(document).ready(function () {
      var drEvent = $('.dropify').dropify();

      drEvent.on('dropify.afterClear', function (event, element) {
          $('#remove_feature_image').val(1);
      });
  });
</script>
@endpush
