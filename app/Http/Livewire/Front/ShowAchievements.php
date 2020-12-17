<?php

namespace App\Http\Livewire\Front;

use App\Services\Achievements\AchievementService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAchievements extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $achievementService = resolve(AchievementService::class);
        return view('livewire.front.show-achievements',[
            'achievements' => $achievementService->paginateAchievements(12)
        ]);
    }
}
