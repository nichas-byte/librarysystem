<div class="container mt-5">
    <div class="row">
      @foreach ($user as $litsting)
        <div class="col-sm">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $litsting->fullname }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->email  }}</p>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->mobileNo  }}</p>
            </div>
            <div class="card-body">
                <select id="membertype">
                <option value="">Select Member Type</option>
                </select>
            </div>
            <div class="card-footer">
              <div class="row">
              
                <!-- <div class="col-sm">
                    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>