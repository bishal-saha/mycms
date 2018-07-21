<div class="site-menubar">
    <div class="site-menubar-header">
        <div class="cover overlay">
            <img class="cover-image" src="{{ asset('admin/assets/images/dashboard-header.jpg') }}"
                 alt="...">
            <div class="overlay-panel vertical-align overlay-background">
                <div class="vertical-align-middle">
                    <a class="avatar avatar-lg" href="javascript:void(0)">
                        <img src="{{ asset('admin/global/portraits/0.jpg') }}" alt="">
                    </a>
                    <div class="site-menubar-info">
                        @if(Auth::check())
                            <h5 class="site-menubar-user">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</h5>
                            <p class="site-menubar-email">{{ Auth::user()->email}}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="site-menubar-body">
        <div>
            <div>
                <ul class="site-menu" data-plugin="menu">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="{{ route('admin.dashboard') }}">
                            <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                            <span class="site-menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="site-menu-item has-sub">
                        <a href="javascript:void(0)">
                            <i class="site-menu-icon md-view-compact fas fa-user"></i>
                            <span class="site-menu-title">Clients</span>
                            <span class="site-menu-arrow"></span>
                        </a>
                        <ul class="site-menu-sub">
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ route('clients.index') }}">
                                    <span class="site-menu-title">All Clients</span>
                                </a>
                            </li>
                            <li class="site-menu-item">
                                <a class="animsition-link" href="{{ route('clients.create') }}">
                                    <span class="site-menu-title">Add New Client</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>