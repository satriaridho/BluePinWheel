@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Ubah Portofolio</h1>

    <div class="form-group">
        <div class="gambar-porto">
            <img src="{{ asset('img_uplode/'.$portos->gambar) }}" class="imgPorto" alt="" id="imgPorto">
        </div>

        <form action="{{ route('admin.edit', $portos->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="input-group">

                <input type="text" name="title" class="input" placeholder="Judul Porto" value=" {{ $portos->title }} " required>
                <select name="categories" class="select" id="">
                    <option value=""> -- Categories --</option>
                    <option value="Web" {{ $portos->categories != 'Web' ?: 'selected' }}>Web</option>
                    <option value="ID Card" {{ $portos->categories != 'ID Card' ?: 'selected' }}>ID Card</option>
                    <option value="Logo" {{ $portos->categories != 'Logo' ?: 'selected' }}>Logo</option>
                    <option value="Banner" {{ $portos->categories != 'Banner' ?: 'selected' }}>Banner</option>
                </select>
            </div>

            <div class="input-group checkbox-input">
                <label class="title-label" for="">Technologies :</label>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Laravel" {{ str_contains($portos->technologies, 'Laravel' )  ? 'checked' : '' }}> Laravel
                </label><br>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Javascript" {{ str_contains($portos->technologies, 'Javascript' )  ? 'checked' : '' }}> Javascript
                </label><br>
                <label for="">
                    <input class="checkbox" type="checkbox" class="checkbox" name="teknologi[]" id="" value="Photoshop" {{ str_contains($portos->technologies, 'Photoshop' )  ? 'checked' : '' }}> Photoshop
                </label><br>
            </div>
            <textarea name="body" id="" cols="30" rows="10" required> {{ $portos->body }}</textarea>

            <input type="file" name="gambar" class="file filePorto" id="filePorto">
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