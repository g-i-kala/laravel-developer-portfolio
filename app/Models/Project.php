<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Developer;
use App\Models\TechStack;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public function scopeInDescription(Builder $query, $term)
    {
        return $query->where('description', 'LIKE', "%$term%");
    }

    public function scopeInTags(Builder $query, $term)
    {
        return $query->orWhereHas('tags', function ($q) use ($term) {
            $q->where('name', 'LIKE', "$$term%");
        });
    }

    public function scopeInTechStacks(Builder $query, $term)
    {
        return $query->orWhereHas('techStacks', function ($q) use ($term) {
            $q->where('name', 'LIKE', "%$term%");
        });
    }

    public function scopeSearch(Builder $query, $term)
    {
        return $query->where(function ($q) use ($term) {
            $q->inDescription($term)
                ->inTags($term)
                ->inTechStacks($term);
        });
    }
}
