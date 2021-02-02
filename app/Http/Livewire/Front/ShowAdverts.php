<?php

namespace App\Http\Livewire\Front;

use App\Services\Adverts\AdvertService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowAdverts extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $advertService = resolve(AdvertService::class);
        return view('livewire.front.show-adverts', [
            'adverts' => $advertService->paginataAdverts(8)
        ]);
    }
}
