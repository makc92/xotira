<?php


namespace App\Services\Veterans\Handlers;


use App\Services\Veterans\Repositories\VeteranRepository;

class CreateVeteranHandler
{
    /**
     * @var VeteranRepository
     */
    private $veteranRepository;

    public function __construct(VeteranRepository $veteranRepository)
    {
        $this->veteranRepository = $veteranRepository;
    }

    public function handle(array $data) {
        $data = [
            'uz' =>   [
                'name' => $data['uz_name'],
                'description' => $data['uz_description'],
            ],
            'oz' =>   [
                'name' => $data['oz_name'],
                'description' => $data['oz_description'],
            ],
            'ru' =>   [
                'name' => $data['ru_name'],
                'description' => $data['ru_description'],
            ],
            'en' =>   [
                'name' => $data['en_name'],
                'description' => $data['en_description'],
            ],
            'region_id' => $data['region_id']
        ];

        return $this->veteranRepository->createFromArray($data);
    }
}
