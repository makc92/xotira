<?php


namespace App\Services\News\Repositories;


use App\Models\News;

class NewsRepository
{
    public function getAll()
    {
        return News::withTranslation()->orderBy('id', 'desc')->get();
    }

    public function paginate($number)
    {
        return News::withTranslation()->orderBy('id', 'desc')->paginate($number);
    }

    public function searchByTitle($text)
    {
        return News::withTranslation()->whereTranslationLike('title', '%' . $text . '%')->orderBy('id', 'desc')->paginate(10);
    }
    public function createFromArray(array $data)
    {
        return News::create($data);
    }

    public function delete(News $news)
    {
        return $news->delete();
    }
    public function updateFromArray(News $news, array $data)
    {
        $news = $news->update($data);
        return $news;
    }

}
