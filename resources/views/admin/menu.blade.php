<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="user-wrapper">
                    <div class="profile-image">
                        <img src="{{ asset('/') }}admin/images/faces/face1.jpg" alt="profile image">
                    </div>
                    <div class="text-wrapper">
                        <p class="profile-name">{{ Auth::user()->name }}</p>
                        <div>
                            <small class="designation text-muted">Manager</small>
                            <span class="status-indicator online"></span>
                        </div>
                    </div>
                </div>
               <!-- <button class="btn btn-success btn-block">New Project
                    <i class="mdi mdi-plus"></i>
                </button>
                -->
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="menu-icon mdi mdi-television"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>





        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Staff</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('stuff-form') }}">Add Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-stuff') }}">Manage Staff</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Staff Report</a>
                    </li>

                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Franchisee</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('franchisee-form') }}">Add Franchisee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-franchisee') }}">Manage Franchisee</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-franchiseeLogin') }}">Manage Franchisee Login</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('slot-view') }}">Slot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('slot-manage') }}">Manage Slot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('slot-assign') }}">Assign Slot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Slot Status</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="">Franchisee Report</a>
                    </li>

                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Guest</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('guest-form') }}">Add Guest</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-guest') }}">Manage Guest</a>
                    </li>


                </ul>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic">
                <i class="menu-icon mdi mdi-content-copy"></i>
                <span class="menu-title">Order</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('add-order') }}">Add Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('manage-order') }}">Manage Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Staff Report</a>
                    </li>

                </ul>
            </div>
        </li>




<!--


















        <li class="nav-item">
            <a class="nav-link" href="pages/forms/basic_elements.html">
                <i class="menu-icon mdi mdi-backup-restore"></i>
                <span class="menu-title">Form elements</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/charts/chartjs.html">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/tables/basic-table.html">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="pages/icons/font-awesome.html">
                <i class="menu-icon mdi mdi-sticker"></i>
                <span class="menu-title">Icons</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-restart"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/login.html"> Login </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/register.html"> Register </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                    </li>
                </ul>
            </div>
        </li>
        -->
    </ul>
</nav>