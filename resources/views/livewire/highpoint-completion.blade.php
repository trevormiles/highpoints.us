<div>
    @auth
        <div class="highpoint-completion-form">
            <label for="completed">
                <input type="checkbox" wire:model.live="completed" />
                <span>Completed</span>
            </label>
            @if ($completed)
                <div class="completion-date-input">
                    <label for="completion-date">When did you complete this highpoint?</label>
                    <input 
                        type="date" 
                        id="completion-date"
                        wire:model.live="completionDate"
                        max="{{ now()->format('Y-m-d') }}"
                        class="date-input"
                    >
                </div>
            @endif
        </div>
    @else
        <div class="highpoint-completion-cta">
            <p>Want to track your highpointing progress?</p>
            <a href="{{ route('login') }}" class="btn-primary">
                <i class="fas fa-sign-in-alt"></i>
                Log in to Track Progress
            </a>
        </div>
    @endauth
</div>