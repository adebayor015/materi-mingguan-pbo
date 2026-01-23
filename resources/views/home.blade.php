@extends('layouts.main')

@section('content')
<div class="jumbotron bg-white shadow-sm border-0 py-5 px-4 rounded-lg text-center">
    <h1 class="display-4 font-weight-bold">Hello, Welcome!</h1>
    <p class="lead text-muted">Selamat datang di portal informasi DebayorTI.</p>
    <hr class="my-4">
    
    @auth
        <div class="alert alert-success d-inline-block px-5 shadow-sm border-0" style="border-radius: 50px;">
            🎉 Selamat Datang Kembali, <strong>{{ auth()->user()->name }}</strong>!
        </div>
    @else
        <p>Silakan login untuk mendapatkan akses penuh ke berita kami.</p>
        <a class="btn btn-primary btn-lg px-5 shadow" href="/login" role="button">Mulai Sekarang</a>
    @endauth
</div>
@endsection