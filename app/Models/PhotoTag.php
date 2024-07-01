<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoTag extends Model
{
    use HasFactory;

    protected $table = 'photo_tags';

    protected $fillable = [
        'photo_id',
        'tag'
    ];

    protected $timestamps = false;

    public function photo()
    {
        return $this->belongsTo(Photo::class, 'photo_id', 'id');
    }
}