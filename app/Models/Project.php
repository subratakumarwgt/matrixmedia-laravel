<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function tasks(){
        return $this->hasMany(Task::class);
    }
    public function resolveRouteBinding($value,$field = null)
    {
        return $this->with(['tasks'])->where($this->getRouteKeyName(), $value)->firstOrFail();
    }
}
