<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Achievement;

class AchievementsController extends Controller
{
    public function index()
    {
        return view('front.pages.achievements.index');
    }

    public function show($locale, $slug)
    {
        $achievement = Achievement::whereTranslationLike('slug', $slug)->first();
        return view('front.pages.achievements.show', compact(['achievement']));
    }
}
