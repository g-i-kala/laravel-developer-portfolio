<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Developer;
use App\Models\TechStack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;

    public function tag(string $name)
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->syncWithoutDetaching($tag);
    }

    public function techStack(string $name)
    {
        $techStack = TechStack::firstOrCreate(['name' => $name]);

        $this->techStacks()->syncWithoutDetaching($techStack);
    }

    // public function retag(array $tags)
    // {
    //     $tags = collect($tags)->map(function ($tag) {
    //         return Tag::firstOrCreate(['name' => $tag])->id;
    //     });

    //     $this->tags()->sync($tags);
    // }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class, 'project_tag');
    }

    public function developer(): BelongsTo
    {
        return $this->belongsTo(Developer::class);
    }

    public function techStacks(): BelongsToMany
    {
        return $this->belongsToMany(TechStack::class, 'project_tech_stack');
    }
}
