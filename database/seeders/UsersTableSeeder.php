<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;


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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('admin123'),
            'remember_token' => Str::random(10),
            'address' => 'El salvador',
            'phone' => '',
            'dni' => '',
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'paciente',
            'email' => 'paciente@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('paciente123'),
            'remember_token' => Str::random(10),
            'address' => 'El salvador',
            'phone' => '',
            'dni' => '',
            'role' => 'patient'
        ]);

        User::create([
            'name' => 'Dra.Patricia Lucila Quintanilla',
            'email' => 'doctor@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('doctor123'),
            'remember_token' => Str::random(10),
            'address' => 'El salvador',
            'phone' => '',
            'dni' => '',
            'role' => 'doctor'
        ]);


        

        //$users = User::factory()->count(5)->suspended()->make();
        User::factory(50)->spatient()->create();
    }
}
