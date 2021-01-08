<?php

namespace App\Http\Livewire\Front;

use App\Services\Books\BooksService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowLibrary extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $bookService = resolve(BooksService::class);
        return view('livewire.front.show-library', [
            'books' => $bookService->pagenateBooks(8)
        ]);
    }
}
