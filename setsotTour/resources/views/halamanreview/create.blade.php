@extends('layout.main')

@section('title','Form Comment')

@section('content')

<div class="dark d-flex justify-content-center align-items-center">
    <div class="card col-lg-6 bg-dark">
        <div class="card-body">
            <h4 class="card-title d-flex justify-content-center align-items-center text-light"> Berikan Saran & Masukan </h4>
            <p class="card-description d-flex justify-content-center align-items-center">
                > Masukan Data anda <
            </p>
            <form method="POST" action="{{ route('registrasi.store') }}" class="forms-sample" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nama" class="text-light">Nama</label>
                    <input type="text" id="errorInput" value="Error" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama" class="text-light">Saran & Masukan</label>
                    <textarea class="form-control" id="comment" rows="5"></textarea>
                </div>
                <div class="form-group">
                    <label for="nama" class="text-light">Foto</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button type="submit" class="btn btn-primary me-2">Simpan</button>
                <a href="{{ url('') }}" class="btn btn-light">Batal</a>
            </form>
        </div>
    </div>
</div>

<!-- Add Danger Button Below -->
<div class="d-flex justify-content-center mt-3">
    <a href="{{ route('halamanreview.index') }}" class="btn btn-danger w-100" style="max-width: 600px;">Halaman Sedang Maintance</a>
</div>




@endsection