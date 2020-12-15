<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\News\NewsService;

class MainPageController extends Controller
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
        $news = $this->newsService->paginateNews(4);
        return view('front.pages.main.index', compact(['news']));
    }
}
