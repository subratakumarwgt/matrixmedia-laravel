<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    public function project(){
        return $this->belongsTo(Project::class);
    }
    public function resolveRouteBinding($value,$field = null)
    {
        return $this->with(['project'])->where($this->getRouteKeyName(), $value)->firstOrFail();
    }
}
