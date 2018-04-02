{{-- ### $Sidebar Menu ### --}}
<ul class="sidebar-menu scrollable pos-r">
    <li class="nav-item">
        <a class="sidebar-link" href="javascript:void(0);">
            <span class="title">Menú de Navegación.</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="sidebar-link" href="{{ url('/') }}">
            <span class="icon-holder">
                <i class="c-blue-500 ti-home"></i>
            </span>
            <span class="title">Dashboard</span>
        </a>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="c-red-500 ti-files"></i>
            </span>
            <span class="title">Pages</span>
            <span class="arrow">
                <i class="ti-angle-right"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class='sidebar-link' href="{{ url('/') }}">Page 1</a>
            </li>                
            <li>
                <a class='sidebar-link' href="{{ url('/') }}">Page 2</a>
            </li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="c-teal-500 ti-view-list-alt"></i>
            </span>
            <span class="title">Multiple Levels</span>
            <span class="arrow">
                <i class="ti-angle-right"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li class="nav-item dropdown">
                <a href="{{ url('/') }}">
                    <span>Menu Item</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a href="javascript:void(0);">
                    <span>Menu Item</span>
                    <span class="arrow">
                        <i class="ti-angle-right"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{ url('/') }}">Menu Item</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>