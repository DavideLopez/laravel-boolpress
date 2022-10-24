<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Tag;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['falegnameria', 'elettronica', 'idraullica', 'audio'];

        foreach($tags as $tagname) {
            $t = new Tag();
            $t->name = $tagName;
            $t->slug = Str::slug($tagname);
        }
    }
}