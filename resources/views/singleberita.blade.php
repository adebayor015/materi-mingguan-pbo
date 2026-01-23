@extends('layouts.main')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <article class="bg-white p-5 shadow-sm rounded-lg">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-transparent p-0 mb-4">
                <li class="breadcrumb-item"><a href="/berita">Berita</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail</li>
              </ol>
            </nav>

            <h1 class="font-weight-bold mb-3 text-dark">{{ $new_berita['judul'] }}</h1>
            <p class="text-muted small mb-4">Ditulis oleh <span class="text-primary font-weight-bold">{{ $new_berita['penulis'] }}</span> | UNIMUS News</p>
            
            <div class="lead text-dark" style="line-height: 1.8;">
                {{ $new_berita['konten'] }}
            </div>

            <hr class="my-5">
            <a href="/berita" class="btn btn-outline-secondary">
                ← Kembali ke Daftar Berita
            </a>
        </article>
    </div>
</div>
@endsection