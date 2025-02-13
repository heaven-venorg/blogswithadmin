<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs Simple</title>
    {{-- Link CSS Bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <nav class="d-flex justify-content-around p-4 bg-black align-items-center">
        <p class="nav h5 fw-bolder text-light text-uppercase">MyBlogs</p>
        <div class="nav d-flex gap-4">
            <li><a href="{{ route('landing.home') }}" class="text-decoration-none text-light font-sans">Home</a></li>
            <li><a href="" class="text-decoration-none text-light font-sans">Post</a></li>
            <li><a href="{{ route('landing.about') }}" class="text-decoration-none text-light font-sans">About Us</a>
            </li>
        </div>
    </nav>

    {{-- Main Yield --}}
    <main class="min-vh-100 d-flex justify-content-center bg-dark">
        @yield('content')
    </main>

    <footer class="footer p-4 bg-black text-light text-center">Copyright &copy; <span id="yeargrap"></span></footer>
    {{-- Custom Script --}}
    <script>
        let yearGrap = document.getElementById('yeargrap');
        yearGrap.innerHTML = new Date().getFullYear();
    </script>
    {{-- Link Script Bootstrap --}}
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
