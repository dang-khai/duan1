@php
    $nameRoute = request()
        ->route()
        ->getName();
@endphp
<div class="d-flex flex-column flex-shrink-0 p-3 text-dark vh-100 admin-left">
    <a href="{{ route('admin_home') }}"
        class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32">
            <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-3">PETPOLY</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('admin_home') }}"
                class="nav-link {{ $nameRoute == 'admin_home' ? 'active' : 'text-dark' }}" id="admin-home"
                aria-current="page">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#home" />
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('admin_category') }}"
                class="nav-link {{ $nameRoute == 'admin_category' ? 'active' : 'text-dark' }}" id="admin-category">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#speedometer2" />
                </svg>
                Category
            </a>
        </li>
        <li>
            <a href="{{ route('admin_orders') }}"
                class="nav-link {{ $nameRoute == 'admin_orders' ? 'active' : 'text-dark' }}" id="admin-orders">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#table" />
                </svg>
                Orders
            </a>
        </li>
        <li>
            <a href="{{ route('admin_product') }}"
                class="nav-link @if ($nameRoute == 'admin_imgProduct' || $nameRoute == 'admin_product') {{ 'active' }}
                @else
                {{ 'text-dark' }} @endif"
                id="admin-product">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#grid" />
                </svg>
                Products
            </a>
        </li>
        <li>
            <a href="{{ route('admin_customers') }}"
                class="nav-link {{ $nameRoute == 'admin_customers' ? 'active' : 'text-dark' }}" id="admin-customers">
                <svg class="bi me-2" width="16" height="16">
                    <use xlink:href="#people-circle" />
                </svg>
                Customers
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-dark text-decoration-none dropdown-toggle"
            id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32"
                class="rounded-circle me-2">
            <strong>{{ Auth::check() ? Auth::user()->name : 'Hello' }}</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
            <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Đăng xuất
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </div>
</div>
