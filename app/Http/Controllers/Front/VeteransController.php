<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Region;
use App\Services\Veterans\VeteranService;
use Illuminate\Http\Request;

class VeteransController extends Controller
{
    private $veteranService;

    public function __construct(VeteranService $veteranService)
    {
        $this->veteranService = $veteranService;
    }

    public function index()
    {
        $regionList = Region::pluck('title', 'id')->toArray();
        return view('front.pages.memory.index', compact(['regionList']));
    }

    public function indexByRegion($locale, $region)
    {
        return view('front.pages.memory.indexByRegion', compact('region'));
    }
}
