<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\Post;
use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
    $faker = Faker::create();
    $usuarios=Usuario::all();
    for($i = 0 ; $i<=10;$i++){
    $post = new Post();
    $post->Titulo = $faker->sentence;
    $post->Contenido = $faker->text;
    $post->usuario_id =$usuarios->random()->id;

    $post->save();
    }
}
}
