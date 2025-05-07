<section class="hero">
    <div class="hero-image">
        <img src="{{ asset('images/highpoints/denali-ak.jpg') }}" alt="Denali">
    </div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">Track Your Journey Through America's Highpoints</h1>
            <p class="hero-subtitle">Highpointing is the pursuit of climbing the highest natural point in each U.S. state. Use this site as a free resource to track your completed highpoints and to plan your next adventure.</p>
            <div class="hero-buttons">
                @guest
                    <a href="{{ route('register') }}" class="btn-tertiary">Start Your Journey</a>
                    <a href="{{ route('login') }}" class="btn-primary">Login</a>
                @else
                    <a href="{{ route('highpoints.index') }}" class="btn-primary">View Your Highpoints</a>
                @endguest
            </div>
        </div>
    </div>
</section> 