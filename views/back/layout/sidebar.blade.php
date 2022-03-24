  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{Request::is('/') ? '' : 'collapsed'}}" href="{{url('/')}}">
          <i class="bi bi-grid"></i>
          <span>DASHBOARD</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <!-- MENU PERIZINAN -->
      <li class="nav-item">
        <a class="nav-link {{Request::is('perizinan*') ? '' : 'collapsed'}}" data-bs-target="#perizinan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>PERIZINAN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="perizinan-nav" class="nav-content {{Request::is('perizinan*') ? '' : 'collapse'}} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('perizinan-kategori')}}">
              <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
          </li>
          <li>
            <a href="{{url('perizinan-artikel')}}">
              <i class="bi bi-circle"></i><span>Artikel</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- MENU VIDEO EDU -->
      <li class="nav-item">
        <a class="nav-link {{Request::is('videoedu*') ? '' : 'collapsed'}}" data-bs-target="#video-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-camera-video"></i><span>VIDEO EDU</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="video-nav" class="nav-content {{Request::is('videoedu*') ? '' : 'collapse'}} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('videoedu-kategori')}}">
              <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
          </li>
          <li>
            <a href="{{url('videoedu-artikel')}}">
              <i class="bi bi-circle"></i><span>Artikel</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- MENU EXPORTIR -->
      <li class="nav-item">
        <a class="nav-link {{Request::is('exportir*') ? '' : 'collapsed'}}" data-bs-target="#exportir-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-box-seam"></i><span>EXPORTIR</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="exportir-nav" class="nav-content {{Request::is('exportir*') ? '' : 'collapse'}} " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{url('exportir-kategori')}}">
              <i class="bi bi-circle"></i><span>Kategori</span>
            </a>
          </li>
          <li>
            <a href="{{url('exportir-artikel')}}">
              <i class="bi bi-circle"></i><span>Artikel</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- MENU MARKETPLACE -->
      <li class="nav-item">
        <a class="nav-link {{Request::is('marketplace*', 'produk*') ? '' : 'collapsed'}}" data-bs-target="#marketplace-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-shop"></i><span>MARKETPLACE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="marketplace-nav" class="nav-content {{Request::is('marketplace*', 'produk*') ? '' : 'collapse'}} " data-bs-parent="#sidebar-nav">
          <li class="">
            <a href="{{url('marketplace')}}">
              <i class="bi bi-circle"></i><span>Marketplace Terdaftar</span>
            </a>
          </li>
          <li>
            <a href="{{url('produk')}}">
              <i class="bi bi-circle"></i><span>Seluruh Produk</span>
            </a>
          </li>
        </ul>
      </li>

      <!-- MENU PENGGUNA DAN PROFILE -->
      {{--<li class="nav-item">
        <a class="nav-link {{Request::is('profile') ? '' : 'collapsed'}}" data-bs-target="#pengguna-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i><span>ADMIN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengguna-nav" class="nav-content {{Request::is('profile') ? '' : 'collapse'}}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="pengguna-data.html">
              <i class="bi bi-circle"></i><span>Daftar Admin</span>
            </a>
          </li>
        </ul>
      </li>--}}

      <!-- MENU LAPORAN -->
      {{--<li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#laporan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>LAPORAN</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="laporan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="laporan-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
        </ul>
      </li>--}}

      <!-- CONFIG -->
      <li class="nav-item">
        <a class="nav-link {{Request::is('config')? '' : 'collapsed'}}" href="{{url('config')}}">
          <i class="bi bi-wrench"></i><span>CONFIG</span>
        </a>
      </li>

      <!-- LOGOUT -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{url('logout')}}">
          <i class="bi bi-box-arrow-in-right"></i><span>LOG OUT</span>
        </a>
      </li>
      
    </ul>

  </aside><!-- End Sidebar-->
