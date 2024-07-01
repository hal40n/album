<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactRequest extends Model
{
    use HasFactory;

    protected $table = 'contact_requests';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'request_content',
        'details',
    ];

    protected $timestamps = true;

    protected $casts = [
        'name'=> 'string',
        'phone_number' => 'integer',
        'email' => 'string',
        'request_content' => 'string',
        'details' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}