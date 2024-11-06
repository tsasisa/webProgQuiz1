@extends('app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Our Writers</h2>

    <div class="row justify-content-center">
        @foreach($writers as $writer)
            <div class="col-md-4 text-center mb-4">
                <!-- Link ke Halaman Detail Writer -->
                <a href="{{ route('writer.show', $writer->id) }}" class="text-decoration-none text-dark">
                    <!-- Gambar Writer Bulat -->
                    <img src="{{ asset('images/' . $writer->image) }}" class="rounded-circle img-fluid mb-3" style="width: 150px; height: 150px; object-fit: cover;" alt="{{ $writer->name }}">
                    
                    <!-- Nama Writer dengan Link -->
                    <h5 class="fw-bold">{{ $writer->name }}</h5>
                </a>
                
                <!-- Bio Writer -->
                <p class="fs-6">{{ $writer->bio }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
