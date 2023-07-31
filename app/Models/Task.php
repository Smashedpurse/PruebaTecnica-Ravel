<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Task extends Model
{
    use HasFactory;

    public function users(): BelongsToMany
    {
        return $this -> belongsToMany(User::class) -> using (TaskUser::class);
    }

    public function todo(): BelongsTo
    {
        return $this -> belongsTo(Todo::class);
    }

    public function steps(): HasMany
    {
        return $this -> hasMany(Step::class);
    }

    public function state(): BelongsTo
    {
        return $this -> belongsTo(State::class);
    }
}


