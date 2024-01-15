<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue PinWheel - Contact</title>

    <link rel="stylesheet" href="{{ asset('assets/css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/fontAwesome/css/all.min.css') }}">
</head>

<body>

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1>Contact Us</h1>
        </div>

    </section>

    <div class="contactUs">

        <div class="box">
            <!-- Form -->
            <div class="contact form">
                <h3>Send a Massage</h3>
                @if(Str::length(Auth::guard('customer')->user()) > 0)
                <form action="{{ route('send.messageAuth', Auth::guard('customer')->user()->id) }}" method="post">
                    @csrf
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Your Name</span>
                                <input type="text" name="name" placeholder="Blue PinWheel" value=" {{ Auth::guard('customer')->user()->username }} ">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" name="email" placeholder="BluePinWheel@gmail.com" value="{{ Auth::guard('customer')->user()->email }}">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>No Telp</span>
                                <input class="number" type="number" name="no_telp" placeholder="+62 88273002223" value="{{ Auth::guard('customer')->user()->no_telp }}">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Massage</span>
                                <textarea name="message" placeholder="Write your massage here...."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
                @elseif(! Str::length(Auth::guard('customer')->user()) > 0)
                <form action="{{ route('send.message') }}" method="post">
                    @csrf
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>Your Name</span>
                                <input type="text" name="name" placeholder="Blue PinWheel">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" name="email" placeholder="BluePinWheel@gmail.com">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>No Telp</span>
                                <input type="text" name="no_telp" placeholder="+62 88273002223">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Massage</span>
                                <textarea name="message" placeholder="Write your massage here...."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" name="submit" value="Send">
                            </div>
                        </div>
                    </div>

                </form>
                @endif

            </div>

            <!-- info Box -->
            <div class="contact info">
                <h3>Contact Info</h3>
                <div class="infoBox">
                    <div>
                        <span>
                            <ion-icon name="location"></ion-icon>
                        </span>
                        <p>Batanghari, Lampung Timur, <br>Lampung</p>
                    </div>
                    <div>
                        <span>
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <a href="mailto:BluePinWheel@gmail.com">BluePinWheel@gmail.com</a>
                    </div>
                    <div>
                        <span>
                            <ion-icon name="call"></ion-icon>
                        </span>
                        <a href="tel:+62 88273002223">+62 88273002223</a>
                    </div>
                    <!-- Social Media Links-->
                    <ul class="sci">
                        <li><a href="#">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a></li>
                        <li><a href="#">
                                <ion-icon name="logo-tiktok"></ion-icon>
                            </a></li>
                    </ul>
                </div>

                <div class="mapss">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31791.138986866783!2d105.2895571012842!3d-5.121041217760588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40bbf7727ecf8d%3A0x3039d80b220cf40!2sMetro%2C%20Kota%20Metro%2C%20Lampung!5e0!3m2!1sid!2sid!4v1666247171571!5m2!1sid!2sid" width="400" height="250" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Map -->

        </div>

    </div>
    @include('sweetalert::alert')
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</body>

</html>