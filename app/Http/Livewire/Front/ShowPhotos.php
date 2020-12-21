<?php

namespace App\Http\Livewire\Front;

use App\Services\Photos\PhotoService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPhotos extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $photoService = resolve(PhotoService::class);
        return view('livewire.front.show-photos', [
            'photos' => $photoService->paginatePhotos(9)
        ]);
    }
}
