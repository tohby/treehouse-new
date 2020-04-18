<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'firstname' => 'Tobi',
            'lastname' => 'Adeyinka',
            'email' => 'tadeyinka173@gmail.com',
            'role_id' => 1,
            
        ]);
    }
}
