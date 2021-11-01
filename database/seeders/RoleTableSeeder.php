<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name'=> 'admin',
            'guard_name'=>'web'

        ]);
        Role::create([
            'name'=> 'client',
            'guard_name'=>'web'

        ]);
        Role::create([
            'name'=> 'employee',
            'guard_name'=>'web'

        ]);
    }
}
