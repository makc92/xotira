<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Services\Applications\ApplicationService;
use App\Services\Applications\Repositories\ApplicationRepository;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{


    /**
     * @var ApplicationService
     */
    private $applicationService;

    public function __construct(ApplicationService $applicationService)
    {

        $this->applicationService = $applicationService;
    }

    public function index()
    {
        return view('admin.applications.index');
    }

    public function show(Application $application)
    {
        return view('admin.applications.show', compact(['application']));
    }

    public function destroy(Application $application)
    {
        $this->applicationService->deleteApplication($application);
        flash('Заявка удалена')->success();
        return redirect()->route('admin.applications.index');
    }
}
