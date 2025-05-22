<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TechStack extends Model
{
    use HasFactory;
    use Prunable;

    protected static function booted()
    {
        static::creating(function ($techStack) {
            $techStack->slug = Str::slug($techStack->name);
        });
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(TechStackType::class, 'tech_stack_type_id');
    }

    public function prunable()
    {
        return $this->doesntHave('projects');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
