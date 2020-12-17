<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class LibraryController extends Controller
{
    public function index()
    {
        return view('front.pages.library.index');
    }
}
