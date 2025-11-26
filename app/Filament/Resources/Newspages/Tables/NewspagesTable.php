<?php

namespace App\Filament\Resources\Newspages\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class NewspagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('language.name')
                    ->label('Language Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('slide_title_1')
                    ->searchable(),
                ImageColumn::make('slide_image_1'),
                TextColumn::make('slide_title_2')
                    ->searchable(),
                ImageColumn::make('slide_image_2'),
                TextColumn::make('slide_title_3')
                    ->searchable(),
                ImageColumn::make('slide_image_3'),
                TextColumn::make('sort')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
