@extends('layouts.main')

@section('content')
<h1 class="text-centre">Data Mahasiswa</h1>
<div class="row">

    <a href="/tambahmahasiswa">
        <button type="button" class="btn btn-success">Tambah</button>
    </a>

    {{-- Notifikasi Sukses menggunakan Bootstrap (Opsional jika ingin tetap ada) --}}
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
                <th scope="col">email</th>
                <th scope="col">nohp</th>
                <th scope="col">Aksi</th>
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
                <td>
                    {{-- Perbaikan tag penutup 'a' pada tombol Edit --}}
                    <a href="tampildata/{{$mahasiswa['id']}}" class="btn btn-primary">Edit</a>
                    
                    {{-- Tombol Hapus: Menggunakan class 'delete' dan menyimpan ID serta Nama di atribut data --}}
                    <a href="#" 
                       class="btn btn-danger delete" 
                       data-id="{{ $mahasiswa['id'] }}" 
                       data-nama="{{ $mahasiswa['name'] }}">
                       Hapus
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{-- Load Library --}}
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Logika Konfirmasi Hapus
    $('.delete').click(function(e) {
        e.preventDefault(); // Mencegah link berjalan otomatis
        
        let id = $(this).attr('data-id');
        let nama = $(this).attr('data-nama');

        Swal.fire({
            title: "Are you sure?",
            text: "Kamu akan menghapus data mahasiswa dengan nama " + nama + "",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                // Pindah ke route hapus hanya jika tombol 'Yes' diklik
                window.location = "/deletedata/" + id;
            }
        });
    });

    // Notifikasi Sukses Menggunakan SweetAlert setelah Redirect
    @if (Session::has('success'))
        Swal.fire({
            title: "Berhasil!",
            text: "{{ Session::get('success') }}",
            icon: "success"
        });
    @endif
</script>
@endsection