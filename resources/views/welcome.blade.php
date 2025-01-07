<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Grant Management System</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Lexend Exa', sans-serif;
            background: linear-gradient(to bottom right, #1c1c2b, #2a2a4d); /* Dark blue gradient background */
            color: #f4f4f9;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white */
        }

        .navbar a {
            color: black !important;
            font-weight: bold;
        }

        .navbar a:hover {
            color: #f44336 !important; /* Red color for hover */
        }

        .welcome-section {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            background: url('https://img.freepik.com/free-vector/vintage-science-education-background-theme_23-2148477890.jpg?semt=ais_hybrid') no-repeat center center fixed;
            background-size: cover;
            color: white;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.7);
        }

        .welcome-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            color: #ff3333; /* Red color for the main heading */
        }

        .welcome-section p {
            font-size: 1.25rem;
            margin-bottom: 20px;
            color: #e0e0e0; /* Light gray text */
        }

        .btn-custom {
            padding: 12px 25px;
            border-radius: 30px;
            font-weight: bold;
            transition: all 0.3s ease;
            background: #f44336; /* Red background */
            color: white;
            text-decoration: none;
            border: none;
            box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
        }

        .btn-custom:hover {
            background: #d32f2f; /* Darker red on hover */
            box-shadow: 0 6px 18px rgba(255, 0, 0, 0.5);
            text-decoration: none;
        }

        .navbar-toggler-icon {
            background-color: #f44336; /* Red color for toggle button */
        }

        .navbar-nav .nav-item .nav-link {
            color: #2a2a4d !important;
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Research Grant System</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <h1>Welcome to the Research Grant Management System</h1>
        <p>Your one-stop solution for managing research grants effectively and efficiently.</p>
        <a href="{{ route('register') }}" class="btn-custom">Register</a>
        <a href="{{ route('login') }}" class="btn-custom">Login</a>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
