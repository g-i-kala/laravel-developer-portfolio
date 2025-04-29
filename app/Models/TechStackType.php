<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TechStackType extends Model
{
    /** @use HasFactory<\Database\Factories\TechStackTypeFactory> */
    use HasFactory;

    public function techStacks(): HasMany
    {
        return $this->hasMany(TechStack::class);
    }
}
