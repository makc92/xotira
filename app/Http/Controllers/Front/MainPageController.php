<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\News\NewsService;
use App\Services\Photos\PhotoService;

class MainPageController extends Controller
{

    /**
     * @var NewsService
     */
    private $newsService;
    /**
     * @var PhotoService
     */
    private $photoService;

    public function __construct(NewsService $newsService, PhotoService $photoService)
    {
        $this->newsService = $newsService;
        $this->photoService = $photoService;
    }

    public function index()
    {
        $news = $this->newsService->paginateNews(4);
        $photos = $this->photoService->paginatePhotos(6);
        return view('front.pages.main.index', compact(['news', 'photos']));
    }
}
