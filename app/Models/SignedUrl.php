<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SignedUrl extends Model
{
    use HasFactory;

    protected $table = 'signed_urls';

    protected $fillable = [
        'url',
        'expiration',
    ];

    protected $timestamps = true;

    protected $casts = [
        'url' => 'string',
        'expiration' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}