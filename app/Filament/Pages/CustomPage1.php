<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CustomPage1 extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.custom-page1';
}
