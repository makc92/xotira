<?php

namespace App\Http\Livewire\Admin;

use App\Services\Applications\ApplicationService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowApplications extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $applicationService = resolve(ApplicationService::class);
        return view('livewire.admin.show-applications',[
            'applications' => $applicationService->paginateApplications()
        ]);
    }
}
