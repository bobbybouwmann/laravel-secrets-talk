<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

final class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'reviewed_at',
        'published_at',
    ];

    protected $dates = [
        'reviewed_at',
        'published_at',
    ];

    public function isReviewed(): bool
    {
        return $this->reviewed_at !== null;
    }

    public function publish(): void
    {
        $this->forceFill([
            'published_at' => Carbon::now(),
        ])->save();
    }
}
