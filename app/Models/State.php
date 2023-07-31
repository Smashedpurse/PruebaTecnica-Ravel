<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class State extends Model
{

    public function Todos(): HasMany
    {
        return $this->hasMany(Todo::class);
    }

    public function Tasks(): HasMany
    {
        return $this->hasMany(Task::class);
    }

    public function TaskUser(): HasMany
    {
        return $this->hasMany(TaskUser::class);
    }

    public function Steps(): HasMany
    {
        return $this->hasMany(Steps::class);
    }

}
