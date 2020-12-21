<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    public function __invoke()
    {
        return view('front.pages.photo.index');
    }
}
