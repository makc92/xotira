<?php


namespace App\Services\Applications\Repositories;


use App\Models\Application;

class ApplicationRepository
{
    public function paginate()
    {
        return Application::orderBy('id', 'desc')->paginate(10);
    }

    public function delete(Application $application)
    {
        return $application->delete();
    }

    public function createFromArray($data)
    {
        return Application::create($data);
    }
}
