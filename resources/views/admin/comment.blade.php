@extends('admin.navAdmin')

@section('content')

<main>
    <h1>Testimonial || Comment</h1>

    <div class="card-dash3">
        @foreach($comments as $i=>$data)

        <div class="admin">
            <input type="hidden" class="delete_id" value="{{ $data->id }}">
            <div class="admin-name">
                <h2>By: {{ $data->customer->username }}</h2>
                <p>Categories: <span><b> {{ $data->categories }} </b></span></p>
                <p>Comment on: <b>{{ \Carbon\Carbon::parse( $data->date)->format('Y-m-d') }}</b></p>
                <p>{{ $data->comment }} </p>

                <div class="btn-bg">
                    @if(! $data->kepastian == 1)
                    <div class="btn-successs">
                        <form action="{{ route('setujui', $data->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn_success"><b>Setujui</b></button>
                        </form>
                    </div>
                    @endif
                    <div class="btn-delete">
                        <form action="{{ route('comment.delete', $data->id) }}" method="POST">
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

            let deleteid = $(this).closest(".admin").find('.delete_id').val();

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
                            url: "./comment/hapus/" + deleteid,
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