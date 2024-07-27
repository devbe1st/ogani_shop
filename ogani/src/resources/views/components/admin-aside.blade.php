<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#166ef5" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="square" stroke-linejoin="round" stroke-width="2" d="M10 19H5a1 1 0 0 1-1-1v-1a3 3 0 0 1 3-3h2m10 1a3 3 0 0 1-3 3m3-3a3 3 0 0 0-3-3m3 3h1m-4 3a3 3 0 0 1-3-3m3 3v1m-3-4a3 3 0 0 1 3-3m-3 3h-1m4-3v-1m-2.121 1.879-.707-.707m5.656 5.656-.707-.707m-4.242 0-.707.707m5.656-5.656-.707.707M12 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                </svg>
            </a>
        </div>
        <ul class="navbar-nav flex-fill w-100">
            <li class="nav-item w-100">
                <a class="nav-link" href="{{ route('admin.index') }}">
                    <i class="fe fe-home fe-16"></i>
                    <span class="ml-3 item-text">Dashboard</span>
                </a>
            </li>
        </ul>
        {{-- <p class="text-muted nav-heading mt-2 mb-1">
            <span>Setting</span>
        </p>
        <ul class="navbar-nav flex-fill w-100">
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-settings fe-16"></i>
                    <span class="ml-3 item-text">System</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-star fe-16"></i>
                    <span class="ml-3 item-text">About</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-shield fe-16"></i>
                    <span class="ml-3 item-text">Contact</span>
                </a>
            </li>
            <li class="nav-item w-100">
                <a class="nav-link" href="">
                    <i class="fe fe-message-square fe-16"></i>
                    <span class="ml-3 item-text">Policy</span>
                </a>
            </li>
        </ul> --}}
        <p class="text-muted nav-heading mt-2 mb-1">
            <span>Management</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-users fe-16"></i>
                    <span class="ml-3 item-text">User</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.user.index') }}">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#category" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-grid fe-16"></i>
                    <span class="ml-3 item-text">Category</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="category">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.category.index') }}">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">
                                List
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.category.create') }}">
                            <i class="fe fe-plus fe-12"></i>
                            <span class="ml-1 item-text">
                                Add new
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-database fe-16"></i>
                    <span class="ml-3 item-text">Product</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.product.index') }}">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">
                                List
                            </span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.product.create') }}">
                            <i class="fe fe-plus fe-12"></i>
                            <span class="ml-1 item-text">
                                Add new
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#order" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-shopping-bag fe-16"></i>
                    <span class="ml-3 item-text">Order</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="order">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.order.index') }}">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">
                                List
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#blog" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-bookmark fe-16"></i>
                    <span class="ml-3 item-text">Blog</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="blog">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">List</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="">
                            <i class="fe fe-plus fe-12"></i>
                            <span class="ml-1 item-text">Add new</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a href="#email" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-message-circle fe-16"></i>
                    <span class="ml-3 item-text">Email</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="email">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ route('admin.email.index') }}">
                            <i class="fe fe-list fe-12"></i>
                            <span class="ml-1 item-text">List</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
</aside>
