<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Now</title>
    {{-- Import Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    {{-- Form Login --}}
    <div class="d-flex flex-column vh-100 justify-content-center align-items-center gap-3">
        <h1>Login Now</h1>
        @if (session('error'))
            <div class="alert alert-danger w-75">Opps!! {{ session('error') }}</div>
        @endif
        <form action="{{ route('action.login') }}" method="post" class="w-75 d-flex flex-column gap-3">
            @csrf
            <input type="email" name="email" class="form-control" placeholder="Masukan email anda">
            <input type="password" name="password" class="form-control" placeholder="Masukan password anda">
            <input type="submit" class="btn btn-primary" value="Login Now">
        </form>
    </div>
    {{-- Import Bootstrap --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
