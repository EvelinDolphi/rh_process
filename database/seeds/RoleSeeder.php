<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->nombre='admin';
        $role->descripcion = 'administrador';
        $role->save();

        $role = new Role();
        $role->nombre = 'user';
        $role->descripcion ='usuario';
        $role->save();
    }
}
