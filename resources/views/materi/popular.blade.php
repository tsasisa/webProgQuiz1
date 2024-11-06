@extends('app')

@section('content')
<div class="container mt-5">
    <h2 class="text-start mb-4">Popular Articles</h2>

    
        @foreach($popularMateri as $materi)
        <div class="row mb-4 align-items-center">
        
        <div class="col-md-4">
          <img src="{{ asset('images/' . $materi->image) }}" class="img-fluid ms-2" style="width: 100%; max-height: 200px; object-fit: cover; border-radius:2rem;" alt="{{ $materi->title }}">
        </div>

        <div class="col-md-8">
          <div class="card border-0 h-100 custom-bg">
            <div class="card-body d-flex flex-column">
              <h5 class="card-title">{{ $materi->title }}</h5>
              <small class="text-muted"> {{ $materi->publish_date }} | by {{ $materi->writer->name }}</small>
              <p class="card-text mt-2">{{ Str::limit($materi->content, 200) }}</p>
              <a href="{{ route('materi.show', $materi->id) }}" class="btn btn-primary mt-auto align-self-end theme-color rounded-pill">Read more</a>
            </div>
          </div>
        </div>
        
      </div>
        @endforeach
    

   
    <div class="d-flex justify-content-center">
        {{ $popularMateri->links() }}
    </div>
</div>
@endsection
