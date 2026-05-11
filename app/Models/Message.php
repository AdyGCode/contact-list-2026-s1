<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

final class Message extends Model
{
    /**
     * Mass assignable attributes (table fields)
     */
    protected $fillable = [
        'name',
        'email',
        'subject',
        'topic_id',
        'message',
        'read_at',
    ];

    /**
     * Hidden from serialisation attributes (fields)
     */
    protected $hidden = [];

    /**
     * Message is read
     *
     * Returns True if the message has been read
     */
    public function isRead(): bool
    {
        return isset($this->read_at) && $this->read_at;
    }

    /**
     * Attribute (type) casting
     */
    protected function casts(): array
    {
        return [
            'read_at' => 'datetime',
        ];
    }
}
