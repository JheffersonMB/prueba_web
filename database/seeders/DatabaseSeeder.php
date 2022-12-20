<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;    // crear roles
use Spatie\Permission\Models\Permission; // crear permisos
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role1=Role::create(['name'=>'Administrador']);
       $role2=Role::create(['name'=>'Cliente']);
       $role3=Role::create(['name'=>'Repartidor']);
       $role4=Role::create(['name'=>'Recepcionesta']);
       
    //    Permission::create(['name'=> 'catalogo', 'subname'=> 'catalogo principal'])->syncRoles([$role1,$role2,$role3,$role4]);
       //administracion usuarios
       Permission::create(['name'=> 'usuario', 'subname'=> 'usuario principal','tipo'=>2])->syncRoles([$role1,$role4]);
       Permission::create(['name'=> 'usuario.editar', 'subname'=> 'editar usuarios','tipo'=>2])->syncRoles([$role1]);
       Permission::create(['name'=> 'usuario.eliminar', 'subname'=> 'eliminar usuarios','tipo'=>2])->syncRoles([$role1]);
       Permission::create(['name'=> 'usuario.agregar', 'subname'=> 'agregar usuarios','tipo'=>2])->syncRoles([$role1]);
       Permission::create(['name'=> 'usuario.eliminados', 'subname'=> 'ver usuarios eliminados','tipo'=>2])->syncRoles([$role1,$role4]);
       Permission::create(['name'=> 'usuario.restore', 'subname'=> 'restaurar usuarios eliminados','tipo'=>2])->syncRoles([$role1]);
    //    permiso para elcrud cliente
    Permission::create(['name'=> 'cliente', 'subname'=> 'Boton Cliente','tipo'=>3])->syncRoles([$role1,$role4]);
    Permission::create(['name'=> 'cliente.editar', 'subname'=> 'Boton Cliente Editar','tipo'=>3])->syncRoles([$role2,$role3]);
    
     //    permiso para elcrud delivery
     Permission::create(['name'=> 'delivery', 'subname'=> 'Boton Delivery','tipo'=>4])->syncRoles([$role1,$role4]);
     Permission::create(['name'=> 'delivery.editar', 'subname'=> 'Boton Delivery Editar','tipo'=>4])->syncRoles([$role2,$role3]);
       user::create([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => Hash::make('123'),
    ])->assignRole('Administrador');
    
    user::create([
        'name' => 'delivery',
        'email' => 'delivery@gmail.com',
        'password' => Hash::make('123'),
    ])->assignRole('Repartidor');  
    }
}
