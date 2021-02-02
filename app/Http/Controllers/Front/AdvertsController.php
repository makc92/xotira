<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Advert;
use App\Services\Adverts\AdvertService;
use Illuminate\Http\Request;

class AdvertsController extends Controller
{
    /**
     * @var AdvertService
     */
    private $advertService;

    public function __construct(AdvertService $advertService)
    {
        $this->advertService = $advertService;
    }

    public function index()
    {
        return view('front.pages.adverts.index');
    }

    public function show($locale, $slug)
    {
        $advert = Advert::whereTranslationLike('slug', $slug)->first();
        return view('front.pages.adverts.show', compact(['advert']));
    }
}
