<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="turbolinks-cache-control" content="no-cache">

    <title>{{ config('app.name', 'Central') }}</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icons-->
    <link href="{{ asset('vendors/@coreui/icons/css/free.min.css') }}" rel="stylesheet"> <!-- icons -->
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('vendors/select2/css/select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/select2/css/select2-coreui.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/toastr/css/toastr.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/iziToast/dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/uicons/css/uicons-regular-rounded.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    {{ $css ?? '' }}
    @livewireStyles
</head>
<body class="c-app">

@include('layouts.partials.nav')
@include('layouts.partials.sidebar')

<div class="c-wrapper">

    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mr-auto"
                type="button"
                data-target="#sidebar"
                data-class="c-sidebar-show">
            <span class="c-header-toggler-icon"></span>
        </button>
        <a class="c-header-brand d-sm-none" href="/#">
            <img class="c-header-brand-full c-d-dark-none"
                 src="/assets/brand/coreui-pro-base.svg"
                 width="118"
                 height="46" alt="CoreUI Logo">
            <img class="c-header-brand-minimized c-d-dark-none"
                 src="/assets/brand/coreui-signet.svg"
                 width="46"
                 height="46"
                 alt="CoreUI Logo">
            <img class="c-header-brand-full c-d-light-none"
                 src="/assets/brand/coreui-pro-base-white.svg"
                 width="118"
                 height="46"
                 alt="CoreUI Logo">
            <img class="c-header-brand-minimized c-d-light-none"
                 src="/assets/brand/coreui-signet-white.svg"
                 width="46"
                 height="46"
                 alt="CoreUI Logo">
        </a>
        <button class="c-header-toggler c-class-toggler ml-3 d-md-down-none"
                type="button"
                data-target="#sidebar"
                data-class="c-sidebar-lg-show"
                responsive="true">
            <span class="c-header-toggler-icon"></span>
        </button>

        <ul class="c-header-nav ml-auto">
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a href="/locale/en" class="c-header-nav-link">
                    <i class="flag-icon cif-us h1"></i>
                </a>
            </li>
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a href="/locale/pl" class="c-header-nav-link">
                    <i class="flag-icon cif-pl h1"></i>
                </a>
            </li>
            <li class="c-header-nav-item px-3">
                <button class="c-class-toggler c-header-nav-btn"
                        type="button"
                        id="header-tooltip"
                        data-target="body"
                        data-class="c-dark-theme"
                        data-toggle="c-tooltip"
                        data-placement="bottom"
                        title="Toggle Light/Dark Mode">
                    <i class="cil-moon c-icon c-d-dark-none"></i>
                    <i class="cil-sun c-icon c-d-light-none"></i>
                </button>
            </li>
        </ul>
        <ul class="c-header-nav">
            <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                <a class="c-header-nav-link"
                   data-toggle="dropdown"
                   href="#"
                   role="button"
                   aria-haspopup="true" aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-bell"></use>
                    </svg>
                    <span class="badge badge-pill badge-danger">5</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light">
                        <strong>You have 5 notifications</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2 text-success">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user-follow"></use>
                        </svg>
                        New user registered</a>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2 text-danger">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-user-unfollow"></use>
                        </svg>
                        User deleted
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2 text-info">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-chart"></use>
                        </svg>
                        Sales report is ready
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2 text-success">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-basket"></use>
                        </svg>
                        New client
                    </a>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2 text-warning">
                            <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-speedometer"></use>
                        </svg>
                        Server overloaded
                    </a>
                    <div class="dropdown-header bg-light">
                        <strong>Server</strong>
                    </div>
                    <a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1">
                            <small><b>CPU Usage</b></small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-info"
                                 role="progressbar"
                                 style="width: 25%"
                                 aria-valuenow="25"
                                 aria-valuemin="0"
                                 aria-valuemax="100">
                            </div>
                        </span>
                        <small class="text-muted">348 Processes. 1/4 Cores.</small>
                    </a>
                    <a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1">
                            <small><b>Memory Usage</b></small>
                        </div>
                        <span class="progress progress-xs">
                            <div class="progress-bar bg-warning"
                                 role="progressbar"
                                 style="width: 70%"
                                 aria-valuenow="70"
                                 aria-valuemin="0"
                                 aria-valuemax="100"></div>
                        </span>
                        <small class="text-muted">11444GB/16384MB</small>
                    </a>
                    <a class="dropdown-item d-block" href="#">
                        <div class="text-uppercase mb-1">
                            <small><b>SSD 1 Usage</b></small>
                        </div>
                        <span class="progress progress-xs">
                        <div class="progress-bar bg-danger"
                             role="progressbar"
                             style="width: 95%"
                             aria-valuenow="95"
                             aria-valuemin="0"
                             aria-valuemax="100"></div>
                    </span>
                        <small class="text-muted">243GB/256GB</small>
                    </a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown d-md-down-none mx-2">
                <a class="c-header-nav-link"
                   data-toggle="dropdown"
                   href="#" role="button"
                   aria-haspopup="true"
                   aria-expanded="false">
                    <svg class="c-icon">
                        <use xlink:href="/assets/icons/coreui/free-symbol-defs.svg#cui-envelope-open"></use>
                    </svg>
                    <span class="badge badge-pill badge-info">7</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                    <div class="dropdown-header bg-light">
                        <strong>You have 4 messages</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar">
                                    <img class="c-avatar-img"
                                         src="/assets/img/avatars/7.jpg"
                                         alt="user@email.com">
                                    <span class="c-avatar-status bg-success"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">Just now</small>
                            </div>
                            <div class="text-truncate font-weight-bold"><span class="text-danger">!</span>
                                Important message
                            </div>
                            <div class="small text-muted text-truncate">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar">
                                    <img class="c-avatar-img"
                                         src="/assets/img/avatars/6.jpg"
                                         alt="user@email.com">
                                    <span class="c-avatar-status bg-warning"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">5 minutes ago</small></div>
                            <div class="text-truncate font-weight-bold">
                                Lorem ipsum dolor sit amet
                            </div>
                            <div class="small text-muted text-truncate">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt...
                            </div>
                        </div>
                    </a><a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar">
                                    <img class="c-avatar-img"
                                         src="/assets/img/avatars/5.jpg"
                                         alt="user@email.com">
                                    <span class="c-avatar-status bg-danger"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">1:52 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">
                                Lorem ipsum dolor sit amet
                            </div>
                            <div class="small text-muted text-truncate">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt...
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item" href="#">
                        <div class="message">
                            <div class="py-3 mr-3 float-left">
                                <div class="c-avatar">
                                    <img class="c-avatar-img"
                                         src="/assets/img/avatars/4.jpg"
                                         alt="user@email.com">
                                    <span class="c-avatar-status bg-info"></span>
                                </div>
                            </div>
                            <div>
                                <small class="text-muted">John Doe</small>
                                <small class="text-muted float-right mt-1">4:03 PM</small>
                            </div>
                            <div class="text-truncate font-weight-bold">
                                Lorem ipsum dolor sit amet
                            </div>
                            <div class="small text-muted text-truncate">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt...
                            </div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center border-top" href="#">
                        <strong>View all messages</strong>
                    </a>
                </div>
            </li>
            <li class="c-header-nav-item dropdown">
                <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                   aria-expanded="false">
                    <div class="c-avatar">
                        <img class="c-avatar-img"
                             src="{{ asset(auth()->user()->avatar_url) }}"
                             alt="{{ auth()->user()->email }}">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">

                    <div class="dropdown-header bg-light py-2">
                        <strong>Account</strong>
                    </div>
                    <a class="dropdown-item" href="{{ route('profile.show') }}">
                        <i class="cil-user c-icon mr-2"> </i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="{{ route('profile.history') }}">
                        <i class="cil-animal c-icon mr-2"> </i>
                        Login History
                    </a>
                    <a class="dropdown-item" href="{{ route('password-edit') }}">
                        <i class="cil-lock-locked c-icon mr-2"> </i>
                        Ubah Password
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"
                       href="#"
                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <i class="cil-account-logout c-icon mr-2"></i>
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="c-header-nav-item px-3">
                <button class="c-class-toggler c-header-nav-btn"
                        type="button"
                        data-target="#aside"
                        data-class="c-sidebar-show">
                    <i class="cil-applications-settings c-icon c-icon-lg mr-2">
                    </i>
                </button>
            </li>
        </ul>




    </header>


    <div class="c-body">

        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">
                    {{ $slot }}
                </div>
            </div>
        </main>

    </div>

    @include('layouts.partials.footer')


</div>

@livewireScripts
<!-- CoreUI and necessary plugins-->
<script src="{{ asset('vendors/jquery/js/jquery.min.js') }}"></script>
<script src="{{ asset('vendors/select2/js/select2.min.js') }}"></script>
{{--<script src="{{ asset('js/pace.min.js') }}"></script>--}}
<script src="{{ asset('vendors/@coreui/coreui-pro/js/coreui.bundle.min.js') }}"></script>
<script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
<script src="{{ asset('vendors/toastr/js/toastr.js') }}"></script>
<script src="{{ asset('assets/iziToast/dist/js/iziToast.min.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')

<script>
    $(document).ready(function () {
        @if(session()->has('success'))
            var message = "{{ session('success') }}"
            iziToast.success({
                title: 'Berhasil',
                message: message,
                position: 'topRight'
            });

        @elseif(session()->has('failed'))
            var message = "{{ session('failed') }}"
            iziToast.error({
                title: 'gagal',
                message: message,
            });
        @endif

        window.addEventListener('izitoast:success', event => {
            iziToast.success({
                title: event.detail.title,
                message: event.detail.message,
                position: 'topRight'
            });
        })


        $('.select2').select2({theme: 'coreui'})
    });
</script>

@toastr_render

{{-- @yield('javascript') --}}
{{ $javascript??'' }}
</body>
</html>
