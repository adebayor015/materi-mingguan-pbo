@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-7">
        <div class="card shadow-sm border-0 rounded-lg overflow-hidden">
            <div class="bg-primary p-5 text-center text-white">
                <div class="mb-3">
                    <img src="{{ asset('images/reza.jpg') }}" 
                         class="rounded-circle shadow-sm" 
                         alt="Foto Profil"
                         style="width: 130px; height: 130px; object-fit: cover; border: 4px solid white;">
                </div>
                <h2 class="font-weight-bold mb-1">Adib Reza Pratama</h2>
                <p class="mb-0 opacity-75">Mahasiswa Teknologi Informasi</p>
            </div>

            <div class="card-body p-4 bg-white text-center text-md-left">
                <table class="table table-borderless mb-0">
                    <tr class="border-bottom">
                        <td class="text-muted py-3" width="40%">NIM / ID</td>
                        <td class="font-weight-bold py-3 text-dark">13242420015</td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="text-muted py-3">Program Studi</td>
                        <td class="py-3 text-dark font-weight-bold">Teknologi Informasi</td>
                    </tr>
                    <tr class="border-bottom">
                        <td class="text-muted py-3">Fakultas</td>
                        <td class="py-3 text-dark font-weight-bold">Fakultas Teknik & Ilmu Komputer (FTIK)</td>
                    </tr>
                    <tr>
                        <td class="text-muted py-3">Kampus</td>
                        <td class="py-3 text-dark font-weight-bold">Universitas Muhammadiyah Semarang</td>
                    </tr>
                </table>
                
                <div class="text-center mt-4">
                    <button class="btn btn-outline-primary mr-2 px-4">Edit Profile</button>
                    <button class="btn btn-primary px-4 shadow-sm">Unduh KTM</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection