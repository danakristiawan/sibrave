<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Menu</h5>
        <hr class="mb-4" color=grey>
        <p><a href="{{ url('home') }}"><i class="fas fa-home"></i> &nbsp;Beranda</a></p>
        <p><a href="{{ url('home') }}"><i class="fas fa-chart-pie"></i> &nbsp;Laporan</a></p>
        <hr color=grey>
        <p><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                    class="fas fa-sign-out-alt"></i> &nbsp;Keluar</a></p>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</aside>
