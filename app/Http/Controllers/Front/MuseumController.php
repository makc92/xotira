<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Services\Teams\TeamService;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * @var TeamService
     */
    private $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }

    public function index()
    {
        $teams = $this->teamService->allTeam();
        return view('front.pages.museum.index', compact(['teams']));
    }

    public function showTeamMember($locale, $slug)
    {
        $team = Team::whereTranslationLike('slug', $slug)->first();
        return view('front.pages.museum.pages.teams.show', compact(['team']));
    }
}
