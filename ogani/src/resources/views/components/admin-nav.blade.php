<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
        <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search"
            placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="light">
                <i class="fe fe-sun fe-16"></i>
            </a>
        </li>
        <li class="nav-item nav-notif">
            <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
                <span class="fe fe-bell fe-16"></span>
                <span class="dot dot-md bg-success"></span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink"
                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="avatar avatar-sm mt-2">
                    <img src="https://scontent.fdad3-4.fna.fbcdn.net/v/t39.30808-6/450678033_1186182906064436_3881753559541521929_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeGB-ecxQntIJcgeGcyYzDx02a11W-mcG4LZrXVb6ZwbgjWe7cxD-le-S2dJffYAlSex_A9BFSK9pmGJiQbN40oL&_nc_ohc=TgRhMXPxsMsQ7kNvgGrD5qG&_nc_ht=scontent.fdad3-4.fna&oh=00_AYCApn-Ak6MFVwwH_ZNVS_8j2A3iiydSPkKqi2_KqtfxpQ&oe=66A3DA91"
                        alt="..." class="avatar-img rounded-circle">
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Activities</a>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn" style="margin-left: 12px; color: #29292b;">Logout</button>
                </form>
            </div>
        </li>
    </ul>
</nav>
