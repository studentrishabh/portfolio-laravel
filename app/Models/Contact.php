<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Contact Model
 *
 * Represents a message submitted via the portfolio contact form.
 * Stores sender details and the message body.
 */
class Contact extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     */
    protected $table = 'contacts';

    /**
     * Mass-assignable fields.
     * These fields are filled when Contact::create() is called.
     */
    protected $fillable = [
        'name',
        'email',
        'message',
        'is_read',
    ];

    /**
     * Attribute casting.
     * 'is_read' is treated as a boolean for convenience.
     */
    protected $casts = [
        'is_read'    => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
