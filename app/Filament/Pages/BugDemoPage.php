<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class BugDemoPage extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.bug-demo-page';

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Widgets\GitHubExampleWidget::class,
        ];
    }
}
