<?php

namespace App\Http\Livewire\Front;

use App\Services\News\NewsService;
use Livewire\Component;
use Livewire\WithPagination;

class ShowNews extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $newsService = resolve(NewsService::class);
        return view('livewire.front.show-news', [
            'news' => $newsService->paginateNews(8)
        ]);
    }
}
