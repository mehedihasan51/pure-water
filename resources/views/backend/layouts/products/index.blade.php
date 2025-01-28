@extends('backend.app')

@section('title', 'Products')

@section('content')

<div class="container">
    <div class="page-inner">
      <div class="page-header">
       <!-- Breadcrumb -->
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb m-4">
          <li class="breadcrumb-item"><a href="#">Product</a></li>
          <li class="breadcrumb-item active" aria-current="page">Product Table</li>
        </ol>
      </nav>
      </div>
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <div class="d-flex align-items-center">
              <h4 class="card-title">Add Row</h4>
              <a href="{{ route('products.create') }}" class="btn btn-primary btn-round ms-auto" id="addNewPage"><i class="fa fa-plus"></i>
                Add Product</a>
            </div>
          </div>
          <div class="card-body">
            <!-- Modal -->
    
            <div class="table-responsive">
              <table
                id="datatable"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th class="column-id">#</th>
                    <th class="column-content">Title</th>
                    <th class="column-content">Category</th>
                    <th class="column-content">Images</th>
                    <th class="column-content">Status</th>

                    <th style="width: 10%" class="column-action">Action</th>
                  </tr>
                </thead>
                <tbody>
  
                  {{-- Dynamic Data --}}
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @endsection

@push('scripts')
<script>
    $(document).ready(function() {
          $.ajaxSetup({
              headers: {
                  "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                  
                 
              },
          });


          if (!$.fn.DataTable.isDataTable('#datatable')) {
              var table = $('#datatable').DataTable({
                  responsive: true,
                  order: [],
                  lengthMenu: [
                      [10, 25, 50, 100, -1],
                      [10, 25, 50, 100, "All"],
                  ],
                  processing: true,
                  serverSide: true,
                  pagingType: "full_numbers",
                  ajax: {
                      url: "{{ route('products.index') }}",
                      type: "GET",
                  },
                  dom: "<'row table-topbar'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>>" +
                      "<'row'<'col-12'tr>>" +
                      "<'row table-bottom'<'col-md-5 dataTables_left'i><'col-md-7'p>>",
                  language: {
                      search: "_INPUT_",
                      searchPlaceholder: "Search records...",
                      lengthMenu: "Show _MENU_ entries",
                      processing: `
                          <div class="text-center">
                              <div class="spinner-border text-primary" role="status">
                                  <span class="visually-hidden">Loading...</span>
                              </div>
                          </div>`,
                  },
                  columns: [{
                          data: 'DT_RowIndex',
                          name: 'DT_RowIndex',
                          orderable: false,
                          searchable: false,
                          className: 'text-center'
                      },
                      
                      {
                          data: 'title',
                          name: 'title',
                          orderable: true,
                          searchable: true
                          
                      },
                      {
                          data: 'category',
                          name: 'category',
                          orderable: true,
                          searchable: true
                      },
                      { data: 'feature_image',
                       name: 'feature_image',
                        orderable: true, 
                        searchable: false,
                          
                         },
                       {
                          data: 'status',
                          name: 'status',
                          orderable: true,
                          searchable: false,
                          className: 'text-center'
                      },
                      {
                          data: 'action',
                          name: 'action',
                          orderable: false,
                          searchable: false,
                          className: 'text-center'
                      },
                  ],
              });

              $('#datatable').on('draw.dt', function() {
                  $('td.column-action').each(function() {
                      let buttonCount = $(this).find('button').length;
                      let width = 5 + (buttonCount - 1) * 5;
                      $(this).css('width', width + '%');
                  });
              });

              dTable.buttons().container().appendTo('#file_exports');
              new DataTable('#example', {
                  responsive: true
              });
          }
      });

      // Status Change Confirm Alert
      function showStatusChangeAlert(id) {
          event.preventDefault();

          Swal.fire({
              title: 'Are you sure?',
              text: 'You want to update the status?',
              icon: 'info',
              showCancelButton: true,
              confirmButtonText: 'Yes',
              cancelButtonText: 'No',
          }).then((result) => {
              if (result.isConfirmed) {
                  statusChange(id);
              }
          });
      }

      // Status Change
      function statusChange(id) {
     let url = '{{ route('products.status', ':id') }}'.replace(':id', id);

      $.ajax({
      type: "PATCH",
      url: url,
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      },
      success: function(resp) {
          console.log('Success:', resp); // Debugging
          $('#datatable').DataTable().ajax.reload();
          toastr.success(resp.message);
      },
      error: function(xhr, status, error) {
          console.error('Error:', xhr.responseText); // Debugging
          toastr.error('An error occurred. Please try again.');
      }
     });
       }
      // delete Confirm
      function showDeleteConfirm(id) {
          event.preventDefault();
          Swal.fire({
              title: 'Are you sure you want to delete this record?',
              text: 'If you delete this, it will be gone forever.',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Yes, delete it!',
          }).then((result) => {
              if (result.isConfirmed) {
                  deleteItem(id);
              }
          });
      }

      // Delete Button
       function deleteItem(id) {
          let url = '{{ route('products.destroy', ':id') }}'.replace(':id', id);

         $.ajax({
              type: "DELETE",
               url: url,
             headers: {
                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
              },
             success: function(resp) {
          $('#datatable').DataTable().ajax.reload();
          toastr.success(resp.message);
       },
      error: function(error) {
          toastr.error('An error occurred. Please try again.');
      }
  });
}
  </script>

@endpush
