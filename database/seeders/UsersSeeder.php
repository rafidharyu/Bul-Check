<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Rafid Haryu Novrian',
            'username' => 'rafid',
            'email' => 'rafid@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
