<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteVisit extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'ip',
        'user_agent',
    ];

    protected function casts(): array
    {
        return [
            'visited_at' => 'datetime',
        ];
    }
}
