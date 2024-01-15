<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Section</title>
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/bootstrap.min.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/slick.css') }}">
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/testi.css') }} ">
    <link rel="stylesheet" href=" {{ asset('assets/css/testimoni/nav.css') }} ">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<body class="body-bg-color">

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1> Testimonial ADD</h1>
        </div>
    </section>

    <div id="testimonial" class="testi-area section-gap section-seperator">
        <div class="container">
            <div class="form-group">

                <form action=" {{ route('testi.add') }} " method="post">
                    @csrf
                    <div class="input-field">
                        <label for="">Categories</label>
                        <div class="select-field">
                            <select name="categories" id="" required>
                                <option value="">-- Categories --</option>
                                <option value="Web">Web</option>
                                <option value="Logo">Logo</option>
                                <option value="ID Card">ID Card</option>
                                <option value="Banner ">Banner</option>
                                <option value="All">All</option>
                            </select>
                        </div>
                    </div>

                    <div class="input-field">
                        <label for="">Comment</label>
                        <textarea class="textarea" name="comment" id="" cols="30" rows="10" required></textarea>
                    </div>

                    <input class="hero-btn" type="submit" value=" + ADD">
                    <a href="/testimoni"> > Kembali</a>
                </form>

            </div>

        </div>
    </div>

    <footer>

        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>

        <ul class="sosmed">
            <li><a href="">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a></li>
            <li><a href="">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a></li>
        </ul>

        <ul class="menuu">
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Portfolio</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Testimoni</a></li>
            <li><a href="">Contact</a></li>
        </ul>
        <p>©2022 BluePinWheel | All Rights Reserved</p>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="{{ asset('assets/js/testi/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/testi/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/main.js') }}"></script>

    <script src="{{ asset('assets/js/index.js') }}"></script>


</body>

</html>