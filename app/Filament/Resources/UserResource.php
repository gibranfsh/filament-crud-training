<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required()
                    ->placeholder('John Doe'),
                TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email()
                    ->placeholder('example@email.com'),
                TextInput::make('password')
                    ->label('Password')
                    ->required()
                    ->password()
                    ->placeholder('********')
                    ->visibleOn(['create']),
                Select::make('gender')->options([
                    'Male' => 'Male',
                    'Female' => 'Female'
                ])
                    ->required(),
                DatePicker::make('date_of_birth')
                    ->label('Date of Birth')
                    ->minDate(now()->subYears(150))
                    ->maxDate(now()->subYears(18))
                    ->required(),
                Radio::make('city')->options([
                    'Jakarta' => 'Jakarta',
                    'Bandung' => 'Bandung',
                    'Surabaya' => 'Surabaya',
                    'Yogyakarta' => 'Yogyakarta',
                    'Bali' => 'Bali',
                ])
                    ->inline()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('gender')
                    ->label('Gender')
                    ->sortable(),
                TextColumn::make('date_of_birth')
                    ->label('Date of Birth')
                    ->sortable(),
                TextColumn::make('city')
                    ->label('City')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
