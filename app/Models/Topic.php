<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'available'])]
class Topic extends Model
{
    /** @use HasFactory<\Database\Factories\TopicFactory> */
     use HasFactory;
    /**
     * Mass assignable attributes (table fields)
     * Hidden from serialisation attributes (fields)
     *
     * Replaced by the use of PHP Attributes
            protected $fillable = [ 'name', 'description', 'available',];
            protected $hidden = [];
     */

    /**
     * Attribute (type) casting
     *
     */
    protected function casts(): array{
        return [];
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
