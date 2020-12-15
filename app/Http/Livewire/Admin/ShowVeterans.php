<?php

namespace App\Http\Livewire\Admin;

use App\Models\Veteran;
use App\Services\Veterans\VeteranService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowVeterans extends Component
{
    use WithPagination;
    public $searchVeteran;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $searchVeteran = $this->searchVeteran;
        $veteranService = resolve(VeteranService::class);
        return view('livewire.admin.show-veterans',[
            'veterans' => $veteranService->searchVeteransByName($searchVeteran)
        ]);
    }
}
