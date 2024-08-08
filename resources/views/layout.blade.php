<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'GradWork')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        header {
            background: linear-gradient(90deg, rgba(0,123,255,1) 0%, rgba(72,202,228,1) 100%);
        }
        .navbar-brand {
            font-size: 20px;
            font-weight: bold;
        }
        .nav-link {
            font-size: 13px;
        }
        .nav-link.active {
            font-weight: bold;
            border-bottom: 2px solid white;
        }
        .btn-primary {
            background-color: #052055;
            border-color: #052055;
            color: white;
        }
        .btn-secondary {
            background-color: #052055;
            border-color: #052055;
            color: white;
        }
        .btn-primary:hover,
        .btn-secondary:hover {
            background-color: #366EDA;
            border-color: #6c757d;
        }
        footer {
            background-color: #052055;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
    @yield('additional_styles')
</head>
<body>
    <header class="py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#" class="d-flex align-items-center text-white text-decoration-none">
                <img src="{{ asset('asset/images/logo.png') }}" alt="GradWork Logo" style="height: 120px; margin-right: 10px;">
                <span class="navbar-brand mb-0 h1">GradWork</span>
            </a>
            <ul class="nav">
                <li class="nav-item"><a href="#" class="nav-link text-white active">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white">Contact</a></li>
            </ul>
        </div>
    </header>

    @yield('content')

    <footer>
        <div class="container">
            <p>&copy; 2024 GradWork. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace(); // Initialize Feather Icons
    </script>
    @yield('additional_scripts')
</body>
</html>