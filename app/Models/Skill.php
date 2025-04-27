<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    public function developers(): BelongsToMany
    {
        return $this->belongsToMany(Developer::class)
                    ->withPivot('level')
                    ->withTimestamps();
    }
}
