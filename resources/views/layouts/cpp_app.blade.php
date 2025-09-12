<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>@yield('title', 'Learning Hub')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/basic.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/content.css') }}"> -->
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body sticky-top">
        <div class="container-fluid">

            <!-- Offcanvas Menu Button -->
            <button class="btn ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                aria-controls="offcanvasScrolling">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ url('card') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Topics</a>
                    </li>
                </ul>

                <!-- Right Side -->
                <div class="d-flex ms-auto" >
                   <a href="{{ route('shorts_reels') }}" class="btn ">Shorts Study</a>

</div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Offcanvas Sidebar -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
        style="width:15%" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title">TOPICS</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul >
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.intro') }}">Introduction</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.datatypevariable') }}">DataType & Variables</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.oper-cond') }}"></a>Operators & Conditional Statements</li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.loops') }}">LOOPS</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.array') }}">Array</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.function') }}">Function</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.pointer-refer') }}">Pointers & Referance</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.static-dynamic') }}">Static & Dynamic Management</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.class-obj') }}">Class & Object</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.encap-abstract') }}">Encapsulation & Abstraction</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.inheritance') }}">Inheritance</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.poly') }}">Polymorphism</a></li>
              <li><a class="text-light text-decoration-none" href="{{ route('cpp_content.friend') }}">Friend Function & Class</a></li>
              
            </ul>
        </div>
    </div>

    <!-- Main Page Content -->
    <main class="container ">
        @yield('content')
    </main>
<br>
    <!-- Footer -->
    <footer class="bg-dark text-light text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} Learning Hub. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @stack('scripts')
</body>
</html>
