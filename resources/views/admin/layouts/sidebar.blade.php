<!--start sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <img src="/img/logo-only-white.png" class="logo-icon" alt="logo icon">
    </div>
    <div>
      <h4 class="logo-text">IFEM Admin</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i>
    </div>
  </div>
  <!--navigation-->
  <ul class="metismenu" id="menu">
    <li class="{{ Request::is('admin') ? 'mm-active' : '' }}">
      <a href="/admin">
        <div class="parent-icon"><i class="bi bi-house-door"></i>
        </div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/shortlink**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#"  aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-link-45deg"></i>
        </div>
        <div class="menu-title">Short Links</div>
      </a>
      <ul class="mm-collapse {{ Request::is('admin/shortlink**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('admin/shortlink') ? 'mm-active' : '' }}""> 
          <a href="/admin/shortlink"><i class="bi bi-arrow-right-short"></i>
            Semua Link
          </a>
        </li>
        <li class="{{ Request::is('admin/shortlink/create') ? 'mm-active' : '' }}"> 
          <a href="/admin/shortlink/create"><i class="bi bi-arrow-right-short"></i>
            Buat Link
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-label">Acara</li>
    <li class="{{ Request::is('admin/if-web') ? 'mm-active' : '' }}">
      <a href="/admin/if-web">
        <div class="parent-icon"><i class="bi bi-easel"></i>
        </div>
        <div class="menu-title">IF-WEB</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/msm') ? 'mm-active' : '' }}">
      <a href="/admin/msm">
        <div class="parent-icon"><i class="bi bi-journal-text"></i>
        </div>
        <div class="menu-title">MSM</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/iecc**') ? 'mm-active' : '' }}">
      <a class="has-arrow" href="#" aria-expanded="true">
        <div class="parent-icon"><i class="bi bi-shop-window"></i>
        </div>
        <div class="menu-title">IECC</div>
      </a>
      <ul class="mm-collapse {{ Request::is('admin/iecc**') ? 'mm-show' : '' }}" style="">
        <li class="{{ Request::is('admin/iecc/exhibitor') ? 'mm-active' : '' }}"> 
          <a href="/admin/iecc/exhibitor"><i class="bi bi-arrow-right-short"></i>
            Exhibitor
          </a>
        </li>
        <li class="{{ Request::is('admin/iecc/food-and-beverage') ? 'mm-active' : '' }}"> 
          <a href="/admin/iecc/food-and-beverage"><i class="bi bi-arrow-right-short"></i>
            Food & Beverage
          </a>
        </li>
      </ul>
    </li>
    <li class="{{ Request::is('admin/effect') ? 'mm-active' : '' }}">
      <a href="/admin/effect">
        <div class="parent-icon"><i class="bi bi-building"></i>
        </div>
        <div class="menu-title">EFFECT</div>
      </a>
    </li>
    <li class="{{ Request::is('admin/ticket') ? 'mm-active' : '' }}">
      <a href="/admin/ticket">
        <div class="parent-icon"><i class="bi bi-ticket-perforated"></i>
        </div>
        <div class="menu-title">Bundling Ticket</div>
      </a>
    </li>

  </ul>
  <!--end navigation-->
</aside>
<!--end sidebar -->