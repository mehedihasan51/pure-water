@extends('backend.app')

@section('title', 'Social Media Settings')


@push('styles')
    <style>
        .drop-custom {
            border-top-left-radius: 6px;
            border-bottom-left-radius: 6px;
            padding: 15px;
            border: 1px solid #4CAF50;
            color: #313131;
            transition: all 0.3s ease;
        }

        .drop-custom:hover {
            background-color: #686b68;
            color: white;
        }

        .btn {
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .btn:hover {
            transform: scale(1.1);
        }
    </style>
@endpush

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Client</a></li>
            <li class="breadcrumb-item active" aria-current="page">Clients Feedback</li>
          </ol>
        </nav>
      </div>
      <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <form action="{{route('social.update')}}" method="POST">
                    @csrf
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title">Add Link</h4>
                        {{-- <a href="" class="btn btn-primary btn-round ms-auto" id="addNewPage">
                          Add</a> --}}
                          <button class="btn btn-primary btn-round ms-auto" type="button" onclick="addSocialField()"
                            style="font-weight: 900" title="Add a new social media field"><i class="fa fa-plus"></i>Add</button>
                      </div>
                    </div>
                    <div id="social_media_container">
                        @foreach ($social_link as $index => $link)
                        <div class="form-group">
                            <div class="input-group">
                                <input type="hidden" name="social_media_id[]" value="{{ $link->id ?? '' }}">
                                <select class="dropdown-toggle drop-custom" name="social_media[]" value="@isset($social_link){{ $link->social_media }}@endisset"
                                    title="Select a social media platform">
                                    <option>Select Social</option>
                                    <option value="facebook" {{ $link->social_media == 'facebook' ? 'selected' : '' }}>Facebook</option>
                                    <option value="instagram"  {{ $link->social_media == 'instagram' ? 'selected' : '' }}>Instagram</option>
                                    <option value="twitter"  {{ $link->social_media == 'twitter' ? 'selected' : '' }}>Twitter</option>
                                    <option value="tiktok"    {{ $link->social_media == 'tiktok' ? 'selected' : '' }}>Tiktok</option>
                                    <option value="youtube" {{ $link->social_media == 'youtube' ? 'selected' : '' }}>YouTube</option>
                                    <option value="linkedin" {{ $link->social_media == 'linkedin' ? 'selected' : '' }}>Linkedin</option>
                                </select>
                                <input type="url" class="form-control" placeholder="Enter the profile link here" name="profile_link[]"value="@isset($social_link){{ $link->profile_link }}@endisset"
                                placeholder="Enter the profile link here"
                                title="Enter the profile link here" />
                                <button class="btn btn-danger" type="button" onclick="removeSocialField(this)" data-id="{{ $link->id }}" title="Remove this social media field">Remove</button>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <a href="{{ route('dashboard') }}" class="btn btn-danger">Cancel</a>
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
        let socialFieldsCount = $('#social_media_container .social_media').length;

        function addSocialField() {
            const socialFieldsContainer = document.getElementById("social_media_container");

            if (socialFieldsCount < 6) {
                const newSocialField = document.createElement("div");
                newSocialField.className = "social_media input-group mb-3";
                newSocialField.innerHTML =
                    `
            <select class="dropdown-toggle drop-custom" name="social_media[]" title="Select a social media platform">
                <option class="dropdown-item">Select Social</option>
                <option class="dropdown-item" value="facebook">Facebook</option>
                <option class="dropdown-item" value="instagram">Instagram</option>
                <option class="dropdown-item" value="twitter">Twitter</option>
                <option class="dropdown-item" value="tiktok">Tiktok</option>
                <option class="dropdown-item" value="youtube">YouTube</option>
                <option class="dropdown-item" value="linkedin">Linkedin</option>
            </select>
            <input type="url" class="form-control" aria-label="Text input with dropdown button" name="profile_link[]" placeholder="Enter the profile link here" title="Enter the profile link here">
            <button class="btn btn-danger" type="button" onclick="removeSocialField(this)" style="font-weight: 900" title="Remove this social media field">Remove</button>`;

                socialFieldsContainer.appendChild(newSocialField);
                socialFieldsCount++;
                document.querySelectorAll('select[name="social_media[]"]').forEach(selectElement => {
                    selectElement.removeEventListener('change', checkForDuplicateSocialMedia);
                    selectElement.addEventListener('change', checkForDuplicateSocialMedia);
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You can only add six social links fields!",
                });
            }
        }

        function removeSocialField(button) {
            const socialField = button.parentElement;
            socialField.remove();
            socialFieldsCount--;
            checkForDuplicateSocialMedia();
        }

        function checkForDuplicateSocialMedia() {
            const allSelections = document.querySelectorAll('select[name="social_media[]"]');
            const allValues = Array.from(allSelections).map(select => select.value);
            const hasDuplicate = allValues.some((value, index) => allValues.indexOf(value) !== index && value !==
                "Select Social");

            if (hasDuplicate) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You cannot add the same social media platform more than once.",
                });
                allSelections.forEach(selectElement => {
                    if (allValues.filter(value => value === selectElement.value).length > 1) {
                        selectElement.value = "Select Social";
                    }
                });
            }
        }

     window.removeSocialField = function(button) {
        const socialLinkId = $(button).data('id');
    if (socialLinkId) {
     
        event.preventDefault();

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: 'DELETE',
                    url: '{{ route('social.delete', '') }}/' + socialLinkId,
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success === true) {
                            // Remove the element from DOM
                            $(button).closest('.form-group').remove();
                            socialFieldsCount--;
                            toastr.success(response.message);
                        } else if (response.errors) {
                            toastr.error(response.errors[0]);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong. Please try again.",
                        });
                    }
                });
            }
        });
    } else {
        // For newly added fields (without ID), just remove from DOM
        $(button).closest('.form-group').remove();
        socialFieldsCount--;
    }
};

        document.querySelectorAll('select[name="social_media[]"]').forEach(selectElement => {
            selectElement.addEventListener('change', checkForDuplicateSocialMedia);
        });
    </script>
@endpush