<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use App\Tag;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Storage::disk('public')->deleteDirectory('posts');
        Post::truncate();
        Category::truncate();
        Tag::truncate();

        $category = new Category;
        $category->name = 'Categoria 1';
        $category->save();

        $category = new Category;
        $category->name = 'Categoria 2';
        $category->save();

        $post = new Post;
        $post->title = 'Feria Integral de Salud';
        $post->url = str_slug('Feria Integral de Salud');
        $post->excerpt = 'Extracto de mi Primer Post';
        $post->body = '<p>Contenido de mi Primer Post</p>';
        $post->category_id = 1;
        $post->user_id = 1;
        $post->published_at = Carbon::now()->subDays(4);
        $post->save();
        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 1']));

        $post = new Post;
        $post->title = 'Campaña de Vacunación ';
        $post->url = str_slug('Campaña de Vacunación ');
        $post->excerpt = 'Extracto de mi Segundo Post';
        $post->body = '<p>Contenido de mi Segundo Post</p>';
        $post->category_id = 1;
        $post->user_id = 1;
        $post->published_at = Carbon::now()->subDays(3);
        $post->save();
        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 2']));

        $post = new Post;
        $post->title = 'Prevención de ITS VIH SIDA ';
        $post->url = str_slug('Prevención de ITS VIH SIDA ');
        $post->excerpt = 'Extracto de mi Tercer Post';
        $post->body = '<p>Contenido de mi Tercer Post</p>';
        $post->category_id = 2;
        $post->user_id = 2;
        $post->published_at = Carbon::now()->subDays(2);
        $post->save();
        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 3']));

        $post = new Post;
        $post->title = 'Mi Cuarto Post';
        $post->url = str_slug('Mi Cuarto Post');
        $post->excerpt = 'Extracto de mi Cuarto Post';
        $post->body = '<p>Contenido de mi Cuarto Post</p>';
        $post->category_id = 2;
        $post->user_id = 2;
        $post->published_at = Carbon::now();
        $post->save();
        $post->tags()->attach(Tag::create(['name' => 'Etiqueta 4']));
    }
}
