@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Setting Account</h1>

    <div class="form-group">
        <form action="{{ route('setting_name', Auth::guard('admin')->user()->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="lingkaran">
                <div class=" gambar-profile">
                    @if(Auth::guard('admin')->user()->foto == "")
                    <img src="{{ asset('assets/img/profile.png') }}" class="imgPorto" alt="" id="imgPorto">
                    @else
                    <img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" class="imgPorto" alt="" id="imgPorto">
                    @endif
                </div>
            </div>

            <div class="input-group">
                <span class="labelUy ml-3">Fullname</span>
                <span class="labelUy ml-2">Username</span>
            </div>

            <div class="input-group">
                <input type="text" name="fullname" class="input" placeholder="Your Name" value="{{ Auth::guard('admin')->user()->fullname }}" required>
                <input type="text" name="username" class="input" placeholder="Your Name" value="{{ Auth::guard('admin')->user()->username }}" required>
            </div>

            <div class="input-group input-setting">
                <span class="labelUy ml-3">Email</span>
                <span class="labelUy ml-1">Password <span class="danger">* Kosongkan apabila tidak ingin mengganti password</span> </span>
            </div>

            <div class="input-group ">
                <input type="email" name="email" class="input" placeholder="Your Email" value="{{ Auth::guard('admin')->user()->email }}" required>
                <input type="password" name="password" class="input" placeholder="Password">
            </div>



            <input type="file" name="foto" class="file filePorto"><span class="danger kanandikit">* Kosongkan apabila tidak ingin mengganti gambar</span>
            <input type="submit" class="updatePorto" value="Ubah">
        </form>
    </div>
</main>

<div class="right2">
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
                <a href="/admin/setting"><img src="{{ asset('assets/img/profile.png') }}" class="imgPorto" alt="" id="imgPorto"></a>
                @else
                <a href="/admin/setting"><img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" class="imgPorto" alt="" id="imgPorto"></a>
                @endif

            </div>
        </div>
    </div>

</div>

@endsection