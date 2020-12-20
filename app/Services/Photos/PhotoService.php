<?php


namespace App\Services\Photos;


use App\Models\Photo;
use App\Services\Photos\Repository\PhotoRepository;

class PhotoService
{
    /**
     * @var PhotoRepository
     */
    private $photoRepository;

    public function __construct(PhotoRepository $photoRepository)
    {

        $this->photoRepository = $photoRepository;
    }

    public function paginatePhotos($number)
    {
        return $this->photoRepository->paginate($number);
    }

    public function deletePhoto(Photo $photo)
    {
        return $this->photoRepository->delete($photo);
    }

    public function createPhoto($data)
    {
        return $this->photoRepository->createFromArray($data);
    }
}
