<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Section</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/bootstrap.min.css') }} ">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/testi.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/nav.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/setting.css') }}">

<body class="body-bg-color">

    <section class="header2">
        <a href="/" style="text-decoration: none;"><i class="bi bi-arrow-left"> K E M B A L I</i></a>

        <div class="clear"></div>

        <div class="text-box2">
            <h1> SETTING - MY ACCOUNT </h1>
        </div>
    </section>

    <div id="testimonial" class="testi-area section-gap section-seperator">
        <div class="container">
            <div class="form-group">

                <form action=" {{ route('setting.edit', Auth::guard('customer')->user()->id ) }} " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="profile-user">
                        @if(Auth::guard('customer')->user()->foto == "")
                        <img src="{{ asset('assets/img/profile.png') }}" alt="" class="photoUser" id="photo">
                        <input type="file" name="foto" class="input" id="file">
                        <label for="file" id="uplodeBtn"><i class="fa-solid fa-camera"></i></label>
                        @else
                        <img src="{{ asset('customer_uhuy/profile/'.Auth::guard('customer')->user()->foto) }}" alt="" class="photoUser" id="photo">
                        <input type="file" name="foto" class="input" id="file">
                        <label for="file" id="uplodeBtn"><i class="fa-solid fa-camera"></i></label>

                        @endif
                    </div>
                    @error('foto')
                    <div class="danger">
                        {{ $message }}
                    </div>
                    @enderror
                    <div class="input-field">
                        <label for="">Username</label>
                        <input type="text" name="username" value="{{ Auth::guard('customer')->user()->username }}" class="input" id="" required>
                    </div>
                    <div class="input-field">
                        <label for="">Email</label>
                        <input type="email" name="email" value="{{ Auth::guard('customer')->user()->email }}" class="input" id="" required>
                    </div>
                    <div class="input-field">
                        <label for="">Password <div class="danger">* Isi apabila ingin mengganti password</div></label>
                        <input type="password" name="password" class="input" id="">
                    </div>

                    @if( Auth::guard('customer')->user()->no_telp == "" )
                    <div class="input-field">
                        <label for="">No Telp</label>
                        <input type="number" name="no_telp" class="input" id="" required>
                    </div>
                    @else
                    <div class="input-field">
                        <label for="">No Telp</label>
                        <input type="number" name="no_telp" class="input" value="{{ Auth::guard('customer')->user()->no_telp }}" id="" required>
                    </div>
                    @endif

                    <input class="hero-btn" type="submit" value=" Submit ">
                    <a href="/"> > Kembali</a>
                </form>

            </div>

        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="{{ asset('assets/js/testi/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/testi/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/main.js') }}"></script>

    <script src="{{ asset('assets/js/settingUser.js') }}"></script>


    @include('sweetalert::alert')
</body>

</html>