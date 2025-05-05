<?php

use Tests\TestCase;
use App\Models\Developer;
use App\Models\Project;

test('project belongs to developer', function () {
    $developer = Developer::factory()->create();
    $project = Project::factory()->create([
        'developer_id' => $developer->id,
    ]);

    expect($project->developer->is($developer))->toBeTrue();
});

test('project has a tag', function () {
    $project = Project::factory()->create();

    $project->tag('Frontend');

    expect($project->tags)->toHaveCount(1);
});
