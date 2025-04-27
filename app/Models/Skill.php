<?php

namespace App\Models;

use App\Models\SkillCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'skill_category_id'];

    public function category()
    {
        return $this->belongsTo(SkillCategory::class);
    }

    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class)
                    ->withPivot('level')
                    ->withTimestamps();
    }
}
