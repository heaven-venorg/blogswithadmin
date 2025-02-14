@extends('landing.layout.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center w-75 min-vh-100 gap-3">
        <h1 class="text-left fw-bolder text-light">{!! $post->title !!}</h1>
        <div class="content text-base text-light">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>
@endsection
