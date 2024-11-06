@extends('app')

@section('content')

<div class="container-fluid position-relative p-4">
    <h1 class="position-absolute start-0 top-0 mt-3 ms-3">{{ $category->name }}</h1>

  
    <div class="container mt-5 p-4">
      @foreach($materi as $item)
        <div class="row mb-4 align-items-center">
        
          <div class="col-md-4">
            <img src="{{ asset('images/' . $item->image) }}" class="img-fluid ms-2" style="width: 100%; max-height: 200px; object-fit: cover; border-radius:2rem;" alt="{{ $item->title }}">
          </div>

          <div class="col-md-8">
            <div class="card border-0 h-100 custom-bg">
              <div class="card-body d-flex flex-column">
                <h5 class="card-title">{{ $item->title }}</h5>
                <small class="text-muted"> {{ $item->publish_date }} | by {{ $item->writer->name }}</small>
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
