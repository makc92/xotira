<?php

namespace App\Http\Livewire\Front;

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
        return view('livewire.front.show-veterans',[
            'veterans' => $veteranService->searchVeteransByNameOrderByName($searchVeteran, 12)
        ]);
    }
}
