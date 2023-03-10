<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">

        <img src="assets/images/nicsdiner.png" width="160px" height="80px" alt="logo" class="mt-10 ml-8">

        <ul class="nav">
            <li class="nav-item nav-category">
                <span class="nav-link">Admin Control</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/users') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                    </span>
                    <span class="menu-title">User's</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/foodmenu') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-playlist-play"></i>
                    </span>
                    <span class="menu-title">Add Menu</span>
                </a>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/viewgallery') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-table-large"></i>
                    </span>
                    <span class="menu-title">Gallery</span>
                </a>
            </li>

            <li class="nav-item menu-items">
                <a class="nav-link" href="{{ url('/orders') }}">
                    <span class="menu-icon">
                        <i class="mdi mdi-chart-bar"></i>
                    </span>
                    <span class="menu-title">Order List</span>
                </a>
            </li>

        </ul>
    </nav>
</div>
