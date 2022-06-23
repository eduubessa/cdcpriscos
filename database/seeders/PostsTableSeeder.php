<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $post = new Post();
        $post->author = 1;
        $post->title = "Bem-vindo ao novo portal";
        $post->description = "Estamos a dar as boas vindas ao nosso novo portal que está cheio de novidades";
        $post->body = "<h1>Bem-vindo ao novo portal</h1><p>Hoje estamos a comemorar o nosso aniversário, juntamente com o lançamento do portal</p>";
        $post->slug = Str::slug($post->title);
        $post->save();
    }
}
