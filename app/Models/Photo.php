<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photos';

    protected $fillable = [
        'file_path',
        'caption',
        'is_face_present',
    ];

    protected $casts = [
        'is_face_present' => 'boolean',
    ];

    public $timestamps = true;

    public function PhotoTags()
    {
        return $this->hasMany(PhotoTag::class, 'photo_id', 'id');
    }

    public function downloads()
    {
        return $this->hasMany(Download::class, 'photo_id', 'id');
    }
}