<?php


namespace App\Services\Books\Repositories;


use App\Models\Book;

class BooksRepository
{
    /**
     * @param string $text
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function searchByTitle($text)
    {
        return Book::where( 'title',"LIKE",'%' . $text . '%')->orderBy('id', 'desc')->paginate(10);
    }

    /**
     * @param array $data
     * @return Book|\Illuminate\Database\Eloquent\Model
     */
    public function createFromArray(array $data)
    {
        return Book::create($data);
    }

    /**
     * @param Book $book
     * @param array $data
     * @return bool
     */
    public function updateFromArray(Book $book, $data)
    {
        $book = $book->update($data);
        return $book;
    }

    /**
     * @param Book $book
     * @return bool|null
     * @throws \Exception
     */
    public function delete(Book $book)
    {
        return $book->delete();
    }

    /**
     * @param $number
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($number): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return Book::orderBy('id', 'DESC')->paginate($number);
    }
}
