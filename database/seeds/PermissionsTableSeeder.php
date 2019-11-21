<?php

use App\Documentation;
use App\Patient;
use App\Permission;
use App\User;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionNames = [
            'login',
            'view-own-data',
            'admin-patient',
            'admin-calendar',
            'admin-documentation'
        ];

        foreach ($permissionNames as $permissionName) {
            $permission = new Permission();
            $permission->name = $permissionName;
            $permission->save();
        }

    }
}
