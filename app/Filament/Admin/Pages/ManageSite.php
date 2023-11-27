<?php

namespace App\Filament\Admin\Pages;

use App\Settings\SiteSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ManageSite extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = SiteSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Site Name')
                            ->required(),
                        Forms\Components\FileUpload::make('logo')
                            ->acceptedFileTypes(['image/png', 'image/webp', 'image/jpg', 'image/jpeg'])
                            ->required()
                            ->getUploadedFileNameForStorageUsing(static function (TemporaryUploadedFile $file) {
                                return 'logo.' . $file->extension();
                            }),

                    ]),

            ]);
    }
}
