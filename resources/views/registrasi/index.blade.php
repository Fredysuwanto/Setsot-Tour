@extends('layout.main')

@section('title','Registrasi')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <link href="{{ url('css/app.css') }}" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            height: 300px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="my-4 text-center">Daftar Registrasi</h1>
        <a href="{{ route('registrasi.create') }}" class="btn btn-primary col-lg-12">Buat Pemesanan Baru</a>
        <hr>
        <div class="row">
            @foreach ($registrasi as $item)
                <div class="col-md-4 mb-4 ">
                    <div class="card bg-dark">
                        <div class="card-body ">
                            <h1 class="card-title text-center text-light">{{ $item['tour'] }}</h1>
                            <img src="{{  url('assets/img/kaiadmin/qrcode.png') }}" class="card-img-top rounded">
                            <p class="card-text text-center text-light">{{ $item['nama'] }}</p>
                            <p class="card-text text-center text-light">{{ $item['waktu'] }}</p>
                            <p class="card-text text-center text-light">{{ $item['tanggal'] }}</p>
                            <p class="card-text text-center text-light">{{ $item['harga'] }}</p>
                            <div class="text-center p-1">
                                <form action="{{route('registrasi.destroy', $item["id"])}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm show_confirm col-lg-3">Delete</button>
                                </form>
                            </div>
                            <div class="text-center">
                                <a href="{{route('registrasi.edit', $item["id"])}}" class="btn btn-sm btn-warning col-lg-3">Edit</a>
                            </div>
                            <div class="text-center p-1">
                                <a href="{{route('registrasi.show', $item["id"])}}" class="btn btn-sm btn-warning btn-rounded col-lg-7">Confirm Pembayaran</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script src="{{ url('js/app.js') }}"></script>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if (session('success'))
  <script>
    Swal.fire({
    title: "Good job!",
    text: "{{session('success')}}",
    icon: "success"
    });
  </script>
@endif
<!-- confirm dialog -->
<script type="text/javascript">

  $('.show_confirm').click(function(event) {
       let form =  $(this).closest("form");
       let name = $(this).data("name");
       event.preventDefault();
       Swal.fire({
         title: " Yakin nak di hapus? ",
         text: "Data tidak Akan kembali lgi!",
         icon: "warning",
         showCancelButton: true,
         confirmButtonColor: "#3085d6",
         cancelButtonColor: "#d33",
         confirmButtonText: "iyo dpp!"
       })
       .then((willDelete) => {
         if (willDelete.isConfirmed) {
           form.submit();
         }
       });
   });

</script>
@endsection
