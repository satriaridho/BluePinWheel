<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/porto.css">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">

    <title>Portfolio</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">

</head>

<body>

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1>Portfolio</h1>
        </div>
    </section>



    <section class="work section" id="work">
        <h3 data-heading="Portfolio" class="section_title">Recent Work</h3>

        <div class="work_filter">
            <span class="work_item active_work" data-filter="all">All</span>
            <span class="work_item" data-filter=".Web">Web</span>
            <span class="work_item" data-filter=".Logo">Logo</span>
            <span class="work_item" data-filter=".Banner">Banner</span>
            <span class="work_item" data-filter=".ID-Card">ID Card</aspan>

        </div>

        <div class="work_container container grid">
            @foreach($portos as $data)

            <div class="work_card mix {{ str_replace(' ', '-', $data->categories) }}">
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
                                <div class="portfolio_popup-subtitle"> {{ $data->categories }} <span>Design</span></div>
                                <div class="portfolio_popup-body">
                                    <h3 class="details_title"> {{ $data->title }} </h3>
                                    <p class="details_description"> {{ $data->body }} </p>
                                    <ul class="details_info">
                                        <p>Created - <span>{{ \Carbon\Carbon::parse( $data->date)->format('Y-F-d') }}</span></p>
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

    <script src="assets/js/jquery-3.6.1.min.js"></script>
    <script src="assets/js/mixitup.min.js"></script>

    <script src="assets/js/main2.js"></script>

    <script src="{{ asset('assets/js/index.js') }}"></script>


</body>

</html>