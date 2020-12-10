<?php


namespace App\Services\News\Handlers;


use App\Services\News\Repositories\NewsRepository;
use Auth;

class CreateNewsHandler
{
    /**
     * @var NewsRepository
     */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepository)
    {

        $this->newsRepository = $newsRepository;
    }

    public function handle($data)
    {
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
            'thumbnail' => $data['thumbnail'],
            'user_id' => Auth::user()->id
        ];

        return $this->newsRepository->createFromArray($data);
    }
}
