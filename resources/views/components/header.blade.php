<header class="header">
    <div class="container">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Highpoints Logo" class="logo-image">
                <span class="logo-text">highpoints.us</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="#highpoints" class="nav-link">Highpoints</a>
                <a href="#" class="nav-link">About</a>
                <a href="#" class="nav-link">Resources</a>
            </div>

            <div class="nav-actions">
                @auth
                    <a href="{{ route('filament.admin.pages.dashboard') }}" class="btn-secondary">Dashboard</a>
                @else
                    <a href="{{ route('filament.admin.auth.login') }}" class="btn-primary">Sign In</a>
                @endauth
            </div>
        </nav>
    </div>
</header> 