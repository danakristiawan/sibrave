<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('dist/img/user4.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header ml-2">Beranda</li>
          <li class="nav-item">
            <a href="{{ url('admin/home') }}" class="nav-link {{ (request()->segment(2) == 'home') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-header">Data</li>
          <li class="nav-item">
            <a href="{{ url('admin/activity') }}" class="nav-link {{ (request()->segment(2) == 'activity') ? 'active' : '' }}">
              <i class="nav-icon fas fa-layer-group"></i>
              <p>Kegiatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('admin/employee') }}" class="nav-link {{ (request()->segment(2) == 'employee') ? 'active' : '' }}">
              <i class="nav-icon fas fa-user-alt"></i>
              <p>Petugas</p>
            </a>
          </li>
          <li class="nav-header">Sistem</li>
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