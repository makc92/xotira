<?php


namespace App\Services\Achievements\Repositories;


use App\Models\Achievement;

class AchievementRepository
{
    /**
     * @param $text
     * @return mixed
     */
    public function searchByTitle($text)
    {
        return Achievement::withTranslation()->whereTranslationLike('title', '%' . $text . '%')->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * @param $data
     * @return mixed
     */
    public function createFromArray($data)
    {
        return Achievement::create($data);
    }

    public function updateFromArray(Achievement $achievement, $data)
    {
        $achievement = $achievement->update($data);
        return $achievement;
    }

    /**
     * @param Achievement $achievement
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Achievement $achievement)
    {
        return $achievement->delete();
    }
}
