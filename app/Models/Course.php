<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    protected $fillable = ['cu_code', 'name', 'credits', 'passed_at'];

    /**
     * @return HasMany
     */
    public function tests(): HasMany
    {
        return $this->hasMany(Test::class);
    }
}
