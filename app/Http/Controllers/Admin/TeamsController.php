<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Services\Teams\TeamService;
use Illuminate\Http\Request;

class TeamsController extends Controller
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
        return view('admin.teams.index');
    }

    public function create()
    {
        return view('admin.teams.create');
    }

    public function store(Request $request)
    {
        $this->teamService->createTeamMember($request->all());
        flash('Администратор добавлен')->success();
        return redirect()->route('admin.teams.index');
    }

    public function show(Team $team)
    {
        //
    }
    public function edit(Team $team)
    {
        return view('admin.teams.edit', compact(['team']));
    }

    public function update(Request $request, Team $team)
    {
        $this->teamService->updateTeamMember($team, $request->all());
        flash('Администратор обновлен')->success();
        return redirect()->route('admin.teams.index');
    }
    public function destroy(Team $team)
    {
        $this->teamService->deleteTeamMemner($team);
        flash('Администратор удален')->success();
        return redirect()->route('admin.teams.index');
    }
}
