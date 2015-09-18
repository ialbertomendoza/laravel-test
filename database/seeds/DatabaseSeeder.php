<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use ProyectoCurso\User;
use ProyectoCurso\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        # Reinicia contenido de tablas
        User::truncate();
        Post::truncate();

        # Genera un post por cada usuario creado
        factory(User::class, 10)->create()->each(function ($user){
            $post = factory(Post::class)->make();
            $user->posts()->save($post);
        });

        
    }
}
