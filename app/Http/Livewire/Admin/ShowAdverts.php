<?php

namespace App\Http\Livewire\Admin;

use App\Services\Adverts\AdvertService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAdverts extends Component
{
    use WithPagination;
    public $searchAdvert;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchAdvert = $this->searchAdvert;
        $advertService = resolve(AdvertService::class);
        return view('livewire.admin.show-adverts', [
            'adverts' => $advertService->searchAdvertByTitle($searchAdvert)
        ]);
    }
}
