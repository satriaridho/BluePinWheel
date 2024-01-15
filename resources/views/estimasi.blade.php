<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href=" {{ asset('assets/css/estimasi.css') }} ">
    <link rel="stylesheet" href="">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo-bpw.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estimasi Logo</title>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-3.6.1.min.js') }}"></script>

    <script type="text/javascript">
        // function cekIsi(el) {
        //     if ($(el).val() != "") {
        //         $(el).parents('.input').find('label').addClass('small');
        //     } else {
        //         $(el).parents('.input').find('label').removeClass('small');
        //     }
        // }

        // function cekJenis(el) {
        //     $('.konten-estimasi').removeClass('show');

        //     $('#' + $(el).val()).addClass('show');
        //     console.log($('#service').val())
        // }

        // function cekCategory(el) {
        //     console.log($('#kategori').val())
        //     console.log($('#qty').val())
        // }

        // function cekCategoryWeb(el) {
        //     console.log($('#kategori_web').val())

        // }

        // function cekCategoryIdc(el) {


        //     console.log($('#kategori_idc').val())
        // }
    </script>
</head>

<body>
    <!-- <div class="bek">
        <p>Belum Kelar Pak</p>
    </div> -->
    <form action="{{ route('count.post') }}" method="post">
        @csrf
        <section class="header2">
            <a href="/service" style="text-decoration: none;"><i class="bi bi-arrow-left"> K E M B A L I</i></a>

            <div class="clear"></div>

        </section>
        <div class="text-box2">
            <h1>Estimasi Biaya</h1>
        </div>

        <div class="wrapper">
            <div class="title">
                Click To Select Services
            </div>

            <div class="container">

                <label class="option_item">
                    <input type="checkbox" name="service[]" value="logo" class="checkbox">
                    <div class="option_inner whatsapp">
                        <div class="tickmark"></div>
                        <div class="icon"><i class="fa-solid fa-images"></i></div>
                        <div class="name">Logo</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="checkbox" name="service[]" value="web" class="checkbox">
                    <div class="option_inner whatsapp">
                        <div class="tickmark"></div>
                        <div class="icon"><i class="fa-brands fa-html5"></i></div>
                        <div class="name">Web</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="checkbox" name="service[]" value="id card" class="checkbox">
                    <div class="option_inner whatsapp">
                        <div class="tickmark"></div>
                        <div class="icon"><i class="fa-solid fa-address-card"></i></div>
                        <div class="name">ID Card</div>
                    </div>
                </label>


            </div>

        </div>


        <div class="hey">
            <div class="title">Choose Your Needs</div>
            <div class="container2">
                <input type="radio" value="1" name="jenis" id="card_one">
                <input type="radio" value="2" name="jenis" id="card_two">
                <input type="radio" value="3" name="jenis" id="card_three">
                <input type="radio" value="4" name="jenis" id="card_four">

                <label for="card_one">
                    <div class="card active">
                        <div class="tickmark"></div>
                        <div class="img">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <h2 class="title">Personal</h2>
                    </div>
                </label>
                <label for="card_two">
                    <div class="card active">
                        <div class="tickmark"></div>
                        <div class="img">
                            <i class="fa-sharp fa-solid fa-school"></i>

                        </div>
                        <h2 class="title">School</h2>
                    </div>
                </label>
                <label for="card_three">
                    <div class="card active">
                        <div class="tickmark"></div>
                        <div class="img">
                            <i class="fa-solid fa-building"></i>
                        </div>
                        <h2 class="title">Company</h2>
                    </div>
                </label>

                <label for="card_four">
                    <div class="card active">
                        <div class="tickmark"></div>
                        <div class="img">
                            <i class="fa-brands fa-playstation"></i>
                        </div>
                        <h2 class="title"> E-Sport </h2>
                    </div>
                </label>

            </div>
        </div>

        <div class="btn-submit">
            <input type="submit" class="estima" value="Hitung Estimasi">
        </div>

    </form>

    <!-- <form action="{{ route('count.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <section class="esti">
            <select class="input" name="service" id="service" onchange="cekJenis(this);">
                <option value="">Pilih Jenis Services</option>
                <option value="logo">Logo Design</option>
                <option value="web">Web Design</option>
                <option value="idc">ID Card</option>
            </select>
        </section>

        <div id="logo" class="konten-estimasi">
            <section class="hehe">
                <div class="input">
                    <select class="input" name="kategori" id="kategori" onchange="cekCategory(this);">
                        <option value="">Pilih Kategori</option>
                        <option value="Perusahaan">Perusahaan</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="E-Sport">E-Sport</option>
                        <option value="Pribadi">Pribadi</option>
                    </select>
                </div>

                <div class="input">
                    <input type="text" onchange="cekCategory(this);" placeholder="______ Perusahaan, Pribadi, Team, Sekolah" id="" name="nama" onblur="cekIsi(this)">
                    <label>isi Nama </label>
                </div>

                <div class="input">

                    <select name="qty" id="qty" class="qty" onchange="cekCategory(this);">
                        @for($i=1; $i <= 100; $i++) <option value="{{ $i }}"> {{ $i }}
                            </option>
                            @endfor
                    </select>

                </div>


                <div class=" input">
                    <input type="submit" value="Kirim">
                </div>

                <button>
                    <div class="wrapper">
                        <a href="">
                            <i class="bi bi-send"></i>
                        </a>
                    </div>
                    <span><a href="/contact" style="text-decoration: none;">Contact Us</a></span>
                </button>

            </section>
        </div>

        <div id="web" class="konten-estimasi">
            <section class="hehe">
                <div class="input">
                    <select class="input" id="kategori_web" name="kategori_web" onchange="cekCategoryWeb(this);">
                        <option value="">Pilih Kategori</option>
                        <option value="Perusahaan">Perusahaan</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="E-Sport">E-Sport</option>
                        <option value="Pribadi">Pribadi</option>
                    </select>
                </div>

                <div class="input">
                    <input type="text" onblur="cekIsi(this)">
                    <label>isi Nama </label>
                </div>



                <div class="input">
                    <input type="text" onblur="cekIsi(this)">
                    <label>Total</label>
                </div>

                <div class="input">
                    <input type="submit" value="Kirim">
                </div>

                <button>
                    <div class="wrapper">
                        <a href="">
                            <i class="bi bi-send"></i>
                        </a>
                    </div>
                    <span><a href="/contact" style="text-decoration: none;">Contact Us</a></span>
                </button>

            </section>
        </div>


        <div id="idc" class="konten-estimasi">
            <section class="hehe">
                <div class="input">
                    <select class="input" id="kategori_idc" name="kategori_idc" onchange="cekCategoryIdc(this);">
                        <option value="">Pilih Kategori</option>
                        <option value="Perusahaan">Perusahaan</option>
                        <option value="Sekolah">Sekolah</option>
                        <option value="E-Sport">E-Sport</option>
                        <option value="Pribadi">Pribadi</option>
                    </select>
                </div>

                <div class="input">
                    <input type="text" placeholder="______ Perusahaan, Pribadi, Team, Sekolah" id="" name="name" onblur="cekIsi(this)">
                    <label>isi Nama </label>
                </div>

                <div class="input">
                    <input type="number" id="" value="1" min="1" name="jumlah">
                </div>

                <div class="input">
                    <input type="submit" value="Kirim">
                </div>

                <button>
                    <div class="wrapper">
                        <a href="">
                            <i class="bi bi-send"></i>
                        </a>
                    </div>
                    <span><a href="/contact" style="text-decoration: none;">Contact Us</a></span>
                </button>

            </section>
        </div>


    </form> -->

    @include('sweetalert::alert')

</body>

</html>