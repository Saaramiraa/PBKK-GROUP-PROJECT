<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('img/book.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            color: white;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8); 
            padding: 10px 20px; 
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
        }

        .navbar-brand {
            font-size: 1.5rem; 
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem; 
            margin-left: 15px; 
        }

        .container {
            padding-top: 5px;
        }

        .card {
            background-color: rgba(255, 255, 255, 0.8); 
            border-radius: 10px;
        }

        .nav-link.active {
            color: #007bff; 
            font-weight: bold; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                Home
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('authors.create') }}">Create Author</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('books.create') }}">Create Book</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
