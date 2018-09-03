<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('/') }}admin/images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name"></p>
                        <div>
                            <small class="designation text-muted">Receptionist</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>

            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('receptionistHome-page') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('show-visitor')}}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Visitors list</span>
            </a>
        </li>


























    </ul>
</nav>