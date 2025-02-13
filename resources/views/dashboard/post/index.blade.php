@extends('dashboard.layout.app')
@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Post Dasboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">All Post</li>
        </ol>
        <div class="card mb-4">
            <div class="card-header">
                <a href="{{ route('post.create') }}" class="btn btn-sm btn-primary">Tambah Postingan</a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ Str::limit($post->content, 20, ' ...') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('post.edit', $post->id) }}"
                                            class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('post.destroy', $post->id) }}" method="POST"
                                            id="delete_form">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td>Data Not Found</td>
                                <td>Data Not Found</td>
                                <td>Data Not Found</td>
                                <td>Data Not Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
