<div class="d-flex flex-column flex-shrink-0 p-3 text-dark vh-100" style="width: 300px; background-color: #FCB000;">
  <a href="{{ route('home') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
    <svg class="bi me-2" width="40" height="32">
      <use xlink:href="#bootstrap" />
    </svg>
    <span class="fs-3">PETPOLY</span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li class="nav-item">
      <a href="{{ route('home') }}" class="nav-link active" aria-current="page">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#home" />
        </svg>
        Home
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#speedometer2" />
        </svg>
        Dashboard
      </a>
    </li>
    <li>
      <a href="#" class="nav-link text-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#table" />
        </svg>
        Orders
      </a>
    </li>
    <li>
      <a href="{{ route('product') }}" class="nav-link text-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#grid" />
        </svg>
        Products
      </a>
    </li>
    <li>
      <a href="customer" class="nav-link text-dark">
        <svg class="bi me-2" width="16" height="16">
          <use xlink:href="#people-circle" />
        </svg>
        Customers
      </a>
    </li>
  </ul>
  <hr>
  <div class="dropdown">
    <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
      <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
      <strong>admin</strong>
    </a>
    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
      <li><a class="dropdown-item" href="#">New project...</a></li>
      <li><a class="dropdown-item" href="#">Settings</a></li>
      <li><a class="dropdown-item" href="#">Profile</a></li>
      <li>
        <hr class="dropdown-divider">
      </li>
      <li><a class="dropdown-item" href="{{ route('home') }}">Sign out</a></li>
    </ul>
  </div>
</div>