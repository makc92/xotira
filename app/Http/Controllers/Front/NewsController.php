<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('front.pages.news.index');
    }

    public function show($locale, $slug)
    {
        $news = News::whereTranslationLike('slug', $slug)->first();
        return view('front.pages.news.show', compact(['news']));
    }
}
