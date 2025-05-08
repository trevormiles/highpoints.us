<div>
    @auth
        <div class="highpoint-completion-form">
            <label for="completed">
                <input type="checkbox" wire:model.live="completed" />
                <span>Completed</span>
            </label>
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