<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subject extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function post(): HasMany
    {
        return $this->hasMany(Post::class);
    } 
}
