<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class Phone extends Model
{
    protected $fillable = [
        'number',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
