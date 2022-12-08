<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="index.html" class="app-brand-link">
          <img src="{{ asset('assets/img/logo/logo_verde.png') }}" class="text-center" height="30" class="" alt="">
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
        <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
        <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboards -->
      <li class="menu-item active open">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons ti ti-smart-home"></i>
          <div data-i18n="Dashboards">Dashboards</div>
          <div class="badge bg-label-primary rounded-pill ms-auto">3</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item active">
            <a href="index.html" class="menu-link">
              <div data-i18n="Analytics">Analytics</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="dashboards-crm.html" class="menu-link">
              <div data-i18n="CRM">CRM</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="dashboards-ecommerce.html" class="menu-link">
              <div data-i18n="eCommerce">eCommerce</div>
            </a>
          </li>
        </ul>
      </li>
      <!-- Misc -->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Misc</span>
      </li>
     
    </ul>
  </aside>
  <!-- / Menu -->