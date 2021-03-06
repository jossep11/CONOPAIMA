<?php

namespace Database\Seeders;

use App\Models\amenazas;
use App\Models\debilidades;
use App\Models\Fortaleza;
use App\Models\oportunidades;
use Illuminate\Database\Seeder;
/* use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission; */
use App\Models\User;

class Users extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $admin1 = Role::create(['name'=>'admin']);
        $user1 = Role::create(['name'=>'user']);
        $agregar_eliminar = Permission::create(['name'=>'agregar eliminar'])->assignRole($user1); */
        
        $user1_admin = User::create([
            'name'=> 'administrador',
            'email'=> 'Admin1@gmail.com',
            'Nombres'=> 'Milagros',
            'password'=> bcrypt('1234567'),

        ]);

        $user2_user = User::create([
            'name'=> 'personal1',
            'email'=> 'VPDS@gmail.com',
            'Nombres'=> 'VPDS',
            'password'=> bcrypt('1234567'),

        ]);

        Fortaleza::create([
            'description'=>'Buen ambiente laboral',
        ]);

        Fortaleza::create([
            'description'=>'Proactividad en la gestión',
        ]);

        Fortaleza::create([
            'description'=>'Conocimiento del mercado',
        ]);

        Fortaleza::create([
            'description'=>'Grandes recursos financieros',
        ]);

        oportunidades::create([
            'description'=>'Regulación a favor',
        ]);

        oportunidades::create([
            'description'=>'Competencia débil',
        ]);

        oportunidades::create([
            'description'=>'Mercado mal atendido',
        ]);

        oportunidades::create([
            'description'=>'Necesidad del producto',
        ]);

        debilidades::create([
            'description'=>'Salarios bajos',
        ]);

        debilidades::create([
            'description'=>'Equipamiento viejo',
        ]);

        debilidades::create([
            'description'=>'Falta de capacitación',
        ]);

        debilidades::create([
            'description'=>'Problemas con la calidad',
        ]);

        amenazas::create([
            'description'=>'Conflictos gremiales',
        ]);

        
        amenazas::create([
            'description'=>'Regulación desfavorable',
        ]);

        
        amenazas::create([
            'description'=>'Cambios en la legislación',
        ]);

        
        amenazas::create([
            'description'=>'Competencia muy agresiva',
        ]);


/*         $user1_admin->assignRole($admin1);
        $user2_user->assignRole($user1); */


    }
}
