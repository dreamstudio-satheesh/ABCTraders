<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <!-- Logo Section -->
        <div class="logo-wrapper">
            <a href="{{ url('admin/dashboard') }}">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="">
            </a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{ url('admin/dashboard') }}">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="">
            </a>
        </div>

        <!-- Profile Section -->
        <div class="profile-section sidebar-search">
            <div class="profile-wrapper">
                <div class="active-profile">
                    <img class="img-fluid" src="{{ asset('assets/images/user.png') }}" alt="user">
                    <div class="status bg-success"></div>
                </div>
                <div>
                    <span>{{ ucfirst(auth()->user()?->role->name) }}</span>
                </div>
            </div>
            <div>
                <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-setting') }}"></use>
                </svg>
            </div>
        </div>

        <!-- Navigation Menu -->
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <!-- Mobile Back Button -->
                    <li class="back-btn">
                        <a href="{{ url('admin/dashboard') }}">
                            <img class="img-fluid" src="{{ asset('assets/images/logo/logo-icon.png') }}" alt="">
                        </a>
                        <div class="mobile-back text-end">
                            <span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>

                    <!-- Dashboard -->
                    <li class="sidebar-menu">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ url('admin/dashboard') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <!-- User Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg>
                            <span>User Management</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/user') }}">Users List</a></li>
                            <li><a href="{{ url('admin/role') }}">Roles</a></li>
                        </ul>
                    </li>

                    <!-- Stock Intake -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-truck') }}"></use>
                            </svg>
                            <span>Stock Intake</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/stock-intake') }}">Stock Intake Overview</a></li>
                            <li><a href="{{ url('admin/stock-intake/create') }}">Record New Intake</a></li>
                        </ul>
                    </li>

                    <!-- Inventory Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-box') }}"></use>
                            </svg>
                            <span>Inventory</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/inventory') }}">Inventory Overview</a></li>
                            <li><a href="{{ url('admin/inventory/detail') }}">Inventory Detail</a></li>
                            <li><a href="{{ url('admin/inventory/create') }}">Add/Edit Inventory Item</a></li>
                            <li><a href="{{ url('admin/inventory/barcode') }}">Barcode Scanning</a></li>
                        </ul>
                    </li>

                    <!-- Category Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-tag') }}"></use>
                            </svg>
                            <span>Categories & Attributes</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/categories') }}">Categories</a></li>
                            <li><a href="{{ url('admin/subcategories') }}">Subcategories</a></li>
                            <li><a href="{{ url('admin/attributes') }}">Product Attributes</a></li>
                        </ul>
                    </li>

                    <!-- Rack & Space Management -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg>
                            <span>Racks & Space</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/racks') }}">Rack Overview</a></li>
                            <li><a href="{{ url('admin/racks/detail') }}">Rack Detail</a></li>
                        </ul>
                    </li>

                    <!-- Reports & Analytics -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bar-chart') }}"></use>
                            </svg>
                            <span>Reports</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/reports') }}">Reports Dashboard</a></li>
                            <li><a href="{{ url('admin/reports/stock') }}">Stock Reports</a></li>
                        </ul>
                    </li>

                    <!-- Settings -->
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-settings') }}"></use>
                            </svg>
                            <span>Settings</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ url('admin/settings') }}">System Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
