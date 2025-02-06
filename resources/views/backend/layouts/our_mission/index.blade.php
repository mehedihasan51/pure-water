@extends('backend.app')

@section('title', 'About Us')

@section('content')


<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <h3 class="fw-bold mb-3">Mission</h3>
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
            <a href="#">Our Mission</a>
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
              <div class="card-title">Our Mission Create</div>
            </div>
            <form action="{{route('mission.update')}}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="card-body">
                <div class="row">
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input
                    type="text" class="form-control @error('title') is-invalid @enderror"
                    id="title" name="title" placeholder="Please Enter Title"
                    value="{{ old('title',$mission->title ?? '') }}"/>
                      @error('name')
                       <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>
                </div>
                  <div class="row">
                      <div class="col-md-6">
                          <label for="description" class="form-label fw-bold">Description:</label>
                          <textarea class="form-control @error('description') is-invalid @enderror" 
                                    id="description" name="des" placeholder="Type here...">
                              {{ old('des', $mission->des ?? '') }}
                          </textarea>
                          @error('description')
                              <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="image" class="fw-bold">Images:</label>
                              <div class="image">
                                  <input id="image" name="image" type="file" class="dropify" data-height="100" 
                                         data-default-file="{{ isset($mission->image) ? asset('uploads/mission_image/' . $mission->image) : '' }}" />
                              </div>
                          </div>
                      </div>
                      <div class="card-action">
                        <button type="button" class="btn btn-primary" id="addMissionItemBtn">Add Mission Item</button>
                      </div>
                  </div>
          
                  <!-- Dynamic Mission Items Section -->
                  <div id="missionItemsContainer"></div>
          
                  <div class="card-action mt-3">
                      <button type="submit" class="btn btn-success">Submit</button>
                  </div>
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
      document.querySelectorAll('.ckeditor').forEach(textarea => {
          ClassicEditor.create(textarea).catch(error => console.error(error));
      });
  </script>
    <script>
      $(document).ready(function() {
          $('.dropify').dropify();
      });
    </script>


<!-- JavaScript to Add/Remove Items -->
<script>
  document.getElementById('addMissionItemBtn').addEventListener('click', function () {
      var container = document.getElementById('missionItemsContainer');

      // Create a unique ID for each item
      var uniqueId = 'missionItem_' + Date.now();

      // Create a new mission item block
      var newItem = document.createElement('div');
      newItem.setAttribute('id', uniqueId);
      newItem.classList.add('card', 'p-4', 'shadow', 'mt-3');
      newItem.innerHTML = `
          <div class="form-group mb-3">
              <label class="form-label fw-bold">Title</label>
              <input type="text" class="form-control" name="mission_titles[]" placeholder="Enter title...">
          </div>
          <div class="form-group mb-3">
              <label class="form-label fw-bold">Short Description:</label>
              <textarea  class="form-control ckeditor" name="mission_descriptions[]" placeholder="Enter description..."></textarea>
          </div>
          <div class="text-end">
              <button type="button" class="btn btn-danger" onclick="removeMissionItem('${uniqueId}')">Remove</button>
          </div>
      `;

      container.appendChild(newItem);
  });

  function removeMissionItem(id) {
      var item = document.getElementById(id);
      if (item) {
          item.remove();
      }
  }

  
</script>

@endpush
