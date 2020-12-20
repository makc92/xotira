<?php


namespace App\Services\Photos\Repository;


use App\Models\Photo;

class PhotoRepository
{
    /**
     * @param $number
     * @return mixed
     */
    public function paginate($number)
    {
        return Photo::orderBy('id','desc')->paginate($number);
    }

    /**
     * @param Photo $photo
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Photo $photo)
    {
        return $photo->delete();
    }

    public function createFromArray($data)
    {
        return Photo::create($data);
    }
}
