@extends('app')

@section('content')

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach($materi as $key => $m)
      <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
        <img src="{{ asset('images/' . $m->image) }}" class="d-block w-100" style="height: 100%; object-fit: cover;" alt="">
      </div>
    @endforeach
  </div>
</div>

<div class="custom-bg container mt-4 p-4">
  @foreach($materiPilihan as $pilihan)
    <div class="row mb-4 align-items-center">
  
      <div class="col-md-4">
        <img src="{{ asset('images/' . $pilihan->image) }}" class=" img-fluid ms-2" alt="{{ $pilihan->title }}" style="border-radius:2rem;">
      </div>

    
      <div class="col-md-8 custom-bg">
        <div class="card h-100 border-0 custom-bg">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $pilihan->title }}</h5>
            <small class="text-muted">{{ $pilihan->publish_date }}  | by {{ $pilihan->writer->name }}</small>
            <p class="card-text mt-2">{{ Str::limit($pilihan->content, 200) }}</p>
            <a href="{{ route('materi.show', $pilihan->id) }}" class="btn btn-primary mt-auto align-self-end theme-color rounded-pill">Read more</a>
          </div>
        </div>
      </div>
      
    </div>
  @endforeach
  <br>
  <br>
  <br>
</div>

@endsection
