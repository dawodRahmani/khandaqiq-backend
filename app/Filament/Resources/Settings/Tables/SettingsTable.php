<?php

namespace App\Filament\Resources\Settings\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class SettingsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('key')
                    ->searchable()
                    ->sortable()
                    ->label('Key')
                    ->weight('bold'),

                BadgeColumn::make('type')
                    ->colors([
                        'primary' => 'text',
                        'success' => 'image',
                    ])
                    ->label('Type')
                    ->sortable(),

                TextColumn::make('value')
                    ->label('Value/Image')
                    ->limit(50)
                    ->formatStateUsing(function ($record, $state) {
                        if (!$record) return '';
                        if ($record->type === 'text') {
                            return $state;
                        }
                        if ($record->type === 'image' && $state) {
                            return '🖼️ ' . basename($state);
                        }
                        return '';
                    })
                    ->wrap(),

                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Created At'),

                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true)
                    ->label('Updated At'),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'text' => 'Text',
                        'image' => 'Image',
                    ])
                    ->label('Type'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('key');
    }
}
