<div class="sidebar-wrapper" data-sidebar-layout="stroke-svg">
    <div>
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo_dark.png') }}" alt=""></a>
            <div class="back-btn">
                <i class="fa fa-angle-left"></i>
            </div>
            <div class="toggle-sidebar">
                <i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i>
            </div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                    src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
        </div>
        <div class="profile-section sidebar-search">
            <div class="profile-wrapper">
                <div class="active-profile"> <img class="img-fluid" src="{{ asset('assets/images/user.png') }}"
                        alt="user">
                    <div class="status bg-success"> </div>
                </div>
                <div>
                    <h4>{{ ucfirst(auth()->user()?->first_name).' '.ucfirst(auth()->user()?->last_name) }}</h4>
                    <span>{{ ucfirst(auth()->user()?->role->name)}}</span>
                </div>
            </div>
            <div>
                <svg>
                    <use href="{{ asset('assets/svg/icon-sprite.svg#profile-setting') }}"></use>
                </svg>
            </div>
        </div>
        <div class="sidebar-search">
            <div class="input-group">
                <span class="input-group-text" id="sidebar-search">
                    <svg>
                        <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
                    </svg>
                </span>
                <input class="form-control" type="text" placeholder="Quick search" aria-label="Username"
                    aria-describedby="sidebar-search">
            </div>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="{{ route('admin.dashboard') }}"><img class="img-fluid"
                                src="{{ asset('assets/images/logo/logo-icon.png') }}" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="pin-title sidebar-main-title">
                        <div>
                            <h6>- Pinned</h6>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-1">- General</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-primary">3</label>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-home') }}"></use>
                            </svg><span class="lan-3">Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a class="lan-4" href="{{ route('admin.dashboard') }}">Default</a></li>
                            <li><a class="lan-5" href="{{ route('admin.ecommerce') }}">Ecommerce</a></li>
                            <li><a href="{{ route('admin.project') }}">Project</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><span class="lan-6">Laravel Example</span>
                        </a>
                        <ul class="sidebar-submenu">
                            @can('role.index')
                            <li><a href="{{ route('admin.role.index') }}">Roles Management</a></li>
                            @endcan
                            @can('user.index')
                            <li><a href="{{ route('admin.user.index') }}">Users Management</a></li>
                            @endcan
                            <li><a href="{{ route('admin.blog.index') }}">Blogs Management</a></li>
                            <li><a href="{{ route('admin.category.index') }}">Categories Management</a></li>
                            <li><a href="{{ route('admin.tag.index') }}">Tags Management</a></li>
                            <li><a href="{{ route('admin.page.index') }}">Pages Management</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-widget') }}"></use>
                            </svg><span class="lan-6">Widgets</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.general-widget') }}">General</a></li>
                            <li><a href="{{ route('admin.chart-widget') }}">Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-layout') }}"></use>
                            </svg><span class="lan-7">Page layout</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.box-layout') }}">Boxed</a></li>
                            <li><a href="{{ route('admin.layout-rtl') }}">RTL</a></li>
                            <li><a href="{{ route('admin.layout-dark') }}">Dark Layout</a></li>
                            <li><a href="{{ route('admin.hide-on-scroll') }}">Hide Nav Scroll</a></li>
                            <li><a href="{{ route('admin.footer-light') }}">Footer Light</a></li>
                            <li><a href="{{ route('admin.footer-dark') }}">Footer Dark</a></li>
                            <li><a href="{{ route('admin.footer-fixed') }}">Footer Fixed</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-8">- Apps</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <label class="badge badge-light-secondary">New</label>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-project') }}"></use>
                            </svg><span>Project</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.projects') }}">Project List</a></li>
                            <li><a href="{{ route('admin.projectcreate') }}">Create new</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.file-manager') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-file') }}"></use>
                            </svg><span>File manager</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.kanban') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-board') }}"></use>
                            </svg><span>kanban Board</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                            </svg><span>Ecommerce</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.add-product') }}">Add Products</a></li>
                            <li><a href="{{ route('admin.products') }}">Product</a></li>
                            <li><a href="{{ route('admin.category') }}">Category page</a></li>
                            <li><a href="{{ route('admin.product-page') }}">Product page</a></li>
                            <li><a href="{{ route('admin.list-products') }}">Product list</a></li>
                            <li><a href="{{ route('admin.payment-details') }}">Payment Details</a></li>
                            <li><a href="{{ route('admin.order-history') }}">Order History</a></li>
                            <li><a class="submenu-title submenu-wrapper" href="javascript:void(0)">Invoices<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.invoice-1') }}">Invoice-1</a></li>
                                    <li><a href="{{ route('admin.invoice-2') }}">Invoice-2</a></li>
                                    <li><a href="{{ route('admin.invoice-3') }}">Invoice-3</a></li>
                                    <li><a href="{{ route('admin.invoice-4') }}">Invoice-4</a></li>
                                    <li><a href="{{ route('admin.invoice-5') }}">Invoice-5</a></li>
                                    <li><a href="{{ route('admin.invoice-template') }}">Invoice-6</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('admin.cart') }}">Cart</a></li>
                            <li><a href="{{ route('admin.list-wish') }}">Wishlist</a></li>
                            <li><a href="{{ route('admin.checkout') }}">Checkout</a></li>
                            <li><a href="{{ route('admin.pricing') }}">Pricing</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.letter-box') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                            </svg><span>Letter Box</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-chat') }}"></use>
                            </svg><span>Chats</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.private-chat') }}">Private Chat</a></li>
                            <li><a href="{{ route('admin.group-chat') }}">Group Chat</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-user') }}"></use>
                            </svg><span>Users</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.user-profile') }}">Users Profile</a></li>
                            <li><a href="{{ route('admin.edit-profile') }}">Users Edit</a></li>
                            <li><a href="{{ route('admin.user-cards') }}">Users Cards</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.bookmark') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bookmark') }}"></use>
                            </svg><span>Bookmarks</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.contacts') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-contact') }}"></use>
                            </svg><span>Contacts</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.task') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-task') }}"></use>
                            </svg><span>Tasks</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.calendar-basic') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-calendar') }}"></use>
                            </svg><span>Calendar</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.social-app') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-social') }}"></use>
                            </svg><span>Social App</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.to-do') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-to-do') }}"> </use>
                            </svg><span>To-Do</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.search') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-search') }}"></use>
                            </svg><span>Search Result</span>
                        </a>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-9">- Forms & Table</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-form') }}"></use>
                            </svg><span>Forms</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title submenu-wrapper" href="javascript:void(0)">Form Controls<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.form-validation') }}">Form Validation</a></li>
                                    <li><a href="{{ route('admin.base-input') }}">Base Inputs</a></li>
                                    <li><a href="{{ route('admin.radio-checkbox-control') }}">Checkbox & Radio</a></li>
                                    <li><a href="{{ route('admin.input-group') }}">Input Groups</a></li>
                                    <li><a href="{{ route('admin.input-mask') }}">Input Mask</a></li>
                                    <li><a href="{{ route('admin.megaoptions') }}">Mega Options</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title submenu-wrapper" href="javascript:void(0)">Form Widgets<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.datepicker') }}">Datepicker</a></li>
                                    <li><a href="{{ route('admin.touchspin') }}">Touchspin</a></li>
                                    <li><a href="{{ route('admin.select2') }}">Select2</a></li>
                                    <li><a href="{{ route('admin.switch') }}">Switch</a></li>
                                    <li><a href="{{ route('admin.typeahead') }}">Typeahead</a></li>
                                    <li><a href="{{ route('admin.clipboard') }}">Clipboard</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title submenu-wrapper" href="javascript:void(0)">Form layout<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.form-wizard') }}">Form Wizard 1</a></li>
                                    <li><a href="{{ route('admin.form-wizard-two') }}">Form Wizard 2</a></li>
                                    <li><a href="{{ route('admin.two-factor') }}">Two Factor</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-table') }}"></use>
                            </svg><span>Tables</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a class="submenu-title" href="javascript:void(0)">Bootstrap Tables<span
                                        class="sub-arrow"><i class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.bootstrap-basic-table') }}">Basic Tables</a></li>
                                    <li><a href="{{ route('admin.table-components') }}">Table components</a></li>
                                </ul>
                            </li>
                            <li><a class="submenu-title" href="javascript:void(0)">Data Tables<span class="sub-arrow"><i
                                            class="fa fa-angle-right"></i></span></a>
                                <ul class="nav-sub-childmenu submenu-content">
                                    <li><a href="{{ route('admin.datatable-basic-init') }}">Basic Init</a></li>
                                    <li><a href="{{ route('admin.datatable-advance') }}">Advance Init </a></li>
                                    <li><a href="{{ route('admin.datatable-API') }}">API</a></li>
                                    <li><a href="{{ route('admin.datatable-data-source') }}">Data Sources</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ asset('datatable-ext-autofill') }}">Ex. Data Tables</a></li>
                            <li><a href="{{ asset('jsgrid-table') }}">Js Grid Table</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-2">- Components</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ui-kits') }}"></use>
                            </svg><span>Ui Kits</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.typography') }}">Typography</a></li>
                            <li><a href="{{ route('admin.avatars') }}">Avatars</a></li>
                            <li><a href="{{ route('admin.helper-classes') }}">helper classes</a></li>
                            <li><a href="{{ route('admin.grid') }}">Grid</a></li>
                            <li><a href="{{ route('admin.tag-pills') }}">Tag & pills</a></li>
                            <li><a href="{{ route('admin.progress-bar') }}">Progress</a></li>
                            <li><a href="{{ route('admin.modal') }}">Modal</a></li>
                            <li><a href="{{ route('admin.alert') }}">Alert</a></li>
                            <li><a href="{{ route('admin.popover') }}">Popover</a></li>
                            <li><a href="{{ route('admin.tooltip') }}">Tooltip</a></li>
                            <li><a href="{{ route('admin.dropdown') }}">Dropdown</a></li>
                            <li><a href="{{ route('admin.according') }}">Accordion</a></li>
                            <li><a href="{{ route('admin.tab-bootstrap') }}">Tabs</a></li>
                            <li><a href="{{ route('admin.list') }}">Lists</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-bonus-kit') }}"></use>
                            </svg><span>Bonus Ui</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.scrollable') }}">Scrollable</a></li>
                            <li><a href="{{ route('admin.tree') }}">Tree view</a></li>
                            <li><a href="{{ route('admin.toasts') }}">Toasts</a></li>
                            <li><a href="{{ route('admin.rating') }}">Rating</a></li>
                            <li><a href="{{ route('admin.dropzone') }}">dropzone</a></li>
                            <li><a href="{{ route('admin.tour') }}">Tour</a></li>
                            <li><a href="{{ route('admin.sweet-alert2') }}">SweetAlert2</a></li>
                            <li><a href="{{ route('admin.modal-animated') }}">Animated Modal</a></li>
                            <li><a href="{{ route('admin.owl-carousel') }}">Owl Carousel</a></li>
                            <li><a href="{{ route('admin.ribbons') }}">Ribbons</a></li>
                            <li><a href="{{ route('admin.pagination') }}">Pagination</a></li>
                            <li><a href="{{ route('admin.breadcrumb') }}">Breadcrumb</a></li>
                            <li><a href="{{ route('admin.range-slider') }}">Range Slider</a></li>
                            <li><a href="{{ route('admin.image-cropper') }}">Image cropper</a></li>
                            <li><a href="{{ route('admin.basic-card') }}">Basic Card</a></li>
                            <li><a href="{{ route('admin.creative-card') }}">Creative Card</a></li>
                            <li><a href="{{ route('admin.dragable-card') }}">Draggable Card</a></li>
                            <li><a href="{{ route('admin.timeline-v-1') }}">Timeline </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-animation') }}"></use>
                            </svg><span>Animation</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.animate') }}">Animate</a></li>
                            <li><a href="{{ route('admin.scroll-reval') }}">Scroll Reveal</a></li>
                            <li><a href="{{ route('admin.AOS') }}">AOS animation</a></li>
                            <li><a href="{{ route('admin.tilt') }}">Tilt Animation</a></li>
                            <li><a href="{{ route('admin.wow') }}">Wow Animation</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-icons') }}"></use>
                            </svg><span>Icons</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.flag-icon') }}">Flag icon</a></li>
                            <li><a href="{{ route('admin.font-awesome') }}">Fontawesome Icon</a></li>
                            <li><a href="{{ route('admin.ico-icon') }}">Ico Icon</a></li>
                            <li><a href="{{ route('admin.themify-icon') }}">Themify Icon</a></li>
                            <li><a href="{{ route('admin.feather-icon') }}">Feather icon</a></li>
                            <li><a href="{{ route('admin.whether-icon') }}">Whether Icon</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.buttons') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-button') }}"></use>
                            </svg><span>Buttons</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-charts') }}"></use>
                            </svg><span>Charts</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.echarts') }}">Echarts</a></li>
                            <li><a href="{{ route('admin.chart-apex') }}">Apex Chart</a></li>
                            <li><a href="{{ route('admin.chart-google') }}">Google Chart</a></li>
                            <li><a href="{{ route('admin.chart-sparkline') }}">Sparkline chart</a></li>
                            <li><a href="{{ route('admin.chart-flot') }}">Flot Chart</a></li>
                            <li><a href="{{ route('admin.chart-knob') }}">Knob Chart</a></li>
                            <li><a href="{{ route('admin.chart-morris') }}">Morris Chart</a></li>
                            <li><a href="{{ route('admin.chartjs') }}">Chatjs Chart</a></li>
                            <li><a href="{{ route('admin.chartist') }}">Chartist Chart</a></li>
                            <li><a href="{{ route('admin.chart-peity') }}">Peity Chart</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-9">- Pages</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.sample-page') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-sample-page') }}"></use>
                            </svg><span>Sample page</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.internationalization') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-internationalization') }}"></use>
                            </svg><span>Internationalization</span>
                        </a>
                    </li>
                    <li class="mega-menu sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-others') }}"></use>
                            </svg><span>Others</span>
                        </a>
                        <div class="mega-menu-container menu-content">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Error Page</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="{{ route('admin.error-400') }}">Error 400</a></li>
                                                <li><a href="{{ route('admin.error-401') }}">Error 401</a></li>
                                                <li><a href="{{ route('admin.error-403') }}">Error 403</a></li>
                                                <li><a href="{{ route('admin.error-404') }}">Error 404</a></li>
                                                <li><a href="{{ route('admin.error-500') }}">Error 500</a></li>
                                                <li><a href="{{ route('admin.error-503') }}">Error 503</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Authentication</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="{{ route('login') }}" target="_blank">Login
                                                        Simple</a></li>
                                                <li><a href="{{ route('admin.login_one') }}" target="_blank">Visual
                                                        Login</a>
                                                </li>
                                                <li><a href="{{ route('admin.login_two') }}" target="_blank">Visual
                                                        Login
                                                        2</a></li>
                                                <li><a href="{{ route('admin.login-bs-validation') }}"
                                                        target="_blank">Validate Login</a></li>
                                                <li><a href="{{ route('admin.login-bs-tt-validation') }}"
                                                        target="_blank">Tooltip Login</a></li>
                                                <li><a href="{{ route('admin.login-sa-validation') }}"
                                                        target="_blank">Alert
                                                        Login</a></li>
                                                <li><a href="{{ route('admin.sign-up') }}" target="_blank">Register</a>
                                                </li>
                                                <li><a href="{{ route('admin.sign-up-one') }}" target="_blank">Register
                                                        Image</a></li>
                                                <li><a href="{{ route('admin.sign-up-two') }}" target="_blank">Visual
                                                        Reg
                                                        2</a></li>
                                                <li><a href="{{ route('admin.sign-up-wizard') }}" target="_blank">Reg
                                                        Wizard</a></li>
                                                <li><a href="{{ route('admin.unlock') }}">Unlock User</a></li>
                                                <li><a href="{{ route('admin.forget-password') }}">Pwd Forget</a></li>
                                                <li><a href="{{ route('admin.reset-password') }}">Pwd Reset</a></li>
                                                <li><a href="{{ route('admin.maintenance') }}">Maintenance</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Coming Soon</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="{{ asset('comingsoon') }}">Coming Simple</a></li>
                                                <li><a href="{{ asset('comingsoon-bg-video') }}">Coming Bg Vid</a></li>
                                                <li><a href="{{ asset('comingsoon-bg-img') }}">Coming Bg Img</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col mega-box">
                                        <div class="link-section">
                                            <div class="submenu-title">
                                                <h5>Email templates</h5>
                                            </div>
                                            <ul class="submenu-content opensubmegamenu">
                                                <li><a href="{{ route('admin.basic-template') }}">Basic Email</a></li>
                                                <li><a href="{{ route('admin.email-header') }}">Basic Header</a></li>
                                                <li><a href="{{ route('admin.template-email') }}">Ecom Temp</a></li>
                                                <li><a href="{{ route('admin.template-email-2') }}">Ecom Temp2</a></li>
                                                <li><a href="{{ route('admin.ecommerce-templates') }}">Ecom Email</a>
                                                </li>
                                                <li><a href="{{ route('admin.email-order-success') }}">Order Success</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="lan-10">- Miscellaneous</h6>
                        </div>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-gallery') }}"></use>
                            </svg><span>Gallery</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.gallery') }}">Gallery Grid</a></li>
                            <li><a href="{{ route('admin.gallery-with-description') }}">Gallery Grid Desc</a></li>
                            <li><a href="{{ route('admin.gallery-masonry') }}">Masonry Gallery</a></li>
                            <li><a href="{{ route('admin.masonry-gallery-with-disc') }}">Masonry with Desc</a></li>
                            <li><a href="{{ route('admin.gallery-hover') }}">Hover Effects</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-blog') }}"></use>
                            </svg><span>Blog</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.blog') }}">Blog Details</a></li>
                            <li><a href="{{ route('admin.blog-single') }}">Blog Single</a></li>
                            <li><a href="{{ route('admin.add-post') }}">Add Post</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.faq') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-faq') }}"></use>
                            </svg><span>FAQ</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-job-search') }}"></use>
                            </svg><span>Job Search</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.job-cards-view') }}">Cards view</a></li>
                            <li><a href="{{ route('admin.job-list-view') }}">List View</a></li>
                            <li><a href="{{ route('admin.job-details') }}">Job Details</a></li>
                            <li><a href="{{ route('admin.job-apply') }}">Apply</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-learning') }}"></use>
                            </svg><span>Learning</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.learning-list-view') }}">Learning List</a></li>
                            <li><a href="{{ route('admin.learning-detailed') }}">Detailed Course</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-maps') }}"></use>
                            </svg><span>Maps</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.map-js') }}">Maps JS</a></li>
                            <li><a href="{{ route('admin.vector-map') }}">Vector Maps</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title" href="javascript:void(0)">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-editors') }}"></use>
                            </svg><span>Editors</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="{{ route('admin.quill-editor') }}">Quill editor</a></li>
                            <li><a href="{{ route('admin.ace-code-editor') }}">ACE code editor </a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.knowledgebase') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-knowledgebase') }}"></use>
                            </svg><span>Knowledgebase</span>
                        </a>
                    </li>
                    <li class="sidebar-list"><i class="fa fa-thumb-tack"></i>
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('admin.support-ticket') }}">
                            <svg class="stroke-icon">
                                <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-support-tickets') }}"></use>
                            </svg><span>Support Ticket</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>