<?php


namespace App\Services\Adverts;


use App\Models\Advert;
use App\Services\Adverts\Handlers\CreateAdvertHandler;
use App\Services\Adverts\Handlers\UpdateAdvertHandler;
use App\Services\Adverts\Repositories\AdvertRepository;

class AdvertService
{
    /**
     * @var AdvertRepository
     */
    private $advertRepository;
    /**
     * @var CreateAdvertHandler
     */
    private $createAdvertHandler;
    /**
     * @var UpdateAdvertHandler
     */
    private $updateAdvertHandler;

    public function __construct(AdvertRepository $advertRepository, CreateAdvertHandler $createAdvertHandler, UpdateAdvertHandler $updateAdvertHandler)
    {
        $this->advertRepository = $advertRepository;
        $this->createAdvertHandler = $createAdvertHandler;
        $this->updateAdvertHandler = $updateAdvertHandler;
    }

    public function searchAdvertByTitle($text)
    {
        return $this->advertRepository->searchByTitle($text);
    }

    public function paginataAdverts($number)
    {
        return $this->advertRepository->paginate($number);
    }

    public function destroyAdvert(Advert $advert)
    {
        return $this->advertRepository->delete($advert);
    }

    public function createAdvert(array $data)
    {
        return $this->createAdvertHandler->handle($data);
    }

    public function updateAdvert(Advert $advert, array $data)
    {
        return $this->updateAdvertHandler->handle($advert, $data);
    }
}
