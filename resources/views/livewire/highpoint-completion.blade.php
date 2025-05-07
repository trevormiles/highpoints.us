@auth
    <div class="highpoint-completion-form">
        @if($completionDate)
            <div class="completion-status completed">
                <i class="fas fa-check-circle"></i>
                <span>Completed</span>
            </div>
            <div class="completion-date-display">
                <i class="fas fa-calendar-alt"></i>
                <span>Completed on {{ \Carbon\Carbon::parse($completionDate)->format('F j, Y') }}</span>
            </div>
        @else
            <div class="completion-status not-completed">
                <i class="fas fa-times-circle"></i>
                <span>Not Completed</span>
            </div>
            <div class="completion-date-input">
                <label for="completion-date">When did you complete this highpoint?</label>
                <input 
                    type="date" 
                    id="completion-date"
                    wire:model.live="completionDate"
                    max="{{ now()->format('Y-m-d') }}"
                    class="date-input @error('completionDate') is-invalid @enderror"
                >
                @error('completionDate')
                    <span class="error-message">{{ $message }}</span>
                @enderror
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
