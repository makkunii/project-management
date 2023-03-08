<aside class="main-sidebar sidebar-light-danger  elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-light" style="background-color:black">
      <img src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
       M A K K U N I I
      </span>
    </a>

    <div class="sidebar">
        <br>

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>Projects Done</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-exclamation-circle nav-icon"></i>
                  <p>Pending Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Projects to Do Projects</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-skull nav-icon"></i>
                  <p>Dropped Projects</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-project-diagram"></i>
              <p>
                Projects
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-project-diagram nav-icon"></i>
                  <p>View Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-exclamation-circle nav-icon"></i>
                  <p>Add Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-tasks nav-icon"></i>
                  <p>Projects to Do Projects</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-skull nav-icon"></i>
                  <p>Dropped Projects</p>
                </a>
              </li>
            </ul> --}}
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link active bg-light">
              <i class="fas fa-project-diagram nav-icon"></i>

              <p>View Projects</p>
            </a>
          </li>

        </ul>
      </nav>

    </div>

</aside>
