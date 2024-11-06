<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('app.css') }}">


    <title>EduFun</title>
</head>
<body class="d-flex flex-column min-vh-100 custom-bg">
   
    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-height shadow p-3 mb-5 bg-body rounded">
        <div class="container">
            
            <a class="navbar-brand" href="{{ route('home') }}">EduFun</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{route('home')}}">Home</a>
                    </li>

                   
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('category*') ? 'active' : '' }}"
                            href="#" id="navbarCategoryDropdown" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarCategoryDropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ route('category.category', $category->name) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('writers') ? 'active' : '' }}" href="{{route('writer.index')}}">Writers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{route('about')}}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('popular') ? 'active' : '' }}" href="{{route('materi.popular')}}">Popular</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    
    <div class="custom-bg flex-grow-1 p-4">
        @yield('content')
    </div>

    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
</body>

<footer class="d-flex justify-content-center align-items-center text-center p-3 text-white w-100 theme-color custom-height">
    ©EduFun 2024 | Web Programming | Tsabbita Isnina | 2602191996
</footer>


</html>
