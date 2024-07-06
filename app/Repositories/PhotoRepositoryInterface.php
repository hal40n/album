<?php

namespace App\Repositories;

use App\Models\Photo;

Interface PhotoRepositoryInterface
{
    public function getAllPhotos(): Photo;
    public function getPhotoById(string $id): Photo;
    public function createPhoto(array $photo): Photo;
    public function updatePhoto(array $photo, string $id): Photo;
    public function deletePhoto(string $id): bool;
}
