<?php

namespace App\Http\Livewire\Admin;

use App\Services\Books\BooksService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowBooks extends Component
{
    use WithPagination;
    public $searchBook;
    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $searchBook = $this->searchBook;
        $bookService = resolve(BooksService::class);
        return view('livewire.admin.show-books',[
            'books' => $bookService->searchBooksByTitle($searchBook)
        ]);
    }
}
