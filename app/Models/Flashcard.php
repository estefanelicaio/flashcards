<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Flashcard extends Model
{
    protected $fillable = ['front', 'back', 'answered_at'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
