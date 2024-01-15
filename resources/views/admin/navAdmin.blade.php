<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Blue PinWheel</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-biwu.png') }}">

</head>

<body id="customers">
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ asset('assets/img/logo-biwu.png') }}" alt="logo blue pinwheel">
                    <h2>Blue Pinwheel</h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="fa-solid fa-x"></span>
                </div>
            </div>

            <div class="sidebar">
                <a data-active="" href=" {{ route('dashboard') }} " class="{{ setActive('dashboard') }}">
                    <span class="fa-solid fa-table-columns"></span>
                    <h3>Dashboard</h3>
                </a>
                <a data-active="" href="{{ route('customer') }}" class="{{ setActive('customer') }}">
                    <span><i class="fa-solid fa-user"></i></span>
                    <h3>Customers</h3>
                </a>
                <a data-active="" href="{{ route('message') }}" class="{{ setActive('message') }}">
                    <span class="fa-solid fa-message"></span>
                    <h3>Messages</h3>
                    <!-- <p class="message-count">99+</p> -->
                </a>
                <a data-active="" href="{{ route('porto') }}" class="
                                                            @if( request()->is('admin/porto') )
                                                            {{ request()->is('admin/porto') ? 'active' : '' }}
                                                            @elseif( request()->is('admin/porto/tambah') )
                                                            {{ request()->is('admin/porto/tambah') ? 'active' : '' }}
                                                            @elseif( request()->is('admin/porto/ubah/') == '' )
                                                            {{ request()->is('admin/porto/ubah/*') ? 'active' : ''  }}
                                                            @endif
                                                            ">
                    <span class="fa-solid fa-id-card"></span>
                    <h3>Portfolio</h3>
                </a>
                <a data-active="" href="{{ route('comment') }}" class="{{ setActive('comment') }}">
                    <span class="fa-solid fa-comment-dots"></span>
                    <h3>Comment</h3>
                </a>

                <a data-active="" href="/admin/setting/{Auth::guard('admin')->user()->id}" class=" {{ request()->is('admin/setting/*') ? 'active' : ''   }}">
                    <span class="fa-solid fa-gear"></span>
                    <h3>Setting</h3>
                </a>

                <a href="/logout">
                    <span class="fa-solid fa-right-from-bracket"></span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>

        @yield('content')

    </div>

    <script src="{{ asset('assets/js/admin/uhuy.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    @include('sweetalert::alert')


</body>

</html>