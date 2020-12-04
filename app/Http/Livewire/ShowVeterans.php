<?php

namespace App\Http\Livewire;

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
        return view('livewire.show-veterans',[
            'veterans' => $veteranService->searchVeteransByName($searchVeteran)
        ]);
    }
}
