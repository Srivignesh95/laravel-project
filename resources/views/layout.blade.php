<!DOCTYPE html>
<html>
<head>
    <title>Watchwise</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

    {{-- Navigation --}}
    <nav class="navbar">
        <div class="container">
            <a href="{{ route('home') }}" class="logo">Watchwise</a>

            <div class="nav-links">
                @auth
                    <span>Welcome, {{ Auth::user()->name }}</span>
                    
                    <a href="{{ route('movies.index') }}">Movies</a>
                    <a href="{{ route('movies.create') }}">Add Movie</a>

                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <button type="submit">Logout</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
                
            </div>
        </div>
    </nav>

    {{-- Page Content --}}
    <main class="main-content">
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="footer">
        <p>&copy; {{ date('Y') }} Watchwise. All rights reserved.</p>
    </footer>

</body>
</html>
