<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Your Website')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <div class="logo">
            <h1>X Portal</h1> <!-- Animated logo can go here -->
        </div>
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
    </footer>
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
