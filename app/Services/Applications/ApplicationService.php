<?php


namespace App\Services\Applications;


use App\Models\Application;
use App\Services\Applications\Repositories\ApplicationRepository;

class ApplicationService
{
    /**
     * @var ApplicationRepository
     */
    private $applicationRepository;

    public function __construct(ApplicationRepository $applicationRepository)
    {
        $this->applicationRepository = $applicationRepository;
    }

    public function paginateApplications()
    {
        return $this->applicationRepository->paginate();
    }

    public function deleteApplication(Application $application)
    {
        return $this->applicationRepository->delete($application);
    }
}
