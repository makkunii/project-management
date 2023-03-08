<nav class="main-header navbar navbar-expand navbar-dark navbar-dark" style="background-color:black">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->

    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
          {{-- <span class="badge badge-warning navbar-badge">15</span> --}}
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">My Profile</span>
          <div class="dropdown-divider"></div>

          <a href="#" class="dropdown-item">
           <div class="row">
                    <div class="col-lg-3">
                        <img src="{{ asset('/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="width:50px;">
                    </div>
                    <div class="col">
                     <p>{{ $info['name'] }}</p>
                  </div>
           </div>
          </a>


          <div class="dropdown-divider"></div>
          <div class="dropdown-footer">

           <form action="{{ route('logout')}}" method="post">
                @csrf
                     <input type="submit" class="btn btn-sm btn-danger" value="logout">
           </form>

          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
</nav>




