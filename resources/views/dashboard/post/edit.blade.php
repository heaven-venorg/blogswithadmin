@extends('dashboard.layout.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center min-vh-100">
        <h1 class="fs-3">Tambah Postingan</h1>
        <form action="{{ route('post.update', $post->id) }}" method="post" class="d-flex flex-column gap-3 w-75">
            @csrf
            @method('PUT')
            <input type="text" name="title" class="form-control" placeholder="Masukan title Postingan"
                value="{{ $post->title }}" required>
            <textarea name="content" class="form-control" placeholder="Masukan Text Content" rows="10" required>{{ $post->content }}</textarea>
            <button type="submit" class="btn btn-primary">Edit Postingan</button>
        </form>
    </div>
@endsection
