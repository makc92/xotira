<?php

namespace App\Http\Livewire;

use App\Services\News\NewsService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;
    public $searchNews;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchNews = $this->searchNews;
        $newsService = resolve(NewsService::class);
        return view('livewire.show-news', [
            'news' => $newsService->searchNewsByTitle($searchNews)
        ]);
    }
}
