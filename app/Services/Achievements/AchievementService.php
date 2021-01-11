<?php


namespace App\Services\Achievements;


use App\Models\Achievement;
use App\Services\Achievements\Handlers\CreateAchievementHandler;
use App\Services\Achievements\Handlers\UpdateAchievementHandler;
use App\Services\Achievements\Repositories\AchievementRepository;

class AchievementService
{
    /**
     * @var AchievementRepository
     */
    private $achievementRepository;
    /**
     * @var CreateAchievementHandler
     */
    private $createAchievementHandler;
    /**
     * @var UpdateAchievementHandler
     */
    private $updateAchievementHandler;

    public function __construct(AchievementRepository $achievementRepository, CreateAchievementHandler $createAchievementHandler, UpdateAchievementHandler $updateAchievementHandler)
    {
        $this->achievementRepository = $achievementRepository;
        $this->createAchievementHandler = $createAchievementHandler;
        $this->updateAchievementHandler = $updateAchievementHandler;
    }

    public function searchAchievementByTitle($text)
    {
        return $this->achievementRepository->searchByTitle($text);
    }
    public function searchAchievementByTitleOrByContent($text)
    {
        return $this->achievementRepository->searchByTitleOrContent($text);
    }

    public function createAchievement($data)
    {
        return $this->createAchievementHandler->handle($data);
    }

    public function deleteAchievement(Achievement $achievement)
    {
        return $this->achievementRepository->delete($achievement);
    }

    public function updateAchievement(Achievement $achievement, $data)
    {
        return $this->updateAchievementHandler->handle($achievement, $data);
    }

    public function paginateAchievements($number)
    {
        return $this->achievementRepository->paginate($number);
    }
}
