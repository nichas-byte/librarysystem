 @extends('layout.main')
 @section('content')
 {{-- @section('main-section') --}}
 <!--begin::Horizontal Form-->
                <div class="card card-warning card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title">Add User form</div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{route('user.store')}}" method="post">
                  @csrf
                 <!--begin::Body-->
                    <div class="card-body">
                    <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Name:</label>
                        <div class="col-sm-10">
                          <input type="text" required name="fullname" class="form-control" id="inputEmail3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" name="email" id="inputEmail3" />
                        </div>
                      </div>
                      <div class="row mb-3">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Mobile No.</label>
                        <div class="col-sm-10">
                          <input type="text" name="mobileNo" class="form-control"  />
                        </div>
                      </div>
                      <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Membership Type</label>
                      <div class="col-sm-10">
                      <select class="form-control" data-mdb-select-init name="membertype">
                        <option value="basic">Basic</option>
                        <option value="premium">Premium</option>
                        <option value="elite">Elite</option>                       
                      </select>
                      </div>
                      </div>
                    </div> 
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <!-- <button type="submit" class="btn btn-warning">Sign in</button> -->
                      <button type="submit" class="btn btn-warning float-end">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>
@endsection