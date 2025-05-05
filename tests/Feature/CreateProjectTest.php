<?php

use Illuminate\Http\UploadedFile;

it('can create a project', function () {
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

    // Assert that the response status is 201 (Created) or as expected
    $response->assertStatus(201);

    // Optionally, check if the project exists in the database
    $this->assertDatabaseHas('projects', [
        'title' => 'Sample Project',
        'company' => 'Sample Company',
    ]);

});
