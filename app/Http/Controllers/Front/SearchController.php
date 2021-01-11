<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Achievements\AchievementService;
use App\Services\Books\BooksService;
use App\Services\News\NewsService;
use App\Services\Veterans\VeteranService;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class SearchController extends Controller
{

    /**
     * @var NewsService
     */
    private $newsService;
    /**
     * @var VeteranService
     */
    private $veteranService;
    /**
     * @var AchievementService
     */
    private $achievementService;
    /**
     * @var BooksService
     */
    private $booksService;

    public function __construct(NewsService $newsService, VeteranService $veteranService, AchievementService $achievementService, BooksService $booksService)
    {
        $this->newsService = $newsService;
        $this->veteranService = $veteranService;
        $this->achievementService = $achievementService;
        $this->booksService = $booksService;
    }

    public function index(Request $request)
    {
        if (!empty($request->all())) {
            $query = $request->get('q');
            $query_model = $request->get('model');


            if ($query_model == 'news') {
                $results = $this->newsService->searchNewsByTitleOrByContent($query);
            }
            elseif ($query_model == 'achievement') {
                $results = $this->achievementService->searchAchievementByTitleOrByContent($query);
            }
            elseif ($query_model == 'memory') {
                $results = $this->veteranService->searchVeteransByName($query);
            }
            elseif ($query_model == 'library') {
                $results = $this->achievementService->searchAchievementByTitle($query);
            }
            return view('front.pages.search.index', compact(['results', 'query_model', 'query']));
        }

        else {
            $query = '';
            $query_model = '';
            $results = '';
            return view('front.pages.search.index', compact([ 'results','query_model', 'query']));
        }




    }
}
