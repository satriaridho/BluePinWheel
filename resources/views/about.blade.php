<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <title>Blue PinWheel - About </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1>About Us</h1>
        </div>
    </section>


    <div id="about" class="about">
        <div class="konten">
            <div class="konten-about ">
                <div class="about-logo flex">
                    <img src="assets/img/logo.png" alt="Logo Blue PinWheel">
                </div>

                <div class="about-us flex">
                    <h2>Blue PinWheel</h2>
                    <p>BluePinWheel diambil dari nama sebuah galaxy. Dan untuk blue sendiri yang berarti lautan dan melambangkan ketenangan dan untuk pinwheel artinya roda dan roda itu berputar yang berarti kehidupan kadang di atas dan kadang di bawah dan kita harus menjalani kehidupan dengan tenang saat kita berada diatas maupun di bawah Untuk Logo huruf b dan p digabungkan akan berbentuk lingkaran yang berarti perusahaan ini didirikan oleh 3 orang dan untuk W sendiri adalah untuk Wumbo</p>
                </div>
            </div>
        </div>
    </div>

    <h2 data-heading="Contact Us" class="section_title">Our Personal Contact </h2>
    <div class="containerr">
        <div class="cards" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="200">
            <div class="imgbx">
                <img src="assets/img/krisna.jpeg" alt="">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Krisna Dwi Putra <br> <span>Project Manager</span></h2>
                    <div class="social">
                        <ul class="social_icon">
                            <li><a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="350">
            <div class="imgbx">
                <img src="assets/img/ariel.jpeg" alt="">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Ariel Gema Wardana <br> <span>Designer</span></h2>
                    <div class="social">
                        <ul class="social_icon">
                            <li><a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="cards" data-aos="flip-left" data-aos-duration="2000" data-aos-delay="400">
            <div class="imgbx">
                <img src="assets/img/guweh.jpg" alt="">
            </div>
            <div class="content">
                <div class="details">
                    <h2>Satria Ridho Eksobar <br> <span>Programmer </span></h2>
                    <div class="social">
                        <ul class="social_icon">
                            <li><a href=""><i class="fa-brands fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
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

    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>