<?php

namespace App\Filament\Admin\Resources\AdminResource\Pages;

use App\Filament\Admin\Resources\AdminResource;
use Domain\Auth\Admin\Actions\CreateAdminAction;
use Domain\Auth\Admin\DataTransferObjects\AdminData;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreateAdmin extends CreateRecord
{
    protected static string $resource = AdminResource::class;

    protected static bool $canCreateAnother = false;

    protected function handleRecordCreation(array $data): Model
    {
        return DB::transaction(
            fn() => app(CreateAdminAction::class)->execute(AdminData::fromArray($data)) 
        );
    }
}
