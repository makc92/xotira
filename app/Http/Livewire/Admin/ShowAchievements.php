<?php

namespace App\Http\Livewire\Admin;

use App\Services\Achievements\AchievementService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAchievements extends Component
{
    use WithPagination;

    public $searchAchievement;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchAchievement = $this->searchAchievement;
        $achievementService = resolve(AchievementService::class);
        return view('livewire.admin.show-achievements',[
            'achievements' => $achievementService->searchAchievementByTitle($searchAchievement)
        ]);
    }
}
