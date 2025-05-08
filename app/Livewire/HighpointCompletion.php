<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Highpoint;
use App\Models\HighpointUser;
use Illuminate\View\View;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

final class HighpointCompletion extends Component
{
    public Highpoint $highpoint;
    public ?HighpointUser $highpointUser = null;
    public ?string $completionDate = null;
    public bool $completed = false;

    public function mount(Highpoint $highpoint): void
    {
        $this->highpoint = $highpoint;

        if (auth()->check()) {
            $this->highpointUser = HighpointUser::where('highpoint_id', $this->highpoint->id)
                ->where('user_id', auth()->id())
                ->first();

            if (!$this->highpointUser) {
                abort(404);
            }

            $this->completed = $this->highpointUser->completed;

            $this->completionDate = $this->highpointUser->completion_date instanceof Carbon 
                ? $this->highpointUser->completion_date->format('Y-m-d')
                : $this->highpointUser->completion_date;
        }
    }

    public function updatedCompleted(): void
    {
        if (!auth()->check()) {
            return;
        }

        if ($this->completed === false) {
            $this->completionDate = null;
        }

        $this->highpointUser->completed = $this->completed;
        $this->highpointUser->completion_date = $this->completionDate;
        $this->highpointUser->save();
    }

    public function updatedCompletionDate(): void
    {
        if (!auth()->check()) {
            return;
        }

        if ($this->completionDate === "") {
            $this->completionDate = null;
        }

        $this->highpointUser->completion_date = $this->completionDate;
        $this->highpointUser->save();
    }

    public function render(): View
    {
        return view('livewire.highpoint-completion');
    }
}
