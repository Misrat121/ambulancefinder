<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('ambulances.list')}}">
              <span data-feather="file"></span>
              Ambulances
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Manage Query
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registereduser.create')}}">
              <span data-feather="shopping-cart"></span>
              Registered Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registereddriver.create')}}">
              <span data-feather="users"></span>
              Registered Drivers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('requests.manage')}}">
              <span data-feather="bar-chart-2"></span>
              Requests
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Update Contact Info
            </a>
          </li>
                  </ul>
      </div>
    </nav>