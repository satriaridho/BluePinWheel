@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Tambah Portofolio</h1>

    <div class="form-group">
        <form action="{{ route('admin.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="gambar-porto">
                <img src="" class="imgPorto" alt="" id="imgPorto">
            </div>
            <div class="input-group">

                <input type="text" name="title" class="input" placeholder="Judul Porto" required>
                <select name="categories" class="select" id="">
                    <option value=""> -- Categories --</option>
                    <option value="Web">Web</option>
                    <option value="ID Card">ID Card</option>
                    <option value="Logo">Logo</option>
                    <option value="Banner">Banner</option>
                </select>
            </div>

            <div class="input-group checkbox-input">
                <label class="title-label" for="">Technologies :</label>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Laravel"> Laravel
                </label><br>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Javascript"> Javascript
                </label><br>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Photoshop"> Photoshop
                </label><br>
            </div>
            <textarea name="body" id="" cols="30" rows="10" required></textarea>

            <input type="file" name="gambar" class="file filePorto" required>
            <input type="submit" class="submitPorto" value="Kirim">
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
                <a href="/admin/setting/Auth::guard('admin')->user()->id"><img src="{{ asset('assets/img/profile.png') }}" class="imgPorto" alt="" id="imgPorto"></a>
                @else
                <a href="/admin/setting/Auth::guard('admin')->user()->id"><img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" class="imgPorto" alt="" id="imgPorto"></a>
                @endif
            </div>
        </div>
    </div>

</div>

@endsection