<?php

namespace Domain\Auth\Admin\Actions;

use Domain\Auth\Admin\DataTransferObjects\AdminData;
use Domain\Auth\Admin\Models\Admin;

class CreateAdminAction 
{
    public function execute(AdminData $adminData): Admin
    {
        $admin = Admin::create([
            'first_name' => $adminData->first_name,
            'last_name' => $adminData->last_name,
            'email' => $adminData->email,
            'password' => $adminData->password,
            'active' => $adminData->active,
        ]);

        return $admin;
    }
}