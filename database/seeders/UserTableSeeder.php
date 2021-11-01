<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= User::create([
            'name'=>'Admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('admin');

        $user= User::create([
            'name'=>'client',
            'email'=>'client@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('client');

        $user= User::create([
            'name'=>'employee',
            'email'=>'employee@gmail.com',
            'password'=>Hash::make('password')
        ]);
        $user->assignRole('employee');
    }
}
