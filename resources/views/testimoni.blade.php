<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue PinWheel - Testimonial</title>
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/testi.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/testimoni/nav.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<body class="body-bg-color">

    <section class="header2">
        @include('layout.navbar')
        <div class="text-box2">
            <h1>Testimonial</h1>
        </div>
    </section>

    <div id="testimonial" class="testi-area section-gap section-seperator">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">What Clients Says</span>
                        <h2 class="title"></h2>

                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @if(Str::length(Auth::guard('customer')->user()) > 0 )
                    <div class="comment">
                        <a href="/testimoni/tambah">+Tambahkan Komentar</a>
                    </div>
                    @elseif(! Str::length(Auth::guard('customer')->user()) > 0 )
                    <div class="comment">
                        <a href="/login/customer ">+Tambahkan Komentar</a>
                    </div>
                    @elseif(Auth::guard('admin')->user() )
                    <div class="comment">
                        <a href="/login/customer " style="display: none;">+Tambahkan Komentar</a>
                    </div>
                    @endif
                    <div class="testi-activate testimonial-pb mb-30">
                        @foreach($comments as $i=>$data)
                        @if($data->kepastian >= 1)
                        <div class="testimonial mt-50 mt_md-40 mt_sm-40">
                            <div class="inner">
                                <div class="card-info">
                                    <div class="card-thumbnail">
                                        @if($data->customer->foto == "")
                                        <img src="{{ asset('assets/img/profile.png') }}" alt="">
                                        @else
                                        <img src="{{ asset('assets/img/'.$data->customer->foto) }}" alt="">
                                        @endif
                                    </div>

                                    <div class="card-content">
                                        <span class="subtitle mt-10">Client {{ $i++}} </span>
                                        <h3 class="title"> {{ $data->customer->username }} </h3>
                                    </div>
                                </div>
                                <div class="card-description">
                                    <div class="title-area">
                                        <div class="title-info">
                                            <h3 class="title"> {{ $data->categoris }} </h3>
                                            <span class="date">{{ $data->date }} </span>
                                        </div>
                                        <div class="rating">
                                            <img src="assets/img/rating.png" alt="">
                                            <img src="assets/img/rating.png" alt="">
                                            <img src="assets/img/rating.png" alt="">
                                            <img src="assets/img/rating.png" alt="">
                                            <img src="assets/img/rating.png" alt="">
                                        </div>
                                    </div>

                                    <div class="seperator"></div>
                                    <p class="description"> {{ $data->comment }} </p>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        @if(Str::length(Auth::guard('customer')->user()) > 0 )
        <div class="comment-customer">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <span class="subtitle">Your Comments</span>
                        <h2 style="color: white;"> {{ Auth::guard('customer')->user()->username }} </h2>
                    </div>
                </div>
            </div>

            <div class="konten row">

                @foreach($comments as $data)
                @if($data->customer->username == Auth::guard('customer')->user()->username)
                @if($data->kepastian >= 1)
                <div class="intro">
                    <div class="profile">
                        <input type="hidden" class="delete_id" value="{{ $data->id }}">
                        <section class="data">
                            <h3 class="title">Categories: {{ $data->categories }} </h3>
                            <div class="rating">
                                <img src="rating.png" alt="">
                                <img src="rating.png" alt="">
                                <img src="rating.png" alt="">
                                <img src="rating.png" alt="">
                                <img src="rating.png" alt="">
                            </div>
                            <p class="date">{{ \Carbon\Carbon::parse( $data->date)->format('Y-F-d') }}</p>
                            <p class="description"> {{ $data->comment }} </p>
                        </section>

                        <div class="btn-delete">
                            <!-- <a href="/testimoni/delete/{{ $data->id }}"><i class="fa-solid fa-trash"> </i> Hapus</a> -->
                            <form action="{{ route('testi.hapus', $data->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm btndelete"><b>Hapus</b></button>
                            </form>
                        </div>

                    </div>
                </div>
                @endif
                @elseif($data == "")
                <div class="else">
                    <p style="color: white; text-align:center;"> Belum ada komentar </p>
                </div>

                @endif
                @endforeach
            </div>

        </div>


        @endif
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

    @include('sweetalert::alert')

    <script src="{{ asset('assets/js/index.js') }}"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="{{ asset('assets/js/testi/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/testi/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/testi/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.btndelete').click(function(e) {
                e.preventDefault();

                var deleteid = $(this).closest(".profile").find('.delete_id').val();

                swal({
                        title: "Apakah anda yakin?",
                        text: "Setelah dihapus, Anda tidak dapat memulihkan Data Tersebut!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {

                            var data = {
                                "_token": $('input[name=_token]').val(),
                                'id': deleteid,
                            };
                            $.ajax({
                                type: "DELETE",
                                url: ' testimoni/delete/' + deleteid,
                                data: data,
                                success: function(response) {
                                    swal(response.status, {
                                            icon: "success",
                                        })
                                        .then((result) => {
                                            location.reload();
                                        });
                                }
                            });
                        }
                    });
            });

        });
    </script>

</body>

</html>