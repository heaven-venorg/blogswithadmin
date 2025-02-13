@extends('dashboard.layout.app')
@section('content')
    <div class="d-flex flex-column align-items-center vh-100 justify-content-center text-center gap-0">
        <h1 class="fw-bolder">Welcome To Admin Panel {{ Auth::user()->name }}</h1>
        <p class="fs-6">Klik Menu Navbar Untuk Managemen</p>
    </div>
@endsection
