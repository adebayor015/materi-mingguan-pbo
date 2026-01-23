@extends('layouts.main')

@section('content')
<h1 class="text-centre">Data Mahasiswa</h1>
<div class="row">

    {{-- 1. Tombol Tambah HANYA untuk Admin --}}
    @can('isAdmin')
    <div class="mb-3">
        <a href="/tambahmahasiswa">
            <button type="button" class="btn btn-success">Tambah</button>
        </a>
    </div>
    @endcan

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-2" role="alert">
            {{$message}}
        </div>
    @endif

    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Prodi</th>
                <th scope="col">Email</th>
                <th scope="col">No HP</th>
                {{-- 2. Header Aksi HANYA untuk Admin --}}
                @can('isAdmin') 
                    <th scope="col">Aksi</th> 
                @endcan
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($data as $mahasiswa)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{$mahasiswa["name"]}}</td>
                <td>{{$mahasiswa["nim"]}}</td>
                <td>{{$mahasiswa["prodi"]}}</td>
                <td>{{$mahasiswa["email"]}}</td>
                <td>{{$mahasiswa["nohp"]}}</td>
                
                {{-- 3. Tombol Edit & Hapus HANYA untuk Admin --}}
                @can('isAdmin')
                <td>
                    <a href="tampildata/{{$mahasiswa['id']}}" class="btn btn-primary">Edit</a>
                    
                    <a href="#" 
                       class="btn btn-danger delete" 
                       data-id="{{ $mahasiswa['id'] }}" 
                       data-nama="{{ $mahasiswa['name'] }}">
                       Hapus
                    </a>
                </td>
                @endcan
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Skrip SweetAlert (Tetap sama) --}}
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    $('.delete').click(function(e) {
        e.preventDefault();
        let id = $(this).attr('data-id');
        let nama = $(this).attr('data-nama');

        Swal.fire({
            title: "Yakin ingin menghapus?",
            text: "Data mahasiswa " + nama + " akan dihapus permanen.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!"
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/deletedata/" + id;
            }
        });
    });

    @if (Session::has('success'))
        Swal.fire({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success"
        });
    @endif
</script>
@endsection