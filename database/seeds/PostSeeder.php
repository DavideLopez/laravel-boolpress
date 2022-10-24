<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {

            $category_ids = Category::All()->pluck('id');

            $post = new Post();

            $post->title = $faker->words(rand(5, 10), true);
            $post->content = $faker->paragraphs(rand(10, 20), true);
            $post->category_id = $faker->optional()->randomElement($category_ids);
            $post->slug = str_replace(' ', '-', $post->title);

            $post->save();

            $tagIds = $tags->shuffle()->take(3)->all();
            $post->tag()->sync($tagIds);
        }
    }
}
