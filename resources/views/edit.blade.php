@extends('layouts.main') {{-- Hapus titik koma di sini --}}

@section('content') {{-- Hapus titik koma di sini --}}
    <h1>Edit Data Mahasiswa</h1>
 
    <div class="card shadow">
        <div class="card-body">
            {{-- Pastikan variabel $data ada sebelum memanggil properti id --}}
            @if(isset($data))
                <form action="/editdata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" value="{{ $data->name }}" placeholder="Nama Lengkap" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nim">Nomor Induk (NIM)</label>
                        <input type="number" name="nim" id="nim" value="{{ $data->nim }}" placeholder="Nomor Induk Mahasiswa" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="prodi">Program Studi</label>
                        <input type="text" name="prodi" id="prodi" value="{{ $data->prodi }}" placeholder="Jurusan" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ $data->email }}" placeholder="Alamat Email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="nohp">No Hp</label>
                        <input type="number" name="nohp" id="nohp" value="{{ $data->nohp }}" placeholder="Nomor Telepon" class="form-control" required>
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            @else
                <div class="alert alert-danger">Data tidak ditemukan!</div>
            @endif
        </div>
    </div>
@endsection