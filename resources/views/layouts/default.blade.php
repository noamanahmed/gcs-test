<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    
    <style>
        body {
            background-color: #111;
            color: #fff;
        }
        .section-title {
            font-size: 2rem;
            font-weight: bold;
            color: #ffa500;
        }
        .table-header {
            background-color: #ffa500;
            color: #000;
        }
        .search-add-icons i {
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-warning" href="{{ route('home') }}">Uni Selector</a>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white" href="#">Contact Us</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">About Us</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="#">Services</a></li>
                    <li class="nav-item">
                        <a class="mt-1 btn btn-warning btn-sm text-white" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <section class="py-5 text-center" style="background-image: url('/assets/images/banner-background.jpg'); background-size: cover;">
        <h1><span class="text-warning">Admin</span> Dashboard</h1>
    </section>
    
    @yield('content')
    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
