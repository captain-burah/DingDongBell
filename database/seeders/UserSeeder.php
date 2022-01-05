<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'test',
            'lname' => 'lname',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
            'contact' => '0770291654',
            'medium' => 'english',
            'message' => 'hellow world!',
            'status' => 'active',

        ]);
    }
}
