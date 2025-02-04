<div class="col-auto header-left-wrapper">
    <div class="header-logo-wrapper p-0 left-header">
        <div class="logo-wrapper">
            <a href="{{ route('admin.dashboard') }}">
                <img class="img-fluid" src="{{ asset('assets/images/logo/logo_dark.png') }}" alt="">
            </a>
        </div>
    </div>
    <div class="toggle-sidebar">
        <svg class="status_toggle sidebar-toggle">
            <use href="{{ asset('assets/svg/icon-sprite.svg#collapse-sidebar') }}"></use>
        </svg>
    </div>
</div>
@yield('breadcrumb')
<div class="col header-wrapper m-0 header-right-wrapper">
    <div class="row m-0">
        <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search anything .." name="q" title="" autofocus>
                        <div class="spinner-border Typeahead-spinner" role="status">
                            <span class="sr-only">
                                Loading...
                            </span>
                        </div><i class="close-search" data-feather="x"></i>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form>
        <div class="header-logo-wrapper col-auto p-0 left-header"></div>
        <div class="nav-right col-auto pull-right right-header p-0 ms-auto">
            <ul class="nav-menus">
                <li>
                    <span class="header-search">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#search') }}"></use>
                        </svg>
                    </span>
                </li>
                <li class="onhover-dropdown">
                    <div class="notification-box onhover-click">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#notification') }}"></use>
                        </svg>
                        <span class="badge rounded-pill badge-success">
                            3
                        </span>
                    </div>
                    <div class="onhover-show-div notification-dropdown">
                        <h6 class="f-18 mb-0 dropdown-title">
                            Notifications
                        </h6>
                        <ul>
                            <li class="d-flex">
                                <div class="notification-image"> <img class="img-fluid"
                                        src="{{ asset('assets/images/avtar/3.jpg') }}" alt="user">
                                    <div class="notification-icon bg-danger"><i class="fa fa-heart"></i></div>
                                </div>
                                <div>
                                    <p><span class="f-w-500 me-1">Emay Walter </span>liked your post </p><span
                                        class="f-light">10 minutes ago</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="notification-image"> <img class="img-fluid"
                                        src="{{ asset('assets/images/avtar/4.jpg') }}" alt="user">
                                    <div class="notification-icon bg-info"><i class="fa fa-share-alt"></i></div>
                                </div>
                                <div>
                                    <p><span class="f-w-500 me-1">Allie Grater</span>shared your post </p><span
                                        class="f-light">5 hours ago</span>
                                </div>
                            </li>
                            <li class="d-flex">
                                <div class="notification-image"> <img class="img-fluid"
                                        src="{{ asset('assets/images/avtar/7.jpg') }}" alt="user">
                                    <div class="notification-icon bg-success"><i class="fa fa-wechat"></i></div>
                                </div>
                                <div>
                                    <p>
                                        <span class="f-w-500 me-1">
                                            Colin Sik
                                        </span>commented on your post
                                    </p>
                                    <span class="f-light">
                                        yesterday
                                    </span>
                                </div>
                            </li>
                            <li>
                                <a class="f-w-700" href="#!">
                                    Check all
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="cart-nav onhover-dropdown">
                    <div class="cart-box onhover-click">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#email') }}"></use>
                        </svg>
                        <span class="badge rounded-pill badge-danger">
                            2
                        </span>
                    </div>
                    <div class="onhover-show-div chat-dropdown">
                        <div class="dropdown-title">
                            <div class="d-flex align-items-center"> <img class="img-fluid img-40 rounded-circle"
                                    src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user">
                                <div>
                                    <h6 class="f-18 mb-0">Jane Cooper</h6>
                                    <p class="mb-0"> <span class="status status-success me-1"></span><span>active</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <ul>
                            <li class="send-msg">
                                <div> <img class="img-fluid img-30 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user">
                                    <div>
                                        <p>Hello.how are you?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="reply-msg">
                                <div> <img class="img-fluid img-30 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user">
                                    <div>
                                        <p>Hi, i'm fine.what about you?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="send-msg">
                                <div> <img class="img-fluid img-30 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/1.jpg') }}" alt="user">
                                    <div>
                                        <p>I am facing js issue can you help me?</p>
                                    </div>
                                </div>
                            </li>
                            <li class="reply-msg">
                                <div> <img class="img-fluid img-30 rounded-circle"
                                        src="{{ asset('assets/images/dashboard/user/3.jpg') }}" alt="user">
                                    <div>
                                        <p>Sure, i will help you.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="chat-input">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Type message here...">
                                <span class="input-group-text bg-primary">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#send') }}"></use>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="mode">
                        <svg class="moon-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#moon') }}"></use>
                        </svg>
                        <svg class="sun-icon">
                            <use href="{{ asset('assets/svg/icon-sprite.svg#sun') }}"></use>
                        </svg>
                    </div>
                </li>
                <li class="cart-nav onhover-dropdown">
                    <div class="cart-box onhover-click">
                        <svg>
                            <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-ecommerce') }}"></use>
                        </svg>
                        <span class="badge rounded-pill badge-primary">
                            2
                        </span>
                    </div>
                    <div class="cart-dropdown onhover-show-div">
                        <h6 class="f-18 mb-0 dropdown-title">
                            Cart
                        </h6>
                        <ul class="cart-main-wrapper">
                            <li class="cart-product">
                                <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                        src="{{ asset('assets/images/other-images/cart-img2.jpg') }}" alt="cosmetic">
                                    <div class="flex-grow-1"><span class="f-w-500">Beauty cosmetic</span>
                                        <div class="qty-box">
                                            <div class="touchspin-wrapper">
                                                <button class="decrement-touchspin btn-touchspin">
                                                    <i class="fa fa-minus text-gray"></i>
                                                </button>
                                                <input class="input-touchspin" id="inputData" type="number" value="2">
                                                <button class="increment-touchspin btn-touchspin">
                                                    <i class="fa fa-plus text-gray"></i>
                                                </button>
                                            </div>
                                            <h6 class="font-primary">
                                                $20
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="close-circle">
                                        <a href="#">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="cart-product">
                                <div class="d-flex"><img class="img-fluid b-r-5 me-3 img-60"
                                        src="{{ asset('assets/images/other-images/cart-img-1.jpg') }}" alt="shoes">
                                    <div class="flex-grow-1"><span class="f-w-500">Simple shoes</span>
                                        <div class="qty-box">
                                            <div class="touchspin-wrapper">
                                                <button class="decrement-touchspin btn-touchspin">
                                                    <i class="fa fa-minus text-gray"></i>
                                                </button>
                                                <input class="input-touchspin" id="inputData1" type="number" value="1">
                                                <button class="increment-touchspin btn-touchspin">
                                                    <i class="fa fa-plus text-gray"></i>
                                                </button>
                                            </div>
                                            <h6 class="font-primary">
                                                $30
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="close-circle">
                                        <a href="#">
                                            <i data-feather="trash-2"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="total">
                                <h6 class="mb-0">Order Total : <span class="f-right">$70.00</span></h6>
                            </li>
                            <li class="text-center">
                                <a class="d-block mb-3 view-cart f-w-700" href="{{ route('admin.cart') }}">Go to your
                                    cart</a>
                                <a class="btn btn-primary view-checkout w-100"
                                    href="{{ route('admin.checkout') }}">Checkout</a>
                            </li>
                        </ul>
                        <div class="cart-empty">
                            <div class="cart-image"> <img class="img-fluid"
                                    src="{{ asset('assets/images/product/order-trash.gif') }}" alt="empty"></div>
                            <h5>Oops! Your cart empty!!!</h5>
                        </div>
                    </div>
                </li>
                <li class="profile-nav onhover-dropdown">
                    <div class="onhover-click">
                        <div class="sidebar-image">
                            <img src="{{ asset('assets/images/user.png') }}" alt="profile">
                            <span class="status status-success"></span>
                        </div>
                        <div class="sidebar-content">
                            <h4>{{ucfirst(auth()?->user()?->first_name) }}</h4>
                            <span class="f-12 f-w-600 f-light">
                                {{ auth()?->user()->role->name }}
                            </span>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        <li>
                            <a href="{{ route('admin.user.edit-profile',auth()->user()->role->name) }}">
                                <div class="profile-icon">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#user') }}"></use>
                                    </svg>
                                </div><span>My Profile </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.letter-box') }}">
                                <div class="profile-icon">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#stroke-email') }}"></use>
                                    </svg>
                                </div><span>Inbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.task') }}">
                                <div class="profile-icon">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#notepad') }}"></use>
                                    </svg>
                                </div><span>Taskboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.edit-profile') }}">
                                <div class="profile-icon">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#settings') }}"></use>
                                    </svg>
                                </div><span>Settings</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout').submit();">
                                <div class="profile-icon">
                                    <svg>
                                        <use href="{{ asset('assets/svg/icon-sprite.svg#login') }}"></use>
                                    </svg>
                                </div><span>Log out</span>
                            </a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST" id="logout">
                            @csrf
                        </form>
                    </ul>
                </li>
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0">
                        <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                        </path>
                        <polygon points="12 15 17 21 7 21 12 15"></polygon>
                    </svg>
                </div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">name</div>
                </div>
            </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template">
            <div class="EmptyMessage">
                Your search turned up 0 results. This most likely means the backend is down, yikes!
            </div>
        </script>
    </div>
</div>