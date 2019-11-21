<?php

use App\Documentation;
use App\Patient;
use App\Permission;
use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'admin' => [
                'email' => 'admin@example.com',
                'password' => 'admin',
                'roles' => ['admin'],
            ],
            'anna' => [
                'email' => 'anna@example.com',
                'password' => 'anna',
                'roles' => ['therapist'],
            ],
            'barbara' => [
                'email' => 'barbara@example.com',
                'password' => 'barbara',
                'roles' => ['therapist'],
            ],
            'clara' => [
                'email' => 'clara@example.com',
                'password' => 'clara',
                'roles' => ['assistant'],
            ],
            'david' => [
                'email' => 'david@example.com',
                'password' => 'david',
                'roles' => ['patient'],
                /*'patient' => '1234010183',*/
            ],
    ];

        foreach ($users as $userName => $userData) {
            $user = new User();
            $user->name = $userName;
            $user->email = $userData['email'];
            $user->password = Hash::make($userData['password']);
            if(array_key_exists('patient', $userData)) {
                $patient = Patient::where('svnr', $userData['patient'])->firstOrFail();
                $user->patient()->associate($patient);
            }
            $user->save();
            foreach ($userData['roles'] as $userRoleName) {
                $user->addRole($userRoleName);
            }
        }
    }

}
