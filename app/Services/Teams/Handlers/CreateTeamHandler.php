<?php


namespace App\Services\Teams\Handlers;


use App\Services\Teams\Repository\TeamRepository;

class CreateTeamHandler
{
    /**
     * @var TeamRepository
     */
    private $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function handle($data)
    {
        $data = [
            'uz' =>   [
                'name' => $data['uz_name'],
                'position' => $data['uz_position'],
                'bio' => $data['uz_bio'],
                'days' => $data['uz_days'],
                'activity' => $data['uz_activity'],
            ],
            'oz' =>   [
                'name' => $data['oz_name'],
                'position' => $data['oz_position'],
                'bio' => $data['oz_bio'],
                'days' => $data['oz_days'],
                'activity' => $data['oz_activity'],
            ],
            'ru' =>   [
                'name' => $data['ru_name'],
                'position' => $data['ru_position'],
                'bio' => $data['ru_bio'],
                'days' => $data['ru_days'],
                'activity' => $data['ru_activity'],
            ],
            'en' =>   [
                'name' => $data['en_name'],
                'position' => $data['en_position'],
                'bio' => $data['en_bio'],
                'days' => $data['en_days'],
                'activity' => $data['en_activity'],
            ],
            'thumbnail' => $data['thumbnail'],
            'order' => $data['order'],
        ];

        return $this->teamRepository->createFromArray($data);
    }
}
