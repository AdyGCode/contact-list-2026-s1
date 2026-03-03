<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * Mass assignable attributes (table fields)
     *
     */
    protected $fillable = [
        'name',
        'description',
        'available',
    ];

    /**
     * Hidden from serialisation attributes (fields)
     *
     */
    protected $hidden = [];

    /**
     * Attribute (type) casting
     *
     */
    protected function casts(): array{
        return [];
    }
}
