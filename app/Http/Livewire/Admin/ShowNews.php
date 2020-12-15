<?php

namespace App\Http\Livewire\Admin;

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
        return view('livewire.admin.show-news', [
            'news' => $newsService->searchNewsByTitle($searchNews)
        ]);
    }
}
