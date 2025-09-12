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
    <!-- <link rel="stylesheet" href="{{ asset('css/array.css') }}">  -->
      <!--  <link rel="stylesheet" href="{{ asset('css/function.css') }}">-->
      <link rel="stylesheet" href="{{ asset('css/event.css') }}">
      <link rel="stylesheet" href="{{ asset('css/content.css') }}"> 
       <link rel="stylesheet" href="{{ asset('css/api.css') }}">
    
</head>
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
                   <a style="text-decoration:none" href="{{ route('js_shorts_reels') }}" class="btn ">Shorts Study</a>

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
            <ul class="list-unstyled">
               <li> <a style="text-decoration:none; color: #e2e8f0;"
                        href="{{route('js_content.introduction')}}">Introduction</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;"
                        href="{{route('js_content.variable')}}">Variables</a></li>

                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{route('js_content.variable')}}">Data
                        type<a>
                </li>

                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.oper-condition') }}">
                        Operator</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;"
                        href="{{ route('js_content.oper-condition') }}">Conditional Statements</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;"
                        href="{{ route('js_content.loop-string') }}">Loops</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;"
                        href="{{ route('js_content.loop-string') }}">Strings</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.array') }}">Array</a>
                </li>
                <li><a style="text-decoration:none; color: #e2e8f0;"
                        href="{{route('js_content.function')}}">Function</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.dom') }}">DOM</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.event') }}">Events</a></li>
                <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.class') }}">Class & object</a></li>
                  <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.callback') }}">Asynchronous</a></li>
                    <li><a style="text-decoration:none; color: #e2e8f0;" href="{{ route('js_content.last') }}">Fetch API</a></li>
          
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
