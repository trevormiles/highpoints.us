<section id="highpoints" class="highpoints">
    <div class="container">
        <div class="highpoints-header">
            <h2>America's Highpoints</h2>
            @auth
                <p>From the towering peaks of Alaska to the gentle hills of Florida, discover the diverse landscapes of America's state highpoints.</p>
            @else
                <p>Want to track your completed highpoints? <a href="{{ route('login') }}">Sign in</a> to get started.</p>
            @endauth
        </div>
        <div class="highpoints-grid">
            @foreach($highpoints as $highpoint)
                <a href="{{ route('highpoints.show', $highpoint) }}" class="highpoint-card">
                    <div class="highpoint-image">
                        <img src="{{ asset($highpoint->image_path) }}" alt="{{ $highpoint->image_alt }}">
                        @auth
                            @php
                                $userHighpoint = $highpoint->users->firstWhere('id', auth()->id());
                            @endphp
                            <div class="highpoint-completion-badge {{ $userHighpoint && $userHighpoint->pivot->completed ? 'completed' : 'not-completed' }}">
                                <i class="fas {{ $userHighpoint && $userHighpoint->pivot->completed ? 'fa-check-circle' : 'fa-times-circle' }}"></i>
                                <span>{{ $userHighpoint && $userHighpoint->pivot->completed ? 'Completed' : 'Not Completed' }}</span>
                            </div>
                        @endauth
                    </div>
                    <div class="highpoint-content">
                        <h3>{{ $highpoint->name }}</h3>
                        <p class="highpoint-state">{{ \App\Helpers\StateHelper::getStateName($highpoint->state) }}</p>
                        <div class="highpoint-details">
                            <span class="highpoint-elevation">{{ number_format($highpoint->elevation) }}'</span>
                            <span class="highpoint-difficulty {{ strtolower($highpoint->difficulty) }}">{{ ucfirst($highpoint->difficulty) }}</span>
                        </div>
                        @auth
                            @if($userHighpoint && $userHighpoint->pivot->completed && $userHighpoint->pivot->completion_date)
                                <div class="highpoint-completion-date">
                                    <i class="fas fa-calendar-alt"></i>
                                    <span>Completed on {{ \Carbon\Carbon::parse($userHighpoint->pivot->completion_date)->format('F j, Y') }}</span>
                                </div>
                            @endif
                        @endauth
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section> 