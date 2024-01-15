<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
    <title>BluePinWheel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


</head>

<body class="font-Poppins text-white">
    <div class="bg">
        <video autoplay loop muted>
            <source src="assets/img/wpp.mp4">
        </video>

        <section class="header">
            <nav class="scrollah" data-aos="fade-down">
                <a class="logo" href="/"><img src="assets/img/logopth.png" alt="" class="loogo"></a>
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
            <div class="text-box">
                <h1 class="text-full">Selamat Datang di BluePinWheel</h1>
                <p class="lead"></p>
                <a href="/about" class="hero-btn">Visit To Know About Us</a>
            </div>
        </section>
    </div>


    <section class="about section" id="about">
        <h2 data-heading="Our Intro" class="section_title">About Us</h2>

        <div class="about_container container grid">
            <div class="inside">
                <img src="assets/img/krisna.jpeg" alt="" class="about_img" data-aos="zoom-in-up" data-aos-duration="2000">
            </div>
            <div class="about_data" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <h3 class="about_heading">Hi, I'm Krisna Dwi Putra <br> Porject Manager</h3>
                <p class="about_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse <br> rerum molestiae, dolorem vero ab natus?</p>

                <div class="about_info grid">
                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title">Experience</h3>
                        <span class="about_subtitle">3 +- Years</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title">Completed</h3>
                        <span class="about_subtitle">7+ Projects</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-headphones-alt about_icon"></i>
                        <h3 class="about_title">Support</h3>
                        <span class="about_subtitle">Online 16/7</span>
                    </div>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="about section rght" id="about">
        <div class="about_container container grid">
            <div class="" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="200">
                <img src="assets/img/ariel.jpeg" alt="" class="about_img rightimg">
            </div>

            <div class="about_data-kanan" data-aos="fade-right" data-aos-duration="1000">
                <h3 class="about_heading">Hi, I'm Ariel Gema Wardana <br> Designer</h3>
                <p class="about_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse <br> rerum molestiae, dolorem vero ab natus?</p>

                <div class="about_info grid">
                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title">Experience</h3>
                        <span class="about_subtitle">3 +- Years</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title">Completed</h3>
                        <span class="about_subtitle">7+ Projects</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-headphones-alt about_icon"></i>
                        <h3 class="about_title">Support</h3>
                        <span class="about_subtitle">Online 16/7</span>
                    </div>
                </div>

            </div>

            <div class="clear"></div>
        </div>
    </section>

    <section class="about section" id="about">
        <div class="about_container container grid">
            <div class="inside">
                <img src="assets/img/guweh.jpg" alt="" class="about_img" data-aos="zoom-in-down" data-aos-duration="2000">
            </div>

            <div class="about_data" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                <h3 class="about_heading">Hi, I'm Satria Ridho Eksobar <br> Programmer</h3>
                <p class="about_description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse <br> rerum molestiae, dolorem vero ab natus?</p>

                <div class="about_info grid">
                    <div class="about_box">
                        <i class="uil uil-award about_icon"></i>
                        <h3 class="about_title">Experience</h3>
                        <span class="about_subtitle">3 +- Years</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-suitcase-alt about_icon"></i>
                        <h3 class="about_title">Completed</h3>
                        <span class="about_subtitle">7+ Projects</span>
                    </div>
                </div>

                <div class="about_info">
                    <div class="about_box">
                        <i class="uil uil-headphones-alt about_icon"></i>
                        <h3 class="about_title">Support</h3>
                        <span class="about_subtitle">Online 16/7</span>
                    </div>
                </div>

            </div>

            <div class="clear"></div>
        </div>
    </section>



    <section class="services" id="services">
        <h2 data-heading="Services" class="section_title">What We Offer</h2>

        <div class="services_container container grid">
            <div class="services_content">
                <div>
                    <i class="uil uil-web-grid services_icon"></i>
                    <h3 class="services_title">Web <br> Design </h3>
                </div>

                <span class="services_button" onclick="showPop('pop1')">View More
                    <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="out" id="pop1">
                    <div class="services_modal">
                        <div class="service_modal-content">
                            <i class="uil uil-times services_modal-close" id="x2"></i>

                            <h3 class="services_modal-title">Web Design</h3>
                            <p class="services_modal-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis repellat temporibus, quod doloribus numquam commodi.</p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Personal</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Company</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">School</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">E-Sport</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">And others</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services_content">
                <div>
                    <i class="uil uil-arrow services_icon"></i>
                    <h3 class="services_title">Logo <br> Design </h3>
                </div>

                <span class="services_button" onclick="showPop('pop2')">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="out" id="pop2">
                    <div class="services_modal">
                        <div class="service_modal-content">
                            <i class="uil uil-times services_modal-close" id="x2"></i>

                            <h3 class="services_modal-title">Logo Design</h3>
                            <p class="services_modal-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis repellat temporibus, quod doloribus numquam commodi.</p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Personal</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">School</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Company</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">
                                        E-Sport
                                    </p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">And Others</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="services_content">
                <div>
                    <i class="uil uil-edit services_icon"></i>
                    <h3 class="services_title">ID Card <br> Design </h3>
                </div>

                <span class="services_button" onclick="showPop('pop3')">
                    View More <i class="uil uil-arrow-right services_button-icon"></i>
                </span>

                <div class="out" id="pop3">
                    <div class="services_modal">
                        <div class="service_modal-content">
                            <i class="uil uil-times services_modal-close" id="x3"></i>

                            <h3 class="services_modal-title">ID Card Design</h3>
                            <p class="services_modal-description">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis repellat temporibus, quod doloribus numquam commodi.</p>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Personal</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">School</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">E-Sport</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">Company</p>
                                </li>

                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p class="services_modal-info">And Others</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="work section" id="work">
        <h2 data-heading="Portfolio" class="section_title">Recent Work</h2>

        <div class="work_filter">
            <span class="work_item active_work" data-filter="all">All</span>
            <span class="work_item" data-filter=".Web">Web</span>
            <span class="work_item" data-filter=".Logo">Logo</span>
            <span class="work_item" data-filter=".Banner">Banner</span>
            <span class="work_item" data-filter=".ID-Card">ID Card</aspan>
        </div>

        <div class="work_container container grid">

            @foreach($portos as $data)

            <div class="work_card mix {{ str_replace(' ', '-', $data->categories) }} ">
                <div data-aos="flip-left" data-aos-duration="1500" data-aos-delay="900">
                    <img src="{{ asset('img_uplode/'.$data->gambar) }}" alt="" class="work_img">
                    <h3 class="work_title"> {{ $data->categories }} </h3>
                    <span class="work_button" onclick="showPopup('target{{ $data->id }}')">Demo
                        <i class="uil uil-arrow-right work_button-icon"></i>
                    </span>
                </div>

                <div class="outer" id="target{{ $data->id }}">
                    <div class="portfolio_popup-inner">
                        <div class="portfolio_popup-content grid">
                            <span class="portfolio_popup-close" id="x1"><i class="uil uil-times"></i></span>
                            <div class="pp_thumbnail">
                                <img src="{{ asset('img_uplode/'.$data->gambar) }}" alt="" class="portfolio_popup-img">
                            </div>
                            <div class="portfolio_popup-info">
                                <div class="portfolio_popup-subtitle"> categories {{ $data->categories }} </div>
                                <div class="portfolio_popup-body">
                                    <h3 class="details_title"> {{ $data->title }} </h3>
                                    <p class="details_description"> {{ $data->body }} </p>
                                    <ul class="details_info">
                                        <p>Uplode - <span>{{ \Carbon\Carbon::parse( $data->date)->format('Y F d') }}</span></p>
                                        <p>Technologies - <span> {{ $data->technologies }} </span></p>
                                        <p>View - <span><a href="">www.BPW.com</a></span></p>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio_popup"></div>
                </div>
            </div>

            @endforeach


        </div>
    </section>

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
            <li><a href="/">Home</a></li>
            <li><a href="/about">About</a></li>
            <li><a href="/portfolio">Portfolio</a></li>
            <li><a href="/service">Services</a></li>
            <li><a href="/testimoni">Testimoni</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
        <a href="{{ route('login.admin') }}" class="adminlog">Login</a>
        <p>©2022 BluePinWheel | All Rights Reserved</p>
    </footer>


    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/TextPlugin.min.js"></script>
    <script>
        gsap.registerPlugin(TextPlugin);
        gsap.to('.lead', {
            duration: 7,
            delay: 1.5,
            text: 'Kami adalah perusahaan yang menyediakan layanan berupa design seperti <br> Web deisgn, Logo design, dan Banner design'
        })
        gsap.from('.text-full', {
            duration: 1,
            x: -50,
            y: '-100%',
            opacity: 0,
            delay: 0.5,
            ease: 'back'
        })
        gsap.from('.hero-btn', {
            duration: 1,
            x: -50,
            y: '-100%',
            opacity: 0,
            delay: 2,
            ease: 'bounce'
        })
    </script>

    @include('sweetalert::alert')
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script src="assets/js/jquery-3.6.1.min.js" type="text/javascript"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>