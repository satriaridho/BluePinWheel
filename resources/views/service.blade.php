<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">

    <title>Service</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

</head>

<body>

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1>Services</h1>
            <p>Klick Service dibawah untuk menghitung estimasi biaya anda</p>
        </div>
    </section>



    <div id="service" class="service">


        <div class="konten row">
            <a href="/estimasi" style="text-decoration: none;">
                <div class="konten-service">
                    <div class="card">
                        <div class="servie-us">
                            <img src="assets/img/logo-service.png" alt="">
                        </div>
                        <h2>Logo Design</h2>
                        <p>
                        <ul>
                            <li> School</li>
                            <li> Company</li>
                            <li> E-Commerce</li>
                            <li> And Others</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </a>
            <a href="/estimasi" style="text-decoration: none;">
                <div class="konten-service">
                    <div class="card">
                        <div class="servie-us">
                            <img src="./assets/img/computer.png" alt="">
                        </div>
                        <h2>Web Design</h2>
                        <p>
                        <ul>
                            <li> School</li>
                            <li> Company</li>
                            <li> E-Commerce</li>
                            <li> And Others</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </a>
            <a href="/estimasi" style="text-decoration: none;">
                <div class="konten-service">
                    <div class="card">
                        <div class="servie-us">
                            <img src="./assets/img/card.png" alt="">
                        </div>
                        <h2>Id Card Design</h2>
                        <p>
                        <ul>
                            <li> School</li>
                            <li> Company</li>
                            <li> E-Commerce</li>
                            <li> And Others</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </a>
        </div>

    </div>


    </main>

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

    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/mixitup.min.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>