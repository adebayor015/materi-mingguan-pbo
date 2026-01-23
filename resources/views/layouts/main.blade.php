<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | DebayorTI</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
            background-color: #f4f7f6; 
            color: #333;
        }
        /* Navbar Styling */
        .navbar { 
            box-shadow: 0 2px 15px rgba(0,0,0,0.1); 
            padding: 0.8rem 0;
        }
        .navbar-brand { font-weight: 700; letter-spacing: -0.5px; }
        .nav-link { font-weight: 500; transition: 0.3s; margin: 0 5px; }
        .nav-link.active { color: #fff !important; background: rgba(255,255,255,0.1); border-radius: 5px; }
        
        /* Card & UI Element Styling */
        .card { 
            border: none; 
            border-radius: 15px; 
            box-shadow: 0 5px 15px rgba(0,0,0,0.05); 
            transition: transform 0.3s ease;
        }
        .card:hover { transform: translateY(-5px); }
        .btn { border-radius: 8px; font-weight: 600; padding: 0.5rem 1.2rem; }
        .btn-primary { background-color: #007bff; border: none; }
        
        /* Footer minimalis */
        footer { margin-top: 50px; color: #888; font-size: 0.9rem; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container">
            <a class="navbar-brand text-primary" href="/">Debayor<span class="text-white">TI</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link {{ $title == 'Home' ? 'active' : '' }}" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ $title == 'Berita' ? 'active' : '' }}" href="/berita">Berita</a></li>
                    <li class="nav-item"><a class="nav-link {{ $title == 'Profile' ? 'active' : '' }}" href="/profile">Profile</a></li>
                    <li class="nav-item"><a class="nav-link {{ $title == 'Contact' ? 'active' : '' }}" href="/contact">Contact</a></li>
                    <li class="nav-item"><a class="nav-link {{ $title == 'Mahasiswa' ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a></li>
                </ul>

                <ul class="navbar-nav ml-auto">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                Halo, <strong>{{ auth()->user()->name }}</strong>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow border-0 mt-2">
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </div>
                        </li>
                    @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                        <li class="nav-item"><a class="btn btn-primary btn-sm ml-lg-3 mt-1" href="{{ route('register') }}">Daftar</a></li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
        
        <footer class="text-center pb-4">
            <p>&copy; 2026 DebayorTI. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>