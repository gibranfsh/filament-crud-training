<?php

namespace App\Filament\Clusters\ClientProject\Resources;

use App\Filament\Clusters\ClientProject;
use App\Filament\Clusters\ClientProject\Resources\ProjectResource\Pages;
use App\Filament\Clusters\ClientProject\Resources\ProjectResource\RelationManagers;
use App\Models\Project;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $cluster = ClientProject::class;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required()
                    ->placeholder('Project Title'),
                TextInput::make('description')
                    ->label('Description')
                    ->required()
                    ->placeholder('Project Description'),
                Select::make('platform')->options([
                    'Website' => 'Website',
                    'Mobile' => 'Mobile',
                    'Desktop' => 'Desktop',
                ])
                    ->required(),
                Select::make('status')->options([
                    'ON_PROGRESS' => 'On Progress',
                    'FINISHED' => 'Finished',
                    'ON_HOLD' => 'On Hold',
                    'CANCELLED' => 'Cancelled',
                ])
                    ->required(),
                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->minDate(now())
                    ->required(),
                DatePicker::make('end_date')
                    ->label('End Date')
                    ->minDate(now())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('description')
                    ->label('Description'),
                TextColumn::make('platform')
                    ->label('Platform')
                    ->sortable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->sortable(),
                TextColumn::make('start_date')
                    ->label('Start Date')
                    ->sortable(),
                TextColumn::make('end_date')
                    ->label('End Date')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
