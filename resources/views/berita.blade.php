@extends('layouts.main')

@section('content')
<div class="row mb-5 text-center">
    <div class="col">
        <h1 class="font-weight-bold display-4">Daftar Berita</h1>
        <p class="lead text-muted">Dapatkan informasi terkini seputar dunia teknologi.</p>
    </div>
</div>

<div class="row">
    @foreach ( $beritas as $berita )
    <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100">
            <div class="card-body d-flex flex-column">
                <h4 class="card-title font-weight-bold">
                    <a href="{{ route('berita.detail', $berita['slug']) }}" class="text-dark text-decoration-none hover-primary">
                        {{ $berita['judul'] }}
                    </a>
                </h4>
                <p class="text-muted small mb-3">✍️ Oleh: <span class="text-primary font-weight-bold">{{ $berita['penulis'] }}</span></p>
                <p class="card-text text-secondary">
                    {{ Str::limit($berita['konten'], 100) }}
                </p>
                
                <div class="mt-auto pt-3">
                    @guest
                        <div class="alert alert-warning py-2 small mb-0">
                            🔒 <a href="/login" class="font-weight-bold text-dark">Login</a> untuk baca lengkap.
                        </div>
                    @else
                        <a href="{{ route('berita.detail', $berita['slug']) }}" class="btn btn-outline-primary btn-sm btn-block">
                            Baca Selengkapnya
                        </a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection