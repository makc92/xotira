<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Intervention\Image\Image;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
