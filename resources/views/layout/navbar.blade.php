<nav class="scrollah">
    <a class="logo" href="/"><img src="assets/img/logopth.png" alt=""></a>
    <div class="navi">
        <ul>
            <li><a href="/">HOME</a></li>
            <li><a href="/about">ABOUT</a></li>
            <li><a href="/service">SERVICES</a></li>
            <li><a href="/portfolio">PORTFOLIO</a></li>
            <li><a href="/testimoni">TESTIMONI</a></li>
            <li><a href="/contact">CONTACT</a></li>

            @if(Str::length(Auth::guard('customer')->user()) > 0 || Str::length(Auth::guard('admin')->user()) > 0)
            @if(Str::length(Auth::guard('customer')->user()) > 0 )

            @if(Auth::guard('customer')->user()->foto == "")
            <div class="user-account">
                <img src="{{ asset('assets/img/profile.png') }}" onclick="subMenuProses()" class="user-pic" alt="">
            </div><span class="ngehehe" onclick="subMenuProses()"> <i class="fa-solid fa-angle-down"></i> </span>

            <div class=" sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="/setting/{{ Auth::guard('customer')->user()->id }}"><i class="fa-solid fa-user"></i> MY ACCOUNT</a>
                    <a href="/logout"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
                </div>
            </div>

            @else
            <div class="user-account">
                <img src="{{ asset('customer_uhuy/profile/'.Auth::guard('customer')->user()->foto) }}" onclick="subMenuProses()" class="user-pic" alt="">
            </div><span class="ngehehe" onclick="subMenuProses()"> <i class="fa-solid fa-angle-down"></i> </span>

            <div class=" sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="/setting/{{ Auth::guard('customer')->user()->id }}"><i class="fa-solid fa-user"></i> MY ACCOUNT</a>
                    <a href="/logout"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
                </div>
            </div>
            @endif

            @elseif(Str::length(Auth::guard('admin')->user()) > 0)

            @if(Auth::guard('admin')->user()->foto == "")
            <div class="user-account">
                <img src="{{ asset('assets/img/profile.png') }}" onclick="subMenuProses()" class="user-pic" alt="">
            </div><span class="ngehehe" onclick="subMenuProses()"> <i class="fa-solid fa-angle-down"></i> </span>

            <div class=" sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="/admin/setting/{{ Auth::guard('admin')->user()->id }}"><i class="fa-solid fa-user"></i> MY ACCOUNT</a>
                    <a href="/logout"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
                </div>
            </div>

            @else
            <div class="user-account">
                <img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" onclick="subMenuProses()" class="user-pic" alt="">
            </div><span class="ngehehe" onclick="subMenuProses()"> <i class="fa-solid fa-angle-down"></i> </span>

            <div class=" sub-menu-wrap" id="subMenu">
                <div class="sub-menu">
                    <a href="/admin/setting/{{ Auth::guard('admin')->user()->id }}"><i class="fa-solid fa-user"></i> MY ACCOUNT</a>
                    <a href="/logout"><i class="fa-solid fa-right-from-bracket"></i>LOGOUT</a>
                </div>
            </div>
            @endif
            @endif
            @elseif(! Str::length(Auth::guard('customer')->user()) > 0 || ! Str::length(Auth::guard('admin')->user()) > 0)
            <a href="/login/customer" class="hero-btn">Login</a>
            @endif
        </ul>
    </div>
</nav>