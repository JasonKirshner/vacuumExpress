<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $member = Role::where('name', 'member')->first();
        $admin  = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->role_id = $member->id;
        $employee->email = 'employee@example.com';
        $employee->first_name = 'Chris';
        $employee->last_name = 'Jenkins';
        $employee->password = Hash::make('secret');
        $employee->save();

        $manager = new User();
        $manager->role_id = $admin->id;
        $manager->email = 'dirk@example.com';
        $manager->first_name = 'Dirk';
        $manager->last_name = 'Loft';
        $manager->password = bcrypt('secret');
        $manager->save();
    }
}
