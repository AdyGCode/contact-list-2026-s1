<?php

declare(strict_types=1);

namespace App\Models;

use Database\Factories\TopicFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['name', 'description', 'available'])]
final class Topic extends Model
{
    /** @use HasFactory<TopicFactory> */
    use HasFactory;

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    /**
     * Mass assignable attributes (table fields)
     * Hidden from serialisation attributes (fields)
     *
     * Replaced by the use of PHP Attributes
     * protected $fillable = [ 'name', 'description', 'available',];
     * protected $hidden = [];
     */

    /**
     * Attribute (type) casting
     */
    protected function casts(): array
    {
        return [];
    }
}
