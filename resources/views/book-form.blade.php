@extends('layout.main')
@section('content')

<div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
              <!--begin::Col-->
              <div class="col-lg-8 col-8">
            <div class="col-md-10">
                <!--begin::Quick Example-->
                <div class="card card-primary card-outline mb-8">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Add Book form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form method="post" action="{{route('book.store')}}">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Book	Title</label>
                        <input
                          type="text"
                          name="title"
                          class="form-control"
                          id="title"
                          aria-describedby="emailHelp"
                        />
                      
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">	ISBN No.</label>
                        <input
                          type="text"
                          name="isbn"
                          class="form-control"
                          id="title"
                          aria-describedby="emailHelp"
                        /> 
                        
                      </div>
                      
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">	Author Name</label>
                        <input
                          type="text"
                          name="authorName"
                          class="form-control"
                          id="authorName"
                          aria-describedby="emailHelp"
                        />
                        
                      </div>
                      <!-- <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" />
                      </div>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02" />
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div> -->
                      <div class="mb-3 form-check">
                        <input type="checkbox" required name="bookAvailable" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Availability Status  </label>
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
                
               
                <!--end::Horizontal Form-->
              </div>
              </div>
            </div>
</div>



@endsection