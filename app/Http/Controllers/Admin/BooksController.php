<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Books\StoreBookRequest;
use App\Http\Requests\Books\UpdateBookRequest;
use App\Models\Book;
use App\Services\Books\BooksService;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * @var BooksService
     */
    private $booksService;

    public function __construct(BooksService $booksService)
    {
        $this->booksService = $booksService;
    }

    public function index()
    {
        return view('admin.books.index');
    }

    public function create()
    {
        return view('admin.books.create');
    }
    public function store(StoreBookRequest $request)
    {
        $this->booksService->createBook($request->all());
        flash('Книга добавлена')->success();
        return redirect()->route('admin.books.index');

    }
    public function show(Book $book)
    {
        return view('admin.books.show', compact(['book']));
    }
    public function edit(Book $book)
    {
        return view('admin.books.edit', compact(['book']));
    }

    public function update(UpdateBookRequest $request, Book $book)
    {
        $this->booksService->updateBook($book, $request->all());
        flash('Книга обновлена')->success();
        return redirect()->route('admin.books.index');
    }

    public function destroy(Book $book)
    {
        $this->booksService->deleteBook($book);
        flash('Книга удалена')->success();
        return redirect()->route('admin.books.index');
    }
}
