<?php

namespace App\Http\Livewire\Admin;

use App\Models\Photo;
use App\Services\Photos\PhotoService;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowPhotos extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $photoService = resolve(PhotoService::class);
        return view('livewire.admin.show-photos',[
            'photos' => $photoService->paginatePhotos(10)
        ]);
    }

}
