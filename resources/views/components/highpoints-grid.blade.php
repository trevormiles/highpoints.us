<section id="highpoints" class="highpoints">
    <div class="container">
        <div class="highpoints-header">
            <h2>Explore America's Highpoints</h2>
            <p>From the towering peaks of Alaska to the gentle hills of Florida, discover the diverse landscapes of America's state highpoints.</p>
        </div>
        <div class="highpoints-grid">
            @foreach($highpoints as $highpoint)
                <div class="highpoint-card">
                    <div class="highpoint-image">
                        <img src="{{ asset($highpoint->image_path) }}" alt="{{ $highpoint->image_alt }}">
                    </div>
                    <div class="highpoint-content">
                        <h3>{{ $highpoint->name }}</h3>
                        <p class="highpoint-state">{{ \App\Helpers\StateHelper::getStateName($highpoint->state) }}</p>
                        <div class="highpoint-details">
                            <span class="highpoint-elevation">{{ number_format($highpoint->elevation) }}'</span>
                            <span class="highpoint-difficulty">{{ ucfirst($highpoint->difficulty) }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section> 