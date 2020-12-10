<?php


namespace App\Services\News\Handlers;


use App\Models\News;
use App\Services\News\Repositories\NewsRepository;
use Auth;

class UpdateNewsHandler
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    public function handle(News $news, array $data) {
        $data = [
            'uz' =>   [
                'title' => $data['uz_title'],
                'content' => $data['uz_content'],
            ],
            'oz' =>   [
                'title' => $data['oz_title'],
                'content' => $data['oz_content'],
            ],
            'ru' =>   [
                'title' => $data['ru_title'],
                'content' => $data['ru_content'],
            ],
            'en' =>   [
                'title' => $data['en_title'],
                'content' => $data['en_content'],
            ],
            'thumbnail' => isset($data['thumbnail']) ? $data['thumbnail'] : '',
            'user_id' => Auth::user()->id
        ];
        return $this->newsRepository->updateFromArray($news, $data);
    }
}
