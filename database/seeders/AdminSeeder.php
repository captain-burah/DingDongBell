<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'fname' => 'Sanjula',
            'lname' => 'Nadeeshani',
            'email' => 'sanjula@admin.com',
            'password' => bcrypt('Sanjula@9248.com'),

        ]);

        Admin::create([
            'fname' => 'Tuan',
            'lname' => 'Burah',
            'email' => 'tuan@admin.com',
            'password' => bcrypt('Tuan@9248.com'),

        ]);
    }
}
