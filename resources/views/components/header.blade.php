<header class="header">
    <div class="container">
        <nav class="nav">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Highpoints Logo" class="logo-image">
                <span class="logo-text">highpoints.us</span>
            </a>
            
            <div class="nav-links">
                <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
                <a href="{{ route('highpoints.index') }}" class="nav-link {{ request()->routeIs('highpoints.index') ? 'active' : '' }}">Highpoints</a>
                <a href="{{ route('resources') }}" class="nav-link {{ request()->routeIs('resources') ? 'active' : '' }}">Resources</a>
            </div>

            <div class="nav-actions">
                @auth
                    <div class="frontend-dropdown">
                        <button class="user-menu-button">
                            <span class="user-name">{{ auth()->user()->name }}</span>
                            <svg class="user-menu-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </button>

                        <div class="frontend-dropdown-content">
                            <a href="{{ route('highpoints.index') }}" class="frontend-dropdown-link">
                                Highpoints
                            </a>

                            <a href="{{ route('profile.edit') }}" class="frontend-dropdown-link">
                                Profile
                            </a>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="{{ route('logout') }}" class="frontend-dropdown-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    Log Out
                                </a>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('register') }}" class="btn-secondary">Sign Up</a>
                    <a href="{{ route('login') }}" class="btn-primary">Login</a>
                @endauth
            </div>
        </nav>
    </div>
</header> 