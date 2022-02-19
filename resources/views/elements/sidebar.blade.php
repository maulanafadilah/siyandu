<!--**********************************
  Sidebar start
***********************************-->
<div class="deznav">
  <div class="deznav-scroll">
    <a href="javascript:void(0)" class="add-menu-sidebar" data-toggle="modal" data-target="#addOrderModalside" >+ Tambah Secari</a>
    <ul class="metismenu" id="menu">
      <li><a href="{!! url('/'); !!}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-381-networking"></i>
        <span class="nav-text">Beranda</span>
      </a>
      </li>
      <li><a href="{!! url('/kehadiran'); !!}" class="ai-icon " aria-expanded="false">
        <i class="flaticon-381-list"></i>
        <span class="nav-text">Secari</span>
      </a>
      </li>
      <li><a href="{!! url('/balita'); !!}" class="ai-icon {{ Request::is('balita/*') ? 'mm-active' : ''}}" aria-expanded="false">
        <i class="flaticon-381-user-7"></i>
        <span class="nav-text">Balita</span>
      </a>
      </li>
      <li><a href="{!! url('/laporan'); !!}" class="ai-icon" aria-expanded="false">
        <i class="flaticon-381-file-2"></i>
        <span class="nav-text">Laporan</span>
      </a>
      </li>
    </ul>
    <div class="copyright">
      <p><strong>Siyandu</strong> © 2022 All Rights Reserved</p>
      <p>Made with <span class="heart"></span> by Baby Daily</p>
    </div>
  </div>
</div>
<!--**********************************
  Sidebar end
***********************************-->