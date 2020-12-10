<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\News\StoreNewsRequest;
use App\Http\Requests\News\UpdateNewsRequest;
use App\Models\News;
use App\Services\News\NewsService;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * @var NewsService
     */
    private $newsService;

    public function __construct(NewsService $newsService)
    {
        $this->newsService = $newsService;
    }

    public function index()
    {
        return view('admin.news.index');
    }
    public function create() {
        return view('admin.news.create');
    }

    public function store(StoreNewsRequest $request)
    {
        $this->newsService->createNews($request->all());
        flash('News was created')->success();
        return redirect()->route('admin.news.index');
    }

    public function show(News $news)
    {
        return view('admin.news.show', compact(['news']));
    }

    public function destroy(News $news)
    {
        $this->newsService->deleteNews($news);
        flash('News deleted')->success();
        return redirect()->route('admin.news.index');
    }

    public function edit(News $news)
    {
        return view('admin.news.edit', compact(['news']));
    }

    public function update(News $news, UpdateNewsRequest $request)
    {
        $this->newsService->updateNews($news, $request->all());
        flash('News was updated')->success();
        return redirect()->route('admin.news.index');
    }
}
