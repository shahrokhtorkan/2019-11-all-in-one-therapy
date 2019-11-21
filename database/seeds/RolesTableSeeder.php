<?php

use App\Documentation;
use App\Patient;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleNames = [
            'patient',
            'assistant',
            'therapist',
            'admin',
        ];

        foreach ($roleNames as $roleName) {
            $role = new Role();
            $role->name = $roleName;
            $role->save();
        }

        /* assign permissions and roles to variables for easier association: */

        $loginPermission = Permission::where('name','login')->first();
        $ownDataPermission = Permission::where('name', 'view-own-data')->first();
        $adminPatientPermission = Permission::where('name','admin-patient')->first();
        $adminCalendarPermission = Permission::where('name','admin-calendar')->first();
        $adminDocumentationPermission = Permission::where('name','admin-documentation')->first();

        $patientRole=Role::where('name', 'patient')->first();
        $assistantRole=Role::where('name', 'assistant')->first();
        $therapistRole=Role::where('name', 'therapist')->first();
        $adminRole=Role::where('name', 'admin')->first();

        /* associate permissions and roles: */

        $patientRole->permissions()->attach($loginPermission->id);
        $patientRole->permissions()->attach($ownDataPermission->id);

        $assistantRole->permissions()->attach($loginPermission->id);
        $assistantRole->permissions()->attach($adminPatientPermission->id);
        $assistantRole->permissions()->attach($adminCalendarPermission->id);

        $therapistRole->permissions()->attach($loginPermission->id);
        $therapistRole->permissions()->attach($adminPatientPermission->id);
        $therapistRole->permissions()->attach($adminCalendarPermission->id);
        $therapistRole->permissions()->attach($adminDocumentationPermission->id);

        $adminRole->permissions()->attach($loginPermission->id);
        $adminRole->permissions()->attach($adminPatientPermission->id);
        $adminRole->permissions()->attach($adminCalendarPermission->id);
        $adminRole->permissions()->attach($adminDocumentationPermission->id);
    }
}
