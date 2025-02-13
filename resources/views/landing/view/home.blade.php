@extends('landing.layout.app')
@section('content')
    {{-- Import CSS Styleling Home --}}
    <link rel="stylesheet" href="{{ asset('css/customstylehome.css') }}">
    {{-- Tampilan Index Web --}}
    <div class="d-flex flex-column w-75 align-items-center">
        <div class="title">
            <h4 class="text-light text-left">Featured Post</h4>
        </div>
        <div class="content w-100 gap-3 d-flex flex-column">
            @foreach ($posts as $post)
                <div class="card">
                    <a class="card-body text-decoration-none bg-body-secondary"
                        href="{{ route('landing.show', $post->title) }}">
                        <h5 class="card-title">{{ Str::limit($post->title, 30, ' ...') }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 50, ' ...') }}</p>
                        <p class="card-text"><small class="text-body-secondary">Di Upload
                                {{ $post->updated_at->locale('id_ID')->format('d F Y') }}
                            </small></p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
