<?php

use App\Tag; 
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['falegnameria', 'elettronica', 'idraullica', 'audio', 'sport', 'cucina', 'sicurezza'];

        foreach($tags as $tagName) {
            $t = new Tag();
            $t->name = $tagName;
            $t->slug = Str::slug($tagName);

            $t->save();
        }
    }
}