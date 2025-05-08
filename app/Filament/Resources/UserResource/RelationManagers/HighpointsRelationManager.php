<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HighpointsRelationManager extends RelationManager
{
    protected static string $relationship = 'highpoints';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Toggle::make('completed')
                    ->label('Completed'),
                Forms\Components\DateTimePicker::make('completion_date')
                    ->label('Completion Date'),
                Forms\Components\Textarea::make('notes')
                    ->label('Notes'),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\IconColumn::make('pivot.completed')
                    ->label('Completed')
                    ->boolean(),
                Tables\Columns\TextColumn::make('pivot.completion_date')
                    ->label('Completion Date')
                    ->dateTime('F j, Y'),
                Tables\Columns\TextColumn::make('pivot.notes')
                    ->label('Notes'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('completed')
                    ->label('Completed')
                    ->options([
                        '1' => 'Yes',
                        '0' => 'No',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->mutateFormDataUsing(function (array $data): array {
                        return [
                            'completed' => $data['completed'] ?? false,
                            'completion_date' => $data['completion_date'] ?? null,
                            'notes' => $data['notes'] ?? null,
                        ];
                    }),
            ]);
    }
}
