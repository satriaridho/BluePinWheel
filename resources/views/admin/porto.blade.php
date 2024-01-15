@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Portofolio</h1>
    <div class="admin-title btn-success">
        <a href="/admin/porto/tambah">
            <h2>+ Tambah</h2>
        </a>
    </div>

    <div class="card-dash2">
        @foreach($portos as $i=>$data)
        <div class="admin">
            <input type="hidden" class="delete_id" value="{{ $data->id }}">
            <div class="gambar">
                <img src="{{ asset('img_uplode/'.$data->gambar) }}" alt="">
            </div>
            <div class="admin-name">
                <h2>{{ $data->title }}</h2>
                <p>Categories: <span><b> {{ $data->categories }} </b></span></p>
                <p>Released on: <b>{{ $data->date }} </b></p>
                <p>Technologies:
                    <b>
                        {{ $data->technologies }}
                    </b>
                </p><br>
                <p>{{ $data->body }} </p>

                <div class="btn-bg">
                    <div class="btn-update">
                        <a href="/admin/porto/ubah/{{ $data->id }} "><b>Ubah</b></a>
                    </div>
                    <div class="btn-delete">
                        <form action="{{ route('porto.hapus', $data->id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm btndelete"><b>Hapus</b></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        @endforeach

    </div>

</main>

<div class="right2">
    <div class="top">
        <button id="menu-btn">
            <span class="fa-solid fa-bars"></span>
        </button>
        <div class="theme-toggler">
            <span class="fa-solid fa-sun active" onclick="setDarkMode(false);"></span>
            <span class="fa-solid fa-moon" onclick="setDarkMode(true);"></span>
        </div>

        <div class="profile">
            <div class="info">
                <p>Hey,
                    @if(Str::length(Auth::guard('admin')->user()) > 0)
                    <b>{{ Auth::guard('admin')->user()->username }}</b>
                    @endif
                </p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                @if(Auth::guard('admin')->user()->foto == "")
                <a href="/admin/setting"><img src="{{ asset('assets/img/profile.png') }}" class="imgPorto" alt="" id="imgPorto"></a>
                @else
                <a href="/admin/setting"><img src="{{ asset('uplodeAdmin/'.Auth::guard('admin')->user()->foto) }}" class="imgPorto" alt="" id="imgPorto"></a>
                @endif
            </div>
        </div>
    </div>

</div>


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

            var deleteid = $(this).closest(".admin").find('.delete_id').val();

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
                            url: '/admin/porto/hapus/' + deleteid,
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

@endsection