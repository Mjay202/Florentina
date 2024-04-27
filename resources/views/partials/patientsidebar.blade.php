 <ul class="nav flex-column pt-3 pt-md-0">
    
        <li class="nav-item {{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
            <a href="/dashboard" class="nav-link">
                <span class="sidebar-icon"> <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                </svg></span></span>
                <span class="sidebar-text">My Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{ Request::segment(1) == 'apppoitments' ? 'active' : '' }}">
            <a href="/appointments" class="nav-link">
                <span>
                <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                        clip-rule="evenodd"></path>
                    </svg>
                </span>
                <span class="sidebar-text">My Appointments </span>
            </a>
        </li>

      <li class="nav-item {{ Request::segment(1) == 'patients' ? 'active' : '' }}">
        <a href="/record" class="nav-link">
          <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                  clip-rule="evenodd"></path>
              </svg></span>
          <span class="sidebar-text">Medical Record </span>
        
        </a>
      </li>

      <li class="nav-item {{ Request::segment(1) == 'reports' ? 'active' : '' }}">
        <a href="/notifications" class="nav-link">
          <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"></path>
              </svg>
            </span>
          <span class="sidebar-text">Notifications </span>
          <span>
            <span class="badge badge-sm bg-secondary ms-1">10</span>
          </span>
        </a>
      </li>

      <li class="nav-item {{ Request::segment(1) == 'patients' ? 'active' : '' }}">
        <a href="/payments" class="nav-link">
           <span class="sidebar-icon"><svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z"></path>
              <path fill-rule="evenodd"
                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                clip-rule="evenodd"></path>
            </svg></span>
          <span class="sidebar-text">Billing and Payments </span>
        
        </a>
      </li>

      <li class="nav-item">
        <a href="/profile" class="nav-link d-flex align-items-center">
          <span class="sidebar-icon me-3">
            <img src="/assets/img/brand/light.svg" height="20" width="20" alt="Volt Logo">
          </span>
          <span class="mt-1 ms-1 sidebar-text">
            My Profile
          </span>
        </a>
      </li>
      
    </ul>