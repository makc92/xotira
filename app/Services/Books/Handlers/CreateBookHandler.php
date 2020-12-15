<?php


namespace App\Services\Books\Handlers;


use App\Services\Books\Repositories\BooksRepository;

class CreateBookHandler
{
    /**
     * @var BooksRepository
     */
    private $booksRepository;

    public function __construct(BooksRepository $booksRepository)
    {
        $this->booksRepository = $booksRepository;
    }

    public function handle(array $data)
    {
        return $this->booksRepository->createFromArray($data);
    }
}
