<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Highpoint;
use Illuminate\View\View;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;

final class HighpointCompletion extends Component
{
    public Highpoint $highpoint;
    public ?string $completionDate = null;

    public function mount(Highpoint $highpoint): void
    {
        $this->highpoint = $highpoint;
        
        if (auth()->check()) {
            $userHighpoint = $highpoint->users->firstWhere('id', auth()->id());
            if ($userHighpoint && $userHighpoint->pivot->completion_date) {
                $this->completionDate = $userHighpoint->pivot->completion_date instanceof Carbon 
                    ? $userHighpoint->pivot->completion_date->format('Y-m-d')
                    : $userHighpoint->pivot->completion_date;
            }
        }
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

        // Save to database
        auth()->user()->highpoints()->syncWithoutDetaching([
            $this->highpoint->id => [
                'completed' => true,
                'completion_date' => $this->completionDate,
            ],
        ]);
    }

    public function render(): View
    {
        return view('livewire.highpoint-completion');
    }
}
