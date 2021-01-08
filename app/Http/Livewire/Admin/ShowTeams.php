<?php

namespace App\Http\Livewire\Admin;

use App\Services\Teams\TeamService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTeams extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $teamService = resolve(TeamService::class);
        return view('livewire.admin.show-teams', [
            'teams' => $teamService->paginateTeam(10)
        ]);
    }
}
