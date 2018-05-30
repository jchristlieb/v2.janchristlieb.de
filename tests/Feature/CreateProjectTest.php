<?php

namespace Tests\Feature;

use App\Project;
use App\Tag;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CreateProjectTest extends TestCase
{
    use RefreshDatabase;
    /**
     * @test
     */
    public function title_is_required()
    {
        //vorbereitung
        $this->signIn();

        //ausführung
        $response = $this->post('/admin/projects',[
           'title' => ''
        ]);

        //behauptung
        $response->assertSessionHasErrors('title');
    }

    /**
     * @test
     */
    public function a_project_can_be_created()
    {
        $this->withExceptionHandling();
        // vorbereitung
        $this->signIn();
        $tags = factory(Tag::class,2)->create();

        // ausführung
        $project = $this->post('/admin/projects', [
            'name' => 'Project Name',
            'title' => 'Title',
            'description' => 'Description',
            'date' => '01-16-2018',
            'link' => 'https://example.org',
            'tags' =>$tags->pluck('id'),
            'images' => UploadedFile::fake()->image('image.jpg'),
        ]);

        // behauptung
        $this->assertEquals(1, Project::count());
        $project = Project::first();
        $this->assertEquals('Project Name', $project->name);
        $this->assertEquals('Title', $project->title);
        $this->assertCount(1,$project->getMedia($project->slug));
    }
}
