@extends('app')

@section('content')
<div class="container-fluid position-relative p-4">
    <h1 class="position-absolute start-0 top-0 mt-3 ms-3">{{ $materi->category->name }}</h1>

    <div class="d-flex justify-content-center mt-5 pt-4" style="height: 55vh;">
        <img src="{{ asset('images/' . $materi->image) }}" class="img-fluid" style="width: 90%; max-width: 90%; border-radius:.100rem; border-radius:5rem" alt="{{ $materi->title }}">
    </div>
    <br>
    <div class="text-body" style="margin-left: 7.5%; width: 85%; max-width: 1200px;">
        <small> {{ $materi->publish_date }} | by {{ $materi->writer->name }}</small>
    </div>

    <div class="mt-4 text-body" style="margin-left: 7.5%; margin-right: 7.5%; width: 85%; max-width: 1200px;">
        <p>{{ $materi->content }}</p>
    </div>
</div>
@endsection
