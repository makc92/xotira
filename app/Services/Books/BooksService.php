<?php


namespace App\Services\Books;


use App\Models\Book;
use App\Services\Books\Handlers\CreateBookHandler;
use App\Services\Books\Handlers\UpdateBookHandler;
use App\Services\Books\Repositories\BooksRepository;

class BooksService
{
    /**
     * @var BooksRepository
     */
    private $booksRepository;
    /**
     * @var CreateBookHandler
     */
    private $createBookHandler;
    /**
     * @var UpdateBookHandler
     */
    private $updateBookHandler;

    public function __construct(BooksRepository $booksRepository, CreateBookHandler $createBookHandler, UpdateBookHandler $updateBookHandler)
    {
        $this->booksRepository = $booksRepository;
        $this->createBookHandler = $createBookHandler;
        $this->updateBookHandler = $updateBookHandler;
    }

    public function searchBooksByTitle($text)
    {
        return $this->booksRepository->searchByTitle($text);
    }

    public function createBook($data)
    {
        return $this->createBookHandler->handle($data);
    }

    public function deleteBook(Book $book)
    {
        return $this->booksRepository->delete($book);
    }

    public function updateBook(Book $book, $data)
    {
        return $this->updateBookHandler->handle($book,$data);
    }
}
