<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href=" {{ asset('assets/css/log/login.css') }} " />
    <title> Login & Register</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">

                <form action=" {{ route('admin.register') }} " method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    @csrf

                    @if(session('sukses'))
                    <p style="color: red;"> {{ session('sukses') }} </p>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <div class="hadeh">
                        <a href="/">Kembali</a>
                    </div>

                </form>

                <form action=" {{ route('admin.submit') }} " method="post" class="sign-in-form">
                    <h2 class="title">Sign in</h2>
                    @csrf

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" name="submit" value="Login" class="btn solid" required />
                    <div class="hadeh">
                        <a href="/">Kembali</a>
                    </div>

                </form>

                <form action=" {{ route('admin.register') }} " method="post" class="sign-up-form">
                    <h2 class="title">Sign up</h2>
                    @csrf

                    @if(session('sukses'))
                    <p style="color: red;"> {{ session('sukses') }} </p>
                    @endif
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="username" placeholder="Username" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                    <div class="hadeh">
                        <a href="/">Kembali</a>
                    </div>

                </form>

            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Ciee Admin?</h3>
                    <p>Jika belum punya akun silahkan daftar disini ya admin >_< </p>
                            <button class="btn transparent" id="sign-up-btn">Sign up</button>

                </div>

            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Loh Admin?</h3>
                    <p>
                        Kalo sudah punya akun ngapain disini ya admin
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    @include('sweetalert::alert')

</body>

</html>