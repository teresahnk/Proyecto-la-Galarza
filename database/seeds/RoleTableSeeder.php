<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();  

        $role = new Role();
        $role->name = 'super';
        $role->description = 'Supervisor';
        $role->save();  

        $role = new Role();
        $role->name = 'sct';
        $role->description = 'SCTrepre';
        $role->save(); 

        $role = new Role();
        $role->name = 'adming';
        $role->description = 'Admingalarza';
        $role->save(); 
    }
}
