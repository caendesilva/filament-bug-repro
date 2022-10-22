<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\HiddenWidget;
use Filament\Pages\Page;

class Broken extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.broken';

    protected function getHeaderWidgets(): array
    {
        return [
            HiddenWidget::class
        ];
    }
}
