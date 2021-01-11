<?php


namespace App\Services\News;


use App\Models\News;
use App\Services\News\Handlers\CreateNewsHandler;
use App\Services\News\Handlers\UpdateNewsHandler;
use App\Services\News\Repositories\NewsRepository;

class NewsService
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;
    /**
     * @var CreateNewsHandler
     */
    private $createNewsHandler;
    /**
     * @var UpdateNewsHandler
     */
    private $updateNewsHandler;

    public function __construct(NewsRepository $newsRepository, CreateNewsHandler $createNewsHandler, UpdateNewsHandler $updateNewsHandler)
    {
        $this->newsRepository = $newsRepository;
        $this->createNewsHandler = $createNewsHandler;
        $this->updateNewsHandler = $updateNewsHandler;
    }

    public function allNews()
    {
        return $this->newsRepository->getAll();
    }

    public function paginateNews($number)
    {
        return $this->newsRepository->paginate($number);
    }

    public function searchNewsByTitle($text)
    {
        return $this->newsRepository->searchByTitle($text);
    }
    public function searchNewsByTitleOrByContent($text)
    {
        return $this->newsRepository->searchByTitleOrByContent($text);
    }

    public function createNews($data)
    {
        return $this->createNewsHandler->handle($data);
    }

    public function updateNews(News $news, array $data)
    {
        return $this->updateNewsHandler->handle($news, $data);
    }

    public function deleteNews(News $news)
    {
        return $this->newsRepository->delete($news);
    }
}
