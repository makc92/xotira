<?php


namespace App\Services\Teams;


use App\Services\Teams\Handlers\CreateTeamHandler;
use App\Services\Teams\Handlers\UpdateTeamHandler;
use App\Services\Teams\Repository\TeamRepository;

class TeamService
{
    /**
     * @var TeamRepository
     */
    private $teamRepository;
    /**
     * @var CreateTeamHandler
     */
    private $createTeamHandler;
    /**
     * @var UpdateTeamHandler
     */
    private $updateTeamHandler;

    public function __construct(TeamRepository $teamRepository, CreateTeamHandler $createTeamHandler, UpdateTeamHandler $updateTeamHandler)
    {
        $this->teamRepository = $teamRepository;
        $this->createTeamHandler = $createTeamHandler;
        $this->updateTeamHandler = $updateTeamHandler;
    }

    public function paginateTeam($number)
    {
        return $this->teamRepository->paginate($number);
    }

    public function createTeamMember($data)
    {
        return $this->createTeamHandler->handle($data);
    }

    public function deleteTeamMemner($team)
    {
        return $this->teamRepository->delete($team);
    }

    public function updateTeamMember($team, $data)
    {
        return $this->updateTeamHandler->handle($team, $data);
    }

    public function allTeam()
    {
        return $this->teamRepository->all();
    }
}
