@extends('app')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Popular Articles</h2>

    <div class="row">
        @foreach($popularMateri as $materi)
            <div class="col-md-4 mb-4">
                <div class="card h-100 custom-bg border-0">
                    <img src="{{ asset('images/' . $materi->image) }}" class="card-img-top" alt="{{ $materi->title }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $materi->title }}</h5>
                        <small class="text-muted">Published on {{ $materi->publish_date }} | Visits: {{ $materi->visitor }}</small>
                        <p class="card-text mt-2">{{ Str::limit($materi->content, 100) }}</p>
                        <a href="{{ route('materi.show', $materi->id) }}" class="btn btn-primary theme-color">Read more</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

   
    <div class="d-flex justify-content-center">
        {{ $popularMateri->links() }}
    </div>
</div>
@endsection
