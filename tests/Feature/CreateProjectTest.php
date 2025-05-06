<?php

use Illuminate\Http\UploadedFile;

it('can create a project', function () {

    $this->withoutExceptionHandling();
    $response = login()->post('/projects', [
      'title' => 'Sample Project',
      'description' => 'This is a sample project description.',
      'company' => 'Sample Company',
      'location' => 'Sample Location',
      'image' => UploadedFile::fake()->image('project.jpg'),
      'image_alt' => 'An alternative text for the image',
      'url_github' => 'https://github.com/laravel/laravel',
      'url_demo' => 'https://github.com/laravel/laravel',
      'tags' => 'PHP,Laravel',
      'tech_stack' => 'PHP, Laravel, Vue.js',
      'featured' => true,
]);

    $response->assertRedirect('/');

    // Assert that the session has the success message
    $response->assertSessionHas('success', 'Project created successfully');

    // Optionally, check if the project exists in the database
    $this->assertDatabaseHas('projects', [
        'title' => 'Sample Project',
        'company' => 'Sample Company',
    ]);

});
