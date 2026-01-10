 <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li>
                            <!-- User Profile-->
                            <div class="user-profile dropdown m-t-20">
                                <div class="user-pic">
                                    <img src="{{url('assets/images/users/1.jpg')}}" alt="users" class="rounded-circle img-fluid" />
                                </div>
                                <div class="user-content hide-menu m-t-10">
                                    <h5 class="m-b-10 user-name font-medium">Steave Jobs</h5>
                                    <a href="javascript:void(0)" class="btn btn-circle btn-sm m-r-5" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        <i class="ti-settings"></i>
                                    </a>
                                    <a href="javascript:void(0)" title="Logout" class="btn btn-circle btn-sm">
                                        <i class="ti-power-off"></i>
                                    </a>
                                    <div class="dropdown-menu animated flipInY" aria-labelledby="Userdd">
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-user m-r-5 m-l-5"></i> My Profile</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-wallet m-r-5 m-l-5"></i> My Balance</a>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="javascript:void(0)">
                                            <i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>
                                        <div class="dropdown-divider"></div>

                                            <form action="/logout" method="POST">
                                                @csrf
                                                <button type="submit" class="dropdown-item">
                                                    <i class="fa fa-power-off m-r-5 m-l-5"></i> Logout
                                                </button>
                                            </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End User Profile-->
                        </li>
                        <!-- User Profile-->
                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Personal</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Car-Wheel"></i>
                                <span class="hide-menu">Categories </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="/categories" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> All Categories </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="categories/create" class="sidebar-link">
                                        <i class="icon-Record"></i>
                                        <span class="hide-menu"> Add New </span>
                                    </a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-small-cap">
                            <i class="mdi mdi-dots-horizontal"></i>
                            <span class="hide-menu">Apps</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                                <i class="icon-Mailbox-Empty"></i>
                                <span class="hide-menu">Products </span>
                            </a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item">
                                    <a href="/products" class="sidebar-link">
                                        <i class="mdi mdi-email"></i>
                                        <span class="hide-menu"> All Products </span>
                                    </a>
                                </li>
                                <li class="sidebar-item">
                                    <a href="/products/create" class="sidebar-link">
                                        <i class="mdi mdi-email-alert"></i>
                                        <span class="hide-menu"> Add Products </span>
                                    </a>
                                </li>
                            </ul>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>