<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        $form = $form->schema([

            Checkbox::make('is_homepage')->label('Is Homepage?')
                ->live(),

            Repeater::make('info_squares')->label('Section - Info Squares')
                ->schema([
                    TextInput::make('item')->required(),
                    Textarea::make('text')
                        ->required(),
                ])

                ->columnSpan(2)
                ->hidden(fn (Get $get) => $get('is_homepage') == false),

            TextInput::make('name')->label('Name')->required(),
            TextInput::make('slug')->label('Slug')->required(),
            Textarea::make('body')->label('Body')->required(),
            // Add more fields if needed


        ])->columns(2);



        return $form;
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label('Name'),
                TextColumn::make('slug')->label('Slug'),
                TextColumn::make('body')->label('Body')

            ])
            ->filters([
                // You can add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
