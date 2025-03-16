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
                          <th>User Name</th>
                          <th>User Email</th>
                          <th>Mobile No</th>                  
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach($user as  $userlist)
                       
                        <tr class="align-middle">
                          <td>{{ $i++ }}</td>
                          <td>{{$userlist->fullname}}</td>
                          <td>{{$userlist->email }}</td>
                          <td>{{$userlist->mobileNo}}</td>
                          <!-- <td><button data-id="{{$userlist->id}}" id="delete_book" class="btn btn-danger">Delete</button></td> -->
                       
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
    
@endsection