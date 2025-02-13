@extends('landing.layout.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center w-75 min-vh-100 gap-3">
        <h1 class="text-center fw-bolder">{{ $post->title }}</h1>
        <div class="content text-center">
            {{ $post->content }}
        </div>
    </div>
@endsection
