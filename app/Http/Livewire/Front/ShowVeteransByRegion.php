<?php

namespace App\Http\Livewire\Front;

use App\Models\Region;
use App\Services\Veterans\VeteranService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowVeteransByRegion extends Component
{
    use WithPagination;
    public $searchVeteran;
    protected $paginationTheme = 'bootstrap';
    public $region;
    protected $veterans;
    public $flag = true;
    public $letter;

    public function mount($region)
    {
       /* dd();*/
        $this->region = Region::whereTitle($region)->first();
    }


    public function render()
    {
        $veteranService = resolve(VeteranService::class);
        if($this->flag) {
            $this->veterans = $veteranService->searchVeteranByRegion($this->searchVeteran, 12, $this->region->id);
        }

        if($this->letter) {
            $this->veterans = $veteranService->searchVeteranByLetter($this->letter,12, $this->region->id);
        }
        return view('livewire.front.show-veterans-by-region',[
            'veterans' => $this->veterans
        ]);
    }

    public function search($letter) {
        $this->letter = $letter;
        $veteranService = resolve(VeteranService::class);
        $this->veterans = $veteranService->searchVeteranByLetter($this->letter,12, $this->region->id);
        $this->flag = false;
    }
}
