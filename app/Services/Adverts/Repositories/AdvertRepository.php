<?php


namespace App\Services\Adverts\Repositories;


use App\Models\Advert;

class AdvertRepository
{
    public function searchByTitle($text)
    {
        return Advert::withTranslation()->whereTranslationLike('title', '%' . $text . '%')->orderBy('id', 'desc')->paginate(10);
    }
    public function createFromArray(array $data)
    {
        return Advert::create($data);
    }
    public function delete(Advert $advert)
    {
        return $advert->delete();
    }
    public function updateFromArray(Advert $advert, array $data)
    {
        $advert = $advert->update($data);
        return $advert;
    }
    public function paginate($number)
    {
        return Advert::withTranslation()->orderBy('id', 'desc')->paginate($number);
    }
}
