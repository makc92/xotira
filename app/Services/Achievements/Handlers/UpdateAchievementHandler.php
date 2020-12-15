<?php


namespace App\Services\Achievements\Handlers;


use App\Models\Achievement;
use App\Services\Achievements\Repositories\AchievementRepository;
use Auth;

class UpdateAchievementHandler
{
    /**
     * @var AchievementRepository
     */
    private $achievementRepository;

    public function __construct(AchievementRepository $achievementRepository)
    {
        $this->achievementRepository = $achievementRepository;
    }

    public function handle(Achievement $achievement, $data)
    {
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

        return $this->achievementRepository->updateFromArray($achievement, $data);
    }
}
