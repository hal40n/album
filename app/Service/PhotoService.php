<?php

namespace App\Service;

use App\Repositories\PhotoRepository;
use App\Models\Photo;

class PhotoService
{
    protected $photoRepository;

    public function __construct(PhotoRepository $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }

    public function getAllPhotos()
    {
        return $this->photoRepository->getAllPhotos();
    }
}