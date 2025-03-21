@extends('layout.main')
@section('content')
<div class="app-content">
          <!--begin::Container-->
          <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-10">
                  <div class="card-header"><h3 class="card-title">Books Table</h3></div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Book Name</th>
                          <th>Author Name</th>
                          <th>ISBN</th>                  
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($book as  $booklist)
                       
                        <tr class="align-middle">
                          <td>{{ $i++ }}</td>
                          <td>{{$booklist->title}}</td>
                          <td>{{$booklist->authorName}}</td>
                          <td>{{$booklist->isbn}}</td>
                          <td><button data-id="{{$booklist->id}}" id="delete_book" class="btn btn-danger">Delete</button></td>
                       
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    <ul class="pagination pagination-sm m-0 float-end">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul>
                  </div>
                </div>
 
                <!-- /.card -->
              </div>
              </div> 
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </div>
          <!--end::Container-->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $(document).on('click', '#delete_book', function() {
        let id = $(this).data('id');
        // alert(id);

        $.ajax({
            url: `/book-delete/${id}`,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Include CSRF token
            },
            success: function(response) {
                console.log(response);
                table.ajax.reload();
            },
            error: function(xhr) {
                console.error(xhr.responseText);
            }
        });
    });
});
</script>
@endsection