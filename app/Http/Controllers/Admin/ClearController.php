<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClearController extends Controller
{
    public function __invoke(Request $request)
    {
        \Artisan::call('route:clear');
        \Artisan::call('config:clear');
        \Artisan::call('cache:clear');
        \Artisan::call('view:clear');
        flash('Сache cleared');
        return redirect()->route('admin.dashboard');
    }
}
