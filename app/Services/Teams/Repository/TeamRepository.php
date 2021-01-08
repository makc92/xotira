<?php


namespace App\Services\Teams\Repository;


use App\Models\Team;

class TeamRepository
{
    public function paginate($number)
    {
        return Team::withTranslation()->orderBy('id','ASC')->paginate($number);
    }

    public function createFromArray($data)
    {
        return Team::create($data);
    }

    public function delete($team)
    {
        return $team->delete();
    }

    public function updateFromArray($team, $data)
    {
        $team = $team->update($data);
        return $team;
    }

    public function all()
    {
        return Team::withTranslation()->orderBy('order', 'ASC')->get();
    }


}
