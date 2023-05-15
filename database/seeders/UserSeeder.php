<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'name'  =>  'Rolando Ordoñez Cango',
            'email' =>  'admi.jmb@gmail.com',
            'password'  =>  bcrypt('12345678')
        ];

        User::create($data);
        USer::factory(99)->create();
    }
}
