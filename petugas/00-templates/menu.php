        <!-- Menu -->
        <?php $current_page = $_SERVER['REQUEST_URI']; ?>
        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-2 text-capitalize">Pengaduan</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item <?= $_SERVER['REQUEST_URI'] == '/pengaduan-masyarakat/petugas/' ? 'active' : ''; ?>">
              <a href="http://localhost/pengaduan-masyarakat/petugas" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
              </a>
            </li>

            <!-- master -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Master Data</span>
            </li>
            <li class="menu-item <?= strpos($current_page, 'pengaduan-masyarakat/petugas/pages/masyarakat/') ? 'active' : ''; ?>">
              <a href="http://localhost/pengaduan-masyarakat/petugas/pages/masyarakat" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Analytics">Masyarakat</div>
              </a>
            </li>
            <li class="menu-item <?= strpos($current_page, 'pengaduan-masyarakat/petugas/pages/petugas/') ? 'active' : ''; ?>">
              <a href="http://localhost/pengaduan-masyarakat/petugas/pages/petugas" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-user-account"></i>
                <div data-i18n="Analytics">Petugas</div>
              </a>
            </li>
            <li class="menu-item <?= strpos($current_page, 'pengaduan-masyarakat/petugas/pages/pengaduan/') ? 'active' : ''; ?>">
              <a href="http://localhost/pengaduan-masyarakat/petugas/pages/pengaduan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-send"></i>
                <div data-i18n="Analytics">Pengaduan</div>
              </a>
            </li>
            <li class="menu-item <?= strpos($current_page, 'pengaduan-masyarakat/petugas/pages/tanggapan/') ? 'active' : ''; ?>">
              <a href="http://localhost/pengaduan-masyarakat/petugas/pages/tanggapan" class="menu-link">
                <i class="menu-icon tf-icons bx bx-reply-all"></i>
                <div data-i18n="Analytics">Tanggapan</div>
              </a>
            </li>
            
          </ul>
        </aside>
        <!-- / Menu -->
