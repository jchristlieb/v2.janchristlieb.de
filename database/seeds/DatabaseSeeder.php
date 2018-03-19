<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create projects
        $projects = factory(\App\Project::class, 7)->create();
        $this->command->info('Projects created');

        // create tags
        $tags = collect();
        collect(['PHP', 'JavaScript', 'JQuery', 'WordPress', 'CSS', 'Laravel'])->each(function ($tag) use ($tags) {
           $tags->push(factory(\App\Tag::class)->create([
               'name' => $tag,
               'slug' => str_slug($tag),
           ]));
        });
        $this->command->info('Tags created');

        // seed project_tag relationship table

        // each project has many tags (rand 1 to 4)
    }
}
