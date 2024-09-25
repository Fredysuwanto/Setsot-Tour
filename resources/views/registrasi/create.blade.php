@extends('layout.main')

@section('title','Form Registrasi')

@section('content')
<div class="dark d-flex justify-content-center align-items-center">
    <div class="card col-lg-6 bg-dark">
      <div class="card-body ">
        <h4 class="card-title d-flex justify-content-center align-items-center text-light"> FORM REGISTRASI </h4>
        <p class="card-description d-flex justify-content-center align-items-center">
          > Masukan Data anda <
        </p>
        <form method="POST" action="{{ route('registrasi.store') }}" class="forms-sample" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="nama" class="text-light">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukan Nama Anda">
            @error('nama')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="tour" class="text-light">Tour</label>
            <select type="text" class="form-control" id="tour" name="tour" placeholder="Masukan Tour di inginkan">
                <option value="Tour Jepang"> Tour Jepang </option>
                <option value="Tour Labuan Bajo"> Tour Labuan Bajo</option>
                <option value="Tour Palembang"> Tour Palembang</option>
                <option value="Tour Bali"> Tour Bali</option>
                <option value="Tour Palembang"> Tour Palembang</option>
                <option value="Tour madura"> Tour Madura</option>
                <option value="Tour Maluku"> Tour Maluku</option>
                <option value="Tour Medan"> Tour Medan</option>
                <option value="Tour Bandung"> Tour Bandung</option>
              </select>
            @error('tour')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="waktu" class="text-light">Waktu Tour</label>
            <select type="text" class="form-control" id="waktu" name="waktu" placeholder="Masukan Waktu Tour">
                <option value="2 Hari 1 Malam"> 2 Hari 1 Malam </option>
                <option value="2 Hari 2 Malam"> 2 Hari 2 Malam </option>
                <option value="3 Hari 2 Malam"> 3 Hari 2 Malam </option>
                <option value="3 Hari 3 Malam"> 3 Hari 3 Malam </option>
                <option value="4 Hari 3 Malam"> 4 Hari 3 Malam </option>
                <option value="4 Hari 4 Malam"> 4 Hari 4 Malam </option>
                <option value="5 Hari 4 Malam"> 5 Hari 4 Malam </option>
                <option value="5 Hari 5 Malam"> 5 Hari 5 Malam </option>
                <option value="6 Hari 5 Malam"> 6 Hari 5 Malam </option>
                <option value="6 Hari 6 Malam"> 6 Hari 6 Malam </option>
              </select>
            @error('waktu')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
                <div class="form-group">
                <label for="tanggal">Tanggal Tour</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{old('tanggal')}}"
                    placeholder="Masukan Tanggal Tour">
                @error('tanggal')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
          <div class="form-group">
            <label for="harga">harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" placeholder="Masukan Harga ">
            @error('harga')
                <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <button type="submit" class="btn btn-primary me-2">Simpan</button>
          <a href="{{ url('buku') }}" class="btn btn-light">Batal</a>
        </form>
      </div>
    </div>
  </div>
@endsection