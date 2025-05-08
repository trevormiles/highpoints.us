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

        $this->highpointUser->completed = $this->completed;
        $this->highpointUser->save();
    }

    public function updatedCompletionDate(): void
    {
        if (!auth()->check()) {
            return;
        }

        // Validate the date
        $validator = Validator::make(
            ['completion_date' => $this->completionDate],
            [
                'completion_date' => ['required', 'date', 'before_or_equal:today'],
            ]
        );

        if ($validator->fails()) {
            $this->addError('completionDate', $validator->errors()->first('completion_date'));
            return;
        }

        $this->highpointUser->completed_date = $this->completed_date;
        $this->highpointUser->save();
    }

    public function render(): View
    {
        return view('livewire.highpoint-completion');
    }
}
