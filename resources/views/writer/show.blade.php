@extends('app')

@section('content')

<!-- Informasi Writer di Kiri Atas -->
<div class="container-fluid position-relative p-4">
    <div class="row align-items-center mb-4">
        <!-- Gambar Writer Kecil Bulat di Kiri -->
        <div class="col-auto">
            <img src="{{ asset('images/' . $writer->image) }}" class="rounded-circle img-fluid" style="width: 80px; height: 80px; object-fit: cover;" alt="{{ $writer->name }}">
        </div>
        
        <!-- Nama dan Bio di Sebelah Kanan Gambar -->
        <div class="col">
            <h5 class="fw-bold mb-1">{{ $writer->name }}</h5>
            <p class="mb-0">{{ $writer->bio }}</p>
        </div>
    </div>

    <!-- Section dengan Card untuk Setiap Materi yang Ditulis oleh Writer -->
    <div class="container mt-5 p-4">
      @foreach($writer->materi as $item)
        <div class="row mb-4 align-items-center">
          
          <!-- Gambar di Kiri dengan Ukuran Terbatas -->
          <div class="col-md-4">
            <img src="{{ asset('images/' . $item->image) }}" class="img-fluid ms-2" style="width: 100%; max-height: 200px; object-fit: cover; border-radius:2rem" alt="{{ $item->title }}">
          </div>

          <!-- Card di Sebelah Kanan Gambar -->
          <div class="col-md-8">
            <div class="card border-0 h-100 custom-bg">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $item->title }}</h5>
                <small class="text-muted">Published on {{ $item->publish_date }} by {{ $writer->name }}</small>
                <p class="card-text mt-2">{{ Str::limit($item->content, 200) }}</p>
                <a href="{{ route('materi.show', $item->id) }}" class="btn btn-primary mt-auto align-self-end theme-color rounded-pill">Read more</a>
              </div>
            </div>
          </div>
          
        </div>
      @endforeach
    </div>
</div>

@endsection
