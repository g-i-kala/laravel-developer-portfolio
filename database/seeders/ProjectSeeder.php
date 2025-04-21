<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Project;
use App\Models\TechStack;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory(5)->create();
        $tech = TechStack::factory(5)->create();

        Project::factory(20)
            ->count(20)
            ->hasAttached($tags)
            ->hasAttached($tech)
            ->create();
    }
}
