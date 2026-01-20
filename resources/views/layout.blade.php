<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Student Portal') - Student Portal</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
       
        :root {
            --primary-color: #2c3e50; 
            --secondary-color: #95a5a6; 
            --accent-color: #3498db; 
            --bg-color: #f8f9fa; 
        }

        body {
            background-color: var(--bg-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

     
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 0.5px;
        }

       
        .nav-link.active {
            color: var(--accent-color) !important;
            font-weight: bold;
            border-bottom: 2px solid var(--accent-color);
        }

    
        .card {
            border: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); /* Soft, subtle shadow */
            border-radius: 8px;
        }
        .card-header {
            background-color: white;
            border-bottom: 1px solid #eee;
            padding-top: 15px;
            padding-bottom: 15px;
        }

        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .btn-primary:hover {
            background-color: #1a252f; 
            border-color: #1a252f;
        }

    
        footer {
            margin-top: auto; 
            background-color: white;
            border-top: 1px solid #e9ecef;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <span style="color: var(--accent-color);">Student</span>Portal
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.index') ? 'active' : '' }}" href="{{ route('students.index') }}">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('students.create') ? 'active' : '' }}" href="{{ route('students.create') }}">Add Student</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        @yield('content')
    </div>

    <footer class="text-center py-4 text-muted">
        <small>&copy; 2026 Student Portal System. Simulated Interface.</small>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>