<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $faker = Faker::create();
    for($i = 0 ; $i<=5;$i++){
    $usuario = new Usuario();
    $usuario->login = $faker->firstNameMale;
    $usuario->password = $faker->word;
    $usuario->save();
    }
}
}
