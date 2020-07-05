<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          @role('super')
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-lock"></i>
                  <p>
                      Administrasi Pengguna
                  </p>
              </a>
            </li> 
          @endrole
          @role('admin')
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>
                      Kegiatan
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-mail-bulk"></i>
                  <p>
                      Administrasi
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>
                      Monitoring
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-star-half-alt"></i>
                  <p>
                      Evaluasi
                  </p>
              </a>
            </li>
          @endrole
          @role('user')
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>
                      Monitoring
                  </p>
              </a>
            </li>
          @endrole
          <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                  <i class="nav-icon fas fa-sign-out-alt"></i>
                  <p>
                      Logout
                  </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST"
                  style="display: none;">
                  @csrf
              </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>