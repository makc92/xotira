<?php


namespace App\Services\Books\Handlers;


use App\Models\Book;
use App\Services\Books\Repositories\BooksRepository;

class UpdateBookHandler
{
    /**
     * @var BooksRepository
     */
    private $booksRepository;

    public function __construct(BooksRepository $booksRepository)
    {
        $this->booksRepository = $booksRepository;
    }

    public function handle(Book $book, $data)
    {
        return $this->booksRepository->updateFromArray($book, $data);
    }
}
