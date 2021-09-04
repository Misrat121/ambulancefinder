<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">

        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              {{auth()->user()->name}}
            </a>
          </li>
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
            <a class="nav-link" href="{{route('stations.list')}}">
              <span data-feather="file"></span>
              Stations
            </a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Manage Query
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('users.list')}}">
              <span data-feather="shopping-cart"></span>
             Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('patient.list')}}">
              <span data-feather="shopping-cart"></span>
            Patient
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('registereddrivers.list')}}">
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
        
                  </ul>
      </div>
</nav>