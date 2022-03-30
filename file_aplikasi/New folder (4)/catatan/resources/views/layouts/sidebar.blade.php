<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Peduli Diri</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class=" mt-2 pb-2 mb-2 d-flex">
       
        {{-- <div class="info">
          <a href="#" class="d-block">Hi, {{ Auth::user()->name }}</a>
        </div> --}}
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">

          <div class="input-group-append">

          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

             @if (Auth::user()->isadmin == 1)
          <li class="nav-item ">
            <a href="{{ route('home') }}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>



<li class="nav-item">
    <a href="{{ route('Total_user') }}" class="nav-link">
      <i class="nav-icon fas fa-table"></i>
      <p>
        Table User

      </p>
    </a>
          </li>
@endif
          <li class="nav-item ">
            <a href="{{ route('perjalanan') }}" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Catatan Perjalanan
              </p>
            </a>
          </li>


          <li class="nav-item ">
            <a href="{{ route('isi-data') }}" class="nav-link ">
              <i class="nav-icon fas fa-table"></i>
              <p>
               Isi Data
              </p>
            </a>
          </li>



          </li>
          <li class="nav-item ">

           {{-- <a button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link ">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf --}}
                </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
