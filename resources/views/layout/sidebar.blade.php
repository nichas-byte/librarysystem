<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <div class="sidebar-brand">
          <a href="./index.html" class="brand-link">
            <img
              src="{{asset('adminassets/dist')}}/assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            />
            <span class="brand-text fw-light">AdminLTE 4</span>   
          </a>    
        </div>
        <div class="sidebar-wrapper">
          <nav class="mt-2">

            <ul
              class="nav sidebar-menu flex-column"
              data-lte-toggle="treeview"
              role="menu"
              data-accordion="false"
            >
              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('book.create') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add Book form</p>
                    </a>
                  </li>
                  <li class="nav-item">
                
                    <a href="{{ route('book.show') }}" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Book listing</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('user.create') }}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Add User form</p>
                    </a>
                  </li>
                  <li class="nav-item">
                  {{-- {{ route('user.show')}} --}}
                    <a href="{{ route('user.show')}}" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>User Listing</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Dashboard v3</p>
                    </a>
                  </li>
                </ul>
              </li>
              
          </nav>
        </div>
       
      </aside>