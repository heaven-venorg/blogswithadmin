@extends('dashboard.layout.app')
@section('content')
    <div class="d-flex flex-column justify-content-center align-items-center vh-100">
        <h1 class="fs-3">Tambah Postingan</h1>
        <form action="{{ route('post.store') }}" method="post" class="d-flex flex-column gap-3 w-75">
            @csrf
            <input type="text" name="title" class="form-control" placeholder="Masukan title Postingan" required>
            <textarea name="content" cols="30" class="form-control" placeholder="Masukan Text Content" required></textarea>
            <input type="submit" value="Tambah Postingan" class="btn btn-primary">
        </form>
    </div>
@endsection
