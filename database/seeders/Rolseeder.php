<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Rolseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'admin']);
        $role2 = Role::create(['name'=>'entrenador']);
 
        //Permisos equips
        Permission::create(['name'=>'equips.index']);
        Permission::create(['name'=>'equips.create']);
        Permission::create(['name'=>'equips.edit']);
        Permission::create(['name'=>'equips.destroy']);

        //Permisos partits
        Permission::create(['name'=>'partits.index']);
        Permission::create(['name'=>'partits.create']);
        Permission::create(['name'=>'partits.edit']);
        Permission::create(['name'=>'partits.destroy']);
    }
}
