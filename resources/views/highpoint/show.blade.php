@extends('layouts.main')

@push('meta')
    <title>highpoints.us | {{ $highpoint->name }}</title>
    <meta name="title" content="highpoints.us | {{ $highpoint->name }}">
    <meta name="description" content="{{ $highpoint->description }}">
@endpush

@section('main-content')
    <div class="container">
        <div class="highpoint-detail">
            <div class="highpoint-header">
                <h1>{{ $highpoint->name }}</h1>
                <p class="highpoint-state">{{ \App\Helpers\StateHelper::getStateName($highpoint->state) }}</p>
            </div>

            <div class="highpoint-content">
                <div class="highpoint-image">
                    <img src="{{ asset($highpoint->image_path) }}" alt="{{ $highpoint->image_alt }}">
                </div>

                <div class="highpoint-info">
                    <div class="highpoint-stats">
                        <div class="stat">
                            <span class="stat-label">Elevation</span>
                            <span class="stat-value">{{ number_format($highpoint->elevation) }}'</span>
                        </div>
                        <div class="stat">
                            <span class="stat-label">Difficulty</span>
                            <span class="stat-value {{ strtolower($highpoint->difficulty) }}">{{ ucfirst($highpoint->difficulty) }}</span>
                        </div>
                    </div>

                    <div wire:key="highpoint-completion-{{ $highpoint->id }}">
                        <livewire:highpoint-completion :highpoint="$highpoint" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 