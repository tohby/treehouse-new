<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->delete();

        $roles = [
            ['role' => 'Super Admin'],
            ['role' => 'Manager'],
            ['role' => 'Admin'],
        ];

        foreach($roles as $role){
            Role::create($role);
        }
    }
}
