<?php

namespace App\Repositories;

use App\Models\Photo;

class PhotoRepository
{
    public function getAllPhotos()
    {
        return Photo::paginate(50);
    }

    public function getPhotoById(string $id)
    {
        return Photo::find($id);
    }

    public function createPhoto(array $photo)
    {
        return Photo::create($photo);
    }

    public function updatePhoto(array $photo, string $id)
    {
        return Photo::find($id)->update($photo);
    }

    public function deletePhoto(string $id)
    {
        return Photo::destroy($id);
    }
}