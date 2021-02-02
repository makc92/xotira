<?php


namespace App\Services\Adverts\Handlers;


use App\Models\Advert;
use App\Services\Adverts\Repositories\AdvertRepository;
use Auth;

class UpdateAdvertHandler
{
    /**
     * @var AdvertRepository
     */
    private $advertRepository;

    public function __construct(AdvertRepository $advertRepository)
    {
        $this->advertRepository = $advertRepository;
    }

    public function handle(Advert $advert, array $data) {
        $data = [
            'uz' =>   [
                'title' => $data['uz_title'],
                'content' => $data['uz_content'],
            ],
            'oz' =>   [
                'title' => $data['oz_title'],
                'content' => $data['oz_content'],
            ],
            'ru' =>   [
                'title' => $data['ru_title'],
                'content' => $data['ru_content'],
            ],
            'en' =>   [
                'title' => $data['en_title'],
                'content' => $data['en_content'],
            ],
            'thumbnail' => isset($data['thumbnail']) ? $data['thumbnail'] : '',
            'user_id' => Auth::user()->id
        ];
        return $this->advertRepository->updateFromArray($advert, $data);
    }
}
