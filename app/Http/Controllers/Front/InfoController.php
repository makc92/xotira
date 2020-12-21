<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreApplicationRequest;
use App\Services\Applications\ApplicationService;
use Illuminate\Http\Request;

class InfoController extends Controller
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
        return view('front.pages.info.index');
    }

    public function store(StoreApplicationRequest $request)
    {
        $this->applicationService->createApplication($request->all());
        flash('Ваша заявка отправлена')->success();
        return redirect()->route('info', app()->getLocale());
    }
}
