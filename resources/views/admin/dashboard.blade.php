@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Dashboard</h1>
    <div class="admin-title">
        <h2>Admin</h2>
    </div>

    <div class="card-dash">
        <div class="admin">
            <div class="gambar">
                <img src="{{ asset('assets/img/krisna.jpeg') }}" alt="">
            </div>
            <div class=" admin-name">
                <h2>Krisna Dwi Putra</h2>
                <p>Project Manager
                <div class="sosmed">
                    <a href="https://www.instagram.com/"><span class="fa-brands fa-instagram"></span></a>
                    <a href="https://www.google.com/"><span class="fa-solid fa-envelope"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="fa-solid fa-phone"></span></a>
                </div>
                </p>
            </div>
        </div>

        <div class="admin">
            <div class="gambar">
                <img src="{{ asset('assets/img/ariel.jpeg') }}" alt="">
            </div>
            <div class="admin-name">
                <h2>Ariel Gema W </h2>
                <p>Designer</p>
                <div class="sosmed">
                    <a href="https://www.instagram.com/"><span class="fa-brands fa-instagram"></span></a>
                    <a href="https://www.google.com/"><span class="fa-solid fa-envelope"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="fa-solid fa-phone"></span></a>
                </div>
            </div>
        </div>

        <div class="admin">
            <div class="gambar">
                <img src="{{ asset('assets/img/guweh.jpg') }}" alt="">
            </div>

            <div class="admin-name">
                <h2>Satria Ridho E</h2>
                <p>Progamming</p>
                <div class="sosmed">
                    <a href="https://www.instagram.com/"><span class="fa-brands fa-instagram"></span></a>
                    <a href="https://www.google.com/"><span class="fa-solid fa-envelope"></span></a>
                    <a href="https://web.whatsapp.com/"><span class="fa-solid fa-phone"></span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="bpw">
        <h2>About Us</h2>
        <div class="card-bpw">
            <div class="bpw-uhuy">
                <img src="{{ asset('assets/img/logo-biwu.png') }}" alt="Blue PinWheel">
            </div>

            <div class="bpw-uhuy">
                <h1>Blue PinWheel</h1>
                <p>Blue Pinwheel diambil dari nama galaxy. Dan untuk blue sendiri yang berarti lautan dan melambangkan ketenangan dan untuk pinwheel artinya roda dan roda itu berputar yang berarti kehidupan kadang di atas dan kadang di bawah dan kita harus menjalani kehidupan dengan tenang saat kita berada diatas maupun di bawah
                    Untuk Logo huruf b dan p digabungkan akan berbentuk 3 lingkaran yang berarti perusahaan ini didirikan oleh 3 orang dan untuk W sendiri adalah Wumbo
                </p>
            </div>
        </div>
    </div>
</main>

<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="fa-solid fa-bars"></span>
        </button>
        <div class="theme-toggler">
            <span class="fa-solid fa-sun active" onclick="setDarkMode(false);"></span>
            <span class="fa-solid fa-moon" onclick="setDarkMode(true);"></span>
        </div>

        <div class="profile">
            <div class="info">
                <p>Hey,
                    @if(Str::length(Auth::guard('admin')->user()) > 0)
                    <b>{{ Auth::guard('admin')->user()->username }}</b>
                    @endif
                </p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                @if(Auth::guard('admin')->user()->foto == "")
                <a href="/admin/setting/Auth::guard('admin')->user()->id"><img src="{{ asset('assets/img/p1.png') }}" class="imgPorto" alt="" id="imgPorto"></a>
                @else
                <a href="/admin/setting/Auth::guard('admin')->user()->id"><img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" class="imgPorto" alt="" id="imgPorto"></a>
                @endif
            </div>
        </div>
    </div>

    <div class="recent-message">
        <h2>Recent Message</h2>
        <div class="updates">
            <div class="update">
                <div class="message">
                    <p><b>Ariel Gema</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur </p>
                </div>
            </div>
            <div class="update">
                <div class="message">
                    <p><b>Krisna Dwi</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur </p>
                </div>
            </div>
            <div class="update">
                <div class="message">
                    <p><b>Satria Ridho</b></p>
                    <p>Lorem ipsum dolor sit amet consectetur </p>
                </div>
            </div>
        </div>
    </div>

    <div class="service-data">
        <h2>Service Data</h2>

        <div class="item jumlah">
            <div class="icons">
                <span class="fa-solid fa-screwdriver-wrench"></span>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Logo Design</h3>
                    <small><a href="">1000 Comment</a></small>
                </div>
            </div>
        </div>
        <div class="item jumlah">
            <div class="icons">
                <i class="fa-solid fa-laptop-code"></i>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Website Design</h3>
                    <small><a href="">1000 Comment</a></small>
                </div>
            </div>
        </div>
        <div class="item jumlah">
            <div class="icons">
                <span class="fa-solid fa-id-card"></span>
            </div>
            <div class="right">
                <div class="info">
                    <h3>Id Card Design</h3>
                    <small><a href="">1000 Comment</a></small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection