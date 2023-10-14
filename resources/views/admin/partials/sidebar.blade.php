<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
                <i class="ti-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item {{ ( request()->is('admin/users*') ) ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.users.list') }}">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Users</span>

            </a>
        </li>

        <!-- <li class="nav-item {{ request()->is('admin/staff*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.staff.list')}}">
                <i class="ti-user menu-icon"></i>
                <span class="menu-title">Staff</span>
            </a>
        </li> -->
        <li class="nav-item {{ request()->is('admin/team*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.team.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Team</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/slider*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.slider.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Slider</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/portfolio*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.portfolio.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Portfolio</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/testimonial*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.testimonial.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Testimonial</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/service*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.service.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Service</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/category*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.category.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item {{ request()->is('admin/about*') ? 'active' : '' }}">
            <a class="nav-link" href="{{route('admin.about.list')}}">
                <i class="ti-anchor menu-icon"></i>
                <span class="menu-title">About</span>
            </a>
        </li>
    </ul>
</nav>